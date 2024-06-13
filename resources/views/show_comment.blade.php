@extends('layout.master')
@section ('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<div class="man">
    <div class="card">
        <!-- Your content here -->
        <h2>Comment :</h2> <br>
        <p>{{$comment->comments}}</p>
    </div>
    <style>
        .man {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh;
            margin: 0;
        }

        .card {
            width: 400px;
            padding: 80px;
            border-radius: 10px;
            box-shadow: 0 4px 19px rgba(1, 1, 1, 0.1);
            background-color: whitesmoke;
            text-align: center;
        }
    </style>
</div>
</html>
@endsection
