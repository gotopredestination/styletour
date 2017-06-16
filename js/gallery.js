$(function(){
var fx = {
	"initModel":function(){
		if($('.model-window').length == 0){
		$('<div>').addClass('overlay').click(function(){
		  $(this).remove();
		  $('.model-window').remove();
		}).appendTo('body');
		return	$('<div>').addClass('model-window').appendTo('body');
		}else{
		//console.log('return');
			return $('.model-window');
		}
	}
};
$('.gallery img').bind('click',function(){
var data=$(this).attr('id');
var modal=fx.initModel();
	$.ajax({
		'url':'ajax.php',
		'data':'id='+data,
		'type':'POST',
		'success':function(data){modal.append(data)},
		'error':function(msg){	modal.append(msg);}
	});
	


});



});



/*
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})*/