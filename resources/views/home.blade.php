<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
  <script src="https://kit.fontawesome.com/41f82f04e1.js" crossorigin="anonymous"></script>
  {{-- <link href="resources/css/icons/webfonts/*" rel="stylesheet" /> --}}
  {{-- <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet" /> --}}

  @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>
<body>
    <div id="nav-icon1">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <br>
      <div id="nav-icon2">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
      @endif

      <br>
      <div id="nav-icon3">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <br>
      <div id="nav-icon4">
        <a href="{{ route('logout') }}">
          <i class="fa-solid fa-right-from-bracket fa-4x" style="color: #d3531a;"></i></body>
        </a>
      </div>
</html>