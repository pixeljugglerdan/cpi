
var player = document.getElementById('zXscUitXHPc'); //save the object or embed youtube video in a variable
$('#ttvideoModalOne').on('hide', function () {
  player.stopVideo();
})

var vidplayer = document.getElementById('MjXAo2qxMlA'); //save the object or embed youtube video in a variable
$('#ttvideoModalTwo').on('hide', function () {
  vidplayer.stopVideo();
})




// START Document Ready Function
$(document).ready(function(){


$('.closed-loop').hide();

$('#toggleButton').click(function() {

  $('.closed-loop').toggle(function() {
	  if ($('.closed-loop').is(':visible')) {
	 $('#toggleButton').val('Show/Hide') 
	} else {
		$('#toggleButton').val('Show/Hide') 
	  }
  });
    
});


//Add nth selector support to IE using jq


$("section:nth-of-type(3n+2)").addClass('middle-ie');
$(".list-box:nth-of-type(3n+2)").addClass('middle-list-box-ie');



// Tender Fetch Ajax Posts
$.ajaxSetup({cache:false});
				$("#tenderMenu li a").click(function(){
					var post_id = $(this).attr("rel")
					$("#your_post_here").html("loading...");
					$('div.tenderAlert').hide();
					$("#your_post_here").load("http://www.uk-cpi.com/ajax-tenders/",{id:post_id});
					return false;
					});
					
// Tender Fetch Ajax Posts
$.ajaxSetup({cache:false});
				$("#careersMenu li a").click(function(){
					var post_id = $(this).attr("rel")
					$("#your_post_here").html("loading...");
					$('div.tenderAlert').hide();
					$("#your_post_here").load("http://www.uk-cpi.com/ajax-careers/",{id:post_id});
					return false;
					});


// Accordion Menu

//Hide (Collapse) the toggle containers on load
	$(".toggle_container").hide(); 

	//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
	$(".trigger").click(function(){
		$(this).toggleClass("active").next().slideToggle("slow");
		return false; //Prevent the browser jump to the link anchor
	});


// Initialise Tweet for Footer

$(".tweet").tweet({
            username: "ukcpi",
            join_text: "auto",
            count: 1,
            auto_join_text_default: "we said,", 
            auto_join_text_ed: "we",
            auto_join_text_ing: "we were",
            auto_join_text_reply: "we replied to",
            auto_join_text_url: "we were checking out",
            loading_text: "loading recent tweet...",
            template: "{text} - {retweet_action}"
        });

// Onclick inputbox clear for short search
$('#s').focus(function() {
		
	if($(this).val()=="search site"){
		$(this).val("");
	}
    }).blur(function(){
		if($(this).val()==""){
		$(this).val("search site");
	}
});

 
 
// Scroll page to the top
	$('a.scrollToTop').click(function(){
	$('html, body').animate({scrollTop:0}, 'slow');
 	return false;
 	});



// Newsletter reveal
var fieldExample = $('#mce-EMAIL');
$('div.newsletterExtend').css({
    "position":"absolute",
    "left":"0",
    "top":"102px"
});

fieldExample.focus(function() {
    var div = $('div.newsletterExtend').show();
    $(document).bind('focusin.newsletterExtend click.newsletterExtend',function(e) {
        if ($(e.target).closest('.newsletterExtend, #mce-EMAIL').length) return;
        $(document).unbind('.newsletterExtend');
        div.fadeOut('medium');
    });
});
$('div.newsletterExtend').hide();




}); // End Document Ready Function


$(document).ready(init);

function init() {
	$("#slide2").cycle({
		fx:     'scrollHorz', 
    	prev:   '#prev2', 
    	next:   '#next2',  
    	timeout: 0 
	});
	
	$('.square-slider').cycle({ 
    	fx:     'fade', 
    	speed:  'slow',  
    	next:   '#next1', 
    	prev:   '#prev1' 
	});
	
		$("#future-slide").cycle({
		fx:     'fade', 
    	prev:   '#prev2', 
    	next:   '#next2',  
    	timeout: 0 
	});
	
}