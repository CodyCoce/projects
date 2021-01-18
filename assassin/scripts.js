// alternative to load event
document.onreadystatechange = function () {
	if (document.readyState === "complete") {
		$(".create").mousedown(function() {
			$(".menu").hide();
			$(".menu-create").attr("style", "display:flex;");
		});
		$(".join").mousedown(function() {
			$(".menu").hide();
			$(".menu-join").attr("style", "display:flex;");
		});
		$(".back").mousedown(function() {
			$(".menu").attr("style", "").removeClass("hide");
			$(".menu-create,.menu-join").hide();
		});
		
		function noParty() {
			$(".menu,.menu-create,.main-join").hide();
		}
		function party() {
			$(".play").show();
			
			setInterval(function () {
				$(".player-list").load("index.php .player-list");
			}, 10000);
		}
		
		$(".eliminate").mousedown(function() {
			$(".selected").removeClass("selected");
			$(this).addClass("selected");
		});
	}
}