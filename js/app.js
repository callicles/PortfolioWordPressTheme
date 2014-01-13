// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs


jQuery(window).load(function() {

	h2_titles = jQuery("h2");
	list ='<dd class="active"><a href="#'+jQuery(jQuery('#topAnchor').get(0)).attr('id')+'">Top</a></dd>';
	for (i=0 ; i< h2_titles.size() ; i++){
		list += '<dd><a href="#'+jQuery(jQuery('h2').get(i)).attr('id')+'">'+jQuery(jQuery('h2').get(i)).text()+'</a></dd>';
	}

	jQuery('#sub-nav').append(list);

	updateActiveSubMenu();
	jQuery('#sub-menu').animate({"top": 80-jQuery('#sub-menu').height()+20 }, 300);

	jQuery('#sub-menu dl dd a').click(function(){
		var el = jQuery(this).attr('href');
		var elWrapped = jQuery(el);
		var buffer = 0;
		scrollToDiv(elWrapped,155);
		return false;
	});

	jQuery(document).scroll(function(){
		updateActiveSubMenu();
	});
});

function scrollToDiv(element,navheight){
	var offset = element.offset();
	var offsetTop = offset.top;
	var totalScroll = offsetTop - navheight;	

	jQuery('body,html').animate({
		scrollTop: totalScroll
	}, 500);
}

function toggleSubMenu(){
	if (jQuery('#sub-menu').css("top") === '80px'){
		jQuery('#sub-menu').animate({"top": 80-jQuery('#sub-menu').height()+20 }, 300);
	} else  {
		jQuery('#sub-menu').animate({"top": "80px"}, 300);
	}
}

function updateActiveSubMenu(){
	scrollStatus = jQuery(this).scrollTop();
	menuElements = jQuery("#sub-nav dd a");	
	for (i = 0 ; i < menuElements.size() ; i++){
		elementOffset = jQuery(jQuery(menuElements.get(i)).attr("href")).offset().top;
		if (elementOffset - 160 <= scrollStatus){
			jQuery(jQuery("#sub-nav dd[class=active]").get(0)).removeClass('active');
			jQuery(jQuery("#sub-nav dd").get(i)).addClass("active");
		}
	}
}

$(document).foundation();