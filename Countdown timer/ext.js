$(document).ready(function(){
  $('#counter').countdown({date:'18 April 2017 15:02:00'},
  function(){
      $('#counter').text('We\'re live');
});
});
