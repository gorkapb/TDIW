<?php if ($color == 'red') { ?>
    <div class='red-alert'>
        <p><?php echo htmlentities($text, ENT_QUOTES | ENT_HTML5, 'UTF-8')?></p>
    </div>
<?php } elseif ($color == 'green') { ?>
    <div class='green-alert'>
        <p><?php echo htmlentities($text, ENT_QUOTES | ENT_HTML5, 'UTF-8')?></p>
    </div>
<?php } ?>

<script>// empty(); </script> 


