<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from live.websitelayout.net/default-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Aug 2024 17:47:17 GMT -->
<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Chitrakoot Web" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Live Multipurpose Blog Template" />
    <meta name="description" content="Live - Multipurpose Blog Template" />

    <!-- title  -->
    <title>Live - Multipurpose Blog </title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ url('style/img/logos/favicon.png') }}" />
    <link rel="apple-touch-icon" href="{{ url('style/img/logos/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('style/img/logos/apple-touch-icon-72x72.png')}}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('style/img/logos/apple-touch-icon-114x114.png')}}" />

    <!-- plugins -->
    <link rel="stylesheet" href="{{ url('style/css/plugins.css')}}" />

    <!-- search css -->
    <link rel="stylesheet" href="{{ url('style/search/search.css')}}" />

    <!-- core style css -->
    <link href="{{ url('style/css/styles.css')}}" rel="stylesheet" />

</head>

<body>

    <!-- start page loading -->
    <div id="preloader">
        <div class="row loader">
            <div class="loader-icon"></div>
        </div>
    </div>
    <!-- end page loading -->

    <!-- start main-wrapper section -->
    <div class="main-wrapper">

        <!-- start header section -->
        <header>
            <div class="navbar-default">
                <!-- start top search -->
                <div class="top-search bg-theme">
                    <div class="container">
                        <form class="search-form" action="https://live.websitelayout.net/search.html" method="GET" accept-charset="utf-8">
                            <div class="input-group">
                                <span class="input-group-addon cursor-pointer">
                                    <button class="search-form_submit fas fa-search font-size18 text-white" type="submit"></button>
                                </span>
                                <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
                                <span class="input-group-addon close-search"><i class="fas fa-times font-size18 margin-10px-top"></i></span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end top search -->

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="menu_area">
                                <nav class="navbar navbar-expand-lg navbar-light no-padding">

                                    <div class="navbar-header navbar-header-custom">
                                        <!-- start logo -->
                                        <a href="{{route('index')}}" class="navbar-brand width-200px sm-width-180px xs-width-150px"><img id="logo" src="{{ url('style/img/logos/logo.png')}}" alt="logo"></a>
                                        <!-- end logo -->
                                    </div>

                                    <div class="navbar-toggler"></div>

                                    <!-- start menu area -->
                                    <ul class="navbar-nav ml-auto" id="nav" style="display: none;">
                                        <li><a href="{{route('index')}}">Home</a></li>
                                        <li><a href="{{route('about')}}">About Us</a></li>
                                        <li><a href="{{ route('standard_post')}}">Pages</a>
                                            <ul>
                                            <li><a href="{{ route('standard_post')}}">Standard Post</a></li>
                                            <li><a href="{{ route('gallery')}}">Gallery Post</a></li>
                                            <li><a href="{{ route('video')}}">Video Post</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('portfolio')}}">Portfolio</a>
                                                                                    </li>
                                        
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                    </ul>
                                    <!-- end menu area -->

                                    <!-- start attribute navigation -->
                                    <div class="attr-nav sm-no-margin sm-margin-65px-right xs-margin-55px-right">
                                        <ul class="search">
                                            <li class="search"><a href="javascript:void(0)"><i class="fas fa-search text-theme-color font-size18 margin-5px-top sm-no-margin-top"></i></a></li>
                                        </ul>

                                    </div>
                                    <!-- end attribute navigation -->

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header section -->

