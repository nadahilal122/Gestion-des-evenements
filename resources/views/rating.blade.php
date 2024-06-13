@extends('layout.master')

@section('content')
<div class="containers">
    @if(session()->has('success'))
        <x-alert type="success">{{ session('success') }}</x-alert>
    @endif
    <h2>Rating</h2>
    <ul class="responsive-table">
        <li class="table-header">
            <div class="col col-1">Id</div>
            <div class="col col-3">Rating</div>
            <div class="col col-4">Client Id</div>
            <div class="col col-5">Event Id</div>
            <div class="col col-6">Action</div>
        </li>
        @foreach($Likes as $Like)
        <li class="table-row">
            <div class="col col-1" data-label="Id">{{ $Like->id }}</div>
            <div class="col col-3" data-label="Rating">{{ $Like->rating }}/5</div>
            <div class="col col-4" data-label="Client Id">{{ $Like->client_id }}</div>
            <div class="col col-5" data-label="Event Id">{{ $Like->event_id }}</div>
            <div class="col col-6" data-label="Action">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-secondary">Show Event</button>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>
<div class="pagination">
    {{ $Likes->links() }}
</div>

<script>
    // Add event listener to all delete buttons
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function() {
            // Get the associated rating ID
            const ratingId = this.getAttribute('data-rating-id');
            // Show confirmation dialog
            if (confirm('Are you sure you want to delete this rating?')) {
                // If confirmed, submit the form
                document.getElementById('delete-form-' + ratingId).submit();
            }
        });
    });
</script>
<style>
    body {
    font-family: 'lato', sans-serif;
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

.btn-secondary {
        background-color: #008000;
        color: #fff;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn-secondary:hover {
        background-color: 	#32CD32;
    }

    .btn-danger {
        background-color: #dc3545;
        color: #fff;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

.containers {
    max-width: 1000px;
    margin-left: auto;
    margin-right: auto;
    padding-left: 10px;
    padding-right: 10px;
}

h2 {
    font-size: 26px;
    margin: 20px 0;
    text-align: center;
}

h2 small {
    font-size: 0.5em;
}

.responsive-table li {
    border-radius: 3px;
    padding: 25px 30px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 25px;
}

.responsive-table .table-header {
    background-color: #B0C4DE;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.03em;
}

.responsive-table .table-row {
    background-color: #ffffff;
    box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
}

.responsive-table .col-1 {
    flex-basis: 20%;
}

.responsive-table .col-2 {
    flex-basis: 60%;
}

.responsive-table .col-3 {
    flex-basis: 30%;
}

.responsive-table .col-4 {
    flex-basis: 45%;
}
.responsive-table .col-5 {
    flex-basis: 40%;
}
.responsive-table .col-6 {
    flex-basis: 40%;
}
.responsive-table .col-7 {
    flex-basis: 30%;
}

@media all and (max-width: 767px) {
    .responsive-table .table-header {
        display: none;
    }

    .responsive-table li {
        display: block;
    }

    .responsive-table .col {
        flex-basis: 100%;
        display: flex;
        padding: 10px 0;
    }

    .responsive-table .col:before {
        color: #6C7A89;
        padding-right: 10px;
        content: attr(data-label);
        flex-basis: 50%;
        text-align: right;
    }
}

</style>
@endsection
