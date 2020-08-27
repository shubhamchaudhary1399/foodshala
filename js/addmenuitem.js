
$(document).ready(function(){
	$("#addfood").click(function(){
		$("#my-table").hide();
		$("#addfood").hide();
		$("#back").show();
		$("#formnew").show();
	});

	$("#back").click(function(){
		$("#formnew").hide();
		$("#back").hide();
		$("#my-table").show();
		$("#addfood").show();
	});

});
function loadImg1(event){
	var output = document.getElementById('output1');
    output.src = URL.createObjectURL(event.target.files[0]);
}
