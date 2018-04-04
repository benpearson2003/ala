@extends('layouts.app')

@section('title', 'Home')

@section('slider')
    <div class="slider-container">
        <div class="slider">
            <div class="slide">
                <img src={{ asset('/images/carousel0.jpg') }} />
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="mainpageContent">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="contentModule">
                        <h2>Welcome to Arkansas Legislative Audit</h2>
                        <p style="text-align: justify;">
The mission of Legislative Audit is to serve the General Assembly, the Legislative Joint Auditing Committee, and the citizens of the State of Arkansas by promoting sound financial management and accountability of public resources entrusted to the various governmental entities. Under the authority of the Legislative Joint Auditing Committee, Legislative Audit annually issues over 1,000 financial audits, reviews, and special reports. The location of Legislative Audit within the Legislative branch of Arkansas's government provides organizational independence recognized under Government Auditing Standards and allows our work to be conducted in an independent and unbiased manner. Legislative Audit strictly adheres to the standards of the auditing profession.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="contentbox mpboxspacing ">
                        <h3><img src={{ asset('images/featured_reports.png')}} alt="Featured Reports"> Featured Reports</h3>
                        <div class="reportsContainer">
                            <div class="listingContainer">
                            </div>
                        </div>
                        <a class="viewmore" href="/our-reports/search-audits/">View All Reports »</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contentbox mpboxspacing">
                        <h3><img src={{ asset('images/upcoming_meetings.png')}} alt="Upcoming Meetings"> Upcoming Meetings</h3>
                        <div class="meetingsContainer">
                            <div class="listingContainer">
                                <div class="meetingsitem">
                                    <strong>Apr 12</strong> / <a href="meeting-url">Meeting Name </a>
                                </div>
                                <div class="meetingsitem">
                                    <strong>Apr 12</strong> / <a href="meeting-url">Meeting Name </a>
                                </div>
                                <div class="meetingsitem">
                                    <strong>Apr 12</strong> / <a href="meeting-url">Meeting Name </a>
                                </div>
                                <div class="meetingsitem">
                                    <strong>Apr 12</strong> / <a href="meeting-url">Meeting Name </a>
                                </div>
                            </div>
                        </div>
                        <a class="viewmore" href="/meetings/upcoming-meetings/">View All Upcoming Meetings »</a>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-3">
                    <div class="bottompromo mpboxspacing">
                        <h2>Our Quality Commitment</h2>
                        <img src={{ asset("images/aicpa_logo.png")}} alt="Our Quality Commitment" style="margin-top: 10px;" width="135" height="44">
                        <a class="readmorebutton" href="/about-us/professional-oversight/">
                            <img src={{ asset("images/read_more.png")}} alt="Read More" width="138" height="46">
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bottompromo mpboxspacing">
                        <h2>Report Corruption</h2>
                        <img src={{ asset("images/report_corruption.png")}} alt="Report Corruption" style="margin-top: 5px;" width="129" height="55">
                        <a class="readmorebutton" href="https://www.fbi.gov/investigate/public-corruption" target="_blank">
                            <img src={{ asset("images/read_more.png")}} alt="Read More" width="138" height="46">
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bottompromo mpboxspacing">
                        <h2>AR Transparency Site</h2>
                        <img src={{ asset("images/transparency.png")}} alt="AR Transparency Site" width="151" height="60">
                        <a class="readmorebutton" href="http://transparency.arkansas.gov" target="_blank">
                            <img src={{ asset("images/read_more.png")}} alt="Read More" width="138" height="46">
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bottompromo mpboxspacing">
                        <h2>AR Whistle-Blower Act</h2>
                        <img src={{ asset("images/whistle.png")}} alt="AR Whistle-Blower Act" width="151" height="60">
                        <a class="readmorebutton" href="/!userfiles/editor/docs/Resources/Whistleblower Act Poster.pdf" target="_blank">
                            <img src={{ asset("images/read_more.png")}} alt="Read More" width="138" height="46">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<link rel="stylesheet" href="{{ asset('css/mp.css') }}">
