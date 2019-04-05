<!DOCTYPE HTML>

<html lang="en">
  
  <head>
    
    <meta charset="UTF-8" />
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>My Blog</title>
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" />
    
    <!-- Theme CSS -->
    <link href="{{ asset('css/clean-blog.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  
  <body>
    
    @yield('content')
    
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>
    
    <!-- Theme JavaScript -->
    <script src="{{ asset('js/clean-blog.min.js') }}"></script>
    
  </body>
  
</html>