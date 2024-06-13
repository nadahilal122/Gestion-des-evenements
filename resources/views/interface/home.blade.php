@extends('layout.interface')
@section('content')
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



    <!-- Home Section Start -->
    <div class="home">
        <div class="content">
            <h5>Welcome To EVEN<span>TO</span></h5>
            <h1><span class="changecontent"></span> Event </h1>
            <p>Plan, promote, and engage on Evento. Start your event journey now!</p>
            <a href="/Events">Book Event</a>
        </div>
    </div>
    <!-- Home Section End -->

    
<!-- About Start -->
<section class="about" id="about">
      <div class="container">

        <div class="main-txt">
          <h1>About <span>Us</span></h1>
        </div>

        <div class="row" style="margin-top: 50px;">

          <div class="col-md-6 py-3 py-md-0">
            <div class="card">
              <img src="./images/about-img.png" alt="">
            </div>
          </div>

          <div class="col-md-6 py-3 py-md-0">
            <h2>Are you planning an any type of event?</h2>
            <p>Welcome to EVENTO, your effortless event planning solution.
               Create and publish listings with ease, showcase your event with multimedia,
                and engage your audience seamlessly. Join us now!</p>
          <a href="/AddEvent">  <button  id="about-btn"> Add Event!!</button></a> 
          </div>

        </div>

      </div>
    </section>
    <!-- About End -->





 

    <section class="packages" id="packages">
      <div class="container">
        
        <div class="main-txt">
          <h1><span>E</span>vents</h1>
        </div>
        <div class="row" style="margin-top: 30px;">
    @foreach($events as $event)
    <div class="col-md-4 py-3 py-md-0">
        <div class="card">
        <img src="{{ asset('storage/' . $event->photo) }}"  alt="Photo">
            <div class="card-body">
                <h3>{{ $event->title }}</h3>
                <div><p><i class="fas fa-location-dot"></i> {{$event->ville}}</p></div>
                <p><i class="fas fa-calendar-alt mr-2"></i> {{$event->date_deput}}</p>
             
                <div class="frame">
                    <a class="custom-btn btn-1" href="{{ route('show.events',$event->id)}}"> Buy Ticket</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
          </div>
        </div>
      </div>
</section>


   
    <!-- Section Services Start -->
    <section class="services" id="services">
      <div class="container">

        <div class="main-txt">
          <h1><span>C</span>omments</h1>
        </div>

        <div class="row" style="margin-top: 30px;">
        @foreach($comments as $comment)
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
            <i class="fa-sharp fa-solid fa-quote-right"></i>
              <div class="card-body">
                <h3></h3>
                <p>{{$comment->comments}}</p>
              </div>
            </div>
          </div>
        @endforeach

          </div>
    </div>

      </div>
    </section>
    <!-- reveiw End -->




    <!-- Section Gallary Start -->
    <section class="gallary" id="gallary">
      <div class="container">

        <div class="main-txt">
          <h1><span>G</span>allery</h1>
        </div>

        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g1.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g2.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g3.png" alt="" height="230px">
            </div>
          </div>
        </div>


        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g4.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g5.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g6.png" alt="" height="230px">
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- Section Gallary End -->


    <!--review -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
@endsection