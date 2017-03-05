<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Title') | Travipca </title>
	 <!-- Bootstrap Core CSS -->
    <link href="{{ asset('sbadmin/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('sbadmin/css/sb-admin.css') }}" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="{{ asset('sbadmin/css/plugins/morris.css') }}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{ asset('sbadmin/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
</head>
<body>

<div id="wrapper">

	@include('template.nav')

	<div id="page-wrapper">	
		@yield('content')
	</div>

	@include('template.footer')
</div>

</body>
	<script src="{{ asset('sbadmin/js/jquery.js') }}"></script>
	<script src="{{ asset('sbadmin/js/bootstrap.js') }}"></script>
	<!-- Morris Charts JavaScript -->
    <script src="{{ asset('sbadmin/js/plugins/morris/raphael.min.js') }}"></script>
    <script src="{{ asset('sbadmin/js/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('sbadmin/js/plugins/morris/morris-data.js') }}"></script>
</html>