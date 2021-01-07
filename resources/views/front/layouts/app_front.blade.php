<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="<?php echo url('/')?>/front/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo url('/')?>/front/css/custom.css">
      <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <title>Yerazel</title>
   </head>

    <script>

          var site_url="{{url('/')}}";
          var _token = "{{ csrf_token() }}";

    </script>


    <body id="root">
        <div id="app">
            @include('_partials.header');
            <div id="main">
                @yield('content')
            </div>
            @include('_partials.footer');
        </div>
    </body>
</html>
