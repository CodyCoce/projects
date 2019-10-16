// alternative to load event
document.onreadystatechange = function () {
	if (document.readyState === "complete") {
		$(".boxes").mousedown(function() {
			$(".boxes").addClass("active");
			$(".icons").removeClass("active");
			
			$(".profiles-list").show();
			$(".profiles-icon").hide();
		});
		$(".icons").mousedown(function() {
			$(".icons").addClass("active");
			$(".boxes").removeClass("active");
			
			$(".profiles-list").hide();
			$(".profiles-icon").show();
		});
		
		if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
			$(".desktop").hide();
			$("header").addClass("mobile-header");
			$("footer").addClass("mobile-footer");
			$("nav").addClass("mobile-nav");
		}
		else {
			$(".mobile").hide();
		}
		
		$(".themes label").mousedown(function() {
			$(".themes *").removeClass("active");
			$(this).addClass("active");
		});
	}
}