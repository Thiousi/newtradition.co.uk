$(document).ready(function() {
  var loader = function() {
    loadMore();
      return false;
    };
  
  $('.btn-load').bind('click', loader);
    var amount = 2;
    var offset = (amount * 3) + 1;
    function loadMore(){
    $.ajax({
      url      : 'ajax-journal',
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
});