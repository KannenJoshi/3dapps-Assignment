<!-- Header -->
<?php require_once "header.html"; ?>

    <h1>HOME PAGE</h1>
    <br>

    <script src="js/createCards.js" type="text/javascript"></script>
    <div id="cards" class="col">
        <?php
            echo "<script> cardsFromJSON($data); </script>";
        ?>
    </div>

<br>
<!-- Footer -->
<?php require "footer.html"; ?>