<!DOCTYPE HTML>

<html lang="en">
<body>   

    <!-- Header -->
    <?php 
        require_once "header.html";
    ?>
    
    <!-- X3dom -->
    <link rel='stylesheet' type='text/css' href='css/x3dom.css'>
    <script src='js/x3dom.js'></script>
    <script src='js/modelInteractions.js'></script>

        <h1>BOTTLE 3: HeeHee</h1>
        <br>

        <div class="row">
            <x3d id="model" class="col-sm" width='100%' height='100%' name='x3dBlock'> 
                <scene>
                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/bottleAltAgain.x3d"> </inline>
                </scene>
            </x3d>  

            <div class="col-sm">
                <div class="btn btn-secondary btn-responsive" onclick="wireframe();">wireframe</div>
                <div class="btn btn-success btn-responsive" onclick="headlight();">headlight</div>
                <div class="btn btn-success btn-responsive" onclick="spin();">spin</div>
                <div class="btn btn-success btn-responsive" onclick="stopRotation();">stopRotation</div>
                <div class="btn btn-success btn-responsive" onclick="cameraFront();">cameraFront</div>
                <div class="btn btn-success btn-responsive" onclick="cameraBack();">cameraBack</div>
                <div class="btn btn-success btn-responsive" onclick="cameraLeft();">cameraLeft</div>
                <div class="btn btn-success btn-responsive" onclick="cameraRight();">cameraRight</div>
                <div class="btn btn-success btn-responsive" onclick="cameraTop();">cameraTop</div>
                <div class="btn btn-success btn-responsive" onclick="cameraBottom();">cameraBottom</div>
            </div>
        </div>

        <!-- <script src="js/generateModels.js"></script> -->


    <br>
    <!-- Footer -->
    <?php
        require_once "footer.html";
    ?>

</body>
</html>