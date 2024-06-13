@extends('layout.interface')
@section('content')
<head>
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Font Awesome CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<div class="container mt-5 px-5">

            <div class="mb-4">

                <h2>Confirm payment </h2>
            <span>please make the payment, to get Standart ticket.</span>
                
            </div>

        <div class="row">

            <div class="col-md-8">
                

                <div class="card p-3">

                    <h6 class="text-uppercase">Payment details</h6>
                    <div class="inputbox mt-3"> <input type="text" name="name" class="form-control" required="required"> <span>Name on card</span> </div>


                    <div class="row">

                        <div class="col-md-6">

                            <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <i class="fa fa-credit-card"></i> <span>Card Number</span> 


                            </div>
                            

                        </div>

                        <div class="col-md-6">

                             <div class="d-flex flex-row">


                                 <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>Expiry</span> </div>

                              <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>CVV</span> </div>
                                 

                             </div>
                            

                        </div>
                        

                    </div>




                </div>


                <div class="mt-4 mb-4 d-flex justify-content-between">


                           


                            <button class="btn btn-success px-3">Pay {{$standart->price}} DH</button>


                            

                        </div>

            </div>

            <div class="col-md-4">

                <div class="card card-blue p-3 text-white mb-3">

                   <span>You have to pay</span>
                    <div class="d-flex flex-row align-items-end mb-3">
                        <h1 class="mb-0 yellow">{{$standart->price}} DH</h1> <span></span>
                    </div>

                    <span>Enjoy the {{$event->title}} Event  when  you complete the payment</span>

                    
                </div>
                
            </div>
            
        </div>

      </div>
<style>



.card{
border:none;
}

.form-control {
border-bottom: 2px solid #eee !important;
border: none;
font-weight: 600
}

.form-control:focus {
color: #495057;
background-color: #fff;
border-color: #8bbafe;
outline: 0;
box-shadow: none;
border-radius: 0px;
border-bottom: 2px solid blue !important;
}



.inputbox {
position: relative;
margin-bottom: 20px;
width: 100%
}

.inputbox span {
position: absolute;
top: 7px;
left: 11px;
transition: 0.5s
}

.inputbox i {
position: absolute;
top: 13px;
right: 8px;
transition: 0.5s;
color: #3F51B5
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
-webkit-appearance: none;
margin: 0
}

.inputbox input:focus~span {
transform: translateX(-0px) translateY(-15px);
font-size: 12px
}

.inputbox input:valid~span {
transform: translateX(-0px) translateY(-15px);
font-size: 12px
}

.card-blue{

background-color: #0008ff;
}

.hightlight{

background-color: #0008ff;
padding: 10px;
border-radius: 10px;
margin-top: 15px;
font-size: 14px;
}

.yellow{

color: #fdcc49; 
}

.decoration{

text-decoration: none;
font-size: 14px;
}

.btn-success {
color: #fff;
background-color: #0008ff;
border-color:#492bc4;
}

.btn-success:hover {
color: #fff;
background-color:#492bc4;
border-color: #492bc4;
}


.decoration:hover{

text-decoration: none;
color: #fdcc49; 
}
          </style>
@endsection