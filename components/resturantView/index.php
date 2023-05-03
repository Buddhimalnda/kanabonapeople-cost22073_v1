<div class="resturent">
    <div class="title">
        <h1>Resturent List</h1>
        <?php
        if ($user->getType() === 'admin') {
            echo "
                <div class='icons'>
                    <a href='pages/admin/addResturant.htm'>
                        <i class='fa fa-pen-to-square'></i>
                    </a>
                    <a href=''>
                        <i class='fa-solid fa-eye'></i>
                    </a>
                </div>
                ";
        }
        ?>
    </div>
    <div class="resturent-list">
        <?php
        $r = new Restaurant($db->connect(), false);
        $resturents = $r->getAllRestaurant();
        for ($i = 0; $i < count($resturents); $i++) {
            ?>
            <article class="card">
                <?php
                $resturent = new Restaurant($db->connect(), $resturents[$i]->getId());
                $img = $resturent->getImage();
                echo "<div class='thumb' style='background: url($img) no-repeat center;'></div>";
                ?>
                <div class="infos">
                    <h2 class="title">
                        <?php echo $resturent->getName(); ?><span class="flag"></span>
                    </h2>
                    <h3 class="seats">seats remaining: 2</h3>
                    <p class="txt">
                        <!-- <?php echo $resturent->getDescription() ?> -->
                    <h3 class="date">
                        <?php echo $resturent->getAddress(); ?>
                    </h3>
                    </p>
                    <?php
                    $id = $resturent->getId();
                    echo "<a class='details' href='pages/resturent.php?id=$id' target='_blank' rel='noopener noreferrer'> " ?>
                    <h3 class="">
                        More details
                    </h3>
                    </a>
                </div>
            </article>
            <?php
        }
        ?>
    </div>
</div>