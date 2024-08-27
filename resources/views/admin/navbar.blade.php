<header class="header">
    <nav class="navbar navbar-expand-lg py-3 bg-dash-dark-2 border-bottom border-dash-dark-1 z-index-10">
        <div class="search-panel">
            <div class="search-inner d-flex align-items-center justify-content-center">
                <div class="close-btn d-flex align-items-center position-absolute top-0 end-0 me-4 mt-2 cursor-pointer">
                    <span>Close </span>
                    <svg class="svg-icon svg-icon-md svg-icon-heavy text-gray-700 mt-1">
                        <use xlink:href="#close-1"> </use>
                    </svg>
                </div>
                <div class="row w-100">
                    <div class="col-lg-8 mx-auto">
                        <form class="px-4" id="searchForm" action="#">
                            <div class="input-group position-relative flex-column flex-lg-row flex-nowrap">
                                <input class="form-control shadow-0 bg-none px-0 w-100" type="search" name="search"
                                    placeholder="What are you searching for...">
                                <button
                                    class="btn btn-link text-gray-600 px-0 text-decoration-none fw-bold cursor-pointer text-center"
                                    type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between py-1">
            <div class="navbar-header d-flex align-items-center"><a class="navbar-brand text-uppercase text-reset" href="/dashboard">
                    <div class="brand-text brand-big"><strong class="text-primary">Dark</strong><strong>Admin</strong>
                    </div>
                    <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div>
                </a>
                <button class="sidebar-toggle">
                    <svg class="svg-icon svg-icon-sm svg-icon-heavy transform-none">
                        <use xlink:href="#arrow-left-1"> </use>
                    </svg>
                </button>
            </div>
            <ul class="list-inline mb-0">
                <li class="list-inline-item">
                    <a class="search-open nav-link px-0" href="#">
                        <svg class="svg-icon svg-icon-xs svg-icon-heavy text-gray-700">
                            <use xlink:href="#find-1"> </use>
                        </svg>
                    </a>
                </li>
                <!-- Messages dropdown -->
                {{-- <li class="list-inline-item dropdown px-lg-2"><a class="nav-link text-reset px-1 px-lg-0"
                        id="navbarDropdownMenuLink1" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                            <use xlink:href="#envelope-1"> </use>
                        </svg><span class="badge bg-dash-color-1">5</span></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark"
                        aria-labelledby="navbarDropdownMenuLink1">
                        <li><a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="position-relative"><img class="avatar avatar-md"
                                        src="/admin/img/avatar-3.jpg" alt="Nadia Halsey">
                                    <div class="availability-status bg-success"></div>
                                </div>
                                <div class="ms-3"> <strong class="d-block">Nadia Halsey</strong><span
                                        class="d-block text-xs">lorem ipsum dolor sit amit</span><small
                                        class="d-block">9:30am</small></div>
                            </a></li>
                        <li><a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="position-relative"><img class="avatar avatar-md"
                                        src="/admin/img/avatar-2.jpg" alt="Peter Ramsy">
                                    <div class="availability-status bg-warning"></div>
                                </div>
                                <div class="ms-3"> <strong class="d-block">Nadia Halsey</strong><span
                                        class="d-block text-xs">lorem ipsum dolor sit amit</span><small
                                        class="d-block">9:30am</small></div>
                            </a></li>
                        <li><a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="position-relative"><img class="avatar avatar-md"
                                        src="/admin/img/avatar-1.jpg" alt="Sam Kaheil">
                                    <div class="availability-status bg-danger"></div>
                                </div>
                                <div class="ms-3"> <strong class="d-block">Nadia Halsey</strong><span
                                        class="d-block text-xs">lorem ipsum dolor sit amit</span><small
                                        class="d-block">9:30am</small></div>
                            </a></li>
                        <li><a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="position-relative"><img class="avatar avatar-md"
                                        src="/admin/img/avatar-5.jpg" alt="Sara Wood">
                                    <div class="availability-status bg-secondary"></div>
                                </div>
                                <div class="ms-3"> <strong class="d-block">Nadia Halsey</strong><span
                                        class="d-block text-xs">lorem ipsum dolor sit amit</span><small
                                        class="d-block">9:30am</small></div>
                            </a></li>
                        <li><a class="dropdown-item text-center message" href="#"> <strong>See All Messages <i
                                        class="fas fa-angle-right ms-1"></i></strong></a></li>
                    </ul>
                </li> --}}
                <!-- Tasks dropdown                   -->
                {{-- <li class="list-inline-item dropdown px-lg-2"><a class="nav-link text-reset px-1 px-lg-0"
                        id="navbarDropdownMenuLink2" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                            <use xlink:href="#paper-stack-1"> </use>
                        </svg><span class="badge bg-dash-color-3">9</span></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark"
                        aria-labelledby="navbarDropdownMenuLink2">
                        <li><a class="dropdown-item" href="#">
                                <div class="d-flex justify-content-between mb-1"><strong>Task 1</strong><span>40%
                                        complete</span></div>
                                <div class="progress" style="height: 2px">
                                    <div class="progress-bar bg-dash-color-1" role="progressbar" style="width: 40%"
                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a></li>
                        <li><a class="dropdown-item" href="#">
                                <div class="d-flex justify-content-between mb-1"><strong>Task 2</strong><span>20%
                                        complete</span></div>
                                <div class="progress" style="height: 2px">
                                    <div class="progress-bar bg-dash-color-2" role="progressbar" style="width: 20%"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a></li>
                        <li><a class="dropdown-item" href="#">
                                <div class="d-flex justify-content-between mb-1"><strong>Task 3</strong><span>70%
                                        complete</span></div>
                                <div class="progress" style="height: 2px">
                                    <div class="progress-bar bg-dash-color-3" role="progressbar" style="width: 70%"
                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a></li>
                        <li><a class="dropdown-item" href="#">
                                <div class="d-flex justify-content-between mb-1"><strong>Task 4</strong><span>40%
                                        complete</span></div>
                                <div class="progress" style="height: 2px">
                                    <div class="progress-bar bg-dash-color-4" role="progressbar" style="width: 40%"
                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a></li>
                        <li><a class="dropdown-item" href="#">
                                <div class="d-flex justify-content-between mb-1"><strong>Task 5</strong><span>30%
                                        complete</span></div>
                                <div class="progress" style="height: 2px">
                                    <div class="progress-bar bg-dash-color-1" role="progressbar" style="width: 30%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a></li>
                        <li> <a class="dropdown-item text-center" href="#"> <strong>See All Tasks <i
                                        class="fas fa-angle-right ms-1"></i></strong></a></li>
                    </ul>
                </li> --}}
                <!-- Mega menu-->
                {{-- <li class="list-inline-item dropdown menu-large px-lg-2"><a
                        class="nav-link text-sm text-reset px-1 px-lg-0" href="#" data-bs-toggle="dropdown">Mega <i
                            class="fas fa-ellipsis-v ms-1"></i></a>
                    <ul class="dropdown-menu megamenu dropdown-menu-dark p-4">
                        <div class="row gy-3 mb-4">
                            <div class="col-lg-3">
                                <h6 class="mb-2 text-uppercase">Elements Heading</h6>
                                <ul class="list-unstyled text-gray-700">
                                    <li class="py-1"><a class="inherit-link" href="#">Lorem ipsum dolor</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Sed ut perspiciatis</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Voluptatum deleniti</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">At vero eos</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Consectetur adipiscing</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Duis aute irure</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Necessitatibus saepe</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Maiores alias</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="mb-2 text-uppercase">Elements Heading</h6>
                                <ul class="list-unstyled text-gray-700">
                                    <li class="py-1"><a class="inherit-link" href="#">Lorem ipsum dolor</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Sed ut perspiciatis</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Voluptatum deleniti</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">At vero eos</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Consectetur adipiscing</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Duis aute irure</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Necessitatibus saepe</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Maiores alias</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="mb-2 text-uppercase">Elements Heading</h6>
                                <ul class="list-unstyled text-gray-700">
                                    <li class="py-1"><a class="inherit-link" href="#">Lorem ipsum dolor</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Sed ut perspiciatis</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Voluptatum deleniti</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">At vero eos</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Consectetur adipiscing</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Duis aute irure</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Necessitatibus saepe</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Maiores alias</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="mb-2 text-uppercase">Elements Heading</h6>
                                <ul class="list-unstyled text-gray-700">
                                    <li class="py-1"><a class="inherit-link" href="#">Lorem ipsum dolor</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Sed ut perspiciatis</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Voluptatum deleniti</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">At vero eos</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Consectetur adipiscing</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Duis aute irure</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Necessitatibus saepe</a></li>
                                    <li class="py-1"><a class="inherit-link" href="#">Maiores alias</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row text-center gy-3">
                            <div class="col-lg-2 col-md-4"><a class="d-block p-4 text-white bg-dash-color-1" href="#">
                                    <svg class="svg-icon svg-icon-sm sv-icon-heavy text-white">
                                        <use xlink:href="#time-1"> </use>
                                    </svg>
                                    <p class="text-sm d mb-0">Demo 1</p>
                                </a></div>
                            <div class="col-lg-2 col-md-4"><a class="d-block p-4 text-white bg-dash-color-2" href="#">
                                    <svg class="svg-icon svg-icon-sm sv-icon-heavy text-white">
                                        <use xlink:href="#time-1"> </use>
                                    </svg>
                                    <p class="text-sm d mb-0">Demo 2</p>
                                </a></div>
                            <div class="col-lg-2 col-md-4"><a class="d-block p-4 text-white bg-dash-color-3" href="#">
                                    <svg class="svg-icon svg-icon-sm sv-icon-heavy text-white">
                                        <use xlink:href="#time-1"> </use>
                                    </svg>
                                    <p class="text-sm d mb-0">Demo 3</p>
                                </a></div>
                            <div class="col-lg-2 col-md-4"><a class="d-block p-4 text-white bg-dash-color-4" href="#">
                                    <svg class="svg-icon svg-icon-sm sv-icon-heavy text-white">
                                        <use xlink:href="#time-1"> </use>
                                    </svg>
                                    <p class="text-sm d mb-0">Demo 4</p>
                                </a></div>
                            <div class="col-lg-2 col-md-4"><a class="d-block p-4 text-white bg-danger" href="#">
                                    <svg class="svg-icon svg-icon-sm sv-icon-heavy text-white">
                                        <use xlink:href="#time-1"> </use>
                                    </svg>
                                    <p class="text-sm d mb-0">Demo 5</p>
                                </a></div>
                            <div class="col-lg-2 col-md-4"><a class="d-block p-4 text-white bg-info" href="#">
                                    <svg class="svg-icon svg-icon-sm sv-icon-heavy text-white">
                                        <use xlink:href="#time-1"> </use>
                                    </svg>
                                    <p class="text-sm d mb-0">Demo 6</p>
                                </a></div>
                        </div>
                    </ul>
                </li> --}}
                <!-- Languages dropdown    -->
                <li class="list-inline-item dropdown">
                    <a class="nav-link dropdown-toggle text-sm text-reset px-1 px-lg-0" id="languages" rel="nofollow"
                        data-bs-target="#" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><img src="/admin/img/flags/16/GB.png" alt="English">
                        <span class="d-none d-sm-inline-block ms-2">English</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end mt-sm-3 dropdown-menu-dark" aria-labelledby="languages">
                        <li><a class="dropdown-item" rel="nofollow" href="#"> <img class="me-2"
                                src="/admin/img/flags/16/DE.png" alt="English"><span>German</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" rel="nofollow" href="#"> <img class="me-2"
                                src="/admin/img/flags/16/FR.png" alt="English"><span>French </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list-inline-item logout px-lg-2">
                    <a class="nav-link dropdown-toggle text-sm text-reset px-1 px-lg-0" id="languages" rel="nofollow"
                        data-bs-target="#" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                          </svg>
                        <span class="d-none d-sm-inline-block ms-2">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end mt-sm-3 dropdown-menu-dark" aria-labelledby="languages">
                        <li>
                            <a class="nav-link text-sm text-reset px-1 px-lg-0" id="password" href="{{ route('password') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                                    <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                </svg>
                                <span class="d-none d-sm-inline-block"> Password </span>
                                {{-- <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                    <use xlink:href="#disable-1"> </use>
                                </svg> --}}
                            </a>
                        </li>
                        <li>
                            <a class="nav-link text-sm text-reset px-1 px-lg-0" id="logout" href="{{ route('logout') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
                                    <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                                </svg>
                                <span class="d-none d-sm-inline-block"> Logout </span>
                                {{-- <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                    <use xlink:href="#disable-1"> </use>
                                </svg> --}}
                            </a>
                        </li>
                    </ul>

                </li>
            </ul>
        </div>
    </nav>
</header>
