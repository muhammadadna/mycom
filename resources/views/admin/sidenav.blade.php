<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center p-4"><img class="avatar shadow-0 img-fluid rounded-circle"
            src="/admin/img/avatar-6.jpg" alt="...">
        <div class="ms-3 title">
            <h1 class="h5 mb-1">{{ Auth::user()->name }}</h1>
            <p class="text-sm text-gray-700 mb-0 lh-1">Web Developer</p>
        </div>
    </div><span class="text-uppercase text-gray-600 text-xs mx-3 px-2 heading mb-2">Main</span>
    <ul class="list-unstyled">
        <li class="sidebar-item {{ Request::is('dashboard') ? 'active' : '' }}"><a class="sidebar-link" href="{{ url('dashboard') }}">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                <use xlink:href="#real-estate-1"> </use>
            </svg><span>Home </span></a>
        </li>
        <li class="sidebar-item {{ Request::is('course') ? 'active' : '' }}"><a class="sidebar-link" href="{{ url('course') }}">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                <use xlink:href="#survey-1"> </use>
            </svg><span>Course </span></a>
        </li>
        <li class="sidebar-item {{ Request::is('provider') ? 'active' : '' }}"><a class="sidebar-link" href="{{ url('provider') }}">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                <use xlink:href="#security-shield-1"> </use>
            </svg><span>Provider </span></a></li>
        </li>
        <li class="sidebar-item {{ Request::is('course-category') ? 'active' : '' }}"><a class="sidebar-link" href="{{ url('course-category') }}">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                <use xlink:href="#portfolio-grid-1"> </use>
            </svg><span>Course Category </span></a>
        </li>
        <li class="sidebar-item {{ Request::is('user-management') ? 'active' : '' }}"><a class="sidebar-link" href="{{ url('user-management') }}">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                <use xlink:href="#imac-screen-1"> </use>
            </svg><span>User Management </span></a></li>
        </li>
        {{-- <li class="sidebar-item"><a class="sidebar-link" href="tables.html">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                <use xlink:href="#portfolio-grid-1"> </use>
            </svg><span>Tables </span></a>
        </li>
        <li class="sidebar-item"><a class="sidebar-link" href="charts.html">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                <use xlink:href="#sales-up-1"> </use>
            </svg><span>Charts </span></a>
        </li>
        <li class="sidebar-item"><a class="sidebar-link" href="forms.html">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                <use xlink:href="#survey-1"> </use>
            </svg><span>Forms </span></a>
        </li> --}}
        {{-- <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdown" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                    <use xlink:href="#browser-window-1"> </use>
                </svg><span>Example dropdown </span></a>
            <ul class="collapse list-unstyled " id="exampledropdownDropdown">
                <li><a class="sidebar-link" href="#">Page</a></li>
                <li><a class="sidebar-link" href="#">Page</a></li>
                <li><a class="sidebar-link" href="#">Page</a></li>
            </ul>
        </li> --}}
        {{-- <li class="sidebar-item"><a class="sidebar-link" href="login.html">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                    <use xlink:href="#disable-1"> </use>
                </svg><span>Login page </span></a></li> --}}
    {{-- </ul><span class="text-uppercase text-gray-600 text-xs mx-3 px-2 heading mb-2">Extras</span>
    <ul class="list-unstyled">
        <li class="sidebar-item"><a class="sidebar-link" href="#">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                    <use xlink:href="#imac-screen-1"> </use>
                </svg><span>Demo </span></a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="#">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                    <use xlink:href="#chart-1"> </use>
                </svg><span>Demo </span></a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="#">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                    <use xlink:href="#quality-1"> </use>
                </svg><span>Demo </span></a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="#">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                    <use xlink:href="#security-shield-1"> </use>
                </svg><span>Demo </span></a></li>
    </ul> --}}
</nav>
