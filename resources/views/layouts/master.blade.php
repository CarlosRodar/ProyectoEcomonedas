
<!DOCTYPE html>
<html lang="en">

<head>
  @csrf
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eco-Monedas</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
   <link rel="stylesheet" href="{{ asset('./css/font-awesome.min.css') }}">
   <link rel="stylesheet" href="{{ asset('./css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('./css/style.css') }}">
   <link rel="stylesheet" href="{{ asset('./css/imagehover.min.css') }}">


</head>

<body>
    @csrf
  <script src="{{ asset('./js/jquery.min.js') }}"></script>
  <script src="{{ asset('./js/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('./js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('./js/custom.js') }}"></script>
  <script src="{{ asset('./contactform/contactform.js') }}"></script>

    @include('partials.header')
    @yield('contenido')
</body>

  </html>
