<?php
include 'php/db_config.php';
include 'php/connect.php';
include 'php/classes/user.php';
$db = new DB_CONNECT();
$name = $_SESSION['username'];
echo "<script>console.log('$name');</script>";
$user = new User($db->connect(), $name);
$auth = false;
if($_SESSION['login']){
    $auth= true;
}

?>
<nav>
    <div class="left-nav">
        <div class="logo">
            <img src="https://cdn.discordapp.com/attachments/1089198968724017262/1090833612959658014/logo.png"
                alt="logo" width="100" />
        </div>
        <div class="links">
            <a href="#" class="link">
                <div class="icon">
                    <i class="fa fa-gauge"></i>
                </div>
                <div class="text">Dashboard</div>
            </a>
            <a href="#" class="link">
                <div class="icon">
                    <i class="fa fa-gauge"></i>
                </div>
                <div class="text">Dashboard</div>
            </a>
            <a href="#" class="link">
                <div class="icon">
                    <i class="fa fa-gauge"></i>
                </div>
                <div class="text">Dashboard</div>
            </a>
        </div>
        <div class="footer">
            <?php
                if(!$auth){
?>
<div class="non-auth">
    <a href="" class="link">
        <div class="icon">
            <i class="fa fa-right-to-bracket"></i>
        </div>
        <div class="text">Sign in</div>
    </a>
    <a href="" class="link">
        <div class="icon">
            <i class="fa-sharp fa fa-user-plus"></i>
        </div>
        <div class="text">Sign Up</div>
    </a>
</div>

<?php
                }else{
                    ?>
                    
                    <div class="auth">
                        <form action="#" method="post">
                            <button name="logout" class="link" style="color: red">
                                <div class="icon">
                                    <i class="fa fa-right-from-bracket"></i>
                                </div>
                                <div class="text">Logout</div>
                            </button>

                        </form>
                    </div>
                    <?php
                }
                if(isset($_POST['logout'])) {
                    $user->logoutSession();
                    header("location: index.php");
                }
            ?>
        </div>
    </div>
    <div class="right-nav ">
        <div class="profile card-box">
            <div class="title">
                <h2>My Profile</h2>
                <i class="fa fa-ellipsis-vertical"></i>
            </div>
            <div class="card">
                <div class="profile-card">
                    <div class="image-box">
                        <div class="edit-btn">
                            <img src="https://cdn.discordapp.com/attachments/1090881998039568467/1090884078494044273/icon1.png"
                                alt="">
                        </div>
                        <div class="profile-img">
                        <?php 
                        $img = $user->getImg();
                        echo "<img src=$img alt='pp'>";
                        ?>
                            
                            <h1><?php echo $user->getUsername() ?></h1>
                            <small><?php  echo $user->getType() ?></small>
                        </div>
                    </div>
                    <div class="profile-data">
                        <div class="count-box">
                            <div class="count-img">
                                <img src="https://cdn.discordapp.com/attachments/1090881998039568467/1090884078808612945/icon2.png"
                                    alt="">
                            </div>
                            <div class="count-text">
                                <h3>14,765</h3>
                                <p>Product Sales</p>
                            </div>
                        </div>
                        <div class="count-box">
                            <div class="count-img">
                                <img src="https://cdn.discordapp.com/attachments/1090881998039568467/1090884077231558696/icon3.png"
                                    alt="">
                            </div>
                            <div class="count-text">
                                <h3>30bil+</h3>
                                <p>Earning</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="recent-order card-box">
            <div class="title">
                <h2>Recent Order</h2>
                <i class="fa fa-ellipsis-vertical"></i>
            </div>
        </div>
    </div>
</nav>