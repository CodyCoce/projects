// alternative to load event
document.onreadystatechange = function () {
	if (document.readyState === "complete") {
		if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
			
		}
		else {
			
		}
		
		$(".pacman").mousedown(function() {
			window.location.href = 'record.php?game=pacman';
		});
		$(".galaxian").mousedown(function() {
			window.location.href = 'record.php?game=galaxian';
		});
		$(".rallyx").mousedown(function() {
			window.location.href = 'record.php?game=rallyx';
		});
		$(".bosconian").mousedown(function() {
			window.location.href = 'record.php?game=bosconian';
		});
		$(".digdug").mousedown(function() {
			window.location.href = 'record.php?game=digdug';
		});
		$(".highscore").mousedown(function() {
			window.location.href = 'record.php?game=all';
		});
	}
}