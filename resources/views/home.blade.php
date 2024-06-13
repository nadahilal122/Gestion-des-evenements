@extends('layout.master')
<?php
use App\Models\Feedback;
use App\Models\Client;
use App\Models\event;

use App\Models\Ticket;

$event=event::count();

$client=Client::count();
$comment= Feedback::count();
$like= Feedback::count();
?>
@section('content')

<div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">{{$event}}</div>
                        <div class="cardName">Events</div>
                    </div>

                    <div class="iconBx">
					<ion-icon name="calendar"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">{{$client}}</div>
                        <div class="cardName">Clients</div>
                    </div>

                    <div class="iconBx">
					<ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">{{$comment}}</div>
                        <div class="cardName">Comments</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">{{$like}}</div>
                        <div class="cardName">Likes</div>
                    </div>

                    <div class="iconBx">
					<ion-icon name="heart-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Some Events</h2>
                        <a href="/event" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Events Name</td>
                                <td>City</td>
                                <td>Date</td>
                            </tr>
                        </thead>
                        @foreach($events  as $event)
                        <tbody>
                            <tr>
                                <td>{{ $event->id }}</td>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->ville }}</td>
                                <td>{{ $event->date_deput }}</td>
                            </tr>

                        </tbody>
                        @endforeach
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Some Clients</h2>
                    </div>
                    <table>
                        @foreach($clients as $client)
                        <tr>
                            <td width="60px">
                                <div class="imgBx"> <img  alt="Profile Picture" src="{{ asset('storage/' . $client->photo) }}"></div>
                            </td>
                            <td>
                                <h4><ion-icon name="person"></ion-icon>{{$client-> username}} <br> <span> <ion-icon name="location"></ion-icon>{{$client->location}}</span></h4>
                            </td>
                            <td>
                           
                            </td>
                        </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection
