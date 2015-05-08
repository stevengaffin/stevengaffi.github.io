    $(document).ready(function(){
        $(".tweet").tweet({
            username: "stevengaffin",
            avatar_size: 50,
            count: 4,

        });
    });
    

    

$(document).ready(function(){
$("img.a").hover(
function() {
$(this).stop().animate({"opacity": "0"}, "fast");
},
function() {
$(this).stop().animate({"opacity": "1"}, "slow");
});
 
});