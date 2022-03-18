 @extends('post\layout')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('post.index') }}">Books </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('R.thesis') }}">Thesis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cust.customers') }}">Customers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('b.booking') }}">Booking</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('signup') }}">Sign Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contactus') }}">Contact Us</a>
            </li>

        </ul>

    </div>
</nav>

@section('content')
{{--
<body>
  <div>
	<h1 style="text-align: center;">REGISTRATION FORM </h1>
    <br>
	<form name="RegForm" action="/submit.php"
		onsubmit="return Reg()" method="post">
		<p><strong>Name:</strong>  <input type="text"
						size="65" name="Name" required /></p>
		<br />
		<p> <strong>Address:</strong>  <input type="text"
						size="65" name="Address" /></p>
		<br />
		<p><strong>E-mail Address:</strong> <input type="email"
							size="65" name="EMail" /></p>
		<br />
		<p><strong>Password:</strong> <input type="password"
							size="65" name="Password" /></p>
		<br />
        <p><strong> Password:</strong> <input type="password"
            size="65" name="confirm password" /></p>
        <br />
		<p><strong>Telephone:</strong> <input type="number"
							size="65" name="Telephone" /></p>
		<br />

		<p>
		<strong>	SELECT YOUR GENDER </strong>
			<select type="text" value="" name="Subject">
                <option>Select Gender</option>
                <option>Female</option>
				<option>Male</option>
			</select>
		</p>
        <br>
        <br>
        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
            <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
            <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
          </svg>
			<input type="submit"
				value="Sign Up " name="Submit" />
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                  </svg>
			<input type="reset"
				value="Reset" name="Reset" />
		</p>
		<br />
		<br />
        <style>
div {
	box-sizing: border-box;
	width: 100%;
	/* border: 25px solid rgb(30, 30, 31); */
	float: left;
	align-content: center;
	align-items: center;
}

form {
	margin: 0 auto;
	width: 500px;
}</style>

	</form>
    <script>
        function Reg() {
            var name = document.forms["RegForm"]["Name"];
            var email = document.forms["RegForm"]["EMail"];
            var phone = document.forms["RegForm"]["Telephone"];
            var subj = document.forms["RegForm"]["Subject"];
            var password = document.forms["RegForm"]["Password"];
            var c_password = document.forms["RegForm"]["confirm password"];
            var address = document.forms["RegForm"]["Address"];

            // if (name.value == "") {
            //     window.alert("Please enter your name.");
            //     name.focus();
            //     return false;
            // }

            if (address.value == "") {
                window.alert("Please enter your address.");
                address.focus();
                return false;
            }

            if (email.value == "") {
                window.alert(
                "Please enter a valid e-mail address.");
                email.focus();
                return false;
            }

            if (password.value.length < 6 ) {
                window.alert("your password is less than 6 characters");
                password.focus();
                return false;
            }

            if(password.value.length > 20 ) {
                window.alert("Make it less than 20 characters");
                password.focus();
                return false;
            }

            if(password.value !== c_password.value ) {
                window.alert("Passwords doesn't match");
                password.focus();
                return false;
            }

            if (phone.value == "") {
                window.alert(
                "Please enter your telephone number.");
                phone.focus();
                return false;
            }

            if (phone.value.length > 11 ) {
                window.alert(
                "Please enter a valid phone number it is more than 11 numbers");
                phone.focus();
                return false;
            }

            if (subj.selectedIndex < 1) {
                window.alert(
                    "Please enter your gender");
                subj.focus();
                return false;
            }

            return true;
        }
    </script>
</div>
</body>
@endsection --}}


