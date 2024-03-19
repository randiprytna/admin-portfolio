<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        <link href="{{ asset('css/loader-light.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/loader-dark.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/main-light.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/main-dark.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/structure-light.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/structure-dark.css') }}" rel="stylesheet" type="text/css" />
        <title>Admin - Muhammad Randi Nur Priyatna's Portfolio</title>
        @yield('before-head-end')
    </head>
    <body class="layout-boxed">
        <div id="load_screen"> 
            <div class="loader"> 
                <div class="loader-content">
                    <div class="spinner-grow align-self-center"></div>
                </div>
            </div>
        </div>
        <div class="header-container container-xxl">
            <header class="header navbar navbar-expand-sm expand-header">
                <a href="javascript:void(0);" class="nav-link theme-toggle p-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon dark-mode">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun light-mode">
                        <circle cx="12" cy="12" r="5"></circle>
                        <line x1="12" y1="1" x2="12" y2="3"></line>
                        <line x1="12" y1="21" x2="12" y2="23"></line>
                        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                        <line x1="1" y1="12" x2="3" y2="12"></line>
                        <line x1="21" y1="12" x2="23" y2="12"></line>
                        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                        <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                    </svg>
                </a>
                <a href="javascript:void(0);" class="sidebarCollapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </a>
                <ul class="navbar-item flex-row ms-lg-auto ms-0">
                    <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar-container">
                                <div class="avatar avatar-sm avatar-indicators avatar-online">
                                    <img alt="avatar" src="{{ asset('img/profile-blank.png') }}" class="rounded-circle">
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                            <div class="user-profile-section">
                                <div class="media mx-auto">
                                    <img src="{{ asset('img/profile-blank.png') }}" class="img-fluid me-2" alt="avatar">
                                    <div class="media-body">
                                        <h5>@auth {{ auth()->user()->name }} @endauth</h5>
                                        <p>Super Admin</p>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <a href="{{ route('sign-out') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg> 
                                    <span>Sign Out</span>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </header>
        </div>
        <div class="main-container " id="container">
            <div class="overlay"></div>
            <div class="search-overlay"></div>
            <div class="sidebar-wrapper sidebar-theme">
                <nav id="sidebar">
                    <div class="navbar-nav theme-brand flex-row  text-center">
                        <div class="nav-logo">
                            <div class="nav-item theme-logo">
                                <a href="#">
                                    <img src="{{ asset('img/logo.svg') }}" class="navbar-logo" alt="logo">
                                </a>
                            </div>
                            <div class="nav-item theme-text">
                                <a href="#" class="nav-link"> {{ config('app.name') }} </a>
                            </div>
                        </div>
                        <div class="nav-item sidebar-toggle">
                            <div class="btn-toggle sidebarCollapse">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left">
                                    <polyline points="11 17 6 12 11 7"></polyline>
                                    <polyline points="18 17 13 12 18 7"></polyline>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <ul class="list-unstyled menu-categories" id="accordionExample">
                        <li class="menu {{ $menuActive === 'dashboard' ? 'active' : '' }}">
                            <a href="{{ route('dashboard') }}"
                                aria-expanded="{{ $menuActive === 'dashboard' ? 'true' : 'false' }}"
                                class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                    <span> Dashboard</span>
                                </div>
                            </a>
                        </li>
                        <li class="menu {{ $menuActive === 'blog' ? 'active' : '' }}">
                            <a href="{{ route('blog') }}"
                                aria-expanded="{{ $menuActive === 'blog' ? 'true' : 'false' }}"
                                class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
                                    <span> Blog</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div id="content" class="main-content">
                <div class="layout-px-spacing">
                    @yield('content')
                </div>
                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Copyright © 2023, All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/loader.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('before-body-end')
    </body>
</html>