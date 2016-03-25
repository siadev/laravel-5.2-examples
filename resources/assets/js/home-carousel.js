/**
 * Created by simon on 18/02/16.
 */
$('#btn-one').click(function(){
    swal("Good job!", "You clicked the button!", "success")
});
$('#btn-two').click(function(){
    swal("Great job!", "You clicked the button again!", "success")
});
$('#btn-three').click(function(){
    swal("Hmmmm", "You clicked the button again whoopee!", "success")
});


/* Demo Scripts for Bootstrap Carousel and Animate.css article
 *
 */
(function( $ ) {

    //Function to animate slider captions
    function doAnimations( elems ) {
        //Cache the animation end event in a variable
        var animEndEv = 'webkitAnimationEnd animationend mozAnimationEnd MSAnimationEnd oanimationend';


        elems.each(function () {
            var $this = $(this),
                $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
            });
        });
    }

    //Variables on page load
    var $myCarousel = $('#carousel-example'),
        $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

    //Initialize carousel
    $myCarousel.carousel();

    //Animate captions in first slide on page load
    doAnimations($firstAnimatingElems);

    // Pause carousel
    //$myCarousel.carousel('pause');

    $myCarousel.on('slide.bs.carousel', function (e) {
        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
        doAnimations($animatingElems);
    });

})(jQuery);