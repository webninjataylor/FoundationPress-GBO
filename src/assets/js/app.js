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
});

// Click function for back-to-top
// document.body.scrollTop = 0; // For Safari
// document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
// <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
/*
#myBtn {
    display: none; / Hidden by default /
    position: fixed; / Fixed/sticky position /
    bottom: 20px; / Place the button at the bottom of the page /
    right: 30px; / Place the button 30px from the right /
    z-index: 99; / Make sure it does not overlap /
    border: none; / Remove borders /
    outline: none; / Remove outline /
    background-color: red; / Set a background color /
    color: white; / Text color /
    cursor: pointer; / Add a mouse pointer on hover /
    padding: 15px; / Some padding /
    border-radius: 10px; / Rounded corners /
    font-size: 18px; / Increase font size /
}

#myBtn:hover {
    background-color: #555; / Add a dark-grey background on hover /
}


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

 */