<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>

	<title>Login Page</title>

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Register</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form  onsubmit="return Reg()" name="RegForm" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text" ><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="Name" class="form-control" placeholder="username">

					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"onclick="Reg()"><i class="fas fa-solid fa-envelope"></i></span>
						</div>
						<input type="email" name="Email" class="form-control" placeholder="Email">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="password">
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-solid fa-check-double"></i> </span>
						</div>
						<input type="password" name="confirm password" class="form-control" placeholder="Confirm password">
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-solid fa-phone"></i></span>
						</div>
						<input type="number" name="contact" class="form-control" placeholder="Contact No.">
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fas fa-solid fa-venus-mars"></i> </span>
						</div>
                        <select type="text" value="" name="Subject" class="form-control">
                            <option>Select Gender</option>
                            <option>Female</option>
                            <option>Male</option>
                        </select>
					</div>

					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="SignUp" class="btn float-right login_btn">
					</div>

				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Already have an account?<a href="#">Sign In</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>



    <style>

                @import url('https://fonts.googleapis.com/css?family=Numans');

                html,body{
                background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTL3dcm_m7teMe7NSE4EVJocRrg4VG6XZvgaA&usqp=CAU');
                background-size:cover ;
                background-repeat: no-repeat;
                height: 100%;
                font-family: 'Numans', sans-serif;
                }

                .container{
                height: 100%;
                align-content: center;
                }

                .card{
                height: 370px;
                margin-top: auto;
                margin-bottom: auto;
                width: 400px;
                background-color: rgba(0,0,0,0.5) !important;
                }

                .social_icon span{
                font-size: 60px;
                margin-left: 10px;
                color: #333232;
                }

                .social_icon span:hover{
                color: white;
                cursor: pointer;
                }

                .card-header h3{
                color: white;
                }

                .social_icon{
                position: absolute;
                right: 20px;
                top: -45px;
                }

                .input-group-prepend span{
                width: 50px;
                background-color: #333232;
                color: black;
                border:0 !important;
                }

                input:focus{
                outline: 0 0 0 0  !important;
                box-shadow: 0 0 0 0 !important;

                }

                .remember{
                color: white;
                }

                .remember input
                {
                width: 20px;
                height: 20px;
                margin-left: 15px;
                margin-right: 5px;
                }

                .login_btn{
                color: black;
                background-color: #0f79f1;
                width: 100px;
                }

                .login_btn:hover{
                color: black;
                background-color: white;
                }

                .links{
                color: white;
                }

                .links a{
                margin-left: 4px;
                }
        </style>


				</div>
			</div>
		</div>
	</div>

    <script>
        function Reg() {
            var name = document.forms["RegForm"]["Name"];
            var email = document.forms["RegForm"]["Email"];
            var phone = document.forms["RegForm"]["contact"];
            var subj = document.forms["RegForm"]["subject"];
            var password = document.forms["RegForm"]["password"];
            var c_password = document.forms["RegForm"]["confirm password"];
            var address = document.forms["RegForm"]["Address"];


            if (name.value == "") {
                window.alert(
                "Please enter a valid name.");
                email.focus();
                return false;
            }

            if (email.value == "") {
                window.alert(
                "Please enter a valid e-mail address.");
                email.focus();
                return false;
            }

            if (password.value.length < 6 ) {
                window.alert("your password is less than 6 characters");
                password.focus();
                return false;
            }

            if(password.value.length > 20 ) {
                window.alert("Make it less than 20 characters");
                password.focus();
                return false;
            }

            if(password.value !== c_password.value ) {
                window.alert("Passwords doesn't match");
                password.focus();
                return false;
            }

            if (phone.value == "") {
                window.alert(
                "Please enter your Contact number.");
                phone.focus();
                return false;
            }

            if (phone.value.length = 11 ) {
                window.alert(
                "Please enter a valid number,   Phone No contains 11 numbers");
                phone.focus();
                return false;
            }

            // if (phone.value.length < 10 ) {
            //     window.alert(
            //     "Please enter a valid phone number it is less than 10 numbers");
            //     phone.focus();
            //     return false;
            // }

            if (subj.selectedIndex < 1) {
                window.alert(
                    "Please enter your gender");
                subj.focus();
                return false;
            }

            return true;

        }
    </script>

</div>
</body>
</html>
