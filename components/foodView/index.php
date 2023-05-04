<div class="foods">
    <div class="title">
        <h1>Foods List</h1>
        <?php
        if ($user->getType() === 'admin') {
            echo "
                <div class='icons'>
                    <a class='nomal' href='pages/admin/addFood.html'>
                        <i class='fa fa-pen-to-square'></i>
                    </a>
                    <a class='nomal' href=''>
                        <i class='fa-solid fa-eye'></i>
                    </a>
                </div>
                ";
        }
        ?>
    </div>
    <div class="food-list">
        <?php
        $f = new Food($db->connect(), false);
        $foods = $f->getAllFood();
        for ($i = 0; $i < count($foods); $i++) {
            ?>
            <div class="card">
                <?php
                $food = new Food($db->connect(), $foods[$i]->getId());
                ?>
                <div class="card__image">
                    <?php
                    $img = $food->getImage();
                    echo "<img src='$img' alt='Salad' />";
                    ?>
                </div>
                <div class="card__info">
                    <div class="car__info--title">
                        <h3>
                            <?php echo $food->getName(); ?>
                        </h3>
                        <p>
                            <?php echo $food->getDescription(); ?>
                        </p>
                    </div>
                    <div class="card__info--price">
                        <p>Rs.
                            <?php echo $food->getPrice(); ?>
                        </p>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                    <div class="add-cart">
                        <?php echo "<button onClick={myFunction()} ><i class='fa fa-cart-shopping'></i></i> order</button>" ?>
                        <script>
                            function myFunction() {
                                location.href = './test-components/food-order.html';
                            }
                        </script>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>