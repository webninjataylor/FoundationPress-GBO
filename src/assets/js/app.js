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
  if($('#crumbs').length === 1){
    $('.main-content header').append($('#crumbs').remove());   // Moves breadcrumbs below page title.
  }
});
