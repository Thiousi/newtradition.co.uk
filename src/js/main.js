// Detect touch device
if ("ontouchstart" in document.documentElement) {
  document.getElementsByTagName("body")[0].className+=" touch-device"
}

// Share Buttons
var shareBtn = document.querySelector(".btn-share");
if (document.shareBtn == true) {
  shareBtn.addEventListener("click", function(event) {
    this.parentNode.classList.toggle("active");
  });
}

// Window Load
window.onload = function(){
  // Remove preload class from body
  document.getElementsByTagName("body")[0].className =
    document.getElementsByTagName("body")[0].className.replace(/\preload\b/,'');
}