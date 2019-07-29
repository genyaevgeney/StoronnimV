window.onload = function(){
	let targetForHiding = document.getElementsByClassName("scroll-hide");
	let firstTargetForHiding = targetForHiding[0];
	let secondTargetForHiding = targetForHiding[1];
	let thirdTargetForHiding = targetForHiding[2];
	let firstInitialValueOfTop = getComputedStyle(firstTargetForHiding).top;
	let secondInitialValueOfTop = getComputedStyle(secondTargetForHiding).top;
	let thirdInitialValueOfBottom = getComputedStyle(thirdTargetForHiding).bottom;
	if(window.pageYOffset === 0) {
		thirdTargetForHiding.style.bottom = "-20%";
	}
	let prevScrollPos=window.pageYOffset;
	window.onscroll = function() {
		let currentScrollPos = window.pageYOffset;
		if(prevScrollPos > currentScrollPos) {
			firstTargetForHiding.style.top = firstInitialValueOfTop;
			secondTargetForHiding.style.top = secondInitialValueOfTop;
			thirdTargetForHiding.style.bottom = thirdInitialValueOfBottom;
		} else {
			firstTargetForHiding.style.top = "-20%";
			secondTargetForHiding.style.top = "-20%";
			thirdTargetForHiding.style.bottom = "-20%";
		}

		if(window.pageYOffset === 0) {
			thirdTargetForHiding.style.bottom = "-20%";
		}
		prevScrollPos = currentScrollPos;
	}

}