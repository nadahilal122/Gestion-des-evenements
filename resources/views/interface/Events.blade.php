@extends('layout.interface')
@section('content')
<html>
<head>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

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
 <title>Travel Website</title>
</head>

<section class="packages" id="packages">
      <div class="container">
        
        <div class="main-txt">
          <h1><span>E</span>vents</h1>
        </div>
        <div class="row" style="margin-top: 30px;">
    @foreach($events as $event)
    <div class="col-md-4 py-3 py-md-0">
        <div class="card">
            <div class="photo">
        <img src="{{ asset('storage/' . $event->photo) }}" alt="Event Photo"></div>
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
{{ $events->links() }}
</html>
<style>
    .photo {
        border: 1px solid #ddd; /* Add a border */
        border-radius: 8px; /* Add rounded corners */
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
        margin-bottom: 20px; /* Add some bottom margin */
    }

    .photo img {
        width:100%; /* Make the image fill the entire width of its container */
        height: 300px; /* Maintain aspect ratio */
        display: block; /* Make sure the image is displayed as a block element */
    }
</style>
@endsection
