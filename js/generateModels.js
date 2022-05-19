$.getJSON('application/model/model_home.php', function(json) {});
                
function models(json) {
    json.forEach(modelMaker);
}

function modelMaker(m)
{
    var html =     '<x3d id="model" class="col-sm" width="100%" height="100%" name="x3dBlock"> ';
    html +=            '<scene>';
    html +=               '<inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="'+m.x3dURL+'"> </inline>';
    html +=            '</scene>';
    html +=        '</x3d> ';
    if (m.title) html += '<h2>'+m.title+'<h2>';
    if (m.subtitle) html += '<h4>'+m.subtitle+'<h4>';
    if (m.description) html += '<p>'+m.description+'<p>';
    $("#x3data").append(html);
}