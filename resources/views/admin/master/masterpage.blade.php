<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from radixtouch.com/templates/admin/spice/source/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Dec 2021 08:11:36 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>@yield('title')</title>
	<!-- icons -->
	<link href="{{ URL::to('/')}}/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="{{ URL::to('/')}}/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="{{ URL::to('/')}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	
	
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{ URL::to('/')}}/assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="{{ URL::to('/')}}/assets/css/material_style.css">
	<!-- animation -->
	<link href="{{ URL::to('/')}}/assets/css/pages/animate_page.css" rel="stylesheet">
    @yield('css')
	<!-- Template Styles -->
    <link href="{{ URL::to('/')}}/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="{{ URL::to('/')}}/assets/css/style.css" rel="stylesheet" type="text/css" />
	<link href="{{ URL::to('/')}}/assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="{{ URL::to('/')}}/assets/css/theme-color.css" rel="stylesheet" type="text/css" />

	<!-- favicon -->
	<link rel="shortcut icon" href="{{ URL::to('/')}}/assets/img/favicon.ico" />
</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="index.html">
						<img alt="" src="{{ URL::to('/')}}/assets/img/logo.png">
						<span class="logo-default">Rosewood</span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
				<form class="search-form-opened" action="#" method="GET">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search..." name="query">
						<span class="input-group-btn search-btn">
							<a href="javascript:;" class="btn submit">
								<i class="icon-magnifier"></i>
							</a>
						</span>
					</div>
				</form>
				<!-- start mobile menu -->
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<!-- start notification dropdown -->
						<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<i class="fa fa-bell-o"></i>
								<span class="badge headerBadgeColor1"> 6 </span>
							</a>
							<ul class="dropdown-menu animated swing">
								<li class="external">
									<h3><span class="bold">Notifications</span></h3>
									<span class="notification-label purple-bgcolor">New 6</span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<li>
											<a href="javascript:;">
												<span class="time">just now</span>
												<span class="details">
													<span class="notification-icon circle deepPink-bgcolor"><i
															class="fa fa-check"></i></span> Congratulations!. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">3 mins</span>
												<span class="details">
													<span class="notification-icon circle purple-bgcolor"><i
															class="fa fa-user o"></i></span>
													<b>John Micle </b>is now following you. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">7 mins</span>
												<span class="details">
													<span class="notification-icon circle blue-bgcolor"><i
															class="fa fa-comments-o"></i></span>
													<b>Sneha Jogi </b>sent you a message. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">12 mins</span>
												<span class="details">
													<span class="notification-icon circle pink"><i
															class="fa fa-heart"></i></span>
													<b>Ravi Patel </b>like your photo. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">15 mins</span>
												<span class="details">
													<span class="notification-icon circle yellow"><i
															class="fa fa-warning"></i></span> Warning! </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">10 hrs</span>
												<span class="details">
													<span class="notification-icon circle red"><i
															class="fa fa-times"></i></span> Application error. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="javascript:void(0)"> All notifications </a>
									</div>
								</li>
							</ul>
						</li>
						<!-- end notification dropdown -->
						<!-- start message dropdown -->
						<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<i class="fa fa-envelope-o"></i>
								<span class="badge headerBadgeColor2"> 2 </span>
							</a>
							<ul class="dropdown-menu animated slideInDown">
								<li class="external">
									<h3><span class="bold">Messages</span></h3>
									<span class="notification-label cyan-bgcolor">New 2</span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<li>
											<a href="#">
												<span class="photo">
													<img src="{{ URL::to('/')}}/assets/img/user/user2.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Sarah Smith </span>
													<span class="time">Just Now </span>
												</span>
												<span class="message"> Jatin I found you on LinkedIn... </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="{{ URL::to('/')}}/assets/img/user/user3.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> John Deo </span>
													<span class="time">16 mins </span>
												</span>
												<span class="message"> Fwd: Important Notice Regarding Your Domain
													Name... </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="{{ URL::to('/')}}/assets/img/user/user1.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Rajesh </span>
													<span class="time">2 hrs </span>
												</span>
												<span class="message"> pls take a print of attachments. </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="{{ URL::to('/')}}/assets/img/user/user8.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Lina Smith </span>
													<span class="time">40 mins </span>
												</span>
												<span class="message"> Apply for Ortho Surgeon </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="{{ URL::to('/')}}/assets/img/user/user5.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Jacob Ryan </span>
													<span class="time">46 mins </span>
												</span>
												<span class="message"> Request for leave application. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="#"> All Messages </a>
									</div>
								</li>
							</ul>
						</li>
						<!-- end message dropdown -->
						<!-- start manage user dropdown -->
						<li class="dropdown dropdown-user">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<img alt="" class="img-circle " src="{{ URL::to('/')}}/assets/img/dp.jpg" />
								<span class="username username-hide-on-mobile">{{Session::get('name')}}</span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-default animated jello">
								<li>
									<a href="user_profile.html">
										<i class="icon-user"></i> Profile </a>
								</li>
								<li>
									<a href="#">
										<i class="icon-settings"></i> Settings
									</a>
								</li>
								<li>
									<a href="/admin/changepwd">
										<i class="icon-directions"></i> Change Password
									</a>
								</li>
								<li class="divider"> </li>
								<li>
									<a href="lock_screen.html">
										<i class="icon-lock"></i> Lock
									</a>
								</li>
								<li>
									<a href="/logout">
										<i class="icon-logout"></i> Log Out </a>
								</li>
							</ul>
						</li>
						<!-- end manage user dropdown -->
						<li class="dropdown dropdown-quick-sidebar-toggler">
							<a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right"
								data-upgraded=",MaterialButton">
								<i class="material-icons">settings</i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll">
						<ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true"
							data-slide-speed="200">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="row">
										<div class="sidebar-userpic">
											<img src="{{ URL::to('/')}}/assets/img/dp.jpg" class="img-responsive" alt=""> </div>
									</div>
									<div class="profile-usertitle">
										<div class="sidebar-userpic-name"> {{Session::get('hotel_name')}} </div>
										<div class="profile-usertitle-job">{{Session::get('email')}}</div>
									</div>
									<div class="sidebar-userpic-btn">
										<a class="tooltips" href="user_profile.html" data-placement="top"
											data-original-title="Profile">
											<i class="material-icons">person_outline</i>
										</a>
										<a class="tooltips" href="email_inbox.html" data-placement="top"
											data-original-title="Mail">
											<i class="material-icons">mail_outline</i>
										</a>
										<a class="tooltips" href="chat.html" data-placement="top"
											data-original-title="Chat">
											<i class="material-icons">chat</i>
										</a>
										<a class="tooltips" href="/logout" data-placement="top"
											data-original-title="Logout">
											<i class="material-icons">input</i>
										</a>
									</div>
								</div>
							</li>
							<li class="nav-item start active">
								<a href="/admin/dashboard" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Dashboard</span>
									<span class="selected"></span>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="fa business"></i>
									<span class="title">Master</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="/admin/viewHotelType" class="nav-link ">
											<span class="title">Hotel Type</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="/admin/viewState" class="nav-link ">
											<span class="title">State</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="/admin/viewCity" class="nav-link ">
											<span class="title">City</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="/admin/viewAmenities" class="nav-link ">
											<span class="title">Amenities</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="/admin/viewMembership" class="nav-link ">
											<span class="title">Membership</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									{{-- <i class="material-icons">business_center</i> --}}
									<i class="material-icons f-left">account_balance</i>
									<span class="title">Hotels</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="/admin/viewHotel" class="nav-link ">
											<span class="title">Hotel</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="/admin/viewMedia" class="nav-link ">
											<span class="title">Media</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="/admin/viewHotelAmenities" class="nav-link ">
											<span class="title">Hotel Amenities</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="/admin/viewRoom" class="nav-link ">
											<span class="title">Rooms</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">vpn_key</i>
									<span class="title">Places</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="/admin/viewPlace" class="nav-link ">
											<span class="title">All Places</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="/admin/viewUser" class="nav-link nav-toggle">
									<i class="material-icons f-left">person</i>
									<span class="title">Users</span>
									{{-- <span class="arrow"></span> --}}
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">group</i>
									<span class="title">Booking</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="/admin/viewBooking" class="nav-link ">
											<span class="title">All Bookings</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="/admin/viewRoomBooking" class="nav-link ">
											<span class="title">Room Booking</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="/admin/viewBookingMember" class="nav-link ">
											<span class="title">Booking Member</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="/admin/viewStatus" class="nav-link ">
											<span class="title">Status</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">local_taxi</i>
									<span class="title">Utility</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="/admin/viewOffer" class="nav-link ">
											<span class="title">Offers</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="/admin/viewReview" class="nav-link ">
											<span class="title">Rating & Review</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="/admin/viewComplain" class="nav-link ">
											<span class="title">Complain</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="/admin/viewNews" class="nav-link ">
											<span class="title">News</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">desktop_mac</i>
									<span class="title">Articles</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="/admin/viewArticles" class="nav-link "> <span class="title">All Article</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="/admin/viewComment" class="nav-link "> <span class="title">Comments</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="/admin/viewLike" class="nav-link "> <span class="title">Likes</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">grain</i>
									<span class="title">Reports</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="/admin/viewCoin" class="nav-link "> <span class="title">Coins</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="/admin/viewWallet" class="nav-link "> <span class="title">Wallet</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				@yield('main')
			</div>
			<!-- end page content -->
			
		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2022 &copy; All Rights Reserved By 
				<a href="#" target="_top" class="makerCss">Rosewood Hotel</a>
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{ URL::to('/')}}/assets/plugins/jquery/jquery.min.js"></script>
	<script src="{{ URL::to('/')}}/assets/plugins/popper/popper.min.js"></script>
	<script src="{{ URL::to('/')}}/assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
    <script src="{{ URL::to('/')}}/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="{{ URL::to('/')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    	<!-- Common js-->
	<script src="{{ URL::to('/')}}/assets/js/app.js"></script>
	<script src="{{ URL::to('/')}}/assets/js/layout.js"></script>
	<script src="{{ URL::to('/')}}/assets/js/theme-color.js"></script>
    	<!-- material -->
	<script src="{{ URL::to('/')}}/assets/plugins/material/material.min.js"></script>
	<!-- animation -->
	<script src="{{ URL::to('/')}}/assets/js/pages/ui/animations.js"></script>
    @yield('js')
	<!-- end js include path -->
</body>


<!-- Mirrored from radixtouch.com/templates/admin/spice/source/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Dec 2021 08:11:39 GMT -->
</html>