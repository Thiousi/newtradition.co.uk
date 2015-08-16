// Window Load
window.onload = function(){
  // Remove preload class from body
  document.getElementsByTagName("body")[0].className =
    document.getElementsByTagName("body")[0].className.replace( /(?:^|\s)preload(?!\S)/ , '' );

  // Pagination
  var pagination = document.querySelector(".pagination"); 
  if (pagination !== null) {
    var paginationLinks = pagination.getElementsByTagName("a"),
      i=0, len=paginationLinks.length,
      fullPath = location.href.split('#')[0];

    // Loop through each link.
    for (; i<len; i++) {
      if (paginationLinks[i].href.split("#")[0] == fullPath) {
        paginationLinks[i].className += " active";
      }
    }
  }
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
var navMenu = document.querySelector(".menu");
if (btnMenu !== null) {
  btnMenu.addEventListener("click", function(event) {
    toggleClass(this, 'active');
    toggleClass(navMenu, 'active');
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
   
var btnLoad = document.querySelector(".btn-load");
if (btnLoad !== null) { 
  $(btnLoad).bind('click', loader);
    var amount = 2;
    var offset = (amount * 3) + 1;
    function loadMore(){
      $.ajax({
        url      : 'stream',
        type     : 'post',
        dataType : 'json',
        data : {
          'amount' : amount,
          'offset' : offset
      }
    }).done(function(data){
      $(btnLoad).before(data[0]);
      if(!data[1]){
        $(btnLoad).unbind('click', loader).text("All posts have been loaded").removeClass("btn-load").addClass("btn-load-complete");
      }
    });
    offset += (amount * 3) + 1;
  }
}

// Hide features on tag specific layouts
var journalStream = document.querySelector(".journal-stream");
if (journalStream !== null) {
  if ((window.location.href.indexOf("tag:") != -1) || (window.location.href.indexOf("category:"))) {
    if (window.location.href.indexOf("tag:") != -1) {
      var tagBtn = document.querySelectorAll(".tag");
    } else {
      var tagBtn = document.querySelectorAll(".cat");
    }
    var url = document.URL;
    for ( var i = 0; i < tagBtn.length; i++) {
      if(tagBtn[i].getAttribute('href') === url) {
        tagBtn[i].className+=" active";
      }
    }
    var tagTitle = document.querySelector(".tag-title");
    var activeTag = document.querySelector(".sidebar .active");
    tagTitle.textContent = activeTag.textContent;
    tagTitle.style.display = 'block';
    if (activeTag !== null) {
      var feature = document.querySelector(".featured");
      feature.style.display = 'none';
    }
  }
}