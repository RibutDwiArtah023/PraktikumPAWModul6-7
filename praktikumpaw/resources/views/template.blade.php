<!DOCTYPE html>
<html>
<head>
    <title>PRAKTIKUM PAW CRUD LARAVEL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Simple Siakad</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="/sisw">Data Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('sisw.create') }}">Input Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/about">About Me</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container ">
    @yield('content')

<!-- Footer -->
<footer class="fixed-bottom bg-dark">
      <div class="row small">
      <div class="col">
        <p class="text-center text-muted mt-2"> Universitas Trunojoyo Madura </p>
        
      </div>
      <div class="col">
        <p class="text-center text-muted mt-2"> Teknik Informatika </p>
      </div>
      <div class="col">
        <p class=" text-center text-muted mt-2"> Data Mahasiswa </p>
      </div>
      <div class="col">
        <p class="text-center text-muted mt-2 "> Website Praktikum PAW </p>
      </div>
    </div>
</footer>
<!-- Footer -->

</div>

</body>
</html>