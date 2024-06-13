@extends('layout.interface')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/style_show_events.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Document</title>
</head>

<body>
<div class="container">
  <div class="carde">
    <img src="{{ asset('storage/' . $event->photo) }}"  alt="Photo">
   
  </div>
  <section>
  <div class="carde-content">
      <h3>{{$event->title}}</h3>
      <h5><i class="fas fa-map-marker-alt"></i> {{$event->ville}}</h5>
      <h5><i class="fas fa-calendar-alt"></i> {{$event->date_deput}}</h5>
      <p>{{$event->description}}</p>
    </div>
  </section>
</div>
<section>
  <br>
</section>


<section>
<div class="container">
  <div class="row flex-items-xs-middle flex-items-xs-center">

    <!-- Table #1  -->
    <div class="col-xs-12 col-lg-4">
      <div class="card text-xs-center">
        <div class="card-header">
          <h4 class="display-2">{{$basic->price}} DH</h4>
        </div>
        <div class="card-block text-center">
          <h4 class="card-title"> 
            Basic Ticket
          </h4>
          <ul class="list-group">
            <li class="list-group-item">Affordable entry </li>
            <li class="list-group-item">Basic access</li>
            <li class="list-group-item">Entry level</li>
            <li class="list-group-item">{{$basic->quantity}} Places</li>
          </ul>
          <a href="{{ route('show.basic',$event->id)}}"class="btn btn-secondary mt-2">Choose Ticket</a>
        </div>
      </div>
    </div>

    <!-- Table #1  -->
    <div class="col-xs-12 col-lg-4">
      <div class="card text-xs-center">
        <div class="card-header">
          <h3 class="display-2">{{$standart->price}} DH</h3>
        </div>
        <div class="card-block text-center">
          <h4 class="card-title"> 
          Standart Ticket
          </h4>
          <ul class="list-group">
            <li class="list-group-item">Enhanced experience</li>
            <li class="list-group-item">Comfort upgrade</li>
            <li class="list-group-item">Priority access</li>
            <li class="list-group-item">{{$standart->quantity}} Places</li>
          </ul>
          <a href="{{ route('show.standart',$event->id)}}" class="btn btn-secondary mt-2">Choose Ticket</a>
        </div>
      </div>
    </div>

    <!-- Table #1  -->
    <div class="col-xs-12 col-lg-4">
      <div class="card text-xs-center">
        <div class="card-header">
          <h3 class="display-2">{{$vip->price}} DH</h3>
        </div>
        <div class="card-block text-center">
          <h4 class="card-title"> 
            VIP Tickets
          </h4>
          <ul class="list-group">
            <li class="list-group-item">Exclusive privileges</li>
            <li class="list-group-item">Premium treatmen</li>
            <li class="list-group-item">Luxury experience</li>
            <li class="list-group-item">{{$vip->quantity}} Places</li>
          </ul>
          <a href="{{ route('show.vip',$event->id)}}" class="btn btn-secondary mt-2">Choose Ticket</a>
        </div>
      </div>
  </div>

  </div>
</div>
</section>


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootdey">
<div class="col-md-12 bootstrap snippets">
<div class="panel">
  <div class="panel-body">
  <form action="{{ route('store.feedback') }}" method="POST">
            @csrf
            <input type="hidden" name="event_id" value="{{ $event->id }}">
            <h4>Review :</h4>
            <a href="#"name="client" class="btn-link text-semibold media-heading box-inline"></a>
            <textarea name="comments" class="form-control" rows="2" placeholder="What are you thinking?"></textarea>
            <div class="mar-top clearfix">
                <button class="btn btn-sm btn-primary pull-right" type="submit"><i class="fa fa-pencil fa-fw"></i> Share</button>
            </div>
        </form>
  </div>
</div>
<div class="panel">
    <div class="panel-body">
    <!-- Newsfeed Content -->
    @foreach($comments as $comment)
      
      <div class="media-body">
        <div class="mar-btm">
        <a class="media-left" href="#"><img class="img-profile rounded-circle img-fluid" width="50" height="50" alt="Profile Picture" src="{{ asset('storage/' . $comment->client->photo) }}" ></a>
          <a href="#" class="btn-link text-semibold media-heading box-inline">{{$comment->client->username}}</a>
     
        </div> <br>
           <p>  {{$comment->comments}}</p>
        <hr>
         @Endforeach  <!--===================================================-->
  </div>

</div>
</div>
</div>
</body>
<style>
  body{
    margin-top:20px;
}


.carde {
  width: 100%; /* Card width takes up full width of container */
  height: 400px; /* Adjust height as needed */
  border: 1px solid #ddd;
  border-radius: 5px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.carde img {
  width: 100%;
  height: auto;
}

.carde-content {
  padding: 20px;
}

.carde-content h3 {
  margin-top: 0;
}

.carde-content p {
  margin-bottom: 0;
}

.img-sm {
    width: 46px;
    height: 46px;
}

.panel {
    box-shadow: 0 2px 0 rgba(0,0,0,0.075);
    border-radius: 0;
    border: 0;
    margin-bottom: 15px;
}

.panel .panel-footer, .panel>:last-child {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}

.panel .panel-heading, .panel>:first-child {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}


.panel-body {
    padding: 25px 20px;
}


.media-block .media-left {
    display: block;
    float: left
}

.media-block .media-right {
    float: right
}

.media-block .media-body {
    display: block;
    overflow: hidden;
    width: auto
}

.middle .media-left,
.middle .media-right,
.middle .media-body {
    vertical-align: middle
}

.thumbnail {
    border-radius: 0;
    border-color: #e9e9e9
}

.tag.tag-sm, .btn-group-sm>.tag {
    padding: 5px 10px;
}

.tag:not(.label) {
    background-color: #fff;
    padding: 6px 12px;
    border-radius: 2px;
    border: 1px solid #cdd6e1;
    font-size: 12px;
    line-height: 1.42857;
    vertical-align: middle;
    -webkit-transition: all .15s;
    transition: all .15s;
}
.text-muted, a.text-muted:hover, a.text-muted:focus {
    color: #acacac;
}
.text-sm {
    font-size: 0.9em;
}
.text-5x, .text-4x, .text-5x, .text-2x, .text-lg, .text-sm, .text-xs {
    line-height: 1.25;
}

.btn-trans {
    background-color: transparent;
    border-color: transparent;
    color: #929292;
}

.btn-icon {
    padding-left: 9px;
    padding-right: 9px;
}

.btn-sm, .btn-group-sm>.btn, .btn-icon.btn-sm {
    padding: 5px 10px !important;
}

.mar-top {
    margin-top: 15px;
}
</style>


</html>
<style>
    /* Navbar Start */
#navbar{
    background: #ffffff;
    
}
.link-grey { color: #aaa; } .link-grey:hover { color: #00913b; }
#logo{
    font-size: 36px;
    font-weight: 550;
    color: black;
    text-shadow: 0px 1px 1px black;
    margin-bottom: 5px;
}
#logo span{
    color: #0008ff;
}
.navbar-toggler span{
    color: #0008ff;
}
.navbar-nav{
    margin-left: 20px;
}
.nav-item .nav-link{
    font-size: 16px;
    font-weight: 550;
    color: black;
    letter-spacing: 1px;
    border-radius: 3px;
    transition: 0.5s ease;
}
.nav-item .nav-link:hover{
    background: #0008ff;
    color: white;
}
#navbar form button{
    background: 0008ff;
    color: white;
    border: none;
}
/* Navbar End */

/*Comment start */
.avatar {
  position: relative;
  display: inline-block;
  width: 3rem;
  height: 3rem;
  font-size: 1.25rem;
}

.avatar-img,
.avatar-initials,
.avatar-placeholder {
  width: 100%;
  height: 100%;
  border-radius: inherit;
}

.avatar-img {
  display: block;
  -o-object-fit: cover;
  object-fit: cover;
}

.avatar-initials {
  position: absolute;
  top: 0;
  left: 0;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: center;
  justify-content: center;
  color: #fff;
  line-height: 0;
  background-color: #a0aec0;
}

.avatar-placeholder {
  position: absolute;
  background: #a0aec0
    url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='%23fff' d='M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z'/%3e%3c/svg%3e")
    no-repeat center/1.75rem;
}

.avatar-indicator {
  position: absolute;
  right: 0;
  bottom: 0;
  width: 20%;
  height: 20%;
  display: block;
  background-color: #a0aec0;
  border-radius: 50%;
}

.avatar-group {
  display: -ms-inline-flexbox;
  display: inline-flex;
}

.avatar-group .avatar + .avatar {
  margin-left: -0.75rem;
}

.avatar-group .avatar:hover {
  z-index: 1;
}

.avatar-sm,
.avatar-group-sm > .avatar {
  width: 2.125rem;
  height: 2.125rem;
  font-size: 1rem;
}

.avatar-sm .avatar-placeholder,
.avatar-group-sm > .avatar .avatar-placeholder {
  background-size: 1.25rem;
}

.avatar-group-sm > .avatar + .avatar {
  margin-left: -0.53125rem;
}

.avatar-lg,
.avatar-group-lg > .avatar {
  width: 4rem;
  height: 4rem;
  font-size: 1.5rem;
}

.avatar-lg .avatar-placeholder,
.avatar-group-lg > .avatar .avatar-placeholder {
  background-size: 2.25rem;
}

.avatar-group-lg > .avatar + .avatar {
  margin-left: -1rem;
}

.avatar-light .avatar-indicator {
  box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.75);
}

.avatar-group-light > .avatar {
  box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.75);
}

.avatar-dark .avatar-indicator {
  box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.25);
}

