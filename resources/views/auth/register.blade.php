<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Generusbatuaji | Admin Dashboard</title>
		<meta name="description" content="Login page example" />
		<meta http-equiv=”Refresh” content=”0;URL=https://iot.mict.id/manage” />
		<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		@if(parse_url(url('/'), PHP_URL_SCHEME) == 'HTTPS')
			<link href="{{ secure_asset('assets/css/pages/login/classic/login-4.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ secure_asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ secure_asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ secure_asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ secure_asset('assets/css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ secure_asset('assets/css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ secure_asset('assets/css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ secure_asset('assets/css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css" />
			<link rel="shortcut icon" href="{{ secure_asset('assets/media/logos/favicon.ico') }}" />

		@else
			<link href="{{ asset('css/pages/login/classic/login-4.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
			
			<link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css" />
			<link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}" />
		@endif

		<style>
			::-webkit-input-placeholder {
			color: white !important;
			}

			:-moz-placeholder { /* Firefox 18- */
			color: white !important;  
			}

			::-moz-placeholder {  /* Firefox 19+ */
			color: white !important;  
			}

			:-ms-input-placeholder {  
			color: white !important;  
			}

			.register{
				position: relative;
				padding-top: 30px

			}

		</style>
		
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
				<div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-color: #a2cbcd">
					<div class="login-form text-center p-7 position-relative overflow-hidden">
						<!--begin::Login Header-->
						<div class="d-flex flex-center mb-5">
							<a>
								<img src="{{ asset('media/logos/logo_login.png') }}" alt="" width="200px"/>
							</a>
						</div>
						<!--end::Login Header-->
						<!--begin::Login Sign in form-->
						<div class="login-signin">
							<form method="POST" action="{{ route('register.store') }}" enctype="multipart/form-data">
								@csrf
								@method('PATCH')
                                <div class="form-group row mt-20 mb-5">
                                    
                                    <div class="col text-md-left">
                                        <label for="name" style="color: white;">{{ __('Nama Lengkap') }}</label>
                                        <input class="form-control h-auto form-control-solid py-3 px-7 @error('name') is-invalid @enderror" style="background-color:white; color:#a2cbcd; border-width: 2pt; border-radius: 35px" id="name" type="text" name="name" required autocomplete="name" autofocus />
                                    </div>
                                    <div class="col text-md-left">
                                        <label for="username" style="color: white;">{{ __('Username') }}</label>
                                        <input class="form-control h-auto form-control-solid py-3 px-7 @error('username') is-invalid @enderror" style="background-color:white; color:#a2cbcd; border-width: 2pt; border-radius: 35px" id="username" type="text" name="username" required autocomplete="username" autofocus />
                                    </div>
								</div>

                                <div class="form-group row mb-3">
                                    <div class="col text-md-left">
                                        <label for="email" style="color: white;">{{ __('Email') }}</label>
                                        <input class="form-control h-auto form-control-solid py-3 px-7 @error('email') is-invalid @enderror" style="background-color:white; color:#a2cbcd; border-width: 2pt; border-radius: 35px" id="email" type="email" name="email" required autocomplete="email" autofocus />
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col text-md-left">
                                        <label for="password" style="color: white;">{{ __('Password') }}</label>
                                        <input class="form-control h-auto form-control-solid py-3 px-7 @error('password') is-invalid @enderror" style="background-color:white; color:#a2cbcd; border-width: 2pt; border-radius: 35px" id="password" type="password" name="password" required autocomplete="password" autofocus />
                                    </div>
                                </div>

								<input class="form-control h-auto form-control-solid py-3 px-7 @error('roles_id') is-invalid @enderror" id="roles_id" type="hidden" name="roles_id" value="2" />

                                <div class="form-group row mb-15">
                                    <div class="col text-md-left">
                                        <label for="password-confirm" style="color: white;">{{ __('Konfirmasi Password') }}</label>
                                        <input class="form-control h-auto form-control-solid py-3 px-7 @error('password_confirmation') is-invalid @enderror" style="background-color:white; color:#a2cbcd; border-width: 2pt; border-radius: 35px" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
                                    </div>
                                </div>

                                <button type="submit" class="btn font-weight-bold px-9 py-4" style="background-color: #83b7b7; color:white; font-weight: bold; border-radius: 25px; width:100% !important; font-size: 15pt;">
									{{ __('REGISTER') }}
								</button>
                            </form>

                        </div>
                        <!--end::Login Sign in form-->
                        <!--begin::Login Sign up form-->
                        
                        <!--end::Login Sign up form-->
                        <!--begin::Login forgot password form-->
                        <div class="login-forgot">
                            <div class="mb-20">
                                <h3>Forgotten Password ?</h3>
                                <div class="text-muted font-weight-bold">Enter your email to reset your password</div>
                            </div>
                            <form class="form" id="kt_login_forgot_form">
                                <div class="form-group mb-10">
                                    <input class="form-control form-control-solid h-auto py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" />
                                </div>
                                <div class="form-group d-flex flex-wrap flex-center mt-10">
                                    <button id="kt_login_forgot_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Request</button>
                                    <button id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
                                </div>
                            </form>
                        </div>
                        <!--end::Login forgot password form-->
                    </div>
                </div>
            </div>
            <!--end::Login-->
        </div>
        <!--end::Main-->
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
        <!--end::Global Config-->
        <!--begin::Global Theme Bundle(used by all pages)-->
        <script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>

        <script src="{{ asset('js/scripts.bundle.js') }}"></script>
        <!--end::Global Theme Bundle-->
        <!--begin::Page Scripts(used by this page)-->
        <script src="{{ asset('js/pages/custom/login/login-general.js') }}"></script>
        <!--end::Page Scripts-->
    </body>
    <!--end::Body-->
</html>