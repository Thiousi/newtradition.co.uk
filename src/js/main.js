// Window Load
window.onload = function(){
  // Remove preload class from body
  document.getElementsByTagName("body")[0].className =
    document.getElementsByTagName("body")[0].className.replace( /(?:^|\s)preload(?!\S)/ , '' );
};

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

// Load more posts
var journal = document.querySelector(".journal");
var home = document.querySelector(".home");
var loader = function() {
loadMore();
  return false;
};
    
$('.btn-load').bind('click', loader);
  var amount = 2;
  var offset = (amount * 3) + 1;
  if (journal !== null) {
    var ajaxURL = '../ajax-journal';
  } else if (home !== null) {
    var ajaxURL = '../ajax-home';
  }
  function loadMore(){
  $.ajax({
    url      : ajaxURL,
    type     : 'post',
    dataType : 'json',
    data : {
      'amount' : amount,
      'offset' : offset
  }
  }).done(function(data){
    $('.btn-load').before(data[0]);

    if(!data[1]){
      $('.btn-load').unbind('click', loader);
    }
  });
  offset += (amount * 3) + 1;
}

// Hide features on tag specific layouts
if (window.location.href.indexOf("tag:") != -1) {
  var feature = document.querySelector(".featured");
  feature.style.display = 'none';
  var tagTitle = document.querySelector(".tag-title");
  var tagTitleText = window.location.pathname.split(":");
  tagTitle.innerHTML = tagTitleText[tagTitleText.length - 1];
  tagTitle.style.display = 'block';
  var url = document.URL;
  var tagBtn = document.querySelectorAll(".tag");
  for ( var i = 0; i < tagBtn.length; i++) {
    if(tagBtn[i].getAttribute('href') === url){
        tagBtn[i].className+=" active";
    }
  }
}
