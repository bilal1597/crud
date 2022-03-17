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
<body>
  <div>
	<h1 style="text-align: center;">REGISTRATION FORM </h1>
    <br>
	<form name="RegForm" action="/submit.php"
		onsubmit="return Reg()" method="post">
		<p>Name: <input type="text"
						size="65" name="Name" /></p>
		<br />
		<p>Address: <input type="text"
						size="65" name="Address" /></p>
		<br />
		<p>E-mail Address: <input type="email"
							size="65" name="EMail" /></p>
		<br />
		<p>Password: <input type="password"
							size="65" name="Password" /></p>
		<br />
		<p>Telephone: <input type="number"
							size="65" name="Telephone" /></p>
		<br />

		<p>
			SELECT YOUR GENDER
			<select type="text" value="" name="Subject">
				<option>Female</option>
				<option>Male</option>
				<option>Other</option>
			</select>
		</p>
		<br />
		<br />
		<p>Comments: <textarea cols="55"
							name="Comment"> </textarea></p>
		<p>
			<input type="submit"
				value="Sign Up" name="Submit" />
			<input type="reset"
				value="Reset" name="Reset" />
		</p>
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
            var what = document.forms["RegForm"]["Subject"];
            var password = document.forms["RegForm"]["Password"];
            var address = document.forms["RegForm"]["Address"];

            if (name.value == "") {
                window.alert("Please enter your name.");
                name.focus();
                return false;
            }

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

            if (phone.value == "") {
                window.alert(
                "Please enter your telephone number.");
                phone.focus();
                return false;
            }

            if (password.value == "") {
                window.alert("Please enter your password");
                password.focus();
                return false;
            }

            if (what.selectedIndex < 1) {
                alert("Please enter your course.");
                what.focus();
                return false;
            }

            return true;
        }
    </script>

</div>
</body>
@endsection
