<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<div class="container" id="container">
	<div class="form-container sign-up-container">
  
	<form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
        @csrf 
        <h1>Sign up</h1>
			<input class="form-control" id="inputUsername" type="text" name="username" value='{{ old("username") }}' placeholder="Enter your username">
                        @error('username')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
						<input class="form-control" id="inputPhoto" type="file" name="photo" accept="image/*">
                        @error('photo')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
      <input class="form-control" id="inputLocation" type="text" name="location" value='{{ old("location") }}' placeholder="Enter your location">
                        @error('location')
                              <span class="text-danger">{{ $message }}</span>
                        @enderror  
      <input class="form-control" id="inputEmailAddress" type="email" name="email" value='{{ old("email") }}' placeholder="Enter your email address">
                        @error('email')
                             <span class="text-danger">{{old( $message) }}</span>
                        @enderror
      <input class="form-control" id="inputPhone" type="tel" name="number" value='{{ old("number") }}' placeholder="Enter your phone number">
                        @error('number')
                              <span class="text-danger">{{ $message }}</span>
                        @enderror
      <input class="form-control" id="inputPassword" type="password" name="password" value='{{ old("password") }}' placeholder="Enter your password">
                        @error('password')
                                  <span class="text-danger">{{ $message }}</span>
                        @enderror
      <input class="form-control" id="inputPassword" type="password" name="password_confirmation" value='{{ old("password_confirmation") }}' placeholder="Confirme your password">
			<button class="btn btn-primary" type="submit">Sing Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
  <form method="POST" action="{{route('login')}}">
	@csrf
			<h1>Sign in</h1>
			<span> use your account</span>
     
			<input name="login" type="text" placeholder="Username" required />
      @error('login')
          <span class="text-danger">{{ $message }}</span>
        @enderror
			<input  name="password" type="password" placeholder="Password" required />
      @error('password')
          <span class="text-danger">{{ $message }}</span>
        @enderror
		
	
		<input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember Me</label>
		<button type="submit" class="btn">Sign In</button>
	</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome, Friend!</h1>
				<p>Enter your personal details to joing us in Evnto</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Welcome Back! </h1>
				<p> To keep connected with us in Evento please login with your personal info</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<style>
  
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #0008ff;
	background-color: #0008ff;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #FF416C;
	background: -webkit-linear-gradient(to right, #0008ff, #FF416C);
	background: linear-gradient(to right, #222, #0008ff);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
</style>
<script>
  const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
</body>
</html>