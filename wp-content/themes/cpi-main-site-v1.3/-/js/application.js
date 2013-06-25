
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


// Accordion Menu

//Hide (Collapse) the toggle containers on load
	$(".toggle_container").hide(); 

	//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
	$(".trigger").click(function(){
		$(this).toggleClass("active").next().slideToggle("slow");
		return false; //Prevent the browser jump to the link anchor
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


}); // End Document Ready Function
