<h1>The purchase has been made successfully!</h1>
<div style = 'text-align:left'>
    <?php foreach ($_SESSION["cart"] as $i) { ?>
                <p>x<?php echo $_SESSION['quantity'][$i] ?> <?php echo $_SESSION['name'][$i] ?> $<?php echo $_SESSION['amount'][$i] ?></p>
    <?php } ?>

    <br/>
    <h2>TOTAL: $<?php echo $_SESSION['total']?></h2>
</div>
<a href='/index.php?accio=home'>🏠 Home</a> 