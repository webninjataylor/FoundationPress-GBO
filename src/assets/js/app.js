import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

$(document).foundation();

$(function(){
  // ***************************************************************************
  // EXTERNAL LINKS: Method for setting all external links to open in a new tab.
  // ***************************************************************************
  var gbo = window.location.hostname;
  var isAbsolute = '://';
  $.each($('a'), function(i, link){   // For each link on the page...
    var linkHREF = $(link).attr('href');
    if(linkHREF.includes(isAbsolute)){   // ...check if the href is absolute...
      if(!linkHREF.includes(gbo)){   // ...if absolute, check if within the same domain...
        $(link).attr('target', '_blank');   // ...if not the same domain, open the link in a new tab.
      }
    }
  });
  // ****************************************************
  // MOVE BREADCRUMBS: Move breadcrumbs below page title.
  // ****************************************************
  if($('#crumbs').length === 1){
    $('.main-content header').append($('#crumbs').remove());
  }
  // ***********************************************************************
  // SCROLL-TO-TOP: Scrolling to the top of the page via Back-to-top button.
  // ***********************************************************************
  if($('#backToTop').length === 1) {
    $('#backToTop').click(function(){
      $('html, body').animate({
        scrollTop: 0
      }, 1000);
    });
  }
  // *****************************************************************************
  // STICKY HEADER: Scrolling on the page locks the header to the top of the page.
  // *****************************************************************************
  var gboHeader = $('.site-header');
  var gboSticky = gboHeader.offset().top;
  window.onscroll = function() {
    if (window.pageYOffset > gboSticky) {
      gboHeader.addClass('sticky');
    } else {
      gboHeader.removeClass('sticky');
    }
  };
});
