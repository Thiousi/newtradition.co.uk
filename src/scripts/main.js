function hasClass(el, cls) {
  return el.className && new RegExp("(\\s|^)" + cls + "(\\s|$)").test(el.className);
}

// Load more content
[].forEach.call(document.querySelectorAll('.btn-load'), function(el) {
  el.addEventListener('click', function() {
    var stream2 = document.querySelector('.stream-2');
    var stream3 = document.querySelector('.stream-3');
    if (hasClass(stream2, 'active')) {
      stream3.className += ' active';
    } else {
      stream2.className += ' active';
    }
  });
});