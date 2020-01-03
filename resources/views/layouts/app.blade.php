<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <title>
      @yield('title')
    </title>
  </head>
  <body>
  <nav class="navbar navbar-expand-sm ">
    <div class="container">
      <a href="/" class="navbar-brand">ToDos App</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="/todos" class="nav-link">Todos</a>
          </li>
          <li class="nav-item">
            <a href="/create" class="nav-link">Create</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    
  @yield('content')
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </body>
  
</html>