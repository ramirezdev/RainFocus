/*var nfForms = nfForms || [];*/
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


/*function generateSig( data ) {
  var mobile = '';
  var telephone = '';

  if( data.mobile !==  '' ) {
    mobile = '<div style="font-family: Helvetica, Arial, sans-serif; font-size: 9pt; line-height: 8px; color: rgb(102, 102, 102); margin-bottom: 10px;">\n<span style="font-weight: bold; color: rgb(102, 102, 102); display: inline;">M</span> <span style="font-weight: bold; color: rgb(102, 102, 102); display: inline; padding: 0 5px;"> • </span> <span style="color: rgb(102, 102, 102); font-size: 11pt; display: inline;">' + data.mobile + '</span>\n</div>\n'
  } 

  if (data.tel !== '' ) {
    telephone = '<div style="font-family: Helvetica, Arial, sans-serif; font-size: 9pt; line-height: 8px; color: rgb(102, 102, 102); margin-bottom: 10px;">\n<span style="font-weight: bold; color: rgb(102, 102, 102); display: inline;">T</span> <span style="font-weight: bold; color: rgb(102, 102, 102); display: inline; padding: 0 5px;"> • </span> <span style="color: rgb(102, 102, 102); font-size: 11pt; display: inline;">' + data.tel +'</span>\n</div>\n'
  }
  var code = '<div style="text-size-adjust: none !important; -ms-text-size-adjust: none !important; -webkit-text-size-adjust: none !important;">\n<div style="font-family: Helvetica, Arial, sans-serif; font-size: 11pt; line-height: 12px; color: rgb(225, 58, 93); margin-bottom: 20px;">\n<span style="font-weight: bold; color: rgb(225, 58, 93); display: inline;">' + data.name + '</span>, <span style="color: rgb(102, 102, 102); display: inline;">' + data.title + '</span>\n<img style="display:block; border:none; margin-top:12px" src="http://www.rainfocus.com/wp-content/uploads/2016/12/line.jpg" alt="RainFocus" border="0" width="350" height="2">\n</div>\n<div style="margin-left: 5px;">\n<div style="font-family: Helvetica, Arial, sans-serif; font-size: 12pt; line-height: 12px; color: rgb(225, 58, 93); margin-bottom: 10px;">\n' + '<span></span>' + mobile + '<span></span>' + telephone + '\n<div style="font-family: Helvetica, Arial, sans-serif; font-size: 9pt; line-height: 8px; color: rgb(102, 102, 102); margin-bottom: 10px;">\n<span style="font-weight: bold; color: rgb(102, 102, 102); display: inline;">E</span> <span style="font-weight: bold; color: rgb(102, 102, 102); display: inline; padding: 0 5px;"> • </span> <a style="color: rgb(102, 102, 102); font-size: 11pt; display: inline; text-decoration:none;" href="' + data.email + '"><span></span>' + data.email + '</a>\n</div>\n</div>\n</div>\n</div>\n<div style="margin-top:30px;">\n<a style="text-decoration:none; display:inline-block;" href="https://www.rainfocus.com">\n<img style="display:block; border:none;" src="http://www.rainfocus.com/wp-content/uploads/2016/12/rainfocus_logo_gradient.png" alt="RainFocus" border="0" width="166" height="50">\n</a>\n<p style="font-family: Helvetica, Arial, sans-serif; font-size: 8pt; line-height: 8px; color: rgb(102, 102, 102); margin-bottom: 6px;">\n<span style="color: rgb(102, 102, 102); display: inline;">Empowering Meaningful Experiences Through Living Data.</span>\n</p>\n</div>\n</div>'
  return code;
}*/

