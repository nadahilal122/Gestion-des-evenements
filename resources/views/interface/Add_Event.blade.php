@extends('layout.interface')
@section('content')
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
</head>


 <!-- Section Book Start -->
 <section class="book" id="book">
      <div class="container">
     
        <div class="main-text">
          <h1>Add <span>Your</span> Event</h1>
        </div>
        
        <div class="row">
        <div class="col">
            <div class="mx-auto" style="width: 900px;">
            <form method="POST" action="{{ route('AddEvent_store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="title">Event Name:</label>
        <input id="title" name="title" type="text" class="form-control" placeholder="Enter title" required>
    </div>

    <div class="form-group">
        <label for="ville">City:</label>
        <input id="ville" name="ville" type="text" class="form-control" placeholder="Enter City" required>
    </div>

    <div class="form-group">
        <label for="photo">Image:</label>
        <input id="photo" name="photo" type="file" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="date">Date:</label>
        <input id="date" name="date" type="date" class="form-control" placeholder="Start date" required>
    </div>

    <div class="form-group">
        <label for="event_type">Event Type:</label>
        <select id="event_type" name="event_type_id" class="form-select" aria-label="Event type" required>
            <option value="" disabled selected>Select Event Type</option>
            @foreach($event_type as $event_typ)
                <option value="{{ $event_typ->id }}">{{ $event_typ->event_type }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea id="description" class="form-control" rows="5" name="description" placeholder="Enter Your Description" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
          </div>
</div>
        </div>
      </div>
    </section>
    <!-- Section Book End -->

    @endsection