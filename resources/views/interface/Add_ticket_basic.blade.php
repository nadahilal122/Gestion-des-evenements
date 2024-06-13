@extends('layout.interface')
@section('content')
<head>
    
</head>

<section class="book" id="book">
  <div class="container">
   <div class="ticket-form">
   <div class="main-text">
          <h1>Add <span>Basic</span> Ticket</h1>
        </div>
    <form method="POST" action="{{ route('basic_tickets.store') }}" >
        @csrf

        <!-- Display Event ID (Read-only) -->
        <div class="form-group">
            <label for="event_id">Event ID:</label>
            <input id="event_id" type="text" class="form-control" value="{{ session('eventId') }}" readonly>
        </div>

        <!-- Basic Ticket Form Fields -->
        <div class="form-group">
            <label for="price">Price:</label>
            <input id="price" name="price" type="number" class="form-control" min="0" step="0.01" placeholder="Enter price" required>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity Ticket:</label>
            <input id="quantity" name="quantity" type="number" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   </div>
  </div>

</section>

<style>
    .ticket-form {
    box-shadow: 0 5px 8px rgba(0, 0, 0, 0.1); /* Adjust shadow as needed */
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px; /* Add some spacing between ticket forms */
}
</style>
    @endsection
