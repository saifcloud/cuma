<!doctype html>
<html lang="en">

<head>
<title>:: HexaBit :: Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{ url('public/assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ url('public/assets/css/font-awesome.min.css') }}">

<link rel="stylesheet" href="{{ url('public/assets/css/plugin.css') }}"/>
<link rel="stylesheet" href="{{ url('public/assets/css/bootstrap-progressbar-3.3.4.min.css') }}">
<link rel="stylesheet" href="{{ url('public/assets/css/chartist.min.css') }}">
<link rel="stylesheet" href="{{ url('public/assets/css/chartist-plugin-tooltip.css') }}">
<link rel="stylesheet" href="{{ url('public/assets/css/toastr.min.css') }}">

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">


<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ url('public/assets/css/main.css') }}">
<link rel="stylesheet" href="{{ url('public/assets/css/color_skins.css') }}">
</head>
<body class="theme-orange">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="http://www.wrraptheme.com/templates/hexabit/html/assets/images/icon-light.svg" width="48" height="48" alt="HexaBit"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>