<!DOCTYPE html>
<html dir="ltr" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="noindex,nofollow">
      <title>Yerazel Admin Dashboard</title>
      <!-- Favicon icon -->
      <link rel="icon" type="image/png" sizes="16x16" href="{{ url('agents/images/favicon.png') }}">
      <!-- Custom CSS -->
      <link href="{{ url('agents/plugins/bower_components/chartist/dist/chartist.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ url('agents/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css') }}">
      <!-- Custom CSS -->
      <link href="{{ url('agents/css/style.min.css') }}" rel="stylesheet">
      <link href="{{ url('agents/css/style.css') }}" rel="stylesheet">
   </head> 
   
   
   <body>
      <!-- ============================================================== -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================== -->
      <div class="preloader">
         <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
         </div>
      </div>
      <!-- ============================================================== -->
      <!-- Main wrapper - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
         data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
         <!-- ============================================================== -->
         <!-- Topbar header - style you can find in pages.scss -->
         <!-- ============================================================== -->
         <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
               <div class="navbar-header" data-logobg="skin6">
                  <!-- ============================================================== -->
                  <!-- Logo -->
                  <!-- ============================================================== -->
                  <a class="navbar-brand" href="dashboard.html">
                  <span class="logo-text pl-0 w-100 text-center">
                  <img src="{{ url('agents/images/logo.png') }}" alt="homepage" width="120px" />
                  </span>
                  </a>
                  <!-- ============================================================== -->
                  <!-- End Logo -->
                  <!-- ============================================================== -->
                  <!-- ============================================================== -->
                  <!-- toggle and nav items -->
                  <!-- ============================================================== -->
                  <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                     href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
               </div>
               <!-- ============================================================== -->
               <!-- End Logo -->
               <!-- ============================================================== -->
               <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                  <ul class="navbar-nav d-none d-md-block d-lg-none">
                     <li class="nav-item">
                        <a class="nav-toggler nav-link waves-effect waves-light text-white"
                           href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                     </li>
                  </ul>
                  <!-- ============================================================== -->
                  <!-- Right side toggle and nav items -->
                  <!-- ============================================================== -->
                  <ul class="navbar-nav  d-flex align-items-center pl-25">
                      <li class=" in">
                        <form role="search" class="app-search d-none d-md-block mr-3">
                           <input type="text" placeholder="Property Search" class="form-control mt-0">
                           <a href="" class="active">
                           <i class="fa fa-search"></i>
                           </a>
                        </form>
                     </li>
                  </ul>
                  <ul class="navbar-nav ml-auto d-flex align-items-center">
                     <!-- ============================================================== -->
                     <!-- Search -->
                     <!-- ============================================================== -->
                     
                     <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="fa fa-bell" style="font-size: 24px" aria-hidden="true"></i><span class="badge badge-pill badge-danger badge-up badge-glow">6</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                           <li class="dropdown-menu-header">
                              <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6>
                              <span class="notification-tag badge badge-danger float-right m-0">5 New</span>
                           </li>
                           <li class="scrollable-container media-list w-100 ps ps--active-y">
                              <a href="javascript:void(0)">
                                 <div class="media">
                                    <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan mr-0"></i></div>
                                    <div class="media-body">
                                       <h6 class="media-heading">You have new order!</h6>
                                       <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                       <small>
                                       <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time></small>
                                    </div>
                                 </div>
                              </a>
                              <a href="javascript:void(0)">
                                 <div class="media">
                                    <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1 mr-0"></i></div>
                                    <div class="media-body">
                                       <h6 class="media-heading red darken-1">99% Server load</h6>
                                       <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p>
                                       <small>
                                       <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time></small>
                                    </div>
                                 </div>
                              </a>
                              <a href="javascript:void(0)">
                                 <div class="media">
                                    <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3 mr-0"></i></div>
                                    <div class="media-body">
                                       <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                       <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p>
                                       <small>
                                       <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                    </div>
                                 </div>
                              </a>
                              <a href="javascript:void(0)">
                                 <div class="media">
                                    <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan mr-0"></i></div>
                                    <div class="media-body">
                                       <h6 class="media-heading">Complete the task</h6>
                                       <small>
                                       <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                                    </div>
                                 </div>
                              </a>
                              <a href="javascript:void(0)">
                                 <div class="media">
                                    <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal mr-0"></i></div>
                                    <div class="media-body">
                                       <h6 class="media-heading">Generate monthly report</h6>
                                       <small>
                                       <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                                    </div>
                                 </div>
                              </a>
                              <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                 <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                              </div>
                              <div class="ps__rail-y" style="top: 0px; height: 255px; right: 0px;">
                                 <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 157px;"></div>
                              </div>
                           </li>
                           <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
                        </ul>
                     </li>
                     <!-- ============================================================== -->
                     <!-- User profile and search -->
                     <!-- ============================================================== -->
                     <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown" aria-expanded="false"></span><span class="avatar avatar-online">
						<img src="{{ url('agents/images/user.png') }}" alt="avatar"><i></i></span><span class="ml-3 user-name text-bold-700">John Doe</a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <!-- a class="dropdown-item" href="#"><i class="fas fa-user-plus"></i> Manage Account</a>
                           <a class="dropdown-item" href="#"><i class="fas fa-key"></i> Change Password</a>
                           <a class="dropdown-item" href="#"><i class="fas fa-sync-alt"></i> Activity Log</a -->
                           <a class="dropdown-item" href="logout"><i class="fas fa-sign-out-alt"></i> Log out</a>
                        </div>
                     </li>
                     <!-- ============================================================== -->
                     <!-- User profile and search -->
                     <!-- ============================================================== -->
                  </ul>
               </div>
            </nav>
         </header>
         <!-- ============================================================== -->
         <!-- End Topbar header -->
         <!-- ============================================================== -->
         <!-- ============================================================== -->
         <!-- Left Sidebar - style you can find in sidebar.scss  -->
         <!-- ============================================================== -->
		 
		 
		 <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
               <!-- Sidebar navigation-->
               <nav class="sidebar-nav">
                  <ul id="sidebarnav">
                     <!-- User Profile-->
                     <li class="sidebar-item mt-2">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard"
                           aria-expanded="false">
                        <i class="fas fa-th-large"></i>
                        <span class="hide-menu">Dashboard</span>
                        </a>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="client"
                           aria-expanded="false">
                        <i class="fas fa-users"></i>
                        <span class="hide-menu">Clients</span>
                        </a>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="showing"
                           aria-expanded="false">
                        <i class="far fa-calendar-alt"></i>
                        <span class="hide-menu">Showings</span>
                        </a>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="open-houses"
                           aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <span class="hide-menu">Open Houses</span>
                        </a>
                     </li>
                     <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="logout"
                           aria-expanded="false">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="hide-menu">Logout</span>
                        </a>
                     </li>
                  </ul>
               </nav>
               <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
         </aside>
         <!-- ============================================================== -->
         <!-- End Left Sidebar - style you can find in sidebar.scss  -->
         <!-- ============================================================== -->
         <!-- ============================================================== -->
         <!-- Page wrapper  -->
         <!-- ============================================================== -->