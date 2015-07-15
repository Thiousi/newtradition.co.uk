// Detect touch device
if ("ontouchstart" in document.documentElement) {
  document.getElementsByTagName("body")[0].className+=" touch-device"
}

// Share Button
var shareBtn = document.querySelector(".btn-share");
shareBtn.addEventListener("click", function(event) {
  this.parentNode.classList.toggle("active");
});