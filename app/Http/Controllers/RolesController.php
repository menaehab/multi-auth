<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.roles',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::where('guard_name','admin')->get();
        return view('admin.roles.rolesCreate',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $role = $request->route('role');
    $id = $role->id ?? null;
    $validated = $request->validate([
        'name' => ['required', 'string', 'max:255', 'unique:roles,name,' . $id],
        'permissions' => ['nullable', 'array'],
        'permissions.*' => ['string']
    ]);
    $validated['guard_name'] = 'admin';
    $role = Role::create($validated);
    if(isset($validated['permissions'])) {
        foreach($validated['permissions'] as $permission => $value) {
            $role->givePermissionTo($permission);
        }
    }
    return redirect()->route('roles.index')->with('success', 'Role created successfully.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::where('guard_name', 'admin')->get();
        return view('admin.roles.rolesShow',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $role = Role::findOrFail($id);
        $permissions = Permission::where('guard_name','admin')->get();
        return view('admin.roles.rolesEdit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $role = Role::findOrFail($id);
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:roles,name,' . $role->id],
            'permissions' => ['nullable', 'array'],
            'permissions.*' => ['string']
        ]);
        $role->update([
            'name' => $validated['name'],
        ]);
        if (isset($validated['permissions'])) {
            $role->syncPermissions(array_keys($validated['permissions']));
        }
        return redirect()->route('roles.index')->with('success', 'Role updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'Role deleted successfully.');
    }
}