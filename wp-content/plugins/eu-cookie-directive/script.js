jQuery(function($)
{	
	function ecd_readCookie(name) {
	    var nameEQ = name + "=";
	    var ca = document.cookie.split(';');
	    for(var i=0;i < ca.length;i++) {
	        var c = ca[i];
	        while (c.charAt(0)==' ') c = c.substring(1,c.length);
	        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	    }
	    return null;
	}
	
	function ecd_createCookie(name,value,days) {
	    if (days) {
	        var date = new Date();
	        date.setTime(date.getTime()+(days*24*60*60*1000));
	        var expires = "; expires="+date.toGMTString();
	    }
	    else var expires = "";
	  
	  	
	  	document.cookie = name+"="+value+expires+"; domain="+window.location.hostname+"; path=/";
	  	
	    
	}
	
	function ecd_eraseCookie(name) {
	    ecd_createCookie(name,"",-1);
	}
	
	// GET ECD COOKIE
	var ecd_cookie = ecd_readCookie("ecd_opt_in");
	
	// IF ECD COOKIE NOT SET
	if(!ecd_cookie || ecd_cookie == "null")
	{
		var all_cookies = document.cookie.split(";");
		
		// CLEAR COOKIES
		setTimeout(function(){ecd_clear_cookies(all_cookies);}, 1000) // TIMEOUT SEEMS TO GET AROUND ISSUES CLEARING GOOGLE ANALYTICS COOKIES
		
		var ecd_message	= "We use cookies to ensure we give you the best experience on our website. If you continue without changing your settings, we’ll assume that you are happy to receive all cookies on the CPI website, however, you can change your cookie settings at any time.  <a href='/privacy/'>Find out more ››</a>";
		if(ecd_params.cookie_message)
		{
			ecd_message	= ecd_params.cookie_message;
		}
		
		// DISPLAY MESSAGE
		var html = '<div id="ecd_opt_in_banner">\
			<div id="ecd_message">\
				<h3>Cookies on the CPI website</h3>\
				<p>'+ecd_message+'</p>\
				<form id="ecd_opt_in_form">\
				<button type="button" class="btn" name="ecd_opt_in_submit" id="ecd_opt_in_submit"><i class="icon-ok"></i> Continue</button>\
				</form>\
			</div>\
		</div>';
		
		$("body").prepend(html);
		$("#ecd_opt_in_banner").hide().slideDown("slow");
		$("#ecd_opt_in_submit").live("click", function()
		{

				ecd_createCookie("ecd_opt_in", 1, 365);
				$("#ecd_opt_in_banner").hide();
			
			return false;
		});
	}
	
	function ecd_clear_cookies(all_cookies)
	{
		for (var i = 0; i < all_cookies.length; i++)
		{
			
			clearCookie(trim(all_cookies[i].split("=")[0]), window.location.hostname, '/');
			clearCookie(trim(all_cookies[i].split("=")[0]), "."+window.location.hostname, '/');
		
		}
	}
	function clearCookie(name, domain, path){
		
        var domain = domain || document.domain;
        var path = path || "/";
        document.cookie = name + "=; expires=" + new Date + "; domain=" + domain + "; path=" + path;     
		   
	};

	function trim (str) {
		str = str.replace(/^\s+/, '');
		for (var i = str.length - 1; i >= 0; i--) {
			if (/\S/.test(str.charAt(i))) {
				str = str.substring(0, i + 1);
				break;
			}
		}
		return str;
	}

});