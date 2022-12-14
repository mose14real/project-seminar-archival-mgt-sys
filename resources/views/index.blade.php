<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- BOOTSTRAP CDN -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
      <!-- BOOTSTRAP ICONS CDN -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- FONTAWESOME LINK -->
      <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
      <!-- FAVICON -->
      <link rel="icon" href="{{ asset('img/archival.svg') }}">
      <!-- GENERAL STYLESHEET -->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <!-- GOOGLE FONTS -->
      <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap" rel="stylesheet">
      <title>Project & Seminar Archival Mgt Sys</title>
  </head>
  <body>
<!-- NAVBAR SECTION STARTS HERE -->
<nav class="navbar navbar-expand-lg" id="navigation-bar">
  <div class="container">
    <h1 class="navbar-brand font-bold text-white" href="{{ url('/') }}"><i class="bi bi-box-seam-fill"></i> ProjectArch</h1>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <!-- <span class="navbar-toggler-icon"></span> -->
      <li class="bi bi-list fs-1 text-white"></li>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
        <li class="nav-item">
          <a class="nav-link text-white active" aria-current="page" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="#projects">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="#projects">Seminars</a>
        </li>
      </ul>
      <!-- register and login button wrapper -->
      <div>
        <a href="{{ url('register') }}" class="">
            <button class="btn btn-block shadow-none register-btn">Register</button>
        </a>
        <a href="{{ url('login') }}" class="ms-3 mt-2">
            <button class="btn btn-block shadow-none login-btn">Login</button>
        </a>
      </div>
    </div>
  </div>
</nav>

<!-- HEADER SECTION STARTS HERE -->
<header class="header-section d-flex align-items-center justify-content-center flex-column" id="header">
  <div class="container">
    <h1 class="text-center header-text">Project and Seminar Management System <i class="fas fa-book-open-cover"></i></h1>
    <p class="mt-3 text-center text-white">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ducimus recusandae voluptatem, commodi odio optio rem, aperiam odit veniam saepe amet quam atque expedita officia nihil reiciendis? Provident cumque molestiae libero minima quasi corporis tempora error necessitatibus officiis, doloribus deleniti ipsum mollitia cum ex blanditiis illum architecto sequi aut impedit, voluptate atque alias magnam expedita ab? Eligendi facere et autem, sunt possimus minus ex, iure tempore nam fuga harum ut officiis cupiditate vel cum
    </p>
    <div class="mx-auto mt-3 col-8">
      <form>
      <div class="row">
        <div class="col-md-8 mb-3">
          <input type="search" class="form-control p-2" placeholder="Search Projects / Seminars" aria-label="First name">
        </div>
        <div class="col-md-4 mb-3">
          <button type="submit" class="btn btn-block p-2 w-100 search-btn">Search</button>
        </div>
      </div>
      </form>
    </div>
    

    <img src="{{ asset('img/data-archival.svg') }}" alt="" class="data-archival-img d-none d-sm-none d-md-block">
    <img src="{{ asset('img/data-archival.svg') }}" alt="" class="data-archival-img2 d-none d-sm-none d-md-block">
  </div>
</header>

