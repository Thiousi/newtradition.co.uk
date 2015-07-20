// Has Class
function hasClass(elem, className) {
  return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}

// Toggle Class
function toggleClass(elem, className) {
  var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
    if (hasClass(elem, className)) {
      while (newClass.indexOf(" " + className + " ") >= 0 ) {
          newClass = newClass.replace( " " + className + " " , " " );
      }
      elem.className = newClass.replace(/^\s+|\s+$/g, '');
    } else {
      elem.className += ' ' + className;
    }
}

// Menu Toggle
var btnMenu = document.querySelector(".btn-menu");
if (btnMenu !== null) {
  btnMenu.addEventListener("click", function(event) {
    toggleClass(this, 'active');
  });
}

// Share Buttons
var btnShare = document.querySelector(".btn-share");
if (btnShare !== null) {
  btnShare.addEventListener("click", function(event) {
    toggleClass(this.parentNode, 'active');
  });
}

// Detect touch device
if ("ontouchstart" in document.documentElement) {
  document.getElementsByTagName("body")[0].className+=" touch-device";
}

// Disqus
var disqusThread = document.getElementById("disqus_thread");
var disqusShortname = 'newtraditiontest';
if (disqusThread !== null) {
  (function() {
    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
    dsq.src = '//' + disqusShortname + '.disqus.com/embed.js';
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
  })();
}

// Window Load
window.onload = function(){
  // Remove preload class from body
  document.getElementsByTagName("body")[0].className =
    document.getElementsByTagName("body")[0].className.replace( /(?:^|\s)preload(?!\S)/ , '' );
};