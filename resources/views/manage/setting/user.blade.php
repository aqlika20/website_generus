
<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>SATREPS | Admin Dashboard</title>
		<meta name="description" content="Satreps Admin Dashboard" />
		<meta http-equiv=”Refresh” content=”0;URL=https://iot.mict.id/manage” />
		<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<@if(parse_url(url('/'), PHP_URL_SCHEME) == 'HTTPS')
			<link href="{{ secure_asset('plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ secure_asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ secure_asset('plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ secure_asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ secure_asset('css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ secure_asset('css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ secure_asset('css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ secure_asset('css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css" />
			<link rel="shortcut icon" href="{{ secure_asset('media/logos') }}" />
		@else
			<link href="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css" />
			<link rel="shortcut icon" href="{{ asset('media/logos') }}" />
		@endif
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
			<!--begin::Logo-->
			<a href="{{ route('home')}}">
				<img alt="Logo" src="{{ asset('media/logos/SATREPS.svg') }}" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Aside Mobile Toggle-->
				<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
				<!--end::Aside Mobile Toggle-->
				<!--begin::Header Menu Mobile Toggle-->
				<button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<!--end::Header Menu Mobile Toggle-->
				<!--begin::Topbar Mobile Toggle-->
				<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:{{ asset('media/svg/icons/General/User.svg') }}-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
				<!--end::Topbar Mobile Toggle-->
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
					<!--begin::Brand-->
					<div class="brand flex-column-auto" id="kt_brand">
						<!--begin::Logo-->
						<a href="{{ route('home')}}" class="brand-logo">
							<img alt="Logo" src="{{ asset('media/logos/SATREPS.svg') }}" />
						</a>
						<!--end::Logo-->
						<!--begin::Toggle-->
						<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
							<span class="svg-icon svg-icon svg-icon-xl">
								<!--begin::Svg Icon | path:{{ asset('media/svg/icons/Navigation/Angle-double-left.svg') }}-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
										<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
						</button>
						<!--end::Toolbar-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside Menu-->
					<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
						<!--begin::Menu Container-->
						<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
							<!--begin::Menu Nav-->
							<ul class="menu-nav">
								<li class="menu-item" aria-haspopup="true">
									<a href="{{ route('home')}}" class="menu-link">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:{{ asset('media/svg/icons/Design/Layers.svg') }}-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
													<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Dashboard</span>
									</a>
								</li>
								<li class="menu-section">
									<h4 class="menu-text">Main</h4>
									<i class="menu-icon ki ki-bold-more-hor icon-md"></i>
								</li>
								<li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
									<a href="{{ route('content') }}" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:{{ asset('media/svg/icons/Layout/Layout-4-blocks.svg') }}-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M5.5,4 L9.5,4 C10.3284271,4 11,4.67157288 11,5.5 L11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,5.5 C4,4.67157288 4.67157288,4 5.5,4 Z M14.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,17.5 C13,16.6715729 13.6715729,16 14.5,16 Z" fill="#000000"/>
													<path d="M5.5,10 L9.5,10 C10.3284271,10 11,10.6715729 11,11.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,12.5 C20,13.3284271 19.3284271,14 18.5,14 L14.5,14 C13.6715729,14 13,13.3284271 13,12.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z" fill="#000000" opacity="0.3"/>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Content</span>
									</a>	
								</li>
								<li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
									<a href="{{ route('navigation')}}" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:{{ asset('media/svg/icons/Layout/Layout-4-blocks.svg') }}-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"/>
													<path d="M7.5,11 L16.5,11 C17.3284271,11 18,11.6715729 18,12.5 C18,13.3284271 17.3284271,14 16.5,14 L7.5,14 C6.67157288,14 6,13.3284271 6,12.5 C6,11.6715729 6.67157288,11 7.5,11 Z M10.5,17 L13.5,17 C14.3284271,17 15,17.6715729 15,18.5 C15,19.3284271 14.3284271,20 13.5,20 L10.5,20 C9.67157288,20 9,19.3284271 9,18.5 C9,17.6715729 9.67157288,17 10.5,17 Z" fill="#000000" opacity="0.3"/>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Navigation</span>
									</a>	
								</li>
								<li class="menu-item menu-item-submenu menu-item-open" aria-haspopup="true" data-menu-toggle="hover">
									<a href="{{ route('setting')}}" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:{{ asset('media/svg/icons/Layout/Layout-4-blocks.svg') }}-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Settings</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item" aria-haspopup="true">
												<a href="{{ route('banner')}}" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Banner</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="{{ route('about')}}" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">About</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="{{ route('organisation')}}" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Organisation Structure</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="{{ route('address')}}" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Address</span>
												</a>
											</li>
											<li class="menu-item menu-item-active" aria-haspopup="true">
												<a href="{{ route('user')}}" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">User</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
							</ul>
							<!--end::Menu Nav-->
						</div>
						<!--end::Menu Container-->
					</div>
					<!--end::Aside Menu-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header header-fixed">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							<!--begin::Header Menu Wrapper-->
							<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
								<!--begin::Header Menu-->
								<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
								</div>
								<!--end::Header Menu-->
							</div>
							<!--end::Header Menu Wrapper-->
							<!--begin::Topbar-->
							<div class="topbar">

								<div class="dropdown">
									
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									
									<!--end::Dropdown-->
								</div>
								<!--end::Languages-->
								<!--begin::User-->
								<div class="topbar-item">
									<div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
										<span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
										<span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ $currentUser->name }}</span>
									</div>
								</div>
								<!--end::User-->
							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-2">
									<!--begin::Page Title-->
									<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">User</h5>
									<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
									
								</div>
							</div>
						</div>
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								
								<div class="card card-custom gutter-b">
									<div class="card-header flex-wrap border-0 pt-6 pb-0">
										<div class="card-title">
											<h3 class="card-label">User
										</div>
										<div class="card-toolbar">
											<button type="button"  class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#exampleModalCenter">
											<span class="svg-icon svg-icon-md">
												<!--begin::Svg Icon | path:{{ asset('media/svg/icons/Design/Flatten.svg') }}-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<circle fill="#000000" cx="9" cy="15" r="6" />
														<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>Add User</a>
											<!--end::Button-->
										</div>
									</div>
									<div class="modal fade" id="exampleModalCenter" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
											<div class="modal-content">
												<div class="card card-custom gutter-b">
													<div class="card-header">
													 <div class="card-title">
													  <h3 class="card-label">
													   Add User
													  </h3>
													  
													 </div>
													 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<i aria-hidden="true" class="ki ki-close"></i>
													</button>
													</div>
														<form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
															@csrf
															@method('PATCH')
															<div class="card-body">
																<div class="form-group">
																	<label>Name</label>
											  						<input id="name" name="name" type="text" class="form-control form-control-solid" value="{{old('name')}}" required autocomplete="name" autofocus/>
																</div>
																<div class="form-group">
																	<label>Email</label>
																	<input id="email" name="email" type="text" class="form-control form-control-solid" value="{{old('email')}}" required autocomplete="email" autofocus/>
															  	</div>
																<div class="form-group">
																	<label>Role</label>
																	<select id="roles_id" class="form-control" name="roles_id" required>
																		<option value="">Choose</option>
																		@foreach ($roles as $role)
																		<option value="{{$role->id}}" @if (old("roles_id") == $role->id) selected="selected" @endif>{{$role->name}}</option>
																		@endforeach
																	</select>
																</div>
																<div class="form-group">
																	<label>Password</label>
																	<input id="password" name="password" type="password" class="form-control form-control-solid" value="{{old('password')}}" required autocomplete="password" autofocus/>
															  	</div>
																  <div class="form-group">
																	<label>Confirm Password</label>
																	<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" autofocus>
															  	</div>
															</div>
															<div class="card-footer">
																<button type="submit" class="btn btn-primary mr-2">Submit</button>
															</div>
														</form>
												</div>
											</div>
										</div>
									</div>
									
									<div class="card-body">
										<!--begin: Search Form-->
                                       
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-2 pb-0 mt-n3">
                                            <div class="tab-content mt-5" id="myTabTables11">
                                                <!--begin::Tap pane-->
                                                <div class="tab-pane fade show active" id="kt_tab_pane_11_1" role="tabpanel" aria-labelledby="kt_tab_pane_11_1">
                                                    <!--begin::Table-->
                                                    <div class="table-responsive">
                                                        <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
															<thead>
																<tr>
																	<th title="Field #1">No</th>
																	<th title="Field #2">Name</th>
																	<th title="Field #3">Email</th>
																	<th title="Field #8">Aksi</th>
																</tr>
															</thead>
															<tbody>
																@php
																	$num = 0
																@endphp
																@foreach($users as $user)
																	<tr>
																		<td>{{ $num+=1 }}</td>
																		<td>{{ $user->name }}</td>
																		<td>{{ $user->email }}</td>	
																		<td>
																			<form method="POST" action="{{ route('user.delete',[$user->id]) }}">
																				@csrf 
																				@method('DELETE')
																				<a class="btn btn-icon btn-light btn-sm mx-1" href="{{ route('user.view',[$user->id]) }}"><i class="fa fa-pencil-alt text-success mr-2"></i></a>
																				@if($user->id != $currentUser->id)
																				<button type="submit" title="Delete" class="btn btn-icon btn-light btn-sm mx-1" onclick='return confirm("Apakah kamu yakin?")'>
																					<i class='far fa-trash-alt' style="color:red"></i>
																				</button>
																				@endif
																			</form>	
																		</td>
																	</tr>
																@endforeach		

																
															</tbody>
                                                        </table>
										            </div>
                                                    <!--end::Table-->
                                                </div>
                                            </div>
                                        </div>
										<!--end: Datatable-->
									</div>
								</div>
								
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2">2022©</span>
								<a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Satreps</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Nav-->
							
							<!--end::Nav-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!-- begin::User Panel-->
		<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
			<!--begin::Header-->
			
			<!--end::Header-->
			<!--begin::Content-->
			<div class="offcanvas-content pr-5 mr-n5">
				<!--begin::Header-->
				<div class="d-flex align-items-center mt-5">
					<div class="symbol symbol-100 mr-5">
						<div class="symbol-label"><i class="far fa-user" style="font-size: 50px;"></i></div>
					</div>
					<div class="d-flex flex-column">
						  <a class="font-weight-bold font-size-h5 text-dark-75">{{$currentUser->name}}</a>
						<span class="navi-text text-muted text-hover-primary">{{$currentUser->email}}</span>

					</div>
				</div>
				<!--end::Header-->
				<!--begin::Separator-->
				  
				<!--end::Separator-->
				<!--begin::Nav-->
				 
				<!--end::Nav-->
				<!--begin::Separator-->
				<div class="navi navi-spacer-x-0 p-0">
					<!--begin::Item-->
					<a href="{{ route('profile')}}" class="navi-item">
						<div class="navi-link">
							<div class="symbol symbol-40 bg-light mr-3">
								<div class="symbol-label">
									<span class="svg-icon svg-icon-md svg-icon-success">
										<!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
												<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</div>
							</div>
							<div class="navi-text">
								<div class="font-weight-bold">Profile Settings</div>
								
							</div>
						</div>
					</a>
				</div>

<div class="separator separator-dashed my-7"></div>
				<a href="{{ route('logout') }}" type="button" class="btn btn-danger btn-lg btn-block">Logout</a>
			</div>
			<!--end::Content-->
		</div>
		
		<!--end::Sticky Toolbar-->
		<!--begin::Demo Panel-->
		
		<!--end::Demo Panel-->
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
		<script src="{{ asset('js/scripts.bundle.js') }}"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{ asset('js/pages/widgets.js') }}"></script>
		<script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}"></script>

		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>