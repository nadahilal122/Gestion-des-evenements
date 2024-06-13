@extends('layout.interface')
@section('ticket')
<div class="container">
  <div class="row flex-items-xs-middle flex-items-xs-center">

    <!-- Table #1  -->
    <div class="col-xs-12 col-lg-4">
      <div class="card text-xs-center">
        <div class="card-header">
          <h3 class="display-2"><span class="currency">$</span>19<span class="period">/month</span></h3>
        </div>
        <div class="card-block text-center">
          <h4 class="card-title"> 
            Basic Plan
          </h4>
          <ul class="list-group">
            <li class="list-group-item">Ultimate Features</li>
            <li class="list-group-item">Responsive Ready</li>
            <li class="list-group-item">Visual Composer Included</li>
            <li class="list-group-item">24/7 Support System</li>
          </ul>
          <a href="#" class="btn btn-gradient mt-2">Choose Plan</a>
        </div>
      </div>
    </div>

    <!-- Table #1  -->
    <div class="col-xs-12 col-lg-4">
      <div class="card text-xs-center">
        <div class="card-header">
          <h3 class="display-2"><span class="currency">$</span>29<span class="period">/month</span></h3>
        </div>
        <div class="card-block text-center">
          <h4 class="card-title"> 
            Regular Plan
          </h4>
          <ul class="list-group">
            <li class="list-group-item">Ultimate Features</li>
            <li class="list-group-item">Responsive Ready</li>
            <li class="list-group-item">Visual Composer Included</li>
            <li class="list-group-item">24/7 Support System</li>
          </ul>
          <a href="#" class="btn btn-gradient mt-2">Choose Plan</a>
        </div>
      </div>
    </div>

    <!-- Table #1  -->
    <div class="col-xs-12 col-lg-4">
      <div class="card text-xs-center">
        <div class="card-header">
          <h3 class="display-2"><span class="currency">$</span>39<span class="period">/month</span></h3>
        </div>
        <div class="card-block text-center">
          <h4 class="card-title"> 
            Premium Plan
          </h4>
          <ul class="list-group">
            <li class="list-group-item">Ultimate Features</li>
            <li class="list-group-item">Responsive Ready</li>
            <li class="list-group-item">Visual Composer Included</li>
            <li class="list-group-item">24/7 Support System</li>
          </ul>
          <a href="#" class="btn btn-gradient mt-2">Choose Plan</a>
        </div>
      </div>
    </div>

  </div>
</div>

<style>
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
  background-color: #57e2b2;
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
  font-size: 7rem;
  letter-spacing: -0.5rem;
}

.display-2 .currency {
  font-size: 2.75rem;
  position: relative;
  font-weight: 400;
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

</style>

@endsection