.avatar-group-dark > .avatar {
  box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.25);
}
/*comment end */



 /* Variables */
 :root {
    --primary: #3c35ff;
    --text-color: #363738;
  }
  
  /* Global Styles */
  body {
    background: #eee;
  }
  
  .date__box {
    position: absolute;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: #ccc;
    border: 4px solid;
    font-weight: bold;
    padding: 5px 10px;
  }
  
  .date__box .date__day {
    font-size: 22px;
  }
  
  .blog-card {
    padding: 30px;
    position: relative;
  }
  
  .blog-card .date__box {
    opacity: 0;
    transform: scale(0.5);
    transition: 300ms ease-in-out;
  }
  
  .blog-card .blog-card__background,
  .blog-card .card__background--layer {
    z-index: -1;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
  
  .blog-card .blog-card__background {
    padding: 15px;
    background: white;
  }
  
  .blog-card .card__background--wrapper {
    height: 100%;
    clip-path: polygon(0 0, 100% 0, 100% 80%, 0 60%);
    position: relative;
    overflow: hidden;
  }
  
  .blog-card .card__background--main {
    height: 100%;
    position: relative;
    transition: 300ms ease-in-out;
    background-repeat: no-repeat;
    background-size: 1100px 700px;
  }
  
  .blog-card .card__background--layer {
    z-index: 0;
    opacity: 0;
    background: rgba(51, 51, 51, 0.9);
    transition: 300ms ease-in-out;
  }
  
  .blog-card .blog-card__head {
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .blog-card .blog-card__info {
    z-index: 10;
    background: white;
    padding: 20px 15px;
  }
  
  .blog-card .blog-card__info h5 {
    transition: 300ms ease-in-out;
  }
  
  .blog-card:hover .date__box {
    opacity: 1;
    transform: scale(1);
  }
  
  .blog-card:hover .card__background--main {
    transform: scale(1.2) rotate(5deg);
  }
  
  .blog-card:hover .card__background--layer {
    opacity: 1;
  }
  
  .blog-card:hover .blog-card__info h5 {
    color: var(--primary);
  }
  
  

    /* Imports */
@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700");

/* Variables */
/* No variables in CSS */

/* Basic */
body {
  background-color: #f8f8f8;
  font-family: "Roboto", sans-serif;
  font-weight: 300;
}

.row {
  min-height: 100vh;
}

/* Tables */
.card {
  border: 0;
  border-radius: 0px;
  -webkit-box-shadow: 0 3px 0px 0 rgba(0, 0, 0, 0.08);
  box-shadow: 0 3px 0px 0 rgba(0, 0, 0, 0.08);
  transition: all 0.3s ease-in-out;
  padding: 2.25rem 0;
  position: relative;
  will-change: transform;
  
}

.card:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 0%;
  height: 5px;
  background-color: #3c35ff;
  transition: 0.5s;
}

.card:hover {
  transform: scale(1.05);
  -webkit-box-shadow: 0 20px 35px 0 rgba(0, 0, 0, 0.08);
  box-shadow: 0 20px 35px 0 rgba(0, 0, 0, 0.08);
}

.card:hover:after {
  width: 100%;
}

.card .card-header {
  background-color: white;
  padding-left: 2rem;
  border-bottom: 0px;
}

.card .card-title {
  margin-bottom: 1rem;
}

.card .card-block {
  padding-top: 0;
}

.card .list-group-item {
  border: 0px;
  padding: 0.25rem;
  color: #808080;
  font-weight: 300;
}

/* Price */
.display-2 {
  font-size: 5rem;
  letter-spacing: -0.5rem;

}

.display-2 .currency {
  font-size: 2.75rem;
  position: relative;
  font-weight: 300;
  top: -45px;

  letter-spacing: 0px;
}

.display-2 .period {
  font-size: 1rem;
  color: #c1c1c1;
  letter-spacing: 0px;
}

/* Buttons */
.btn {
  text-transform: uppercase;
  font-size: 0.75rem;
  font-weight: 500;
  color: #a6a6a6;
  border-radius: 0;
  padding: 0.75rem 1.25rem;
  letter-spacing: 1px;
}

.btn-gradient {
  background-color: #f2f2f2;
  transition: background 0.3s ease-in-out;
}

/* Footer Start */
#footer{
    width: 100%;
    margin-top: 150px;
    text-align: center;
    background: #ffffff76;
}
#footer h1{
    font-weight: 600;
    padding-top: 30px;
    text-shadow: 0px 0px 1px black;
}
#footer h1 span{
    color: #0008ff;
}
.social-links i{
    padding: 10px;
    border-radius: 5px;
    font-size: 20px;
    background: black;
    color: white;
    margin-left: 10px;
    margin-bottom: 10px;
    transition: 0.5s ease;
    cursor: pointer;
}
.social-links i:hover{
    background: #0008ff;
}
/* Footer End */

</style>

@endsection