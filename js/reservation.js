function getMinutes(clicked_id, e) {
	// Go to reservation page
	window.location.href = 'rezervacije.html';

	// Get selected minutes
	const minuntesClass = e.className;
	const minutes = document.querySelector(`.${minuntesClass}`).innerHTML;
	localStorage.setItem('minutes', JSON.stringify(minutes));

	// Get selected massage
	const currentID = clicked_id;
	localStorage.setItem('massage', JSON.stringify(currentID));
}

function setMinutes() {
	// Get minutes from localstorage
	const min = JSON.parse(localStorage.getItem('minutes'));

	if(min === '30') {
		document.getElementById('30').selected = "true";
	}
	else if(min === '60'){
		document.getElementById('60').selected = "true";
	}

	else if(min === '90'){
		document.getElementById('90').selected = "true";
	}

	else if(min === '120'){
		document.getElementById('120').selected = "true";
	}
}

setMinutes();

function setMassage() {
	// Get massage from localstorage
	const mass = JSON.parse(localStorage.getItem('massage'));

	if(mass === 'Tradicionalna tajlandska masaža') {
		document.getElementById('0').selected = "true";
	}
	else if(mass === 'Tradicionalna tajlandska masaža u paru') {
		document.getElementById('1').selected = "true";
	}
	else if(mass === 'Uljna masaža, piling tijela i aromaterapija-masaža odabranim tajlandskim i hrvatskim uljima') {
		document.getElementById('2').selected = "true";
	}
	else if(mass === 'Tajlandska masaža vrućim biljnim kompresama') {
		document.getElementById('3').selected = "true";
	}
	else if(mass === 'Masaža glave, lica, vrata, ramena i leđa') {
		document.getElementById('4').selected = "true";
	}
	else if(mass === 'Masaža stopala - refleksologija') {
		document.getElementById('5').selected = "true";
	}
	else if(mass === 'Hot-stone masaža (masaža vrućim vulkanskim kamenjem)') {
		document.getElementById('6').selected = "true";
	}
	else if(mass === 'Masaža za mršavljenje') {
		document.getElementById('7').selected = "true";
	}
	else if(mass === 'Masaža za seniore') {
		document.getElementById('8').selected = "true";
	}
	else if(mass === 'Masaža za atlete') {
		document.getElementById('9').selected = "true";
	}
	
}

setMassage();

