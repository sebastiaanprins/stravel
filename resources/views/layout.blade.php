<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>sTravel</title>

{{-- DEFAULT for CSS; style not working when deployed --}}
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />

  <!-- BOOTSTRAP -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"> </script>

<style>
html, body {
  background-color: #eaeaea;
  color: #636b6f;
  font-family: 'Nunito', sans-serif;
  font-weight: 200;
  height: 100vh;
  margin: 0;
}
</style>

<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" />


</head>
<body>

  <div class="container">
{{-- Content --}}
    @yield('content')
  </div>
  
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
