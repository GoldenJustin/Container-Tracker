<!DOCTYPE html>
<html lang="en">

<head>
    <title>Container Tracker</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-responsive.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/maruti-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/maruti-media.css') }}" class="skin-color" />
    @yield('style-login')
</head>

<body>




    @auth
        <!--Header-part-->
        <div id="header">
            <h1><a href="dashboard.html">Container Tracker</a></h1>
        </div>
        <!--close-Header-part-->
        <div id="user-nav" class="navbar navbar-inverse">
            <ul class="nav">
                <li class=""><a><i class="icon icon-user"></i> <span
                            class="text">{{ Auth::user()->name }}</span></a></li>
                <li class="">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="icon icon-share"></i>
                        <span>{{ __('Log Out') }}</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>


            </ul>
        </div>

        <div id="sidebar"><a href="{{ URL::TO('dashboard') }}" class="visible-phone"><i class="icon icon-home"></i>
                Home</a>
            <ul>
                <li class="active"><a href="{{ URL::TO('dashboard') }}"><i class="icon icon-home"></i>
                        <span>Home</span></a> </li>
                <li> <a href="{{ route('container.index') }}"><i class="icon icon-signal"></i> <span>Containers</span></a>
                </li>
                <li> <a href="{{ route('driver.index') }}"><i class="icon icon-inbox"></i> <span>Driver</span></a> </li>


                <li> <a href="{{ route('truck.index') }}"><i class="icon icon-hdd"></i> <span>Truck</span></a></li>
                @auth
                    @if (Auth::user()->hasRole('super-admin'))
                        <li> <a href="{{ route('icd.index') }}"><i class="icon icon-tasks"></i> <span>ICD</span></a></li>
                        <li> <a href="{{ URL::TO('users') }}"><i class="icon icon-user"></i> <span>Users</span></a></li>
                    @endif
                @endauth

                @auth
                    @if (Auth::user()->hasRole('super-admin|terminal'))
                        <li><a href="{{ route('allocate.index') }}"><i class="icon icon-fullscreen"></i> <span>Container to
                                    ICD</span></a></li>
                    @endif
                @endauth
                @auth
                    @if (Auth::user()->hasRole('icd'))
                        <li><a href="{{ route('allocated.index') }}"><i class="icon icon-fullscreen"></i> <span>Allocated
                                    Containers</span></a></li>
                        <li><a href="{{ route('delivery.index') }}"><i class="icon icon-road"></i> <span>Delivery Orders</span></a></li>
                        <li><a href="{{ route('allocated.index') }}"><i class="icon icon-bell"></i> <span>Notify Customers</span></a></li>

                    @endif
                @endauth









            </ul>
        </div>
    @endauth
    <div id="content">
        <div id="content-header">
            <br>
            
        </div>

        @yield('content')

    </div>
    </div>
    </div>
    </div>

    <div class="row-fluid">
        <div id="footer" class="span12"> 2012 &copy; National Institute of Transport. Brought to you by <a
                href="#">NIT</a> </div>
    </div>
    @yield('script-login')
    <script src="{{ asset('assets/js/excanvas.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ui.custom.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.flot.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.flot.resize.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/js/maruti.js') }}"></script>
    <script src="{{ asset('assets/js/maruti.dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/maruti.chat.js') }}"></script>


    <script type="text/javascript">
        // This function is called from the pop-up menus to transfer to
        // a different page. Ignore if the value returned is a null string:
        function goPage(newURL) {

            // if url is empty, skip the menu dividers and reset the menu selection to default
            if (newURL != "") {

                // if url is "-", it is this page -- reset the menu:
                if (newURL == "-") {
                    resetMenu();
                }
                // else, send page to designated URL            
                else {
                    document.location.href = newURL;
                }
            }
        }

        // resets the menu selection upon entry to this page:
        function resetMenu() {
            document.gomenu.selector.selectedIndex = 2;
        }
    </script>
</body>

</html>
