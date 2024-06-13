@extends('layout.master')

@section('content')
@if (session()->has('success'))
     <x-alert type="success">{{ session('success') }}</x-alert>
@endif
<div class="cards-container">
@foreach($clients as $client)
<div class="card"> 
    <div class="img">
      <img src="{{ asset('storage/' . $client->photo) }}"  width="70" height="90" >
    </div>
    <div class="infos">
      <div class="name">
        <h2><ion-icon name="person"></ion-icon>{{ $client->username }}</h2><br>
       <h4> <ion-icon name="mail"></ion-icon> {{ $client->email }}</h4>
       <h4> <ion-icon name="call"></ion-icon>{{ $client->number }}</h4>
       <h4> <ion-icon name="location"></ion-icon>{{ $client->location }}</h4>
      </div>
      <form method="POST" action="{{ route('client.destroy',$client->id)}}">
      @csrf
      @method('DELETE')
      <div class="links">
      <button type="submit" class="follow delete-btn" data-client-id="{{ $client->id }}" value="Delete">Delete</button>
      </div>    
    </form>
    <div class="links">
    <a href="{{ route('show.client',$client->id)}}">  <button class="view">View profile</button></a>
    </div> 
  </div>  
</div>
@endforeach
</div>
<div class="pagination">
    {{ $clients->links() }}
</div>
<script>
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function() {
            const clientId = this.getAttribute('data-client-id');
            if (confirm('Are you sure you want to delete this client?')) {
                document.getElementById('delete-form-' + clientId).submit();
            }
        });
    });
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.cards-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around; /* Optional: Adjust according to your layout preference */
}
img {
  max-width: 100%;
  display: block;
}
.pagination {
    margin-top: 20px;
    text-align: center;
}

.pagination ul {
    list-style: none;
    padding: 0;
}

.pagination ul li {
    display: inline-block;
    margin-right: 5px;
}

.pagination ul li a,
.pagination ul li span {
    display: inline-block;
    padding: 8px 12px;
    background-color: #f0f0f0;
    color: #333;
    text-decoration: none;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.pagination ul li.active a {
    background-color: #337ab7;
    color: #fff;
}

.pagination ul li.disabled a,
.pagination ul li.disabled span {
    cursor: not-allowed;
    background-color: #ddd;
    color: #777;
}

.pagination ul li.disabled a:hover,
.pagination ul li.disabled span:hover {
    background-color: #ddd;
    color: #777;
}
ul {
  list-style: none;
}

/* Utilities */
.card::after,
.card img {
  border-radius: 50%;
}
body,
.card,
.stats {
  display: flex;
}

.card {
  padding: 2.5rem 2rem;
  border-radius: 10px;
  background-color: rgba(255, 255, 255, .5);
  max-width: 500px;
  box-shadow: 0 0 30px rgba(0, 0, 0, .15);
  margin: 1rem;
  position: relative;
  transform-style: preserve-3d;
  overflow: hidden;
}
.card::before,
.card::after {
  content: '';
  position: absolute;
  z-index: -1;
}
.card::before {
  width: 100%;
  height: 100%;
  border: 1px solid #FFF;
  border-radius: 10px;
  top: -.7rem;
  left: -.7rem;
}
.card::after {
  height: 15rem;
  width: 15rem;

  top: -8rem;
  right: -8rem;
  box-shadow: 2rem 6rem 0 -3rem #FFF
}

.card img {
  width: 6rem;
  min-width: 80px;
  box-shadow: 0 0 0 5px #FFF;
}

.infos {
  margin-left: 1.5rem;
}

.name {
  margin-bottom: 1rem;
}
.name h2 {
  font-size: 1.3rem;
}
.name h4 {
  font-size: .8rem;
  color: #333
}

.text {
  font-size: .9rem;
  margin-bottom: 1rem;
}

.stats {
  margin-bottom: 1rem;
}
.stats li {
  min-width: 5rem;
}
.stats li h3 {
  font-size: .99rem;
}
.stats li h4 {
  font-size: .75rem;
}

.links button {
  font-family: 'Poppins', sans-serif;
  min-width: 120px;
  padding: .5rem;
  border: 1px solid #222;
  border-radius: 5px;
  font-weight: bold;
  cursor: pointer;
  transition: all .25s linear;
}
.links .follow {
  background-color:#FF0000;
  color: #FFF;
}
.links .view {
  background-color:#4682B4;
  color: #FFF;
}
.links .view:hover{
    background-color:#B0C4DE;
  color: #222;
}
.links .follow:hover{
  background-color: #DC143C;
  color: #222;
}

@media screen and (max-width: 450px) {
  .card {
    display: block;
  }
  .infos {
    margin-left: 0;
    margin-top: 1.5rem;
  }
  .links button {
    min-width: 100px;
  }
}
</style>
@endsection
