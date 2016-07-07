if (window.addEventListener) {
	var kkeys = [], konami = "70,85,78,70,65,67,84,83";
	window.addEventListener("keydown", function(e) {
		kkeys.push(e.keyCode);
		if (kkeys.toString().indexOf( konami ) >= 0) {
			window.location.replace('/funfacts');
		}
	})
}