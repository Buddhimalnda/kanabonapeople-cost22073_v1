<!DOCTYPE html>
<html lang="en">
   <?php 
        // include "../php/session.php";
        include "../php/header.php";
        // include "../php/config.php";
    ?>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../assets/styles/login.css">
    </head>
    

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="scripts/signup.php" method="post">
			<h1>Create Account</h1>
			
			<input type="text" placeholder="User Name" name="username" required/>
			<input type="email" placeholder="Email" name="email" required/>
			<input type="text" placeholder="Telephone Number" name="number" required/>
			<input type="password" placeholder="Password" name="password" required/>
			
			<button>Sign Up</button>
            <span>or Sign Up with... </span>
            <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="scripts/login.php" method="post">
			<h1>Sign in</h1>
			
			<input type="text" placeholder="User Name" name="username" required/>
			<input type="password" placeholder="Password" name="password" required/>
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
            <span>or use your account</span>
            <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome !</h1>
				<h5>Enter your details and join with us..!</h5>
                <p>Already have account?</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Welcome Back!</h1>
				<h5>to <br>KanaBona Peoples</h5>
                <p>Not a User ?</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
    

    <script src="https://kit.fontawesome.com/d1c69586b9.js" crossorigin="anonymous"></script>
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