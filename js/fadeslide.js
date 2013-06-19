$(document).ready(function() {
        slideshow();
     });

function slideshow() {
var showing=$('#container .is-showing'); // assegno la classe .is-showing ad una variabile
    var next=showing.next().length ? showing.next() : showing.parent().children(':first');
    showing.fadeOut(1500, function() { next.fadeIn(1500).addClass('is-showing'); }).removeClass('is-showing');
    setTimeout(slideshow, 6000);
}