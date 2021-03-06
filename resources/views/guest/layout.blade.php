<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link href="{{URL::asset('http://fonts.googleapis.com/css?family=Open+Sans')}}" rel='stylesheet' type='text/css'>

    <title>Warung KRDE</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{url('css/font-awesome.min.css')}}" rel="stylesheet" >

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  	<!-- Top menu -->
	@include('guest.partials.header')
	@include('guest.partials.content')
  	<script src="{{URL::asset('//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js')}}"></script>
  	<script type="text/javascript" src="{{url('assets/js/bootstrap.min.js')}}"></script>
  	<script src="{{url('js/script.js')}}"></script>
  </body>
