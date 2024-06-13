<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Website</title>

    <link rel="stylesheet" href="styless.css">

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->


    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font Awesome Cdn -->


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
</head>
<body>
    

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
    <div class="container">
    <a class="navbar-brand" href="/home" id="logo"><span>E</span>VENTO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Events">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/AddEvent">Add Your Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profil">Profil  </a>
                </li>
                <li>

                </li>
              
            
           
</ul>
            <li class="nav">
            <form method="POST" action="{{ route('logout') }}">
             @csrf
             <button class="btn btn-primary" type="submit"> <i  class="fas fa-sign-out-alt"></i>Leave</button>
            </form> 
            </li>
           
        </div>
    </div>
</nav>

    <!-- Navbar End -->
<section>
  @yield ('content')
</section>

 <!-- Footer Start -->
 <footer id="footer">
      <h1><span>E</span>vento</h1>
      <p>Plan, promote, and engage on Evento. Start your event journey now!</p>
      <div class="social-links">
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-youtube"></i>
        <i class="fa-brands fa-pinterest-p"></i>
      </div>
      
    </footer>
    <!-- Footer End -->
    <style>
        .btn{
            background-color: #0008ff;
        }
    </style>
</body>
</html>