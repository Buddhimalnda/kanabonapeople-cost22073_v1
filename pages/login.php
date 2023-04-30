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
    
<body class="login">
    <div class="row">
        <div class="col l">
            <form action="scripts/login.php" method="post">
                <h1>Login</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, voluptates? Adipisci esse accusantium,
                    explicabo incidunt harum aliquid placeat</p>
                <div class="group input">
                    <label for="intTFUName">User Name</label>
                    <div class="icon"><i class="fa fa-user-secret"></i></div>
                    <input type="text" id="intTFUName" placeholder="User Name" name="username" >
                </div>
                <div class="group input">
                    <label for="intTFPasswd">Password</label>
                    <div class="icon"><i class="fa fa-key"></i></div>
                    <input type="text" id="intTFPasswd" placeholder="Password" name="password">
                </div>
                <div class="group">
                    <button class="btn" type="submit">
                        Login
                    </button>
                </div>
                <div class="group">
                    <div class="re-me">
                        <input type="checkbox"> <span>Remember me</span>
                    </div>
                    <div class="rest-pw">
                        <a href="">forget password</a>
                    </div>
                </div>
                <div class="group hr"></div>
        
                <div class="group social">
                    <div class="social">
                        <div class="icon google">
                            <i class="fa fa-google"></i>
                        </div>
                        <div class="icon facebook">
                            <i class="fa fa-facebook"></i>
                        </div>
                        <div class="icon twitter">
                            <i class="fa fa-twitter"></i>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col r">
            <h1>Welocome</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque laudantium nam blanditiis sapiente, at asperiores deleniti rem, iste voluptatem quod, sit aliquid saepe voluptas error itaque beatae quas dolore. Voluptates?</p>
            <p>haven't account?.. <br> Please follow this.</p>
            <div class="btn">Sign up</div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/d1c69586b9.js" crossorigin="anonymous"></script>

</body>
</html>