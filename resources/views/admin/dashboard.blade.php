<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Quantum | Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="{{ asset('admin/assets/css/vendor.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet">
	<!-- ================== END core-css ================== -->
	
	<link href="{{ asset('admin/assets/plugins/jvectormap-next/jquery-jvectormap.css') }}" rel="stylesheet">

</head>
<body>
	<!-- BEGIN #loader -->
	<div id="loader" class="app-loader">
		<div class="d-flex align-items-center">
			<div class="app-loader-circle"></div>
			<div class="app-loader-text">LOADING...</div>
		</div>
	</div>
	<!-- END #loader -->

	<!-- BEGIN #app -->
	<div id="app" class="app">
		<!-- BEGIN #header -->
		<div id="header" class="app-header">
			<!-- BEGIN desktop-toggler -->
			<div class="desktop-toggler">
				<button type="button" class="menu-toggler" data-toggle-class="app-sidebar-collapsed" data-dismiss-class="app-sidebar-toggled" data-toggle-target=".app">
					<span class="bar"></span>
					<span class="bar"></span>
				</button>
			</div>
			<!-- END desktop-toggler -->
			
			<!-- BEGIN mobile-toggler -->
			<div class="mobile-toggler">
				<button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled" data-toggle-target=".app">
					<span class="bar"></span>
					<span class="bar"></span>
				</button>
			</div>
			<!-- END mobile-toggler -->
			
			<!-- BEGIN brand -->
			<div class="brand">
				<a href="{{ route('admin.dashboard') }}" class="brand-logo w-100">
					<iconify-icon icon="lets-icons:time-progress-duotone" class="fs-24px me-2 text-theme"></iconify-icon>
					<span class="brand-text fw-500 fs-14px position-relative">
						QUANTUM
						
						<span class="text-nowrap" style="font-size: 7px; letter-spacing: 1px; font-weight: bold; position: absolute; opacity: .5; top: -7px; margin-left: -16px;">LARAVEL 11.X</span>
					</span>
				</a>
			</div>
			<!-- END brand -->
			
			<!-- BEGIN menu -->
			<div class="menu">
				<div class="menu-item dropdown d-lg-flex d-none">
					<a href="#" class="menu-link">
						<span>$1,859,050.12</span>
					</a>
				</div>
				<div class="menu-item dropdown d-lg-flex d-none me-3">
					<div class="menu-search-inline">
						<iconify-icon icon="ph:magnifying-glass-duotone" class="menu-icon"></iconify-icon>
						<input class="form-control" placeholder="Search something..." value="" name="keywords">
					</div>
				</div>
				<div class="menu-item dropdown d-lg-none d-flex">
					<a href="#" class="menu-link menu-link-icon" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app">
						<iconify-icon icon="ph:magnifying-glass-duotone" class="menu-icon"></iconify-icon> 
					</a>
				</div>
				<div class="menu-item dropdown">
					<a href="#" class="menu-link menu-link-icon px-lg-3" data-bs-toggle="dropdown" data-bs-display="static">
						<iconify-icon icon="ph:globe-duotone" class="menu-icon me-lg-2"></iconify-icon> 
						<span class="d-lg-flex d-none">EN</span>
					</a>
					<div class="dropdown-menu fade dropdown-menu-end mt-1 fs-10px text-uppercase">
						<a href="#" class="dropdown-item d-flex align-items-center">English <span class="ms-auto fw-semibold text-white w-20px text-center">EN</span></a>
						<a href="#" class="dropdown-item d-flex align-items-center">Spanish <span class="ms-auto fw-semibold text-white w-20px text-center">ES</span></a>
						<a href="#" class="dropdown-item d-flex align-items-center">French <span class="ms-auto fw-semibold text-white w-20px text-center">FR</span></a>
						<a href="#" class="dropdown-item d-flex align-items-center">German <span class="ms-auto fw-semibold text-white w-20px text-center">DE</span></a>
						<a href="#" class="dropdown-item d-flex align-items-center">Italian <span class="ms-auto fw-semibold text-white w-20px text-center">IT</span></a>
						<a href="#" class="dropdown-item d-flex align-items-center">Japanese <span class="ms-auto fw-semibold text-white w-20px text-center">JA</span></a>
						<a href="#" class="dropdown-item d-flex align-items-center">Chinese <span class="ms-auto fw-semibold text-white w-20px text-center">ZH</span></a>
						<a href="#" class="dropdown-item d-flex align-items-center">Russian <span class="ms-auto fw-semibold text-white w-20px text-center">RU</span></a>
					</div>
				</div>
				<div class="menu-item dropdown dropdown-mobile-full">
					<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link menu-link-icon">
						<iconify-icon icon="ph:calendar-dots-duotone" class="menu-icon"></iconify-icon>
					</a>
					<div class="dropdown-menu dropdown-menu-end p-0 w-300px">
						<div class="card">
							<div class="card-header">TODAY, NOV 4</div>
							<div class="card-body p-0 widget-reminder">
								<div class="widget-reminder-item">
									<div class="widget-reminder-time">09:00<br>12:00</div>
									<div class="widget-reminder-divider bg-success"></div>
									<div class="widget-reminder-content">
										<div class="fw-semibold text-white">Meeting with HR</div>
										<div> - Conference Room</div>
									</div>
								</div>
								<div class="widget-reminder-item">
									<div class="widget-reminder-time">20:00<br>23:00</div>
									<div class="widget-reminder-divider bg-primary"></div>
									<div class="widget-reminder-content">
										<div class="fw-semibold text-white">Dinner with Richard</div>
										<div> - Tom's Too Restaurant</div>
										<div class="d-flex align-items-center mt-2">
											<div class="flex-fill d-flex align-items-center">
												<img src="assets/img/user/user-3.jpg" alt="" width="16" class="me-2"> Richard Leong
											</div>
											<a href="#" class="ms-auto">Contact</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-header">TOMORROW, NOV 5</div>
							<div class="card-body p-0 widget-reminder">
								<div class="widget-reminder-item">
									<div class="widget-reminder-time">All day</div>
									<div class="widget-reminder-divider bg-gray-300"></div>
									<div class="widget-reminder-content">
										<div class="fw-semibold text-white">Terry Birthday</div>
									</div>
								</div>
								<div class="widget-reminder-item">
									<div class="widget-reminder-time">08:00</div>
									<div class="widget-reminder-divider bg-gray-300"></div>
									<div class="widget-reminder-content">
										<div class="fw-semibold text-white">Meeting</div>
									</div>
								</div>
								<div class="widget-reminder-item">
									<div class="widget-reminder-time">00:00<br>00:30</div>
									<div class="widget-reminder-divider bg-gray-300"></div>
									<div class="widget-reminder-content">
										<div class="fw-semibold text-white">Server Maintenance</div>
										<div> - Data Centre</div>
									</div>
								</div>
							</div>
						</div>
						<a class="dropdown-item fs-10px text-center py-2 d-block" href="calendar.html">VIEW ALL</a>
					</div>
				</div>
				<div class="menu-item dropdown dropdown-mobile-full">
					<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link menu-link-icon">
						<iconify-icon icon="ph:chats-duotone" class="menu-icon"></iconify-icon>
					</a>
					<div class="dropdown-menu dropdown-menu-end fade p-0 w-300px">
						<div class="card">
							<div class="card-header with-btn">
								DISCUSSION GROUP
							</div>
							<div data-scrollbar="true" class="h-200px card-body fs-10px">
								<div class="widget-chat">
									<div class="widget-chat-item">
										<div class="widget-chat-media"><img src="assets/img/user/user-2.jpg" alt=""></div>
										<div class="widget-chat-content">
											<div class="widget-chat-name">Roberto Lambert</div>
											<div class="widget-chat-message last">
												Hey, I'm testing out group messaging.
											</div>
										</div>
									</div>
									<div class="widget-chat-item reply">
										<div class="widget-chat-content">
											<div class="widget-chat-message last">
												Cool
											</div>
											<div class="widget-chat-status">Read 16:26</div>
										</div>
									</div>
									<div class="widget-chat-date">Today 14:21</div>
									<div class="widget-chat-item">
										<div class="widget-chat-media"><img src="assets/img/user/user-3.jpg" alt=""></div>
										<div class="widget-chat-content">
											<div class="widget-chat-name">Rick Powell</div>
											<div class="widget-chat-message last">
												Awesome! What's new?
											</div>
										</div>
									</div>
									<div class="widget-chat-item">
										<div class="widget-chat-media"><img src="assets/img/user/user-2.jpg" alt=""></div>
										<div class="widget-chat-content">
											<div class="widget-chat-name">Roberto Lambert</div>
											<div class="widget-chat-message">
												Not much, It's got a new look, contact pics show up in group messaging, some other small stuff.
											</div>
											<div class="widget-chat-message last">
												How's crusty old iOS 6 treating you?
											</div>
										</div>
									</div>
									<div class="widget-chat-item reply">
										<div class="widget-chat-content">
											<div class="widget-chat-message last">
												Sucks
											</div>
											<div class="widget-chat-status">Read 16:30</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<a class="dropdown-item fs-10px text-center py-2 d-block" href="messenger.html">VIEW ALL</a>
					</div>
				</div>
				<div class="menu-item dropdown dropdown-mobile-full">
					<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link menu-link-icon">
						<iconify-icon icon="ph:squares-four-duotone" class="menu-icon"></iconify-icon>
					</a>
					<div class="dropdown-menu fade dropdown-menu-end p-0 w-300px text-center">
						<div class="row row-grid gx-0">
							<div class="col-4">
								<a href="email_inbox.html" class="dropdown-item text-decoration-none p-3 bg-none">
									<div class="position-relative">
										<i class="bi bi-circle-fill position-absolute text-theme top-0 mt-n2 me-n2 fs-6px d-block text-center w-100"></i>
										<i class="bi bi-envelope h2 opacity-5 d-block my-1"></i>
									</div>
									<div class="fw-500 fs-10px text-white">INBOX</div>
								</a>
							</div>
							<div class="col-4">
								<a href="pos_customer_order.html" target="_blank" class="dropdown-item text-decoration-none p-3 bg-none">
									<div><i class="bi bi-hdd-network h2 opacity-5 d-block my-1"></i></div>
									<div class="fw-500 fs-10px text-white">POS SYSTEM</div>
								</a>
							</div>
							<div class="col-4">
								<a href="calendar.html" class="dropdown-item text-decoration-none p-3 bg-none">
									<div><i class="bi bi-calendar4 h2 opacity-5 d-block my-1"></i></div>
									<div class="fw-500 fs-10px text-white">CALENDAR</div>
								</a>
							</div>
						</div>
						<div class="row row-grid gx-0">
							<div class="col-4">
								<a href="helper.html" class="dropdown-item text-decoration-none p-3 bg-none">
									<div><i class="bi bi-terminal h2 opacity-5 d-block my-1"></i></div>
									<div class="fw-500 fs-10px text-white">HELPER</div>
								</a>
							</div>
							<div class="col-4">
								<a href="settings.html" class="dropdown-item text-decoration-none p-3 bg-none">
									<div class="position-relative">
										<i class="bi bi-circle-fill position-absolute text-theme top-0 mt-n2 me-n2 fs-6px d-block text-center w-100"></i>
										<i class="bi bi-sliders h2 opacity-5 d-block my-1"></i>
									</div>
									<div class="fw-500 fs-10px text-white">SETTINGS</div>
								</a>
							</div>
							<div class="col-4">
								<a href="widgets.html" class="dropdown-item text-decoration-none p-3 bg-none">
									<div><i class="bi bi-collection-play h2 opacity-5 d-block my-1"></i></div>
									<div class="fw-500 fs-10px text-white">WIDGETS</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item dropdown dropdown-mobile-full">
					<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link menu-link-icon">
						<iconify-icon icon="ph:warning-duotone" class="menu-icon"></iconify-icon>
					</a>
					<div class="dropdown-menu dropdown-menu-end fade w-300px p-0">
						<h6 class="dropdown-header fw-semibold py-2">NOTIFICATIONS</h6>
						<a class="dropdown-item d-flex align-items-center fs-10px" href="#">
							<div>
								<div class="w-40px h-40px bg-white bg-opacity-10 text-white fs-30px d-flex align-items-center justify-content-center">
									<iconify-icon icon="material-symbols-light:mark-email-unread-outline-sharp"></iconify-icon>
								</div>
							</div>
							<div class="flex-1 ps-3 text-truncate">
								<div class="text-white fw-semibold">New email received</div>
								<div class="text-white text-opacity-75">You have a new email from John Doe.</div>
								<div class="text-white text-opacity-50 small">2 minutes ago</div>
							</div>
						</a>
						<a class="dropdown-item d-flex align-items-center fs-10px" href="#">
							<div>
								<div class="w-40px h-40px bg-white bg-opacity-10 text-white fs-30px d-flex align-items-center justify-content-center">
									<iconify-icon icon="material-symbols-light:calendar-clock-outline-sharp"></iconify-icon>
								</div>
							</div>
							<div class="flex-1 ps-3 text-truncate">
								<div class="text-white fw-semibold">Meeting reminder: Tomorrow at 9:00 AM</div>
								<div class="text-white text-opacity-75">Don't forget your meeting with the client.</div>
								<div class="text-white text-opacity-50 small">1 hour ago</div>
							</div>
						</a>
						<a class="dropdown-item d-flex align-items-center fs-10px" href="#">
							<div>
								<div class="w-40px h-40px bg-white bg-opacity-10 text-white fs-30px d-flex align-items-center justify-content-center">
									<iconify-icon icon="material-symbols-light:checklist"></iconify-icon>
								</div>
							</div>
							<div class="flex-1 ps-3 text-truncate">
								<div class="text-white fw-semibold">Task completed</div>
								<div class="text-white text-opacity-75">The task assigned to you has been completed.</div>
								<div class="text-white text-opacity-50 small">4 hours ago</div>
							</div>
						</a>
						<a class="dropdown-item d-flex align-items-center fs-10px" href="#">
							<div>
								<div class="w-40px h-40px bg-white bg-opacity-10 text-white fs-30px d-flex align-items-center justify-content-center">
									<iconify-icon icon="material-symbols-light:mark-unread-chat-alt-outline-sharp"></iconify-icon>
								</div>
							</div>
							<div class="flex-1 ps-3 text-truncate">
								<div class="text-white fw-semibold">New comment on your post</div>
								<div class="text-white text-opacity-75">Someone commented on your recent post.</div>
								<div class="text-white text-opacity-50 small">10 hours ago</div>
							</div>
						</a>
						<a class="dropdown-item d-flex align-items-center fs-10px" href="#">
							<div>
								<div class="w-40px h-40px bg-white bg-opacity-10 text-white fs-30px d-flex align-items-center justify-content-center">
									<iconify-icon icon="material-symbols-light:update"></iconify-icon>
								</div>
							</div>
							<div class="flex-1 ps-3 text-truncate">
								<div class="text-white fw-semibold">System update scheduled</div>
								<div class="text-white text-opacity-75">There will be a system update tomorrow.</div>
								<div class="text-white text-opacity-50 small">Yesterday at 6:00 PM</div>
							</div>
						</a>
						<a class="dropdown-item fs-10px text-center py-2 d-block" href="messenger.html">VIEW ALL</a>
					</div>
				</div>
				<div class="menu-item dropdown">
					<a href="#" data-toggle="theme-panel-expand" class="menu-link menu-link-icon">
						<iconify-icon icon="ph:gear-duotone" class="menu-icon"></iconify-icon>
					</a>
					<div class="dropdown-menu dropdown-menu-end fade">
						<h6 class="dropdown-header">Settings</h6>
						<a class="dropdown-item" href="#">General Settings</a>
						<a class="dropdown-item" href="#">System Preferences</a>
						<a class="dropdown-item" href="#">Security Settings</a>
						<a class="dropdown-item" href="#">Application Settings</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">About</a>
						<a class="dropdown-item" href="#">Feedback</a>
					</div>
				</div>
				<div class="menu-item dropdown dropdown-mobile-full">
					<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link d-flex align-items-center">
						<div class="menu-img online me-sm-2 ms-lg-0 ms-n2">
							<img src="assets/img/user/profile.jpg" alt="Profile" class="">
						</div>
						<div class="menu-text d-sm-block d-none">
							<span class="d-block"><span><span class="__cf_email__" data-cfemail="1b4e485e49555a565e5b5c565a525735585456">[email&#160;protected]</span></span></span>
						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-end me-lg-3 fs-10px fade">
						<h6 class="dropdown-header">USER OPTIONS</h6>
						<a class="dropdown-item" href="profile.html">VIEW PROFILE</a>
						<a class="dropdown-item" href="settings.html">ACCOUNT SETTINGS</a>
						<a class="dropdown-item" href="calendar.html">CALENDER SETTINGS</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="helper.html">HELP & SUPPORT</a>
						<a class="dropdown-item" href="page_login.html">LOG OUT</a>
					</div>
				</div>
			</div>
			<!-- END menu -->
			
			<!-- BEGIN menu-search-float -->
			<form class="menu-search-float" method="POST" name="header_search_form">
				<div class="menu-search-container">
					<div class="menu-search-icon"><i class="bi bi-search"></i></div>
					<div class="menu-search-input">
						<input type="text" class="form-control" placeholder="Search something...">
					</div>
					<div class="menu-search-icon">
						<a href="#" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app"><i class="bi bi-x-lg"></i></a>
					</div>
				</div>
			</form>
			<!-- END menu-search-float -->
		</div>
		<!-- END #header -->
		
		<!-- BEGIN #sidebar -->
		<div id="sidebar" class="app-sidebar">
			<!-- BEGIN scrollbar -->
			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
				<!-- BEGIN menu -->
				<div class="menu">
					<div class="menu-header">APP INTERFACE</div>
					<div class="menu-item active">
						<a href="index.html" class="menu-link">
							<span class="menu-icon">
								<iconify-icon icon="ph:rocket-duotone"></iconify-icon>
							</span>
							<span class="menu-text">DASHBOARD</span>
						</a>
					</div>
					<div class="menu-item ">
						<a href="analytics.html" class="menu-link">
							<span class="menu-icon">
								<iconify-icon icon="ph:chart-bar-duotone"></iconify-icon>
							</span>
							<span class="menu-text">ANALYTICS</span>
						</a>
					</div>
					<div class="menu-item has-sub ">
						<a href="#" class="menu-link">
							<span class="menu-icon">
								<iconify-icon icon="ph:envelope-duotone"></iconify-icon>
							</span>
							<span class="menu-text">EMAIL</span>
							<span class="menu-caret"><b class="caret"></b></span>
						</a>
						<div class="menu-submenu">
							<div class="menu-item ">
								<a href="email_inbox.html" class="menu-link">
									<span class="menu-text">INBOX</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="email_compose.html" class="menu-link">
									<span class="menu-text">COMPOSE</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="email_detail.html" class="menu-link">
									<span class="menu-text">DETAIL</span>
								</a>
							</div>
						</div>
					</div>
					<div class="menu-header">UXUI COMPONENTS</div>
					<div class="menu-item ">
						<a href="widgets.html" class="menu-link">
							<span class="menu-icon">
								<iconify-icon icon="ph:stack-duotone"></iconify-icon>
							</span>
							<span class="menu-text">WIDGETS</span>
						</a>
					</div>
					<div class="menu-item has-sub ">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<iconify-icon icon="ph:handbag-simple-duotone"></iconify-icon>
							</div>
							<div class="menu-text d-flex align-items-center">POS SYSTEM</div> 
							<span class="menu-caret"><b class="caret"></b></span>
						</a>
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="pos_customer_order.html" target="_blank" class="menu-link">
									<div class="menu-text">CUSTOMER ORDER</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="pos_kitchen_order.html" target="_blank" class="menu-link">
									<div class="menu-text">KITCHEN ORDER</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="pos_counter_checkout.html" target="_blank" class="menu-link">
									<div class="menu-text">COUNTER CHECKOUT</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="pos_table_booking.html" target="_blank" class="menu-link">
									<div class="menu-text">TABLE BOOKING</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="pos_menu_stock.html" target="_blank" class="menu-link">
									<div class="menu-text">MENU STOCK</div>
								</a>
							</div>
						</div>
					</div>
					<div class="menu-item has-sub ">
						<a href="#" class="menu-link">
							<span class="menu-icon">
								<iconify-icon icon="ph:game-controller-duotone"></iconify-icon>
							</span>
							<span class="menu-text">UI KITS</span> 
							<span class="menu-caret"><b class="caret"></b></span>
						</a>
						<div class="menu-submenu">
							<div class="menu-item ">
								<a href="ui_bootstrap.html" class="menu-link">
									<span class="menu-text">BOOTSTRAP</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="ui_buttons.html" class="menu-link">
									<span class="menu-text">BUTTONS</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="ui_card.html" class="menu-link">
									<span class="menu-text">CARD</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="ui_icons.html" class="menu-link">
									<span class="menu-text">ICONS</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="ui_modal_notification.html" class="menu-link">
									<span class="menu-text">MODAL & NOTIFICATION</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="ui_typography.html" class="menu-link">
									<span class="menu-text">TYPOGRAPHY</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="ui_tabs_accordions.html" class="menu-link">
									<span class="menu-text">TABS & ACCORDIONS</span>
								</a>
							</div>
						</div>
					</div>
					<div class="menu-item has-sub ">
						<a href="#" class="menu-link">
							<span class="menu-icon">
								<iconify-icon icon="ph:pencil-simple-duotone"></iconify-icon>
							</span>
							<span class="menu-text">FORMS</span> 
							<span class="menu-caret"><b class="caret"></b></span>
						</a>
						<div class="menu-submenu">
							<div class="menu-item ">
								<a href="form_elements.html" class="menu-link">
									<span class="menu-text">FORM ELEMENTS</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="form_plugins.html" class="menu-link">
									<span class="menu-text">FORM PLUGINS</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="form_wizards.html" class="menu-link">
									<span class="menu-text">WIZARDS</span>
								</a>
							</div>
						</div>
					</div>
					<div class="menu-item has-sub ">
						<a href="#" class="menu-link">
							<span class="menu-icon">
								<iconify-icon icon="ph:grid-nine-duotone"></iconify-icon>
							</span>
							<span class="menu-text">TABLES</span>
							<span class="menu-caret"><b class="caret"></b></span>
						</a>
						<div class="menu-submenu">
							<div class="menu-item ">
								<a href="table_elements.html" class="menu-link">
									<span class="menu-text">TABLE ELEMENTS</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="table_plugins.html" class="menu-link">
									<span class="menu-text">TABLE PLUGINS</span>
								</a>
							</div>
						</div>
					</div>
					<div class="menu-item has-sub ">
						<a href="#" class="menu-link">
							<span class="menu-icon">
								<iconify-icon icon="ph:chart-donut-duotone"></iconify-icon>
							</span>
							<span class="menu-text">CHARTS</span>
							<span class="menu-caret"><b class="caret"></b></span>
						</a>
						<div class="menu-submenu">
							<div class="menu-item ">
								<a href="chart_js.html" class="menu-link">
									<span class="menu-text">CHART.JS</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="chart_apex.html" class="menu-link">
									<span class="menu-text">APEXCHARTS.JS</span>
								</a>
							</div>
						</div>
					</div>
					<div class="menu-item ">
						<a href="map.html" class="menu-link">
							<span class="menu-icon">
								<iconify-icon icon="ph:map-pin-area-duotone"></iconify-icon>
							</span>
							<span class="menu-text">MAP</span>
						</a>
					</div>
					<div class="menu-item has-sub ">
						<a href="#" class="menu-link">
							<span class="menu-icon">
								<iconify-icon icon="ph:terminal-window-duotone"></iconify-icon>
							</span>
							<span class="menu-text">LAYOUT</span>
							<span class="menu-caret"><b class="caret"></b></span>
						</a>
						<div class="menu-submenu">
							<div class="menu-item ">
								<a href="layout_starter.html" class="menu-link">
									<span class="menu-text">STARTER PAGE</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="layout_fixed_footer.html" class="menu-link">
									<span class="menu-text">FIXED FOOTER</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="layout_full_height.html" class="menu-link">
									<span class="menu-text">FULL HEIGHT</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="layout_full_width.html" class="menu-link">
									<span class="menu-text">FULL WIDTH</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="layout_boxed_layout.html" class="menu-link">
									<span class="menu-text">BOXED LAYOUT</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="layout_collapsed_sidebar.html" class="menu-link">
									<span class="menu-text">COLLAPSED SIDEBAR</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="layout_top_nav.html" class="menu-link">
									<span class="menu-text">TOP NAV</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="layout_mixed_nav.html" class="menu-link">
									<span class="menu-text">MIXED NAV</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="layout_mixed_nav_boxed_layout.html" class="menu-link">
									<span class="menu-text">MIXED NAV BOXED LAYOUT</span>
								</a>
							</div>
						</div>
					</div>
					<div class="menu-item has-sub ">
						<a href="#" class="menu-link">
							<span class="menu-icon">
								<iconify-icon icon="ph:open-ai-logo-duotone"></iconify-icon>
							</span>
							<span class="menu-text">PAGES</span>
							<span class="menu-caret"><b class="caret"></b></span>
						</a>
						<div class="menu-submenu">
							<div class="menu-item ">
								<a href="page_scrum_board.html" class="menu-link">
									<span class="menu-text">SCRUM BOARD</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="page_products.html" class="menu-link">
									<span class="menu-text">PRODUCTS</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="page_product_details.html" class="menu-link">
									<span class="menu-text">PRODUCT DETAILS</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="page_orders.html" class="menu-link">
									<span class="menu-text">ORDERS</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="page_order_details.html" class="menu-link">
									<span class="menu-text">ORDER DETAILS</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="page_gallery.html" class="menu-link">
									<span class="menu-text">GALLERY</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="page_search_results.html" class="menu-link">
									<span class="menu-text">SEARCH RESULTS</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="page_coming_soon.html" class="menu-link">
									<span class="menu-text">COMING SOON PAGE</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="page_404_error.html" class="menu-link">
									<span class="menu-text">404 ERROR PAGE</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="page_login.html" class="menu-link">
									<span class="menu-text">LOGIN</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="page_register.html" class="menu-link">
									<span class="menu-text">REGISTER</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="page_data_management.html" class="menu-link">
									<span class="menu-text">DATA MANAGEMENT</span>
								</a>
							</div>
							<div class="menu-item ">
								<a href="page_pricing.html" class="menu-link">
									<span class="menu-text">PRICING PAGE</span>
								</a>
							</div>
						</div>
					</div>
					<div class="menu-header">USER PORTAL</div>
					<div class="menu-item ">
						<a href="file_manager.html" class="menu-link">
							<span class="menu-icon">
								<iconify-icon icon="ph:folder-duotone"></iconify-icon>
							</span>
							<span class="menu-text">FILE MANAGER</span>
						</a>
					</div>
					<div class="menu-item ">
						<a href="messenger.html" class="menu-link">
							<span class="menu-icon">
								<iconify-icon icon="ph:messenger-logo-duotone"></iconify-icon>
							</span>
							<span class="menu-text">MESSENGER</span>
						</a>
					</div>
					<div class="menu-item ">
						<a href="profile.html" class="menu-link">
							<span class="menu-icon">
								<iconify-icon icon="ph:user-focus-duotone"></iconify-icon>
							</span>
							<span class="menu-text">PROFILE</span>
						</a>
					</div>
					<div class="menu-item ">
						<a href="calendar.html" class="menu-link">
							<span class="menu-icon">
								<iconify-icon icon="ph:calendar-duotone"></iconify-icon>
							</span>
							<span class="menu-text">CALENDAR</span>
						</a>
					</div>
					<div class="menu-item ">
						<a href="settings.html" class="menu-link">
							<span class="menu-icon">
								<iconify-icon icon="ph:gear-duotone"></iconify-icon>
							</span>
							<span class="menu-text">SETTINGS</span>
						</a>
					</div>
					<div class="menu-item ">
						<a href="helper.html" class="menu-link">
							<span class="menu-icon">
								<iconify-icon icon="ph:first-aid-kit-duotone"></iconify-icon>
							</span>
							<span class="menu-text">HELPER</span>
						</a>
					</div>
				</div>
				<!-- END menu -->
				<div class="mt-auto p-15px w-100">
					<a href="documentation/index.html" target="_blank" class="btn d-block btn-secondary btn-sm py-6px w-100">
						DOCUMENTATION
					</a>
				</div>
			</div>
			<!-- END scrollbar -->
		</div>
		<!-- END #sidebar -->
			
		<!-- BEGIN mobile-sidebar-backdrop -->
		<button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>
		<!-- END mobile-sidebar-backdrop -->
		
		<!-- BEGIN #content -->
		<div id="content" class="app-content p-3">
			<!-- BEGIN row -->
			<div class="row g-2">
				<!-- BEGIN col-12 -->
				<div class="col-xl-12">
					<!-- BEGIN row -->
					<div class="row g-2">
						<!-- BEGIN col-2 -->
						<div class="col-xl-2 col-lg-4 col-6">
							<!-- BEGIN card -->
							<div class="card h-100">
								<!-- BEGIN card-header -->
								<div class="card-header">PAGE VIEWS</div>
								<!-- END card-header -->
								
								<!-- BEGIN card-body -->
								<div class="card-body">
									<div class="h4 fw-100 text-theme mb-1">12,543</div>
									<p class="text-white fs-10px mb-0">
										+8.5% vs last month
									</p>
									<p class="fs-9px mb-0 text-white text-opacity-50">
										updated 1 min ago
									</p>
								</div>
								<!-- END card-body -->
							</div>
							<!-- END card -->
						</div>
						<!-- END col-2 -->
						
						<!-- BEGIN col-2 -->
						<div class="col-xl-2 col-lg-4 col-6">
							<!-- BEGIN card -->
							<div class="card h-100">
								<!-- BEGIN card-header -->
								<div class="card-header">AVG SESS. DURATION</div>
								<!-- END card-header -->
								
								<!-- BEGIN card-body -->
								<div class="card-body">
									<div class="h4 fw-100 text-theme mb-1">02:34</div>
									<p class="text-white fs-10px mb-0">
										+12.3% vs last quarter
									</p>
									<p class="fs-9px mb-0 text-white text-opacity-50">
										updated 1 min ago
									</p>
								</div>
								<!-- END card-body -->
							</div>
							<!-- END card -->
						</div>
						<!-- END col-2 -->
						
						<!-- BEGIN col-2 -->
						<div class="col-xl-2 col-lg-4 col-6">
							<!-- BEGIN card -->
							<div class="card h-100">
								<!-- BEGIN card-header -->
								<div class="card-header">NEW VISITORS</div>
								<!-- END card-header -->
								
								<!-- BEGIN card-body -->
								<div class="card-body">
									<div class="h4 fw-100 text-theme mb-1">45.2%</div>
									<p class="text-white fs-10px mb-0">
										-3.2% vs last week
									</p>
									<p class="fs-9px mb-0 text-white text-opacity-50">
										updated 1 min ago
									</p>
								</div>
								<!-- END card-body -->
							</div>
							<!-- END card -->
						</div>
						<!-- END col-2 -->
						
						<!-- BEGIN col-2 -->
						<div class="col-xl-2 col-lg-4 col-6">
							<!-- BEGIN card -->
							<div class="card h-100">
								<!-- BEGIN card-header -->
								<div class="card-header">BOUNCE RATE</div>
								<!-- END card-header -->
								
								<!-- BEGIN card-body -->
								<div class="card-body">
									<div class="h4 fw-100 text-theme mb-1">32.6%</div>
									<p class="text-white fs-10px mb-0">
										-0.5% vs last month
									</p>
									<p class="fs-9px mb-0 text-white text-opacity-50">
										updated 1 min ago
									</p>
								</div>
								<!-- END card-body -->
							</div>
							<!-- END card -->
						</div>
						<!-- END col-2 -->
						
						<!-- BEGIN col-2 -->
						<div class="col-xl-2 col-lg-4 col-6">
							<!-- BEGIN card -->
							<div class="card h-100">
								<!-- BEGIN card-header -->
								<div class="card-header">TOP REFERRING SITES</div>
								<!-- END card-header -->
								
								<!-- BEGIN card-body -->
								<div class="card-body">
									<div class="h4 fw-100 text-theme mb-1">Google</div>
									<p class="text-white fs-10px mb-0">
										2 new referrals added
									</p>
									<p class="fs-9px mb-0 text-white text-opacity-50">
										updated 1 min ago
									</p>
								</div>
								<!-- END card-body -->
							</div>
							<!-- END card -->
						</div>
						<!-- END col-2 -->
						
						<!-- BEGIN col-2 -->
						<div class="col-xl-2 col-lg-4 col-6">
							<!-- BEGIN card -->
							<div class="card h-100">
								<!-- BEGIN card-header -->
								<div class="card-header">COUNTRIES REACH</div>
								<!-- END card-header -->
								
								<!-- BEGIN card-body -->
								<div class="card-body">
									<div class="h4 fw-100 text-theme mb-1">87</div>
									<p class="text-white fs-10px mb-0">
										+5 countries vs last year
									</p>
									<p class="fs-9px mb-0 text-white text-opacity-50">
										updated 1 min ago
									</p>
								</div>
								<!-- END card-body -->
							</div>
							<!-- END card -->
						</div>
						<!-- END col-2 -->
					</div>
					<!-- END row -->
				</div>
				<!-- END col-12 -->
				
				<!-- BEGIN col-8 -->
				<div class="col-xl-8">
					<!-- BEGIN card -->
					<div class="card h-100">
						<!-- BEGIN card-header -->
						<div class="card-header with-btn">
							TRAFFIC ANALYTICS
							<div class="card-header-btn">
								<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
								<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
								<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
							</div>
						</div>
						<!-- END card-header -->
						
						<!-- BEGIN card-body -->
						<div class="card-body p-0">
							<div class="row gx-0">
								<div class="col-lg-8 position-relative">
									<!-- BEGIN map -->
									<div id="world-map" class="" style="height: 344px;"></div>
									<div class="position-absolute text-white fs-10px bottom-0 end-0 start-0 p-15px d-flex align-items-center">
										<iconify-icon class="text-white fs-30px me-2" icon="solar:map-point-rotate-bold-duotone"></iconify-icon>
										<div class="flex-1">
											Real-time data updates every 5 minutes, providing insights into visitor traffic patterns and peak times. Click on any location for detailed analytics.
										</div>
									</div>
									<!-- END map -->
								</div>
								<div class="col-lg-4">
									<div class="p-3">
										<div class="h4 text-theme mb-0 fw-100">[33,129]</div>
										<p class="text-white fs-10px fw-semibold mb-0">TOTAL VISITS</p>
										
										<hr class="my-2">
										
										<table class="w-100 text-truncate fs-10px">
											<thead>
												<tr class="text-white">
													<th class="w-50">COUNTRY</th>
													<th class="w-25 text-end">VISITS</th>
													<th class="w-25 text-end">PCT%</th>
												</tr>
											</thead>
											<tbody class="text-body text-opacity-75">
												<tr>
													<td>FRANCE</td>
													<td class="text-end">13,849</td>
													<td class="text-end">40.79%</td>
												</tr>
												<tr>
													<td>SPAIN</td>
													<td class="text-end">3,216</td>
													<td class="text-end">9.79%</td>
												</tr>
												<tr class="text-theme fw-bold bg-white bg-opacity-10">
													<td>MEXICO</td>
													<td class="text-end">1,398</td>
													<td class="text-end">4.26%</td>
												</tr>
												<tr>
													<td>UNITED STATES</td>
													<td class="text-end">1,090</td>
													<td class="text-end">3.32%</td>
												</tr>
												<tr>
													<td>BELGIUM</td>
													<td class="text-end">1,045</td>
													<td class="text-end">3.18%</td>
												</tr>
												<tr>
													<td>INDIA</td>
													<td class="text-end">1,033</td>
													<td class="text-end">3.09%</td>
												</tr>
												<tr>
													<td>BRAZIL</td>
													<td class="text-end">954</td>
													<td class="text-end">2.81%</td>
												</tr>
												<tr>
													<td>JAPAN</td>
													<td class="text-end">911</td>
													<td class="text-end">3.09%</td>
												</tr>
												<tr>
													<td>ARCANIA</td>
													<td class="text-end">839</td>
													<td class="text-end">2.13%</td>
												</tr>
											</tbody>
										</table>
										
										<hr class="my-2">
										
										<table class="w-100 text-truncate fs-10px">
											<thead>
												<tr class="text-white">
													<th class="w-50">BROWSER</th>
													<th class="w-25 text-end">NO/m</th>
													<th class="w-25 text-end">PCT%</th>
												</tr>
											</thead>
											<tbody class="text-body text-opacity-75">
												<tr>
													<td>Chrome</td>
													<td class="text-end">8,000</td>
													<td class="text-end">40%</td>
												</tr>
												<tr>
													<td>Firefox</td>
													<td class="text-end">5,000</td>
													<td class="text-end">25%</td>
												</tr>
												<tr class="text-theme fw-600 bg-white bg-opacity-10">
													<td>Safari</td>
													<td class="text-end">3,000</td>
													<td class="text-end">15%</td>
												</tr>
												<tr>
													<td>Edge</td>
													<td class="text-end">2,000</td>
													<td class="text-end">10%</td>
												</tr>
												<tr>
													<td>Opera</td>
													<td class="text-end">1,000</td>
													<td class="text-end">5%</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>
				<!-- END col-8 -->
				
				<!-- BEGIN col-4 -->
				<div class="col-xl-4">
					<!-- BEGIN row -->
					<div class="row gy-2">
						<!-- BEGIN col-12 -->
						<div class="col-lg-12">
							<!-- BEGIN card -->
							<div class="card h-100">
								<!-- BEGIN card-header -->
								<div class="card-header with-btn">
									SECURITY SETTINGS
									<div class="card-header-btn">
										<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
										<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
										<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
									</div>
								</div>
								<!-- END card-header -->
								
								<!-- BEGIN card-body -->
								<div class="card-body">
									<table class="table-py-1px fs-10px fw-semibold text-white">
										<tbody>
											<tr>
												<td class="pe-3 text-white text-opacity-50">FIREWALL:</td>
												<td>ENABLED</td>
											</tr>
											<tr>
												<td class="pe-3 text-white text-opacity-50">PERMISSION:</td>
												<td>ADMIN</td>
											</tr>
											<tr>
												<td class="pe-3 text-white text-opacity-50">ENCRYPTION:</td>
												<td>AES-256</td>
											</tr>
											<tr>
												<td class="pe-3 text-white text-opacity-50">IDS LEVEL:</td>
												<td>High</td>
											</tr>
											<tr>
												<td class="pe-3 text-white text-opacity-50">ACCESS CONTROL:</td>
												<td>BIOMETRIC AUTHENTICATION</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- END card-body -->
							</div>
							<!-- END card -->
						</div>
						<!-- END col-12 -->
						
						<!-- BEGIN col-12 -->
						<div class="col-lg-12">
							<!-- BEGIN card -->
							<div class="card h-100">
								<!-- BEGIN card-header -->
								<div class="card-header with-btn">
									THREAT DETECTION
									<div class="card-header-btn">
										<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
										<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
										<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
									</div>
								</div>
								<!-- END card-header -->
								
								<!-- BEGIN card-body -->
								<div class="card-body">
									<!-- BEGIN row -->
									<div class="row mb-3 fs-10px pt-1px">
										<!-- BEGIN col-4 -->
										<div class="col-4">
											<div class="d-flex flex-column justify-content-center text-center">
												<div class="w-40px mx-auto"><div data-render="apexchart" data-type="donut" data-height="40"></div></div>
												<div class="mt-2">THREATS</div>
												<div class="text-white">459</div>
											</div>
										</div>
										<!-- END col-4 -->
										
										<!-- BEGIN col-4 -->
										<div class="col-4">
											<div class="d-flex flex-column justify-content-center text-center">
												<div class="w-40px mx-auto"><div data-render="apexchart" data-type="donut" data-height="40"></div></div>
												<div class="mt-2">FALSE POS</div>
												<div class="text-white mt-0">20</div>
											</div>
										</div>
										<!-- END col-4 -->
										
										<!-- BEGIN col-4 -->
										<div class="col-4">
											<div class="d-flex flex-column justify-content-center text-center">
												<div class="w-40px mx-auto"><div data-render="apexchart" data-type="donut" data-height="40"></div></div>
												<div class="mt-2">RESP. TIME</div>
												<div class="text-white mt-0">1 min</div>
											</div>
										</div>
										<!-- END col-4 -->
									</div>
									<!-- END row -->
									
									<hr class="my-2">
									
									<table class="w-100 text-truncate fs-10px table-py-1px">
										<thead>
											<tr class="text-white">
												<th width="40%">DETECTION SRC.</th>
												<th width="25%">TYPE</th>
												<th width="25%">SEVERITY</th>
												<th width="10%">TOTAL</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>IDS</td>
												<td>Malware</td>
												<td>High</td>
												<td>150</td>
											</tr>
											<tr>
												<td>IPS</td>
												<td>Phishing</td>
												<td>Medium</td>
												<td>90</td>
											</tr>
											<tr>
												<td>FIREWALL</td>
												<td>DDoS</td>
												<td>Critical</td>
												<td>45</td>
											</tr>
											<tr>
												<td>ENDPOINT</td>
												<td>XSS</td>
												<td>High</td>
												<td>30</td>
											</tr>
											<tr>
												<td>IDS</td>
												<td>SQL Injection</td>
												<td>Low</td>
												<td>75</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- END card-body -->
							</div>
							<!-- END card -->
						</div>
						<!-- END col-12 -->
					</div>
					<!-- END col-12 -->
				</div>
				<!-- END col-4 -->
				
				<!-- BEGIN col-4 -->
				<div class="col-xl-4 col-lg-6">
					<!-- BEGIN card -->
					<div class="card h-100">
						<!-- BEGIN card-header -->
						<div class="card-header with-btn">
							BUSINESS METRICS
							<div class="card-header-btn">
								<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
								<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
								<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
							</div>
						</div>
						<!-- END card-header -->
						
						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- BEGIN row -->
							<div class="row g-3">
								<!-- BEGIN col-4 -->
								<div class="col-4">
									<div class="d-flex align-items-center">
										<div class="fs-32px text-theme d-flex w-40px"><iconify-icon icon="material-symbols-light:bar-chart-4-bars"></iconify-icon></div>
										<div class="flex-1">
											<div class="fs-10px fw-semibold text-white text-opacity-50 mb-1">REVENUE</div>
											<div class="h6 mb-0 fw-base">$7.5m</div>
										</div>
									</div>
								</div>
								<!-- END col-4 -->
								
								<!-- BEGIN col-4 -->
								<div class="col-4">
									<div class="d-flex align-items-center">
										<div class="fs-32px text-theme d-flex w-40px"><iconify-icon icon="material-symbols-light:group-outline"></iconify-icon></div>
										<div class="flex-1">
											<div class="fs-10px fw-semibold text-white text-opacity-50 mb-1">CUSTOMERS</div>
											<div class="h6 mb-0 fw-base">45k</div>
										</div>
									</div>
								</div>
								<!-- END col-4 -->
								
								<!-- BEGIN col-4 -->
								<div class="col-4">
									<div class="d-flex align-items-center">
										<div class="fs-32px text-theme d-flex w-40px"><iconify-icon icon="material-symbols-light:touch-app-outline"></iconify-icon></div>
										<div class="flex-1">
											<div class="fs-10px fw-semibold text-white text-opacity-50 mb-1">VISITS</div>
											<div class="h6 mb-0 fw-base">1.3m</div>
										</div>
									</div>
								</div>
								<!-- END col-4 -->
							</div>
							<!-- END row -->
							
							<hr class="invisible m-0">
							<hr>
							
							<div class="row g-3">
								<!-- BEGIN col-4 -->
								<div class="col-4">
									<div class="d-flex align-items-center">
										<div class="fs-32px text-theme d-flex w-40px"><iconify-icon icon="material-symbols-light:approval-delegation-outline"></iconify-icon></div>
										<div class="flex-1">
											<div class="fs-10px fw-semibold text-white text-opacity-50 mb-1">PROFIT</div>
											<div class="h6 mb-0 fw-base">$3.2m</div>
										</div>
									</div>
								</div>
								<!-- END col-4 -->
								
								<!-- BEGIN col-4 -->
								<div class="col-4">
									<div class="d-flex align-items-center">
										<div class="fs-32px text-theme d-flex w-40px"><iconify-icon icon="material-symbols-light:app-badging-outline"></iconify-icon></div>
										<div class="flex-1">
											<div class="fs-10px fw-semibold text-white text-opacity-50 mb-1">LAUNCHES</div>
											<div class="h6 mb-0 fw-base">4</div>
										</div>
									</div>
								</div>
								<!-- END col-4 -->
								
								<!-- BEGIN col-4 -->
								<div class="col-4">
									<div class="d-flex align-items-center">
										<div class="fs-32px text-theme d-flex w-40px"><iconify-icon icon="material-symbols-light:store-outline"></iconify-icon></div>
										<div class="flex-1">
											<div class="fs-10px fw-semibold text-white text-opacity-50 mb-1">SALES</div>
											<div class="h6 mb-0 fw-base">$8.9m</div>
										</div>
									</div>
								</div>
								<!-- END col-4 -->
							</div>
						</div>
					</div>
					<!-- END card -->
				</div>
				<!-- END col-4 -->
				
				<!-- BEGIN col-4 -->
				<div class="col-xl-4 col-lg-6">
					<!-- BEGIN card -->
					<div class="card h-100">
						<!-- BEGIN card-header -->
						<div class="card-header with-btn">
							SALES PERFORMANCE
							<div class="card-header-btn">
								<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
								<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
								<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
							</div>
						</div>
						<!-- END card-header -->
						
						<!-- BEGIN card-body -->
						<div class="card-body text-white fs-10px fw-semibold">
							<div class="d-flex align-items-center mb-1">
								<span class="w-15px h-15px d-flex align-items-center bg-theme text-black justify-content-center">1</span>
								<span class="flex-1 ps-2">NORTH AMERICA REGION</span>
								<span class="w-110px">
									<div class="progress h-3px bg-black mt-1px">
										<div class="progress-bar bg-theme" style="width: 75%"></div>
									</div>
								</span>
								<span class="w-50px text-end">$700k</span>
							</div>
							<div class="d-flex align-items-center mb-1">
								<span class="w-15px h-15px d-flex align-items-center bg-theme bg-opacity-75 text-black justify-content-center">2</span>
								<span class="flex-1 ps-2">EUROPE REGION</span>
								<span class="w-110px">
									<div class="progress h-3px bg-black mt-1px">
										<div class="progress-bar bg-theme bg-opacity-75" style="width: 85%"></div>
									</div>
								</span>
								<span class="w-50px text-end">$850k</span>
							</div>
							<div class="d-flex align-items-center mb-1">
								<span class="w-15px h-15px d-flex align-items-center bg-theme bg-opacity-50 text-black justify-content-center">3</span>
								<span class="flex-1 ps-2">ASIA-PACIFIC REGION</span>
								<span class="w-110px">
									<div class="progress h-3px bg-black mt-1px">
										<div class="progress-bar bg-theme bg-opacity-75" style="width: 60%"></div>
									</div>
								</span>
								<span class="w-50px text-end">$600k</span>
							</div>
							<div class="d-flex align-items-center mb-1">
								<span class="w-15px h-15px d-flex align-items-center bg-white bg-opacity-25 text-black justify-content-center">4</span>
								<span class="flex-1 ps-2">SOUTH AMERICA REGION</span>
								<span class="w-110px">
									<div class="progress h-3px bg-black mt-1px">
										<div class="progress-bar bg-white bg-opacity-50" style="width: 90%"></div>
									</div>
								</span>
								<span class="w-50px text-end">$900k</span>
							</div>
							<div class="d-flex align-items-center mb-0">
								<span class="w-15px h-15px d-flex align-items-center bg-white bg-opacity-25 text-black justify-content-center">5</span>
								<span class="flex-1 ps-2">AFRICA REGION</span>
								<span class="w-110px">
									<div class="progress h-3px bg-black mt-1px">
										<div class="progress-bar bg-white bg-opacity-25" style="width: 40%"></div>
									</div>
								</span>
								<span class="w-50px text-end">$400k</span>
							</div>
						</div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>
				<!-- END col-4 -->
				
				<!-- BEGIN col-4 -->
				<div class="col-xl-4">
					<!-- BEGIN card -->
					<div class="card h-100">
						<!-- BEGIN card-header -->
						<div class="card-header with-btn">
							OPERATIONAL OVERVIEW
							<div class="card-header-btn">
								<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
								<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
								<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
							</div>
						</div>
						<!-- END card-header -->
						
						<!-- BEGIN card-body -->
						<div class="card-body">
							<div class="d-flex fs-10px">
								<div class="fs-40px text-theme">
									<iconify-icon icon="material-symbols-light:precision-manufacturing-outline-sharp"></iconify-icon>
								</div>
								<div class="flex-1 ps-3">
									<div>
										Increased weekly production rate by <span class="text-success fw-semibold">5%</span>, reflecting improved operational performance.
									</div>
									<hr class="invisible m-0">
									<hr>
									<div class="row mb-4px text-truncate">
										<div class="col-6">
											<div class="d-flex align-items-center">
												<div class="text-body text-opacity-50 w-70px">CURRENT:</div>
												<div class="text-white fw-semibold flex-1">1,000 UNITS</div>
											</div>
											<div class="d-flex align-items-center">
												<div class="text-body text-opacity-50 w-70px">TARGET:</div>
												<div class="text-white fw-semibold flex-1">1,200 UNITS</div>
											</div>
										</div>
										<div class="col-6">
											<div class="d-flex align-items-center">
												<div class="text-body text-opacity-50 w-70px">RATE:</div>
												<div class="text-white fw-semibold flex-1">200 UNITS/W</div>
											</div>
											<div class="d-flex align-items-center">
												<div class="text-body text-opacity-50 w-70px">PREV WEEK:</div>
												<div class="text-white fw-semibold flex-1">190 UNITS</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>
				<!-- END col-4 -->
				
				<!-- BEGIN col-4 -->
				<div class="col-xl-4 col-lg-6">
					<!-- BEGIN card -->
					<div class="card h-100">
						<!-- BEGIN card-header -->
						<div class="card-header with-btn">
							SALES BY SOCIAL SOURCE
							<div class="card-header-btn">
								<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
								<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
								<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
							</div>
						</div>
						<!-- END card-header -->
						
						<!-- BEGIN card-body -->
						<div class="card-body">
							<div class="d-flex align-items-center mb-3">
								<div class="flex-1">
									<!-- BEGIN sales -->
									<div class="mb-0 h4 fw-300 text-theme flex-1">
										$70,563.43
									</div>
									<!-- END sales -->
									<!-- BEGIN percentage -->
									<div class="text-white text-opacity-50 fs-10px fw-semibold"><span class="text-white">+45.76%</span> vs yesterday</div>
									<!-- END percentage -->
								</div>
							</div>
							
							<hr>
							
							<!-- BEGIN widget-list-item -->
							<div class="d-flex align-items-center text-white mb-2">
								<div class="w-20px h-20px fs-12px bg-white bg-opacity-10 text-white d-flex align-items-center justify-content-center">
									<i class="fab fa-apple"></i>
								</div>
								<div class="flex-1 px-3 fs-10px">APPLE STORE</div>
								<div class="text-white fw-semibold small">
									$<span data-animation="number" data-value="34,840.17">34,840.17</span>
								</div>
							</div>
							<div class="d-flex align-items-center text-white mb-2">
								<div class="w-20px h-20px fs-12px bg-white bg-opacity-10 text-white d-flex align-items-center justify-content-center">
									<i class="fab fa-facebook-f"></i>
								</div>
								<div class="flex-1 px-3 fs-10px">FACEBOOK</div>
								<div class="text-white fw-semibold small">
									$<span data-animation="number" data-value="12,502.67">12,502.67</span>
								</div>
							</div>
							<div class="d-flex align-items-center text-white mb-2">
								<div class="w-20px h-20px fs-12px bg-white bg-opacity-10 text-white d-flex align-items-center justify-content-center">
									<i class="fab fa-instagram"></i>
								</div>
								<div class="flex-1 px-3 fs-10px">INSTAGRAM</div>
								<div class="text-white fw-semibold small">
									$<span data-animation="number" data-value="8,569.75">8,569.75</span>
								</div>
							</div>
							<div class="d-flex align-items-center text-white mb-2">
								<div class="w-20px h-20px fs-12px bg-white bg-opacity-10 text-white d-flex align-items-center justify-content-center">
									<i class="fab fa-youtube"></i>
								</div>
								<div class="flex-1 px-3 fs-10px">YOUTUBE</div>
								<div class="text-white fw-semibold small">
									$<span data-animation="number" data-value="6,021.79">6,021.79</span>
								</div>
							</div>
							<div class="d-flex align-items-center text-white mb-2">
								<div class="w-20px h-20px fs-12px bg-white bg-opacity-10 text-white d-flex align-items-center justify-content-center">
									<i class="fab fa-twitter"></i>
								</div>
								<div class="flex-1 px-3 fs-10px">TWITTER</div>
								<div class="text-white fw-semibold small">
									$<span data-animation="number" data-value="4,799.20">4,799.20</span>
								</div>
							</div>
							<div class="d-flex align-items-center text-white mb-2">
								<div class="w-20px h-20px fs-12px bg-white bg-opacity-10 text-white d-flex align-items-center justify-content-center">
									<i class="fab fa-google"></i>
								</div>
								<div class="flex-1 px-3 fs-10px">GOOGLE</div>
								<div class="text-white fw-semibold small">
									$<span data-animation="number" data-value="3,405.85">3,405.85</span>
								</div>
							</div>
							<div class="d-flex align-items-center text-white mb-2">
								<div class="w-20px h-20px fs-12px bg-white bg-opacity-10 text-white d-flex align-items-center justify-content-center">
									<i class="fab fa-tiktok"></i>
								</div>
								<div class="flex-1 px-3 fs-10px">TIKTOK</div>
								<div class="text-white fw-semibold small">
									$<span data-animation="number" data-value="424.00">424.00</span>
								</div>
							</div>
						</div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>
				<!-- END col-4 -->
				
				<!-- BEGIN col-4 -->
				<div class="col-xl-4 col-lg-6">
					<!-- BEGIN card -->
					<div class="card">
						<!-- BEGIN card-header -->
						<div class="card-header with-btn">
							TOP PRODUCTS BY UNITS SOLD
							<div class="card-header-btn">
								<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
								<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
								<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
							</div>
						</div>
						<!-- END card-header -->
						
						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- BEGIN product -->
							<div class="d-flex align-items-center mb-3 fs-10px">
								<div class="bg-opacity-10 bg-white fs-20px w-30px h-30px text-white d-flex align-items-center justify-content-center">
									<iconify-icon icon="material-symbols-light:phone-iphone-outline-sharp"></iconify-icon>
								</div>
								<div class="text-truncate ps-3 flex-1">
									<div class="text-white fw-semibold">APPLE IPHONE 15 PRO MAX</div>
									<div class="text-white text-opacity-50">$1,099.00</div>
								</div>
								<div class="text-center">
									<div class="text-white fw-semibold fs-12px"><span data-animation="number" data-value="210">210</span></div>
									<div class="text-white text-opacity-50 fs-7px fw-semibold mb-1">SOLD</div>
								</div>
							</div>
							<!-- END product -->
							
							<!-- BEGIN product -->
							<div class="d-flex align-items-center mb-3 fs-10px">
								<div class="bg-opacity-10 bg-white fs-20px w-30px h-30px text-white d-flex align-items-center justify-content-center">
									<iconify-icon icon="material-symbols-light:camera-outline"></iconify-icon>
								</div>
								<div class="text-truncate ps-3 flex-1">
									<div class="text-white fw-semibold">SONY A7 IV CAMERA</div>
									<div class="text-white text-opacity-50">$2,499.00</div>
								</div>
								<div class="text-center">
									<div class="text-white fw-semibold fs-12px"><span data-animation="number" data-value="198">198</span></div>
									<div class="text-white text-opacity-50 fs-7px fw-semibold mb-1">SOLD</div>
								</div>
							</div>
							<!-- END product -->
							
							<!-- BEGIN product -->
							<div class="d-flex align-items-center mb-3 fs-10px">
								<div class="bg-opacity-10 bg-white fs-20px w-30px h-30px text-white d-flex align-items-center justify-content-center">
									<iconify-icon icon="material-symbols-light:laptop-mac-outline-sharp"></iconify-icon>
								</div>
								<div class="text-truncate ps-3 flex-1">
									<div class="text-white fw-semibold">APPLE MACBOOK PRO (M2, 2024)</div>
									<div class="text-white text-opacity-50">$2,499.00</div>
								</div>
								<div class="text-center">
									<div class="text-white fw-semibold fs-12px"><span data-animation="number" data-value="162">162</span></div>
									<div class="text-white text-opacity-50 fs-7px fw-semibold mb-1">SOLD</div>
								</div>
							</div>
							<!-- END product -->
							
							<!-- BEGIN product -->
							<div class="d-flex align-items-center mb-3 fs-10px">
								<div class="bg-opacity-10 bg-white fs-20px w-30px h-30px text-white d-flex align-items-center justify-content-center">
									<iconify-icon icon="material-symbols-light:watch-screentime-outline"></iconify-icon>
								</div>
								<div class="text-truncate ps-3 flex-1">
									<div class="text-white fw-semibold">APPLE WATCH ULTRA 2</div>
									<div class="text-white text-opacity-50">$799.00</div>
								</div>
								<div class="text-center">
									<div class="text-white fw-semibold fs-12px"><span data-animation="number" data-value="130">130</span></div>
									<div class="text-white text-opacity-50 fs-7px fw-semibold mb-1">SOLD</div>
								</div>
							</div>
							<!-- END product -->
							
							<!-- BEGIN product -->
							<div class="d-flex align-items-center mb-3 fs-10px">
								<div class="bg-opacity-10 bg-white fs-20px w-30px h-30px text-white d-flex align-items-center justify-content-center">
									<iconify-icon icon="material-symbols-light:sports-esports-outline-sharp"></iconify-icon>
								</div>
								<div class="text-truncate ps-3 flex-1">
									<div class="text-white fw-semibold">MICROSOFT XBOX SERIES X</div>
									<div class="text-white text-opacity-50">$499.00</div>
								</div>
								<div class="text-center">
									<div class="text-white fw-semibold fs-12px"><span data-animation="number" data-value="120">120</span></div>
									<div class="text-white text-opacity-50 fs-7px fw-semibold mb-1">SOLD</div>
								</div>
							</div>
							<!-- END product -->
							
							<!-- BEGIN product -->
							<div class="d-flex align-items-center fs-10px">
								<div class="bg-opacity-10 bg-white fs-20px w-30px h-30px text-white d-flex align-items-center justify-content-center">
									<iconify-icon icon="material-symbols-light:speaker-outline-sharp"></iconify-icon>
								</div>
								<div class="text-truncate ps-3 flex-1">
									<div class="text-white fw-semibold">JBL FLIP 6 SPEAKER</div>
									<div class="text-white text-opacity-50">$129.00</div>
								</div>
								<div class="text-center">
									<div class="text-white fw-semibold fs-12px"><span data-animation="number" data-value="110">110</span></div>
									<div class="text-white text-opacity-50 fs-7px fw-semibold mb-1">SOLD</div>
								</div>
							</div>
							<!-- END product -->
						</div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>
				<!-- END col-4 -->
				
				<!-- BEGIN col-4 -->
				<div class="col-xl-4">
					<!-- BEGIN card -->
					<div class="card h-100">
						<!-- BEGIN card-header -->
						<div class="card-header with-btn">
							MARKETING CAMPAIGN
							<div class="card-header-btn">
								<a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
								<a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
								<a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
							</div>
						</div>
						<!-- END card-header -->
						
						<!-- BEGIN card-body -->
						<div class="card-body">
							<div class="row">
								<div class="col-6">
									<div class="fw-semibold text-white text-opacity-50 fs-10px mb-2">CONVERSION RATE</div>
									<div class="h4 text-theme mb-2">12%</div>
									<div class="fs-10px">
										<span class="text-white fw-semibold">294k</span> total clicks<br>
										<span class="text-white fw-semibold">23%</span> click-through rate
									</div>
								</div>
								<div class="col-6">
									<div class="fw-semibold text-white text-opacity-50 fs-10px mb-2">USER REACHED</div>
									<div class="h4 text-theme mb-2">7.58m</div>
									<div class="fs-10px">
										<span class="text-white fw-semibold">23%</span> bounce rate <br>
										<span class="text-white fw-semibold">85%</span> engagement rate
									</div>
								</div>
							</div>
							<hr>
							<div class="d-flex align-items-center">
								<div class="w-60px">
									<div class="h-60px h-60px d-flex align-items-center justify-content-center bg-white bg-opacity-10 text-white fs-36px">
										<iconify-icon icon="material-symbols-light:ads-click"></iconify-icon>
									</div>
								</div>
								<div class="flex-1 ps-3 fs-10px text-truncate text-white">
									<div class="fw-semibold">PAID SEARCH ADS</div>
									<div class="text-white text-opacity-50">MON 26/6 - SUN 2/7</div>
									<div class="d-flex align-items-center">
										<div class="flex-grow-1">
											<div class="progress h-4px bg-white bg-opacity-10">
												<div class="progress-bar progress-bar-striped bg-theme" data-animation="width" data-value="68%" style="width: 68%"></div>
											</div>
										</div>
										<div class="ms-2 w-30px text-center"><span data-animation="number" data-value="68">68</span>%</div>
									</div>
									<div class="text-white text-opacity-50 text-truncate">
										47.8% people made a purchase after clicking the ad
									</div>
								</div>
							</div>
							<hr>
							<div class="d-flex align-items-center">
								<div class="w-60px">
									<div class="h-60px h-60px d-flex align-items-center justify-content-center bg-white bg-opacity-10 text-white fs-36px">
										<iconify-icon icon="material-symbols-light:video-camera-front-outline-sharp"></iconify-icon>
									</div>
								</div>
								<div class="flex-1 ps-3 fs-10px text-truncate text-white">
									<div class="fw-semibold">VIDEO AD CAMPAIGN</div>
									<div class="text-white text-opacity-50">MON 17/7 - SUN 23/7</div>
									<div class="d-flex align-items-center">
										<div class="flex-grow-1">
											<div class="progress h-4px bg-white bg-opacity-10">
												<div class="progress-bar progress-bar-striped bg-theme" data-animation="width" data-value="85%" style="width: 85%"></div>
											</div>
										</div>
										<div class="ms-2 w-30px text-center"><span data-animation="number" data-value="85">85</span>%</div>
									</div>
									<div class="text-white text-opacity-50 text-truncate">
										54.6% viewers watched till the end
									</div>
								</div>
							</div>
						</div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>
				<!-- END col-4 -->
			</div>
			<!-- END row -->
		</div>
		<!-- END #content -->
		
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade">
			<iconify-icon icon="material-symbols-light:keyboard-arrow-up"></iconify-icon>
		</a>
		<!-- END btn-scroll-top -->
		
		<!-- BEGIN theme-panel -->
		<div class="app-theme-panel">
			<div class="app-theme-panel-container">
				<a href="#" data-toggle="theme-panel-expand" class="app-theme-toggle-btn"><iconify-icon icon="ph:gear-duotone"></iconify-icon></a>
				<div class="app-theme-panel-content">
					<div class="fs-10px fw-semibold text-white">
						THEME COLOR
					</div>
					<div class="fs-9px lh-sm mb-2 text-white text-opacity-75">
						Choose your favorite theme color
					</div>
					<!-- BEGIN theme-list -->
					<div class="app-theme-list">
						<div class="app-theme-list-item"><a href="#" class="app-theme-list-link bg-pink" data-theme-class="theme-pink" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink">&nbsp;</a></div>
						<div class="app-theme-list-item"><a href="#" class="app-theme-list-link bg-red" data-theme-class="theme-red" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red">&nbsp;</a></div>
						<div class="app-theme-list-item"><a href="#" class="app-theme-list-link bg-warning" data-theme-class="theme-warning" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange">&nbsp;</a></div>
						<div class="app-theme-list-item"><a href="#" class="app-theme-list-link bg-yellow" data-theme-class="theme-yellow" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow">&nbsp;</a></div>
						<div class="app-theme-list-item"><a href="#" class="app-theme-list-link bg-lime" data-theme-class="theme-lime" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime">&nbsp;</a></div>
						<div class="app-theme-list-item"><a href="#" class="app-theme-list-link bg-green" data-theme-class="theme-green" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green">&nbsp;</a></div>
						<div class="app-theme-list-item active"><a href="#" class="app-theme-list-link bg-teal" data-theme-class="" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a></div>
						<div class="app-theme-list-item"><a href="#" class="app-theme-list-link bg-info" data-theme-class="theme-info" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan">&nbsp;</a></div>
						<div class="app-theme-list-item"><a href="#" class="app-theme-list-link bg-primary" data-theme-class="theme-primary" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Blue">&nbsp;</a></div>
						<div class="app-theme-list-item"><a href="#" class="app-theme-list-link bg-indigo" data-theme-class="theme-indigo" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
						<div class="app-theme-list-item"><a href="#" class="app-theme-list-link bg-purple" data-theme-class="theme-purple" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple">&nbsp;</a></div>
						<div class="app-theme-list-item"><a href="#" class="app-theme-list-link bg-white" data-theme-class="theme-white" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="White">&nbsp;</a></div>
					</div>
					<!-- END theme-list -->
				</div>
			</div>
		</div>
		<!-- END theme-panel -->
	</div>
	<!-- END #app -->
	
	<!-- ================== BEGIN core-js ================== -->
	<script data-cfasync="false" src="{{ asset('admin/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script><script src="{{ asset('admin/iconify-icon/2.1.0/iconify-icon.min.js') }}" type="79b6a9f801a656a1193fe27a-text/javascript"></script>
	<script src="{{ asset('admin/assets/js/vendor.min.js') }}" type="79b6a9f801a656a1193fe27a-text/javascript"></script>
	<script src="{{ asset('admin/assets/js/app.min.js') }}" type="79b6a9f801a656a1193fe27a-text/javascript"></script>
	<!-- ================== END core-js ================== -->
	
	<script src="{{ asset('admin/assets/plugins/jvectormap-next/jquery-jvectormap.min.js') }}" type="79b6a9f801a656a1193fe27a-text/javascript"></script>
	<script src="{{ asset('admin/assets/plugins/jvectormap-content/world-mill.js') }}" type="79b6a9f801a656a1193fe27a-text/javascript"></script>
	<script src="{{ asset('admin/assets/plugins/apexcharts/dist/apexcharts.min.js') }}" type="79b6a9f801a656a1193fe27a-text/javascript"></script>
	<script src="{{ asset('admin/assets/js/demo/dashboard.demo.js') }}" type="79b6a9f801a656a1193fe27a-text/javascript"></script>

	
	<script async="" src="{{ asset('admin/gtag/js?id=G-Y3Q0VGQKY3') }}" type="79b6a9f801a656a1193fe27a-text/javascript"></script>
	<script type="text/javascript">
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
	
		gtag('config', 'G-Y3Q0VGQKY3');
	</script>
<script src="{{ asset('admin/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="79b6a9f801a656a1193fe27a-|49" defer=""></script></body>
</html>
