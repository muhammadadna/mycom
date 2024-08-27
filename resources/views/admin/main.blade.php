<!DOCTYPE html>
<html>

{{-- header --}}
@include('admin.head')

<body>
    {{-- Navbar Navigation --}}
    @include('admin.navbar')

    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidenav')

        <div class="page-content">
            <div class="d-flex align-items-stretch">
                @yield('content')
            </div>

            <!-- Page Footer-->
            @include('admin.footer')

        </div>
    </div>
    @include('admin.js')
</body>

</html>
