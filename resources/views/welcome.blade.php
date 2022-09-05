<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

    <link href="//db.onlinewebfonts.com/c/154ebfcef3ca74b92a56a5826ee85d74?family=Sharp+Sans+No1+Bold" rel="stylesheet" type="text/css"/>


    <!-- FONTAWESOME CDN -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <!-- GENERAL STYLESHEET -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Project & Seminar Archival Mgt Sys</title>
</head>
<body>

<!-- NAVBAR SECTION STARTS HERE -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <h1 class="navbar-brand font-bold text-white " href="#">ProjectArch</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
        <li class="nav-item">
          <a class="nav-link text-white active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="#">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="#">Seminars</a>
        </li>
      </ul>
      <!-- register and login button wrapper -->
      <div>
        <a href="" class="">
            <button class="btn btn-primary">Register</button>
        </a>
        <a href="" class="ml-3 mt-2">
            <button class="btn btn-primary">Login</button>
        </a>
      </div>
    </div>
  </div>
</nav>

<!-- HEADER SECTION STARTS HERE -->
<header class="header-section container d-flex align-items-center justify-content-center flex-column">
  <h1 class="text-center text-white">Project and Seminar Management System <i class="fas fa-book-open-cover"></i></h1>
  <p class="mt-3 text-center text-white">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ducimus recusandae voluptatem, commodi odio optio rem, aperiam odit veniam saepe amet quam atque expedita officia nihil reiciendis? Provident cumque molestiae libero minima quasi corporis tempora error necessitatibus officiis, doloribus deleniti ipsum mollitia cum ex blanditiis illum architecto sequi aut impedit, voluptate atque alias magnam expedita ab? Eligendi facere et autem, sunt possimus minus ex, iure tempore nam fuga harum ut officiis cupiditate vel cum
  </p>
  <div class="mx-auto mt-3 col-8">
    <form>
    <div class="row">
      <div class="col-8">
        <input type="search" class="form-control p-2" placeholder="Search Projects / Seminars" aria-label="First name">
      </div>
      <div class="col-4">
        <button type="submit" class="btn btn-primary p-2 w-100">Search</button>
      </div>
    </div>
    </form>
  </div>

  <!-- <img src="{{ asset('img/data-archival.svg') }}" alt="" class="data-archival-img"> -->
</header>

<div class="svgs">
  <!-- <img src="{{ asset('img/data-archival.svg') }}" alt="" class=""> -->
  <!-- <img src="" alt="">
  <img src="" alt="">
  <img src="" alt="">
  <img src="" alt="">
  <img src="" alt=""> -->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>