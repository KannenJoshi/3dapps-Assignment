<!DOCTYPE HTML>

<html lang="en">
<body>

    <!-- Header -->
    <?php 
        require_once "header.html";
    ?>

        <h1>HOME PAGE</h1>
        <br>

        <div id="cards" class="col">
            <script>
                $.getJSON('application/model/model_home.php', function(json) {
                console.log(json);
                $.each(json, function(card) {
                    var html =  '<div class="card">'
                    html +=     '   <a href="'+card.imgURL+'">';
                    html +=     '       <img class="card-img-top img-fluid img-thumbnail" src="'+card.imgURL+'">';
                    html +=     '   </a>';
                    html +=     '   <div class="card-body">';
                    html +=     '       <h3 class="card-title">'+card.name+'</h3>';
                    html +=     '       <p class="card-text">';
                    html +=     '           <p>'+card.description+'</p>';
                    html +=     '           <a href="'+card.gotoURL+'" class="btn btn-primary">Find out more ...</a>';
                    html +=     '       </p>';
                    html +=     '   </div>';
                    html +=     '</div>';
                    $("#cards").append(html);
                })
            }).fail(console.log('oof'));
            </script>
        </div>

    <br>
    <!-- Footer -->
    <?php
        require_once "footer.html";
    ?>

</body>
</html>