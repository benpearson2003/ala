<html>
    <head>
        <title>@yield('title')</title>
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    </head>
    <body>
        @section('header')
            <header>
                <div class="topnavcontainer">
                    <div class="container">
                        <nav class="topnav">
                            <ul class="nav navbar">
                                <?php if(Route::current()->getName() != 'home'): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href={{ route('home')}}>Home</a>
                                    </li>
                                <?php endif; ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href={{ route('aboutUs')}}>About Us</a>
                                    <div class="dropdown-menu">
                                        <a href={{ route('staff')}}>Staff</a>
                                        <a href={{ route('professionalOversight')}}>Professional Oversight</a>
                                        <a href={{ route('LJACHandbook')}}>LJAC Handbook</a>
                                        <a href={{ route('privacyPolicy')}}>Privacy Policy</a>
                                        <a href={{ route('employment')}}>Employment Opportunities</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href={{ route('committee')}}>Committee</a>
                                    <div class="dropdown-menu">
                                        <a href={{ route('committee')}}>About Us</a>
                                        <a href="http://www.arkleg.state.ar.us/assembly/2017/2017R/pages/CommitteeDetail.aspx?committeecode=905">Legislative Joint Auditing Committee Website</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href={{ route('ourReports')}}>Our Reports</a>
                                    <div class="dropdown-menu">
                                        <a href={{ route('searchAudits')}}>Search Audits</a>
                                        <a href={{ route('searchReports')}}>Search Reports for Text</a>
                                        <a href={{ route('searchAudits', ['early' => 1])}}>Early Released Reports</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href={{ route('meetings')}}>Meetings</a>
                                    <div class="dropdown-menu">
                                        <a href={{ route('upcomingMeetings')}}>Upcoming Meetings</a>
                                        <a href={{ route('meetingsCalendarArchive')}}>Meetings Calendar and Archive</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href={{ route('resources')}}>Resources</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href={{ route('quickLinks')}}>Quick Links</a>
                                </li>
                            </ul>
                        </nav>
                        <?php if(Route::current()->getName() == 'home'): ?>
                            <a class="navbar-brand mainlogo" href={{ route('test')}}>
                                <img src={{ asset('images/logo0.png')}} alt="Arkansas Legislative Audit" width="457" height="265">
                            </a>
                        <?php else: ?>
                            <a class="navbar-brand intlogo" href={{ route('home')}}>
                                <img src={{ asset('images/logo2.png')}} alt="Arkansas Legislative Audit" width="676" height="185">
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </header>
          @show
          @yield('slider')
          @section('search')
              <div class="searchcontainer">
                    <div class="container">
                        <div id="Panel1" class="search" onkeypress="">
                            <div>
                                <span class="searchspan"><img src={{ asset('images/search_audit_reports.png')}} alt="Search Audit Reports" width="284" height="36"></span>
    						    <input name="tbKeywordsMobile" id="tbKeywordsMobile" class="tbsearchbar" placeholder="Search by auditee, audit ID, audit year, or keyword" type="text">
    						    <input name="bSearchMobile" value="Search" id="bSearchMobile" type="submit">
                            </div>
                        </div>
                    </div>
              </div>
          @show
          @yield('content')
          @section('footer')
              <footer>
                  <div class="container">
                      <div class="row">
                          <div class="col-md-2">
                              <a href="/">
                                  <img src={{ asset("images/logo1.png")}} alt="Arkansas Legislative Audit" width="149" height="150">
                              </a>
                          </div>
                          <div class="col-md-7">
                              <div class="row">
                                  <a class="footerlink first" href="/resources/">Resources</a> /
                                  <a class="footerlink" href="/about-us/privacy-policy/">Privacy Policy</a> /
                                  <a class="footerlink" href="/contact-us/">Contact Us</a> /
                                  <a class="footerlink" href="/sitemap.aspx">Site Map</a>
                              </div>
                              <div class="row">
                                  <p>© Copyright 2014 Arkansas Legislative Audit. All Rights Reserved.<br>
                                    State Capitol - 500 Woodlane St  Ste 172 - Little Rock, AR 72201-1099<br>
                                    Phone:(501) 683-8600 / TDD:(501) 683-8610 / <a href="mailto:info@arklegaudit.org">info@arklegaudit.org</a>
                                  </p>
                              </div>
                          </div>
                          <div class="col-md-3"><br><br>
                              <a href="http://www.arkansas.gov/"><img src={{ asset("images/arkansas_logo.png")}} alt="Arkansas.gov" width="193" height="46"></a>
                          </div>
                      </div>
                  </div>
              </footer>
          @show
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <link href="http://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet" type="text/css">
          <link href="http://fonts.googleapis.com/css?family=Ropa+Sans:400,400italic" rel="stylesheet" type="text/css">
          <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </body>
</html>
