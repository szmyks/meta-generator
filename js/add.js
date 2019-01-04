'use strict';

let addInlineElementButtons = document.getElementsByClassName('addInlineElement');

for(let i = 0; i < addInlineElementButtons.length; i++) {
	addInlineElementButtons[i].addEventListener('click', function(e) {
		let dataContainer = addInlineElementButtons[i].getAttribute('data-container');
		let container = document.getElementById(dataContainer);
		let rCount = container.getElementsByClassName('row').length;
		let cRow = container.childNodes[1];
		let nRow = cRow.cloneNode(true);

		let nI = nRow.getElementsByTagName('input');
		let nS = nRow.getElementsByTagName('select');
		let nL = nRow.querySelectorAll('label[data-remove="true"]');

		for(let i = 0; i < nL.length; i++) {
			nL[i].remove();
		}
		
		for(let i = 0; i < nI.length; i++) {
			nI[i].setAttribute('name', nI[i].getAttribute('name').replace('0', rCount));
			nI[i].value = '';
		}

		for(let i = 0; i < nS.length; i++) {
			nS[i].setAttribute('name', nS[i].getAttribute('name').replace('0', rCount));
			nS[i].selectedIndex = 0;
		}

		container.appendChild(nRow);
	});
}