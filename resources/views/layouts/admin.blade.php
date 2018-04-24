<html>
    <head>
        <title>@yield('title')</title>
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    </head>
    <body>
        <?php if(Auth::check()): ?>
            @section('header')
                <header id="mgt">
                    <div class="topnavcontainer">
                        <div class="container">
                            <nav class="topnav">
                                <ul class="nav navbar">
                                    <li class="nav-item">
                                        <a class="nav-link" href={{ route('mgt/manageContent')}}>Manage Content</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href={{ route('mgt/carousel')}}>MainPage Carousel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href={{ route('mgt/auditReports')}}>Audit Reports</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href={{ route('mgt/meetingsCalendar')}}>Meetings Calendar</a>
                                        <div class="dropdown-menu">
                                            <a href={{ route('mgt/meetingTypes')}}>Meeting Types</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href={{ route('mgt/agencies')}}>Agencies</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href={{ route('mgt/employmentForm')}}>Employment Form</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href={{ route('mgt/addAnnouncement')}}>Add Announcement</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </header>
              @show
        <?php endif; ?>
        @yield('slider')
        @section('search')
        @show
        <div class="mainpageContent mgt">
            <div class="container">
                @yield('content')
            </div>
        </div>
        @section('footer')
        @show
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="http://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Ropa+Sans:400,400italic" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </body>
</html>
