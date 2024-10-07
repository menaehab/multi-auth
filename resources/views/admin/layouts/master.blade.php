<!DOCTYPE html>
<html lang="en">

@include('admin.partials.head')

<body>
    @include('admin.partials.nav')
    <div id="layoutSidenav">
        @include('admin.partials.side-nav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">@yield('title')</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                    @yield('content')
                </div>
            </main>
            @include('admin.partials.footer')
        </div>
    </div>
    @include('admin.partials.script')
</body>

</html>
