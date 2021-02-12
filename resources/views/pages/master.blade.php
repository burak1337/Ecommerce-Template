<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>pomato @yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{'assets'}}/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{'assets'}}/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{'assets'}}/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="{{'assets'}}/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{'assets'}}/css/jquery.mCustomScrollbar.min.css">
    <link href={{URL::asset('assets/css/bootstrap.css')}} rel="stylesheet"/>
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="{{'assets'}}/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="{{'assets'}}/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{'assets'}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{'assets'}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{'assets'}}/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
@include('components.header')
<div id="mainBody">
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>
</div>
@include('components.footer')
</body>
