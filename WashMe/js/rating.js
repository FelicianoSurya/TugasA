function ratingApps(){
	let puas = document.getElementById('puas').value;
	let lumayan = document.getElementById('lumayan').value;
	let tidakpuas = document.getElementById('tidakpuas').value;
	let hasil_puas = puas + 5;
	let hasil_lumayan = lumayan + 3;
	let hasil_tidakpuas = tidakpuas + 1;
	let total = hasil_puas + hasil_lumayan + hasil_tidakpuas;
	document.getElementById('rav').value = total;
}