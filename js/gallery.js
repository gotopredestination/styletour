$(function(){
var fx = {
	"initModel":function(){
		if($('.model-window').length == 0){
		$('<div>').addClass('overlay').click(function(){
		  $(this).remove();
		  $('.model-window').remove();
		}).fadeIn(2000).appendTo('body');
		return	$('<div>').addClass('model-window').fadeIn(2000).appendTo('body');
		}else{
		//console.log('return');
			return $('.model-window');
		}
	}
};
$('.gallery img').bind('click',function(){
var data=$(this).attr('id');
var modal=fx.initModel();

$('<a>').attr('href','articles.php').addClass('modal-close-btn').html('&times;').click(function(e){
	e.preventDefault();
	/*$(modal).remove();
	$('.overlay').remove();*/
	$(modal).fadeOut(2000,function(){$(this).remove();});
  $('overlay').fadeOut(2000,function(){$(this).remove();});
}).appendTo(modal);

	$.ajax({
		'url':'ajax.php',
		'data':'id='+data,
		'type':'POST',
		'success':function(ok){modal.append(ok);},
		'error':function(msg){modal.append(msg);}
	});
	


});



});




/*
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})*/