$(document).ready(function(){
    $('nav ul li:has(ul) > a').append('<span><i class="fa fa-chevron-down" aria-hidden="true"></i></span>');
    $('nav li:has(ul)').hover(function(){
      $('ul',this).stop(true,true).slideToggle('slow');
    });
    // $('#menuToggle').click(function(){
    //     $('#mainNav').stop(true,true).slideToggle();
    // })
    
});