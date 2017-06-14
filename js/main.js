$(function(){
	$('.imageQuery').bind('mouseover',function(){
		var image=$(this).attr('data-title');
		var src=$(this).attr('src');
		//console.log(src); 
		$('.empty').html('<img src='+src+'>');
	});
});