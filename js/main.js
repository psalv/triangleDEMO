

function resizeEvent(){
    var width = $(this).width();
    var point1 = Math.floor(width/5);
    var point2 = Math.floor(width/10);
    var space = Math.floor(width * 0.01);
    var mid = Math.floor(width/2) - point2

    $('#svg1').attr({
        width: width,
        height: point1
    });

    // Equilateral triangles
    $('#poly1').attr('points', point2 + ",0 0," + point1 + " " + point1 + "," + point1);
    $('#poly2').attr('points', "0,0 " + point1 + ",0 " + point2 + "," + point1);

    $('#im1').attr({
        width: point1,
        height: point1,
        transform: "translate(" + (mid - 2*point2 - 2*space) + ", 0)"
    });

    $('#im2').attr({
        width: point1,
        height: point1,
        transform: "translate(" + (mid - 1*point2 - 1*space) + ", 0)"
    });

    $('#im3').attr({
        width: point1,
        height: point1,
        transform: "translate(" + (mid) + ", 0)"
    });

    $('#im4').attr({
        width: point1,
        height: point1,
        transform: "translate(" + (mid + 1*point2 + 1*space) + ", 0)"
    });

    $('#im5').attr({
        width: point1,
        height: point1,
        transform: "translate(" + (mid + 2*point2 + 2*space) + ", 0)"
    });

    /*
     <polygon points="0,0 100,200 200,0" fill="" id="poly3">
     <clipPath id="clip4">
     <polygon points="200,200 0,200 100,200" fill="" id="poly4">
     */

    // Right angle triangles
    $('#poly3').attr('points', "0,0 " + point2 + "," + point1 + " " + point1 + ",0");
    $('#poly4').attr('points', point1 + "," + point1 + " 0," + point1 + " " + point2 + "," + point1);

    $('#im0').attr({
        width: point1,
        height: point1,
        transform: "translate(" + (mid - 3*point2 - 3*space) + ", 0)"   // left end
    });

    $('#im6').attr({
        width: point1,
        height: point1,
        transform: "translate(" + (mid + 3*point2 + 3*space) + ", 0)"   // right end
    });
}

$(function jQueryResize (){
    $(window).resize(function(){
        resizeEvent();
    })
});


$(function imageSelectors () {

    $('#im1').on('click', function(){
        window.location.href = "//developersfoundation.ca";
    });

    $('#im2').on('click', function(){
        window.location.href = "#";
    });
    $('#im3').on('click', function(){
        window.location.href = "#";
    });
    $('#im4').on('click', function(){
        window.location.href = "#";
    });
    $('#im5').on('click', function(){
        window.location.href = "#";
    });

});

$(function (){
    resizeEvent();
});