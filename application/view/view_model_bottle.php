<!DOCTYPE HTML>

<html lang="en">
<body>

    <!-- Header -->
    <?php 
        require_once "header.html";
    ?>

        <h1>BOTTLE</h1>
        <br>

        <x3d width='60vw' height='40vh' name='x3dBlock'> 
            <scene>
                <inline nameSpaceName="Bottle" url="../../assets/x3d/bottle.x3d"> </inline>
            </scene>
        </x3d> 

    <br>
    <!-- Footer -->
    <?php
        require_once "footer.html";
    ?>

</body>
</html>