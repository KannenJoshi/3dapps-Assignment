$(document).ready(function() {

});

function cardsFromJSON(json) {
    $.getJSON(json, json.forEach(makeCard));
}

function makeCard(card) {
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
}