<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="generator" content="prameya v3.8.8, prameya.com">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{{url('assets/images/fav-icon.png')}}">
<link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin')}}">
<link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Montserrat:400,700')}}">
<link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i')}}">

<link rel="stylesheet" href="{{url('assets/bootstrap-material-design-font/css/material.css')}}">

<link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css')}}"><!-- for icon creation -->

<link rel="stylesheet" href="{{url('assets/et-line-font-plugin/style.css')}}">
<link rel="stylesheet" href="{{url('assets/tether/tether.min.css')}}">
<link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{url('assets/animate.css/animate.min.css')}}">
<link rel="stylesheet" href="{{url('assets/dropdown/css/style.css')}}">
<link rel="stylesheet" href="{{url('assets/theme/css/style.css')}}">
<link rel="stylesheet" href="{{url('assets/modified/css/mbr-additional.css')}}" type="text/css">

<link rel="stylesheet" href="{{url('assets/modified/css/main.css')}}" type="text/css">
<link  href="{{url('assets/modified/css/jquery.fancybox.min.css')}}" rel="stylesheet">
<script src='https://www.google.com/recaptcha/api.js'></script>
<meta name="theme-color" content="#a3490d">
@foreach($seodata as $show)
    <meta name="description" content="{{$show->description}}">
    <meta name="keyword" content="{{$show->meta_keyword}}">
    <title>{{$show->title}}</title>
@endforeach
