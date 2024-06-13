@extends('layout.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body>
<div class="container mainBlock">
  <header>
    <i class="fa fa-bars"></i>
  </header>
  <main>
    <div class="row">
      <div class="left col-lg-4">
        <div class="photo-left">
        <div class="photo" >
        
    <div class="profile">
        <img src="{{ asset('storage/' . $client->photo) }}" alt="Profile Photo">
    </div>

            <div class="active-status"></div>
          </div>
        </div>
        <h4 class="name">{{$client->username}}</h4><br>
        <p class="info">{{$client->number}}</p>
        <p class="info">{{$client->email}}</p>

        <p class="descriptions">Events</p>
        
      </div>

      <div class="right col-lg-8">
       
        <div class="row gallery">
          <!--- events --->
          <div class="all">
<div class="boda">
<!-- horizontal -->

@foreach ($events as $event)
<div class="flip">
    <div class="front" style="background-image: url({{ asset('storage/' . $event->photo) }})">
       <h1 class="text-shadow">{{$event->title}}</hi>
    </div>
    <div class="back">
       <h2>{{$event->ville}}</h2><br>
       <p>{{$event->description}}</p><br>
       <form id="delete-form-{{ $event->id }}" method="POST" action="{{ route('event.destroy', $event->id) }}">
                    @csrf
                    @method('DELETE') 
       <button type="button" class="bubbly-button delete-btn" data-event-id="{{ $event->id }}">
                              <ion-icon name="trash-outline"></ion-icon>Delete
                    </button>
       </form>
    </div>
</div>
@endforeach
          <!---events end --->
        </div>
      </div>
    </div>
  </main>
</div>
<script>
   document.querySelectorAll('.delete-btn').forEach(button => {
    button.addEventListener('click', function() {
        const eventId = this.getAttribute('data-event-id');
        if (confirm('Are you sure you want to delete this event?')) {
            document.getElementById('delete-form-' + eventId).submit();
        }
    });
});
</script>
</body>
<style>

@import url('https://fonts.googleapis.com/css?family=Roboto+Mono');

.bubbly-button {
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  border: none;
  border-radius: 25px;
  background-color:#B22222;
  color: #fff;
  text-align: center;
  cursor: pointer;
  position: relative;
  overflow: hidden;
  z-index: 0;
}

.bubbly-button:before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 300%;
  height: 300%;
  background-color:red;
  border-radius: 50%;
  transition: all 0.3s ease-out;
  z-index: -1;
  transform: translate(-50%, -50%);
}

.bubbly-button:hover:before {
  width: 0;
  height: 0;
}
.all{
  box-sizing: border-box;
  font-weight: normal;
}

.boda {
  color: #555;

  text-align: center;
  font-family: 'Roboto Mono';
  padding: 1em;
}

h1 {
  font-size: 2.2em;
}

/* base */
.flip {
  position: relative;
}
.flip > .front,
.flip > .back {
  display: block;
  transition-timing-function: cubic-bezier(.175, .885, .32, 1.275);
  transition-duration: .5s;
  transition-property: transform, opacity;
}
.flip > .front {
  transform: rotateY(0deg);
}
.flip > .back {
  position: absolute;
  opacity: 0;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  transform: rotateY(-180deg);
}
.flip:hover > .front {
  transform: rotateY(180deg);
}
.flip:hover > .back {
  opacity: 1;
  transform: rotateY(0deg);
}
.flip.flip-vertical > .back {
  transform: rotateX(-180deg);
}
.flip.flip-vertical:hover > .front {
  transform: rotateX(180deg);
}
.flip.flip-vertical:hover > .back {
  transform: rotateX(0deg);
}

/* custom */
.flip {
  display: inline-block;
  margin-right: 2px;
  margin-bottom: 1em;
  width: 400px;
}
.flip > .front,
.flip > .back {
  display: block;
  color: white;
  width: inherit;
  background-size: cover!important;
  background-position: center!important;
  height: 220px;
  padding: 1em 2em;
  background: var(--blue);
  border-radius: 10px;
}
.flip > .front p {
  font-size: 0.9125rem;
  line-height: 160%;
  color: #999;
}

