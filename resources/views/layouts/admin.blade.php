<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

	<!-- plugins:css -->
	<link rel="stylesheet" href="{{asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendors/css/vendor.bundle.base.css')}}">
	<!-- endinject -->
	<!-- plugin css for this page -->
	{{-- <link rel="stylesheet" href="{{asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}"> --}}
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
	<!-- endinject -->
	<link rel="shortcut icon" href="{{asset('admin/images/favicon.ico')}}" />
    
    @livewireStyles
</head>
<body>
	<div class="container-scroller">
		@include('layouts.inc.admin.navbar')
		<!-- partial -->
		<div class="container-fluid page-body-wrapper"> 
			@include('layouts.inc.admin.sidebar')

			      <!-- partial -->
				  <div class="main-panel">
					<div class="content-wrapper">
						@yield('content')
					</div>
				  </div>
			
		</div>
	</div>


@livewireScripts
	<!-- plugins:js -->
	<script src="vendors/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page-->
	<script src="vendors/chart.js/chart.umd.js"></script>
	<script src="vendors/datatables.net/jquery.dataTables.js"></script>
	<script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
	<!-- End plugin js for this page-->
	<!-- inject:js -->
	<script src="js/off-canvas.js"></script>
	<script src="js/hoverable-collapse.js"></script>
	<script src="js/template.js"></script>
	<script src="js/settings.js"></script>
	<script src="js/todolist.js"></script>
	<!-- endinject -->
	<!-- Custom js for this page-->
	<script src="js/dashboard.js"></script>
		<script src="js/proBanner.js"></script>

	<!-- End custom js for this page-->
	<script src="js/jquery.cookie.js" type="text/javascript"></script>
	</body>
</html>