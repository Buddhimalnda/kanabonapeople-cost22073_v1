<!DOCTYPE html>
<html lang="en">
    <?php 
        // include "../php/session.php";
        include "../php/header.php";
        // include "../php/config.php";
    ?>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="../assets/styles/signup.style.css">
    </head>
    
<body class="sign-up">
    <div class="row">
        <div class="col l">
            <h1>Welocome</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque laudantium nam blanditiis sapiente, at asperiores deleniti rem, iste voluptatem quod, sit aliquid saepe voluptas error itaque beatae quas dolore. Voluptates?</p>
            <p>Do you have account?.. <br> Please follow this.</p>
            <div class="btn">Login</div>
        </div>
        <div class="col r">
            <form action="scripts/signup.php" method="post">
                <h1>Sign Up </h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, voluptates? Adipisci esse accusantium, explicabo incidunt harum aliquid placeat</p>
                <div class="group input">
                    <label for="intTFUName">User Name</label>
                    <div class="icon"><i class="fa fa-user-secret"></i></div>
                    <input type="text" id="intTFUName" placeholder="Username" name="username">
                </div>
                <div class="group input">
                    <label for="intTFUName">Email</label>
                    <div class="icon"><i class="fa fa-envelope"></i></div>
                    <input type="email" id="intTFEmail" placeholder="Email"  name="email">
                </div>
                <div class="group input">
                    <label for="intTFPasswd">Number</label>
                    <div class="icon"><i class="fa fa-address-book"></i></div>
                    <input type="text" id="intTFNumber" placeholder="Number"  name="number">
                </div>
                <div class="group input">
                    <label for="intTFPasswd">Password</label>
                    <div class="icon"><i class="fa fa-key"></i></div>
                    <input type="password" id="intTFPasswd" placeholder="Password" name="password">
                </div>
                <div class="group">
                    <button class="btn">
                        Sign Up 
                    </button>
                </div>
                <!-- <div class="group">
                    
                </div> -->
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
        
    </div>
</html>