<head>
    <link rel="stylesheet" href="left.nav.style.css">
</head>
<div class="left-nav">
    <ul>
        <li>
            <a href="#" class="logo">
                <img src="https://cdn.discordapp.com/attachments/1089198968724017262/1090833612959658014/logo.png"
                    alt="">
                <span>KanaBona Peoples</span>
            </a>
        </li>
        <li><a href="#">
                <i class="fas fa-home"></i>
                <span class="nav-item">Home</span>
            </a></li>
        <li><a href="#">
                <i class="fa-solid fa-utensils"></i>
                <span class="nav-item">Food</span>
            </a></li>
        <li><a href="#">
                <i class="fas fa-shop"></i>
                <span class="nav-item">Restaurant</span>
            </a></li>
        <li><a href="#">
               <i class="fa-solid fa-file-invoice-dollar"></i>
                <span class="nav-item">Order</span>
            </a></li>
        <li><a href="#">
                <i class="fas fa-users"></i>
                <span class="nav-item">Users</span>
            </a></li>
        <footer>
            <form action="#" method="post">
                
                <button name="logout" >
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Log Out</span>
                </button>
                
            </form>
            <?php
            if (isset($_POST['logout'])) {
                $user->logoutSession();
                header("location: index.php");
            }
            ?>
        </footer>

    </ul>
</div>