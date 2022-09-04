<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    
     
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script type="text/javascript" href="{{ mix('js/app.js') }}"></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>



 



<html lang="en" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths cssscrollbar"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Adminty - Premium Admin Template by Colorlib </title>


<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="#">
<meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="#">

<link rel="icon" href="" type="image/x-icon">

<link href="./css/css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="./css/feather.css">

<link rel="stylesheet" type="text/css" href="./css/style.css">
<link rel="stylesheet" type="text/css" href="./css/jquery.mCustomScrollbar.css">
<style type="text/css">/* Chart.js */
/*
 * DOM element rendering detection
 * https://davidwalsh.name/detect-node-insertion
 */
@keyframes chartjs-render-animation {
	from { opacity: 0.99; }
	to { opacity: 1; }
}

.chartjs-render-monitor {
	animation: chartjs-render-animation 0.001s;
}

/*
 * DOM element resizing detection
 * https://github.com/marcj/css-element-queries
 */
.chartjs-size-monitor,
.chartjs-size-monitor-expand,
.chartjs-size-monitor-shrink {
	position: absolute;
	direction: ltr;
	left: 0;
	top: 0;
	right: 0;
	bottom: 0;
	overflow: hidden;
	pointer-events: none;
	visibility: hidden;
	z-index: -1;
}

.chartjs-size-monitor-expand > div {
	position: absolute;
	width: 1000000px;
	height: 1000000px;
	left: 0;
	top: 0;
}

.chartjs-size-monitor-shrink > div {
	position: absolute;
	width: 200%;
	height: 200%;
	left: 0;
	top: 0;
}
</style><style type="text/css">
@font-face {
  font-weight: 400;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Book-cd7d2bcec649b1243839a15d5eb8f0a3.woff2') format('woff2');
}

@font-face {
  font-weight: 500;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Medium-d74eac43c78bd5852478998ce63dceb3.woff2') format('woff2');
}

@font-face {
  font-weight: 700;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Bold-83b8ceaf77f49c7cffa44107561909e4.woff2') format('woff2');
}

@font-face {
  font-weight: 900;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Black-bf067ecb8aa777ceb6df7d72226febca.woff2') format('woff2');
}</style></head>
   