<!-- PROJECT AND SEMINAR HERE -->
<div class="project-and-seminar-section bg-white" id="projects">
  <div class="container">
    <h2 class="text-center mt-5 deep-blue-color">Projects And Seminars</h2>
    <p class="text-center mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus laborum optio neque minima, asperiores assumenda repellat explicabo et aut sit earum atque cupiditate nam voluptatibus nisi, porro quae aliquam harum modi dolor? Voluptatum repellat tempore repudiandae praesentium error totam magnam dolorem debitis, molestiae explicabo cum id maiores vel unde nostrum ad, earum sit minus? Consequatur, voluptas officiis consequuntur quos illum error! Exercitationem, pariatur beatae qui dolore facilis voluptates unde nesciunt vitae quod sint, non animi ducimus libero nobis numquam eum laborum. Quo consequuntur dicta odio quos corrupti eveniet sequi architecto nihil tenetur excepturi alias rem ab laudantium, repellendus quia sed!</p>
    <div class="row">
      <!-- Ilustrations -->
      <div class="col-md-4 p-2">
        <img src="{{ asset('img/2.svg') }}" alt="" class="project-illustrations mt-5">
      </div>

      <!-- projects cards starts here -->
      <div class="col-md-4 p-2">
        <div class="card mt-5">
        <div class="card-header project-header">
          <h4 class="text-white">Projects</h4>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <a href="#">online exam project in PHP</a>
          </li>
          <li class="list-group-item">
            <a href="#">PSimple Furniture Website Single Page Template</a>
          </li>
          <li class="list-group-item">
            <a href="#">Android Firebase Attendance System template in kotlin</a>
          </li>
          <li class="list-group-item">
            <a href="#">Watch Trailer Responsive Website template in WEB</a>
          </li>
          <li class="list-group-item">
            <a href="#">online exam project in PHP</a>
          </li>
        </ul>
        </div>
      </div>

      <!-- Seminars cards starts here -->
      <div class="col-md-4 p-2">
        <div class="card mt-5">
        <div class="card-header seminar-header">
          <h4 class="text-white">Seminars</h4>
        </div>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <a href="#">eCommerce Website project in PHP</a>
          </li>
          <li class="list-group-item">
            <a href="#">Online Shopping Store project in PHP</a>
          </li>
          <li class="list-group-item">
            <a href="#">House Decor template in HTML CSS</a>
          </li>
          <li class="list-group-item">
            <a href="#">Online Shopping Store project in PHP</a>
          </li>
          <li class="list-group-item">
            <a href="#">Watch Trailer Responsive Website template in WEB</a>
          </li>
          <li class="list-group-item">
            <a href="#">online exam project in PHP</a>
          </li>
        </ul>
        </div>
      </div>
    </div>

    </div>
  </div>
</div>

<!-- PROJECTS -->
<div class="projects" id="project-seminar-list">
  <div class="container">
  <h2 class="text-center mb-3 mt-5 deep-blue-color">Projects And Seminars Lists</h2>
  <div class="row">
  <!-- project card starts here -->
  <div class="col-md-4 mb-3">
    <div class="card project-main-card">
      <div class="card-body">
        <span class="badge text-bg-primary mb-2 font-poppins">project <i class="bi bi-book-fill"></i></span>
        <h5 class="card-title">
          <a href="#">Control Management system in Javascript</a>
        </h5>
        <p class="card-text">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis optio ipsam obcaecati doloribus officiis, nesciunt eum laborum nostrum error consectetur?
        </p>
        <div class="row mb-3">
          <div class="col">
            <a href="#">
              <i class="bi bi-person-circle fs-6"></i> <span class="ml-2 fs-6">Ariyibi</span>
            </a>
          </div>
          <div class="col">
            <i class="bi bi-alarm-fill fs-6"></i> <span class="ml-2 fs-6">2022-09-05</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ends here -->

  <!-- project card starts here -->
  <div class="col-md-4 mb-3">
    <div class="card project-main-card">
      <div class="card-body">
        <span class="badge text-bg-primary mb-2 font-poppins">seminar <i class="bi bi-book-fill"></i></span>
        <h5 class="card-title">
          <a href="#">Simple Furniture Website Single Page Template in HTML and CSS</a>
        </h5>
        <p class="card-text">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis optio ipsam obcaecati doloribus officiis, nesciunt eum laborum nostrum error consectetur?
        </p>
        <div class="row mb-3">
          <div class="col">
            <a href="#">
              <i class="bi bi-person-circle fs-6"></i> <span class="ml-2 fs-6">Ariyibi</span>
            </a>
          </div>
          <div class="col">
            <i class="bi bi-alarm-fill fs-6"></i> <span class="ml-2 fs-6">2022-09-05</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ends here -->

  <!-- project card starts here -->
  <div class="col-md-4 mb-3">
    <div class="card project-main-card">
      <div class="card-body">
        <span class="badge text-bg-primary mb-2 font-poppins">project <i class="bi bi-book-fill"></i></span>
        <h5 class="card-title">
          <a href="#">Android Firebase Attendance System template in kotlin</a>
        </h5>
        <p class="card-text">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis optio ipsam obcaecati doloribus officiis, nesciunt eum laborum nostrum error consectetur?
        </p>
        <div class="row mb-3">
          <div class="col">
            <a href="#">
              <i class="bi bi-person-circle fs-6"></i> <span class="ml-2 fs-6">Ariyibi</span>
            </a>
          </div>
          <div class="col">
            <i class="bi bi-alarm-fill fs-6"></i> <span class="ml-2 fs-6">2022-09-05</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ends here -->

  <!-- project card starts here -->
  <div class="col-md-4 mb-3">
    <div class="card project-main-card">
      <div class="card-body">
        <span class="badge text-bg-primary mb-2 font-poppins">seminar <i class="bi bi-book-fill"></i></span>
        <h5 class="card-title">
          <a href="#">Online Shopping Store project in PHP</a>
        </h5>
        <p class="card-text">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis optio ipsam obcaecati doloribus officiis, nesciunt eum laborum nostrum error consectetur?
        </p>
        <div class="row mb-3">
          <div class="col">
            <a href="#">
              <i class="bi bi-person-circle fs-6"></i> <span class="ml-2 fs-6">Ariyibi</span>
            </a>
          </div>
          <div class="col">
            <i class="bi bi-alarm-fill fs-6"></i> <span class="ml-2 fs-6">2022-09-05</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ends here -->
