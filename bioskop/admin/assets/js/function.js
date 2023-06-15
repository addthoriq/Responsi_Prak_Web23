function panggil(c) {
	$(".content").load(c);
}
function thickbox(url, method) {
	if ( method == "show") {
		$(".bg-thick").load(url);
		$(".bg-thick").fadeIn(200);
	}else{
		$(".bg-thick").fadeOut(200);
	}
}
$(document).ready(function () {
	$('#datepicker').datepicker({
		dateFormat: "yy/mm/dd",
		showAnim: "slideDown",
		changeYear:false,
		changeMonth:false
	})
})