<body themebg-pattern="pattern4">



    <div id="pcoded" class="pcoded iscollapsed" nav-type="st6" theme-layout="vertical" vertical-placement="left" vertical-layout="wide" pcoded-device-type="desktop" vertical-nav-type="expanded" vertical-effect="shrink" vnavigation-view="view1" fream-type="theme1" sidebar-img="false" sidebar-img-type="img1" layout-type="light">
        <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                <nav class="navbar header-navbar pcoded-header iscollapsed" header-theme="theme1" pcoded-header-position="fixed">
                    <div class="navbar-wrapper">
                        <div class="navbar-logo" logo-theme="theme1">
                            <a class="mobile-menu" id="mobile-collapse" href="#!">
                                <i class="feather icon-menu icon-toggle-right"></i>
                            </a>
                            <a href="../index.html">
                                <img class="img-fluid" src="../files/assets/images/logo.png" alt="Theme-Logo">
                            </a>
                            <a class="mobile-options">
                                <i class="feather icon-more-horizontal"></i>
                            </a>
                            </div>
                            <div class="navbar-container">
                                <ul class="nav-left">
                                    <li class="header-search">
                                        <div class="main-search morphsearch-search">
                                            <div class="input-group">
                                                <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                                <input type="text" class="form-control" style="width: 0px;">
                                                <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#!" onclick="javascript:toggleFullScreen()">
                                            <i class="feather icon-maximize full-screen"></i>
                                        </a>
                                    </li>
                                </ul>
                            <ul class="nav-right">
                            <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                            <div class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-bell"></i>
                            <span class="badge bg-c-pink">5</span>
                            </div>
                            <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li>
                            <h6>Notifications</h6>
                            <label class="label label-danger">New</label>
                            </li>
                            <li>
                            <div class="media">
                            <img class="d-flex align-self-center img-radius" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                            <div class="media-body">
                            <h5 class="notification-user">John Doe</h5>
                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                            elit.</p>
                            <span class="notification-time">30 minutes ago</span>
                            </div>
                            </div>
                            </li>
                            <li>
                            <div class="media">
                            <img class="d-flex align-self-center img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                            <div class="media-body">
                            <h5 class="notification-user">Joseph William</h5>
                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                            elit.</p>
                            <span class="notification-time">30 minutes ago</span>
                            </div>
                            </div>
                            </li>
                            <li>
                            <div class="media">
                            <img class="d-flex align-self-center img-radius" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                            <div class="media-body">
                            <h5 class="notification-user">Sara Soudein</h5>
                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                            elit.</p>
                            <span class="notification-time">30 minutes ago</span>
                            </div>
                            </div>
                            </li>
                            </ul>
                            </div>
                            </li>
                            <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                            <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-message-square"></i>
                            <span class="badge bg-c-green">3</span>
                            </div>
                            </div>
                            </li>
                            <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                            <div class="dropdown-toggle" data-toggle="dropdown">
                            <img src="../files/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                            <span>John Doe</span>
                            <i class="feather icon-chevron-down"></i>
                            </div>
                            <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li>
                            <a href="#!">
                            <i class="feather icon-settings"></i> Settings
                            </a>
                            </li>
                            <li>
                            <a href="user-profile.html">
                            <i class="feather icon-user"></i> Profile
                            </a>
                            </li>
                            <li>
                            <a href="email-inbox.html">
                            <i class="feather icon-mail"></i> My Messages
                            </a>
                            </li>
                            <li>
                            <a href="auth-lock-screen.html">
                            <i class="feather icon-lock"></i> Lock Screen
                            </a>
                            </li>
                            <li>
                            <a href="auth-normal-sign-in.html">
                            <i class="feather icon-log-out"></i> Logout
                            </a>
                            </li>
                            </ul>
                            </div>
                            </li>
                            </ul>
                            </div>
                        </div>
                </nav>

                    <div id="sidebar" class="users p-chat-user showChat">
                    <div class="had-container">
                    <div class="card card_main p-fixed users-main">
                    <div class="user-box">
                    <div class="chat-inner-header">
                    <div class="back_chatBox">
                    <div class="right-icon-control">
                    <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                    <div class="form-icon">
                    <i class="icofont icofont-search"></i>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 643px;"><div class="main-friend-list" style="overflow: hidden; width: auto; height: 643px;">
                    <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="" data-original-title="Josephin Doe">
                    <a class="media-left" href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#!">
                    <img class="media-object img-radius img-radius" src="./js/avatar-3.jpg" alt="Generic placeholder image ">
                    <div class="live-status bg-success"></div>
                    </a>
                    <div class="media-body">
                    <div class="f-13 chat-header">Josephin Doe</div>
                    </div>
                    </div>
                    <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="" data-original-title="Lary Doe">
                    <a class="media-left" href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#!">
                    <img class="media-object img-radius" src="./js/avatar-2.jpg" alt="Generic placeholder image">
                    <div class="live-status bg-success"></div>
                    </a>
                    <div class="media-body">
                    <div class="f-13 chat-header">Lary Doe</div>
                    </div>
                    </div>
                    <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="" data-original-title="Alice">
                    <a class="media-left" href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#!">
                    <img class="media-object img-radius" src="./js/avatar-4.jpg" alt="Generic placeholder image">
                    <div class="live-status bg-success"></div>
                    </a>
                    <div class="media-body">
                    <div class="f-13 chat-header">Alice</div>
                    </div>
                    </div>
                    <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="" data-original-title="Alia">
                    <a class="media-left" href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#!">
                    <img class="media-object img-radius" src="./js/avatar-3.jpg" alt="Generic placeholder image">
                    <div class="live-status bg-success"></div>
                    </a>
                    <div class="media-body">
                    <div class="f-13 chat-header">Alia</div>
                    </div>
                    </div>
                    <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="" data-original-title="Suzen">
                    <a class="media-left" href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#!">
                    <img class="media-object img-radius" src="./js/avatar-2.jpg" alt="Generic placeholder image">
                    <div class="live-status bg-success"></div>
                    </a>
                    <div class="media-body">
                    <div class="f-13 chat-header">Suzen</div>
                    </div>
                    </div>
                    </div><div class="slimScrollBar" style="background: rgb(27, 139, 249); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                    </div>
                    </div>
                    </div>
                    </div>

                    <div class="showChat_inner">
                    <div class="media chat-inner-header">
                    <a class="back_chatBox">
                    <i class="feather icon-chevron-left"></i> Josephin Doe
                    </a>
                    </div>
                    <div class="media chat-messages">
                    <a class="media-left photo-table" href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#!">
                    <img class="media-object img-radius img-radius m-t-5" src="./js/avatar-3.jpg" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                    <div class="">
                    <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                    <p class="chat-time">8:20 a.m.</p>
                    </div>
                    </div>
                    </div>
                    <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                    <div class="">
                    <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                    <p class="chat-time">8:20 a.m.</p>
                    </div>
                    </div>
                    <div class="media-right photo-table">
                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#!">
                    <img class="media-object img-radius img-radius m-t-5" src="./js/avatar-4.jpg" alt="Generic placeholder image">
                    </a>
                    </div>
                    </div>
                    <div class="chat-reply-box p-b-20">
                    <div class="right-icon-control">
                    <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                    <div class="form-icon">
                    <i class="feather icon-navigation"></i>
                    </div>
                    </div>
                    </div>
                    </div>

                    <div class="pcoded-main-container" style="margin-top: 56px;">
                    <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar" navbar-theme="theme1" active-item-theme="theme1" sub-item-theme="theme2" active-item-style="style0" pcoded-navbar-position="fixed">
                    <div class="pcoded-inner-navbar main-menu mCustomScrollbar _mCS_1" id="" style="height: calc(100% - 80px);"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical_horizontal mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container_wrapper" class="mCSB_container_wrapper mCS_x_hidden mCS_no_scrollbar_x"><div id="mCSB_1_container" class="mCSB_container" style="position: relative; top: 0px; left: 0px; width: 100%;" dir="ltr">
                    <div class="pcoded-navigatio-lavel" menu-title-theme="theme5">Navigation</div>
                    <ul class="pcoded-item pcoded-left-item" item-border="true" item-border-style="none" subitem-border="true">
                    <li class="pcoded-hasmenu active pcoded-trigger" dropdown-icon="style1" subitem-icon="style1">
                    <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                    </a>
                    <ul class="pcoded-submenu">
                    <li class="">
                    <a href="https://demo.dashboardpack.com/adminty-html/index.html">
                    <span class="pcoded-mtext">Default</span>
                    </a>
                    </li>
                    <li class="">
                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-crm.html">
                    <span class="pcoded-mtext">CRM</span>
                    </a>
                    </li>
                    <li class="active">
                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html">
                    <span class="pcoded-mtext">Analytics</span>
                    <span class="pcoded-badge label label-info ">NEW</span>
                    </a>
                    </li>
                    </ul>
                    </li>
                    <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                    <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                    <span class="pcoded-mtext">Page layouts</span>
                    <span class="pcoded-badge label label-warning">NEW</span>
                    </a>
                    <ul class="pcoded-submenu">
                    <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                    <a href="javascript:void(0)">
                    <span class="pcoded-mtext">Vertical</span>
                    </a>
                    <ul class="pcoded-submenu">
                    <li class=" ">
                    <a href="https://demo.dashboardpack.com/adminty-html/default/menu-static.html">
                    <span class="pcoded-mtext">Static Layout</span>
                    </a>
                    </li>
                    <li class=" ">
                    <a href="https://demo.dashboardpack.com/adminty-html/default/menu-header-fixed.html">
                    <span class="pcoded-mtext">Header Fixed</span>
                    </a>
                    </li>
                    <li class=" ">
                    <a href="https://demo.dashboardpack.com/adminty-html/default/menu-compact.html">
                    <span class="pcoded-mtext">Compact</span>
                    </a>
                    </li>
                    <li class=" ">
                    <a href="https://demo.dashboardpack.com/adminty-html/default/menu-sidebar.html">
                    <span class="pcoded-mtext">Sidebar Fixed</span>
                    </a>
                    </li>
                    </ul>
                    </li>
                    <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                    <a href="javascript:void(0)">
                    <span class="pcoded-mtext">Horizontal</span>
                    </a>
                    <ul class="pcoded-submenu">
                    <li class=" ">
                    <a href="https://demo.dashboardpack.com/adminty-html/default/menu-horizontal-static.html" target="_blank">
                    <span class="pcoded-mtext">Static Layout</span>
                    </a>
                    </li>
                    <li class=" ">
                    <a href="https://demo.dashboardpack.com/adminty-html/default/menu-horizontal-fixed.html" target="_blank">
                    <span class="pcoded-mtext">Fixed layout</span>
                    </a>
                    </li>
                    <li class=" ">
                    <a href="https://demo.dashboardpack.com/adminty-html/default/menu-horizontal-icon.html" target="_blank">
                    <span class="pcoded-mtext">Static With Icon</span>
                    </a>
                    </li>
                    <li class=" ">
                    <a href="https://demo.dashboardpack.com/adminty-html/default/menu-horizontal-icon-fixed.html" target="_blank">
                    <span class="pcoded-mtext">Fixed With Icon</span>
                    </a>
                    </li>
                    </ul>
                    </li>
                    <li class=" ">
                    <a href="https://demo.dashboardpack.com/adminty-html/default/menu-bottom.html">
                    <span class="pcoded-mtext">Bottom Menu</span>
                    </a>
                    </li>
                    <li class=" ">
                    <a href="https://demo.dashboardpack.com/adminty-html/default/box-layout.html" target="_blank">
                    <span class="pcoded-mtext">Box Layout</span>
                    </a>
                    </li>
                    <li class=" ">
                    <a href="https://demo.dashboardpack.com/adminty-html/default/menu-rtl.html" target="_blank">
                    <span class="pcoded-mtext">RTL</span>
                    </a>
                    </li>
                    </ul>
                    </li>
                    <li class="">
                    <a href="https://demo.dashboardpack.com/adminty-html/default/navbar-light.html">
                    <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                    <span class="pcoded-mtext">Navigation</span>
                    </a>
                    </li>
                    <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                    <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                    <span class="pcoded-mtext">Widget</span>
                    <span class="pcoded-badge label label-danger">100+</span>
                    </a>
                    <ul class="pcoded-submenu">
                    <li class=" ">
                    <a href="https://demo.dashboardpack.com/adminty-html/default/widget-statistic.html">
                    <span class="pcoded-mtext">Statistic</span>
                    </a>
                    </li>
                    <li class=" ">
                    <a href="https://demo.dashboardpack.com/adminty-html/default/widget-data.html">
                    <span class="pcoded-mtext">Data</span>
                    </a>
                    </li>
                    <li class="">
                    <a href="https://demo.dashboardpack.com/adminty-html/default/widget-chart.html">
                    <span class="pcoded-mtext">Chart Widget</span>
                    </a>
                    </li>
                    </ul>
                    </li>
                    </ul>
                    </div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 152px; max-height: 633.2px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div><div id="mCSB_1_scrollbar_horizontal" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_horizontal" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_horizontal" class="mCSB_dragger" style="position: absolute; min-width: 30px; width: 0px; left: 0px;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
            </nav>










    @livewireStyles

                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small"> Auth::user()->username     </span>
                            </a>
                             <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href=" route('logout') " onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                     __('Logout') 
                                </a>

                                <form id="logout-form" action=" route('logout') " method="POST" class="d-none">
                                    csrf
                                </form>
                            </div>
        
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                         $slot  
                    </div>
                </div>
               /.container-fluid 

            
          
                



    
    @stack('modals')
    @livewireScripts
   
    <script>
        window.addEventListener('modal', event => {
            $(event.detail.modalId).modal(event.detail.actionModal)
        })
    </script>
    <script>
       /* $("#birthDate").flatpickr();
        $("#dateHired").flatpickr();*/
    </script>

    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="./js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="./js/popper.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>

    <script type="text/javascript" src="./js/jquery.slimscroll.js"></script>

    <script type="text/javascript" src="./js/modernizr.js"></script>
    <script type="text/javascript" src="./js/css-scrollbars.js"></script>

    <script type="text/javascript" src="./js/Chart.js"></script>

    <script src="./js/amcharts.js"></script>
    <script src="./js/serial.js"></script>
    <script src="./js/light.js"></script>

    <script type="text/javascript" src="./js/SmoothScroll.js"></script>
    <script src="./js/pcoded.min.js"></script>
    <script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="./js/vartical-layout.min.js"></script>
    <script type="text/javascript" src="./js/analytic-dashboard.min.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>

    </body>
    </html>
   