function generateSig( data ) {
  var mobile = '';
  var telephone = '';

  if( data.mobile !==  '' ) {
    mobile = '<tr>\n<td width="5px" align="center" style="color: rgb(102, 102, 102); border:0;">M</td>\n<td width="2px" align="left">•</td>\n<td width="200px" align="left" style="border:0; color: rgb(102, 102, 102);">' + data.mobile + '</td>\n</tr>';
  } 

  if (data.tel !== '' ) {
    telephone = '<tr>\n<td width="5px" align="center" style="color: rgb(102, 102, 102); border:0;">T</td>\n<td width="2px" align="left">•</td>\n<td width="200px" align="left" style="border:0; color: rgb(102, 102, 102);">' + data.tel + '</td>\n</tr>';
  }

  telephone = ( telephone + mobile );
  
  var code = '<section class="signature-area">\n<hr align="left" style="max-width: 5em; border-collapse: collapse; border:none; text-align:left;">\n<p style="font-family: montserrat, arial, sans-serif;margin: 0; padding: 1em 0">\n<span style="font-weight: 700;color:rgba(225, 58, 93, 1)">' + data.name + ',</span><span style="font-weight: 300; margin:0em 0; padding:0;font-size: 1em; height: 1em; line-height:2.5em; color: rgb(102, 102, 102);"> ' + data.title + '</span><img style="display:block; border:none; margin-bottom:0em" src="http://www.rainfocus.com/wp-content/uploads/2016/12/line.jpg" alt="RainFocus" border="0" width="300" height="2">\n</p>\n<table style="table-layout:  auto; width: 300px;font-family: montserrat,arial,sans-serif;font-weight: 100;  margin:0; padding:0;font-size: 0.75em; height: 1em; line-height:.5em; border:none;" cellpadding = "5">\n<tbody>\n' + telephone + '<tr style="border:0;">\n<td width="5px" align="center" style="border:0; color: rgb(102, 102, 102);">@</td>\n<td width="2px" align="left" style="border:0;">•</td>\n<td width="200px" align="left" style="border:0;"><a href="' + data.email + '" style="color: rgb(102, 102, 102); text-decoration:none;">' + data.email + '</a></td>\n</tr>\n</tbody>\n</table>\n<p style="padding-top: .1em"></p>\n<p style="text-decoration:none;line-height:1em;">\n<a href="http://www.rainfocus.com"><img style="display:block; border:none;" src="http://www.rainfocus.com/wp-content/uploads/2016/12/rainfocus_logo_gradient.png" alt="RainFocus" border="0" width="130px" height="40px"></a>\n</p>\n<p style="font-family: montserrat,arial,sans-serif;font-weight: 200;  margin:0; padding:0;font-size: 0.5em; height: 1em; line-height:0em; color: rgb(102, 102, 102);">Empowering Meaningful Experiences Through Living Data.</p>\n</p>\n</section>'
  return code;
}

/*
 * Put all your regular jQuery in here.
*/
var currentSupportPageView = 'gen-support';

jQuery(document).ready(function($) {

  if( $('body').hasClass('page-id-493') ) {
    var flask = new CodeFlask;
    flask.run('#code-wrapper', { language: 'javascript' });

    //flask.update( generateSig( {} ) );

    /*flask.update("<button>Heeeey, whats up?</button>");*/
    $( "#gen-submit" ).on( "click", function() {
      var data = {
        name: $('#emp-name').val(),
        title: $('#emp-title').val(),
        mobile: $('#emp-mobile').val(),
        tel: $('#emp-tel').val(),
        email: $('#emp-email').val()
      }
      flask.update( generateSig( data ) );
      $('#sig-prev .code-block').html( generateSig( data ) );

    });

    $( "#gen-reset" ).on( "click", function() {
      $('#emp-name').val('');
      $('#emp-title').val('');
      $('#emp-mobile').val('');
      $('#emp-tel').val('');
      $('#emp-email').val('');
      flask.update( '' );
    });
  }

  $( '#general-support-row' ).fadeTo( "slow" , 1);
  
  $('#general-support').on( "click", function( e ) {
    
    e.preventDefault();
    if ( currentSupportPageView !== 'gen-support' ) {
      
      $( this ).addClass('active');
      $( this ).removeClass('hvr-underline-from-center');
      
      
      $( '#lead-help' ).removeClass( 'active' );
      $( '#lead-help' ).addClass('hvr-underline-from-center');

      $( "#lead-help-row" ).fadeTo( "fast" , 0, function() {
        $( '#lead-help-row' ).removeClass('active');
        $( '#lead-help-row' ).css('display', 'none');
        $( '#general-support-row' ).addClass('active');
        $( "#general-support-row" ).fadeTo( "slow" , 1);
      });
      
      currentSupportPageView = 'gen-support'
    }
    

  });

  $('#lead-help').on( "click", function( e ) {
    
    e.preventDefault();
    if ( currentSupportPageView !== 'lead-help' ) {

      $( this ).addClass('active');
      $( this ).removeClass('hvr-underline-from-center');


      $( '#general-support' ).removeClass( 'active' );
      $( '#general-support' ).addClass('hvr-underline-from-center');

      $( "#general-support-row" ).fadeOut( "slow" , function() {
        $( '#general-support-row' ).removeClass('active');
        $( '#lead-help-row' ).addClass('active');
        $( "#lead-help-row" ).fadeTo( "fast" , 1);
      });

      currentSupportPageView = 'lead-help'
    }
    

  });
  

  $('#menu-main-menu').find('a').addClass('hvr-underline-from-center');
  console.log('HERE1');
  var options = { useEasing : true, useGrouping : true, separator : ',', decimal : '.', prefix : '', suffix : '' };


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
    if( typeof CountUp != 'undefined' ) {
      highlightOne = new CountUp("counter-one", 0, 27315, 0, 2.5, options);
      highlightTwo = new CountUp("counter-two", 0, 1632, 0, 2.5, options);
      highlightThree = new CountUp("counter-three", 0, 171, 0, 2.5, options);
    }
    
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
