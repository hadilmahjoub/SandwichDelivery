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
        <p><?= $key . ": " . $value ?></p>


    <?php } ?>

</div>

</html>