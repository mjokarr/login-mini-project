<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

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
        <span></span>
        <span></span>
        <span></span>
      </div>
</body>
</html>