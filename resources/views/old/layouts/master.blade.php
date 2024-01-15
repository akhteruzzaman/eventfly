<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:image" content="">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>EventFly</title>
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('admin/images/favicon.png') }}">
	
	<link href="{{ asset('admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	
	<link href="{{ asset('admin/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/vendor/jvmap/jquery-jvectormap.css') }}" rel="stylesheet">
	<link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
	<link href="{{ asset('admin/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
	
	<!-- tagify-css -->
	<link href="{{ asset('admin/vendor/tagify/dist/tagify.css') }}" rel="stylesheet">
	
	<!-- Style css -->
   <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
	
</head>


<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black" data-headerbg="color_1">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
				<svg class="logo-abbr" width="39" height="23" viewBox="0 0 39 23" fill="none" xmlns="http://www.w3.org/2000/svg">
					
					<path class="react-w" d="M9.89261 21.4094L0 2.80536H4.86354C5.41354 2.80536 5.91795 3.11106 6.17246 3.59864L12.4032 15.5355C12.6333 15.9762 12.6261 16.5031 12.3842 16.9374L9.89261 21.4094Z" fill="white"/>
					<path class="react-w" d="M17.5705 21.4094L7.67786 2.80536H12.5372C13.0894 2.80536 13.5954 3.11351 13.8489 3.60412L20.302 16.0939L17.5705 21.4094Z" fill="white"/>
					<path class="react-w" d="M17.6443 21.4094L28.2751 0H23.4513C22.8806 0 22.361 0.328884 22.1168 0.844686L14.8271 16.2416L17.6443 21.4094Z" fill="white"/>
					<path class="react-w" d="M9.89261 21.4094L0 2.80536H4.86354C5.41354 2.80536 5.91795 3.11106 6.17246 3.59864L12.4032 15.5355C12.6333 15.9762 12.6261 16.5031 12.3842 16.9374L9.89261 21.4094Z" stroke="white"/>
					<path class="react-w" d="M17.5705 21.4094L7.67786 2.80536H12.5372C13.0894 2.80536 13.5954 3.11351 13.8489 3.60412L20.302 16.0939L17.5705 21.4094Z" stroke="white"/>
					<path class="react-w" d="M17.6443 21.4094L28.2751 0H23.4513C22.8806 0 22.361 0.328884 22.1168 0.844686L14.8271 16.2416L17.6443 21.4094Z" stroke="white"/>
				</svg>                
				EventFly
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		
		
		<!--**********************************
            Header start
        ***********************************-->
		<div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                       
                        
                    </div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
		  <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">


					<li><a href="{{ URL::tokenRoute('dashboard') }}" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M13.5096 2.53165H7.41104C5.50437 2.52432 3.94146 4.04415 3.89654 5.9499V15.7701C3.85437 17.7071 5.38979 19.3121 7.32671 19.3552C7.35512 19.3552 7.38262 19.3561 7.41104 19.3552H14.7343C16.6538 19.2773 18.1663 17.6915 18.1525 15.7701V7.36798L13.5096 2.53165Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M13.2688 2.52084V5.18742C13.2688 6.48909 14.3211 7.54417 15.6228 7.54784H18.1482" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M13.0974 14.0786H8.1474" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M11.2229 10.6388H8.14655" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>	
							<span class="nav-text">Dashboard</span>
						</a>
					</li>


					<li><a href="{{ URL::tokenRoute('events') }}" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M13.5096 2.53165H7.41104C5.50437 2.52432 3.94146 4.04415 3.89654 5.9499V15.7701C3.85437 17.7071 5.38979 19.3121 7.32671 19.3552C7.35512 19.3552 7.38262 19.3561 7.41104 19.3552H14.7343C16.6538 19.2773 18.1663 17.6915 18.1525 15.7701V7.36798L13.5096 2.53165Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M13.2688 2.52084V5.18742C13.2688 6.48909 14.3211 7.54417 15.6228 7.54784H18.1482" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M13.0974 14.0786H8.1474" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M11.2229 10.6388H8.14655" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>	
							<span class="nav-text">Events</span>
						</a>
					</li>


				</ul>
				<div class="help-desk">
					<a href="javascript:void(0)" class="btn btn-primary">Help Desk</a>
				</div>		
			</div>
        </div>		
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        @yield('contents')
		
        <!--**********************************
            Content body end
        ***********************************-->

		
		@include('section.add-event')

			
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
               <p>Copyright © Developed by <a href="https://pixiroom.com/" target="_blank">PixiRoom</a> 2024</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>






    <script src="{{ asset('admin/vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('admin/vendor/chart.js/Chart.bundle.min.js') }}"></script>
	<script src="{{ asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('admin/vendor/apexchart/apexchart.js') }}"></script>
	
	<!-- Dashboard 1 -->
	<script src="{{ asset('admin/js/dashboard/dashboard-1.js') }}"></script>
	<script src="{{ asset('admin/vendor/draggable/draggable.js') }}"></script>
	
	
	<!-- tagify -->
	<script src="{{ asset('admin/vendor/tagify/dist/tagify.js') }}"></script>
	 
	<script src="{{ asset('admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('admin/vendor/datatables/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('admin/vendor/datatables/js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('admin/vendor/datatables/js/jszip.min.js') }}"></script>
	<script src="{{ asset('admin/js/plugins-init/datatables.init.js') }}"></script>
   
	<!-- Apex Chart -->
	
	<script src="{{ asset('admin/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
	<script src="{{ asset('admin/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
	

	<!-- Vectormap -->
    <script src="{{ asset('admin/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jqvmap/js/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('admin/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('admin/js/custom.js') }}"></script>
	<script src="{{ asset('admin/js/deznav-init.js') }}"></script>
	
	@include('partials.scripts', ['_withAppBridge' => true])	
</body>
</html>
