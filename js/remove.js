'use strict';

function dRow(e) {
	let rContainer = e.parentElement.parentElement.parentElement;
	let dRow = e.parentElement.parentElement;

	if(dRow !== rContainer.childNodes[1]) {
		dRow.remove();
	}
}
