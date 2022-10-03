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
    <title>Register | Project & Seminar Archival Mgt Sys</title>
</head>
<body>
<!-- REGISTRATION SECTION STARTS HERE -->
<div class="registration-section">
  <div class="row">
    <!-- content register section starts here -->
    <div class="col-md-6 content-register">
      <div class="overlay pt-4">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Register</li>
          </ol>
        </nav>
        <div class="">
          <svg xmlns="http://www.w3.org/2000/svg" class="mt-5" width="220" height="220" fill="#fff" class="bi bi-box-seam-fill" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z"/></svg>
        </div>
        <h2 class="mt-3 text-white">ProjectArch</h2>
        <p class="text-white">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus, enim tempore facere iure voluptas minus expedita inventore odio! Facilis asperiores voluptatibus quos? Consequuntur aspernatur delectus veniam debitis? Ex esse magnam iure, beatae, totam vitae provident maiores reprehenderit perspiciatis eius expedita quod? Cum velit accusantium sequi unde 
        </p>
        <a href="{{ url('/') }}">
          <button class="btn btn-block shadow-none mb-3 explore-project-btn">Explore More projects &nbsp;<i class="bi bi-arrow-right"></i></button>
        </a>
      </div>
    </div>

    <!-- form register section starts here -->
    <div class="col-md-6 pt-4 form-register">
      <h4 class="deep-blue-color">Registration</h4>
      <form class="mt-3">
        <div class="col-12 mb-3">
          <input type="text" class="form-control" placeholder="Full Name" aria-label="First name">
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" placeholder="Matric Number" aria-label="First name">
          </div>
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" placeholder="Phone Number" aria-label="Last name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" placeholder="Supervisor" aria-label="First name">
          </div>
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" placeholder="Session i.e 2021/2022" aria-label="Last name">
          </div>
        </div>
        <div class="col-12 mb-3">
          <select class="form-select form-select-md mb-3 project-type" aria-label=".form-select-lg example">
            <option>-- Select Project Type --</option>
            <option value="individual">Individual</option>
            <option value="group">Group</option>
          </select>
        </div>
        <div class="mb-3 d-none group-details">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="add group matric numbers..."></textarea>
        </div>
        <div class="col-12 mb-3">
          <input type="text" class="form-control" placeholder="Project Topic" aria-label="First name">
        </div>
        <div class="col-12 mb-3">
          <input type="text" class="form-control" placeholder="Seminar Topic" aria-label="First name">
        </div>
        <div class="col-12 mb-3">
          <input type="password" class="form-control" placeholder="Password" aria-label="First name">
        </div>
        <div class="col-12 mb-3">
          <button type="submit" class="btn btn-block w-100 register-page-btn">Register</button>
          <div class="clearfix"></div>
        </div>
        <p class="text-center">Already Have An Account?🤔  Kindly login below 👇👇</p>
      </form>

      <h4 class="mt-5 deep-blue-color">Login</h4>
      <form class="mt-3">
        <div class="row">
          <div class="col-md-6 mb-3">
              <input type="text" class="form-control" placeholder="Matric Number" aria-label="First name">
          </div>
          <div class="col-md-6 mb-3">
              <input type="password" class="form-control" placeholder="Password" aria-label="First name">
          </div>
        </div>
        <div class="col-12 mb-3">
          <button type="submit" class="btn btn-block w-100 login-page-btn">Login</button>
          <p class="text-center mt-3">
            <a href="{{ url('/') }}">Back To Home Page</a>
          </p>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>