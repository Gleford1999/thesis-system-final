<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CDSGA TOR Generator</title>
  
  <!-- links -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  @include('layouts.navigation')
      <!-- scripts -->
      <script src="./node_modules/dist/js/index.min.js"></script>
      <script src="./node_modules/flowbite/dist/flowbite.js"></script>

  @yield('content')
  
  
  @if (session()->has('success'))
    <div >
      <p> {{ session('success') }} </p>
    </div>
  @endif

</body>
</html>