<?php
    // var_dump($_POST);
?>

<html>
<link rel="stylesheet" href="style.css" />
<div id="card">
    <header>
        <h1>Here is a recap for your order</h1>
    </header>

    <?php
    foreach ($_POST as $key => $value) {
    ?>
        <p><b><?= $key ?></b> <?= ": ". $value ?></p>

    <?php } ?>

    <footer>
        <?php 
        global $price;
        $price = 4*$_POST["sandnbr"];
            if ($_POST["sandnbr"] > 10) {
                $price -= $price * 0.1; 
            }
        ?>
        <h2>price to pay: <?= $price ?> dt</h2>
    </footer>

</div>

</html>