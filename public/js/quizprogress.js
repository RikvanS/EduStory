document.getElementById("complete-rigaquiz").addEventListener('click', function (event) {
	document.getElementById('progressdiv').style.display = 'block';
	$('html,body').animate({
		scrollTop: $("#progressdiv").offset().top
	 });
});