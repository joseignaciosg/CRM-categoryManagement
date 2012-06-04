$(document).ready(function(){
	$('.dropdown-toggle').dropdown();
//	options = new Object();
//	options.show = false;
//	$('#myModal1').modal(options);
	
//	$('#myModal1').click(function(){
////		$('#myModal1').modal('show');
//		$('#myModal').modal('toggle');
//	});
	
	$("#genlink").click(function() {
		options = new Object();
		$('#myModal').modal(options);
	});
});