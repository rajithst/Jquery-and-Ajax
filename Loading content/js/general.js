$(document).ready(function(){
	$('#content').load('contents/index.php');
	
	$('ul#nav li a').click(function(){
		
		var page = $(this).attr('href');
		//alert(page);
		$('#content').load('contents/'+page+'.php');
		return false;
		
	});
	
	
});