.text-shadow {
  text-shadow: 1px 1px rgba(0, 0, 0, 0.04), 2px 2px rgba(0, 0, 0, 0.04), 3px 3px rgba(0, 0, 0, 0.04), 4px 4px rgba(0, 0, 0, 0.04), 0.125rem 0.125rem rgba(0, 0, 0, 0.04), 6px 6px rgba(0, 0, 0, 0.04), 7px 7px rgba(0, 0, 0, 0.04), 8px 8px rgba(0, 0, 0, 0.04), 9px 9px rgba(0, 0, 0, 0.04), 0.3125rem 0.3125rem rgba(0, 0, 0, 0.04), 11px 11px rgba(0, 0, 0, 0.04), 12px 12px rgba(0, 0, 0, 0.04), 13px 13px rgba(0, 0, 0, 0.04), 14px 14px rgba(0, 0, 0, 0.04), 0.625rem 0.625rem rgba(0, 0, 0, 0.04), 16px 16px rgba(0, 0, 0, 0.04), 17px 17px rgba(0, 0, 0, 0.04), 18px 18px rgba(0, 0, 0, 0.04), 19px 19px rgba(0, 0, 0, 0.04), 1.25rem 1.25rem rgba(0, 0, 0, 0.04);
}

    * {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

html, body {
  height: 100%;
  width: 100%;
  background: #8bcdf9;
  font-family: 'Mukta Malar', sans-serif;
}

img {
  display: block;
  width: 100%;
  max-width: 100%;
}

a {
  display: block;
  text-decoration: none;
}
.profile {
  width: 202px;
  height: 200px; /* Adjust height to match width for a perfect circle */
  border-radius: 50%; /* Set border radius to 50% to make it circular */
  border: 4px solid #fff;
  overflow: hidden; /* Hide overflowing parts of the image */
}

.profile img {
  width: 100%;
  height: auto;
}
.mainBlock {
  max-width: 1250px;
  margin: 30px auto 30px;
  padding: 0 !important;
  width: 90%;
  background-color: #fff;
  background: #fff;
  margin: 20px auto;
  padding: 0 !important;
  border-radius: 50px 50px 10px 10px;
  box-shadow: 0 5px 2px 0 rgba(0,0,0,0.3);
}

.mainBlock header {
  height: 100px;
  display: flex;
  border-radius: 50px 50px 0px 0px;
  width: 100%;
  
  background: url('https://cdn.gearpatrol.com/wp-content/uploads/2016/02/Firewatch-Gear-Patrol-Lead-Full.jpg') no-repeat center 30%;
  background-size: cover;
  position: relative;
}

.mainBlock header i {
  font-size: 30px;
  color: #fff;
  position: absolute;
  top: 20px;
  right: 30px;
  text-shadow: 0 2px 2px rgba(0,0,0,0.5);
  transition: all 0.5s;
}

.mainBlock header i:hover {
  cursor: pointer;
  transform: scale(1.2);
}

.mainBlock main {
  padding: 20px;
}

.mainBlock .left {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  position: relative;
}

.mainBlock .left .photo-left .photo {
  width: 200px;
  height: 200px;
  margin-top: -120px;
  border-radius: 100px;
  border: 4px solid #fff;
  background-size: cover;
}


.mainBlock .left .name {
  font-size: 22pt;
  color: black;
  margin-top: 20px;
}

.mainBlock .left .info {
  font-size: 11pt;
  color: #777;
  margin-top: -5px;
  margin-bottom: 5px;
}

.mainBlock .left .stat {
  margin-top: 20px;
  border-bottom: 1px solid #ededed;
  padding-bottom: 20px;
  text-align: center;
  display: flex;
  justify-content: center;
}

.mainBlock .left .stat .number-stat,
.mainBlock .left .stat .desc-stat {
  padding: 0px;
  margin-bottom: 5px;
  font-size: 14pt;
  font-weight: bold;
  font-family: 'Montserrat', sans-serif;
  transition: all 0.4s;
}

.mainBlock .left .stat .number-stat:hover,
.mainBlock .left .stat .desc-stat:hover {
  cursor: pointer;
}

.mainBlock .left .stat .number-stat {
  color: #43acf2;
}

.mainBlock .left .stat .number-stat:hover {
    color: black;
}

.mainBlock .left .stat .desc-stat {
  color: black;
}

.mainBlock .left .descriptions {
  margin: 20px 25px 25px 25px;
  color: #999;
  padding: 10px 0 25px 0;
  border-bottom: 1px solid #ededed;
  font-size: 14pt;
}

.mainBlock .left .social {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 20pt;
}

.mainBlock .left .social i {
  margin: 10px;
  transition: all 0.4s;
}

.mainBlock .left .social i:hover {
  cursor: pointer;
  transform: scale(1.2);
}

.mainBlock .left .social i:nth-child(1) {
  color: #4267b2;
}

.mainBlock .left .social i:nth-child(2) {
  color: #1da1f2;
}

.mainBlock .left .social i:nth-child(3) {
  color: #bd081c;
}

.mainBlock .left .social i:nth-child(4) {
  color: #36465d;
}

.mainBlock .right {
  padding: 0 25px 0 25px !important;
  background: #fff;
}





.mainBlock .right .nav {
  display: flex;
  align-items: center;
  margin-bottom: 25px;
  padding: 20px 0 20px 0;
}

.mainBlock .right .nav a {
  font-size: 14pt;
  display: block;
  padding-bottom: 10px;
  margin-right: 20px;
  font-weight: 800;
  transition: all 0.3s;
}

.mainBlock .right .nav a:hover {
  text-decoration: none;
  border-bottom: 1px solid #999;
  color: #999;
}

.mainBlock .right .nav .active {
  color: #777;
  border-bottom: 1px solid #999;
}

.mainBlock .right .gallery img {
    width:30%;
    height: 30%;
  box-shadow: 0 3px 6px rgba(0,0,0,0.10), 0 3px 6px rgba(0,0,0,0.10);
  width: auto;
  height: auto;
  cursor: pointer;

  margin: 20px 10px;
}

</style>
</html>
@endsection    