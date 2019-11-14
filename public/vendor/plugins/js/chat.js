$(document).ready(function(){
    
    $('.chat_head').click(function(){
        $('.chat_body').slideToggle('slow');
    });

    $('.msg_head').click(function(){
        $('.msg_wrap').slideToggle('slow');
    });

    $('.msg_close').click(function(){
        $('.msg_box').hide();
    });

    
    
    $(".username_chat").click(function(){
        var friendid = event.target.id;
        window.location.href = "http://"+ document.domain +"/players/index/"+friendid;

 
        
    });



});

function onReady(callback) {
    var intervalId = window.setInterval(function() {
      if (document.getElementsByTagName('body')[0] !== undefined) {
        window.clearInterval(intervalId);
        callback.call(this);
      }
    }, 1000);
  }
  
  function setVisible(selector, visible) {
    document.querySelector(selector).style.display = visible ? 'block' : 'none';
  }
  
  onReady(function() {
    setVisible('.page', true);
    setVisible('#loading', false);
  });