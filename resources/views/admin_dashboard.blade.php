<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anglo Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('admin/assets/images/favicon.ico')}}" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    @livewireStyles
</head>
<body>
@include('livewire.admin-panel.sidebar')
@include('livewire.admin-panel.navbar')

<div class="pcoded-main-container">
	<div class="pcoded-content">
    {{ $slot }}
		<!-- [ Main Content ] end -->
	</div>
</div>
    @livewireScripts
     <!-- Required Js -->
     <script src="{{asset('admin/assets/js/vendor-all.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/pcoded.min.js')}}"></script>

    <!-- Apex Chart -->
    <script src="{{asset('admin/assets/js/plugins/apexcharts.min.js')}}"></script>


    <!-- custom-chart js -->
    <script src="{{asset('admin/assets/js/pages/dashboard-main.js')}}"></script>
</body>
</html>