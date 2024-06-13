@extends('layout.master')

@section('content')
<div class="containers">
    <h2>Add New Event Type</h2>
    @if(session()->has('success'))
        <x-alert type="success">{{ session('success') }}</x-alert>
    @endif
    <form method="POST" action="{{ route('store.eventtype') }}">
        @csrf
        <div class="form-group"><br>
            <label for="event_type">Event Type</label><br>
            <input type="text" class="form-control" id="event_type" name="event_type" placeholder="Enter event type">
            @error('event_type')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<style>
    /* Add New Event Type Form */


    .containers {
    max-width: 500px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 80vh; /* Adjust the height as needed */
    padding: 30px;
    background-color: #fff; /* Add background color for better shadow effect */
    border-radius: 40px; /* Add border radius for rounded corners */
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Add box shadow */
}

.form-container h2 {
    font-size: 24px;
    margin-bottom: 20px;
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    font-weight: bold;
}

.form-group input[type="text"] {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-group .text-danger {
    color: red;
    font-size: 14px;
}

.btn-primary {
    display: block;
    width: 100%;
    padding: 10px;
    font-size: 16px;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #0056b3;
}
</style>
@endsection
