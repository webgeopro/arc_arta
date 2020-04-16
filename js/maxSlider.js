$("document").ready(function() {
    /*$(".maxSlider").easySlider({
        userHref: true,
        userNextId: "aMaxSliderNext",
        userPrevId: "aMaxSliderPrev",
        speed: 300,
		continuous: true
	});*/
    $('.maxSlider').movingBoxes({
            targetDiv : 'divMaxSliderText',
            // Appearance
            startPanel   : 15,         // start with this panel
            reducedSize  : 0.5,       // non-current panel size: 80% of panel size
            fixedHeight  : true,     // if true, slider height set to max panel height; if false, slider height will auto adjust.

            // Behaviour
            speed        : 500,       // animation time in milliseconds
            initAnimation: false,      // if true, MovingBoxes will initialize, then animate into the starting slide (if not the first slide)
            hashTags     : true,      // if true, hash tags are enabled
            wrap         : false,     // if true, the panel will "wrap" (now loops in v2.2, or appears as if there are infinite panels)
            buildNav     : false,     // if true, navigation links will be added
            navFormatter : null,      // function which returns the navigation text for each panel
            easing       : 'swing',   // anything other than "linear" or "swing" requires the easing plugin

            // Selectors & classes
            currentPanel : 'current', // current panel class
            tooltipClass : 'tooltip', // added to the navigation, but the title attribute is blank unless the link text-indent is negative
            disabled     : 'disabled',// class added to arrows that are disabled (left arrow when on first panel, right arrow on last panel)

            // Callbacks
            initialized     : null,   // callback when MovingBoxes has completed initialization
            initChange      : null,   // callback upon change panel initialization
            beforeAnimation : null,   // callback before any animation occurs
            completed       : null    // callback after animation completes

    });
});
function showText()
{
    alert('showText');
}