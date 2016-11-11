/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y };
}
// setting the viewport width
var viewport = updateViewportDimensions();


/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;


function loadGravatars() {
  // set the viewport using the function above
  viewport = updateViewportDimensions();
  // if the viewport is tablet or larger, we load in the gravatars
  if (viewport.width >= 768) {
  jQuery('.comment img[data-gravatar]').each(function(){
    jQuery(this).attr('src',jQuery(this).attr('data-gravatar'));
  });
	}
} // end function


/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {

  $('#menu-main-menu').find('a').addClass('hvr-underline-from-center');

  var options = {
    useEasing : true, 
    useGrouping : true, 
    separator : ',', 
    decimal : '.', 
    prefix : '', 
    suffix : '' 
  };


  /*
   * Let's fire off the gravatar function
   * You can remove this if you don't need it
  */
  loadGravatars();
  var $icons;
  var $highlightsWrapper;
  var isHome = false;
  var isProduct = false;
  var highlightOne;
  var highlightTwo;
  var highlightThree;

  if ($('body').hasClass('home') ) {
    $icons = $('.icons-holder');
    isHome = true;
  }

  if ($('body').hasClass('page-id-45') ) {
    $highlightsWrapper = $('#highlights-wrapper');
    highlightOne = new CountUp("counter-one", 0, 220, 0, 2.5, options);
    highlightTwo = new CountUp("counter-two", 0, 102, 0, 2.5, options);
    highlightThree = new CountUp("counter-three", 0, 58, 0, 2.5, options);
    isProduct = true;
  }

  

  $(window).scroll(function() {

    if ( isHome ) {

      if ( $icons.is( ':in-viewport' ) ) {
        $icons.addClass('in-view');
      }

    }
    

    if ( isProduct ) {

      if ( $highlightsWrapper.is( ':in-viewport' ) ) {

        setTimeout(function(){
          highlightOne.start();
          highlightTwo.start();
          highlightThree.start();
        }, 250)
      
      }

    }


    

  });
  



}); /* end of as page load scripts */