</div>
  </div>
</div>
<!-- FOOTER SECTION -->
<footer class="mt-5">
  <div class="container">
    <div class="row">
        <!-- ProjectArch -->
        <div class="col-md-6 p-3 mb-3">
          <a href="#navigation-bar">
            <h4 class="text-white mt-3"><i class="bi bi-box-seam-fill"></i> ProjectArch</h4>
          </a>
          <p class="text-white mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui atque et, ipsum laboriosam, voluptatibus consequatur distinctio suscipit recusandae cupiditate quam voluptatem eius animi
          </p>
        </div>

        <!-- quick links -->
        <div class="col-md-3 p-3 mb-3">
          <h5 class="text-white mt-3">Quick Links</h5>
          <ul>
            <li class="mt-3">
              <i class="bi bi-chevron-right text-white"></i> <a href="{{ url('/') }}
              " class="text-white quick-links">Home</a>
            </li>
            <li class="mt-2">
              <i class="bi bi-chevron-right text-white"></i> <a href="#projects" class="text-white quick-links">Projects</a>
            </li>
            <li class="mt-2">
              <i class="bi bi-chevron-right text-white"></i> <a href="#seminars" class="text-white quick-links">Seminars</a>
            </li>
            <li class="mt-2">
              <i class="bi bi-chevron-right text-white"></i> <a href="{{ url('register') }}" class="text-white quick-links">Register</a>
            </li>
            <li class="mt-2">
              <i class="bi bi-chevron-right text-white"></i> <a href="{{ url('login') }}" class="text-white quick-links">Login</a>
            </li>
          </ul>
        </div>

        <!-- social links -->
        <div class="col-md-3 p-3 mb-3">
          <h5 class="text-white mt-3">Social Links</h5>

          <a href="#" class="text-white social-links">
            <i class="bi bi-facebook fs-4 mt-3"></i>
          </a>

          <a href="#" class="fs-4 ms-3 mt-3 text-white social-links">
            <i class="bi bi-twitter"></i>
          </a>

          <a href="#" class="fs-4 ms-3 mt-3 text-white social-links">
            <i class="bi bi-linkedin"></i>
          </a>

          <a href="#" class="fs-4 ms-3 mt-3 text-white social-links">
            <i class="bi bi-instagram"></i>
          </a>

        </div>

    </div>
  </div>
  <div class="col-12 p-2 footer-bottom">
    <p class="text-center text-white">Created with ??? By <a href="#" class="dev-opt">Developer</a> &copy; CopyRight Reserved 2022</p>
  </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>