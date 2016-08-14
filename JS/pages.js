function pagechange(location, name){
	$.ajax({
		url: location,
		method: 'GET',
		async: false,
		success: function(html){
			$('DIV.contain').fadeOut(500);
			$('DIV.contain').slideUp(300);
			$('.page').fadeOut(500);
			setTimeout(function(){
				$('DIV.contain').html(html);
				$('DIV.contain').fadeIn(500);
				$('DIV.contain').slideDown(300);
				$('.page').html(name);
				$('.page').fadeIn(500);
			}, 500);
			
		}
	})
}
$(document).ready(function(){
	$("DIV.menu > UL > LI > A").click(function(){
		var page = '/pages' + $(this).attr('href');
		var name = $(this).html();
		//alert(page + ' (' + name + ')');
		pagechange(page, name);
		return false;
	})
	$("DIV.fbox .int").click(function(){
		var page = '/pages' + $(this).attr('href');
		var name = $(this).html();
		//alert(page + ' (' + name + ')');
		pagechange(page, name);
		return false;
	})
})