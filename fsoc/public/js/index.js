// taille de l'ecran video d'accueil
window.onload = function(){ 
	if(window.screen.width <= 400) {
		document.getElementById('car3D').setAttribute('width',"400px");
		document.getElementById('car3D').setAttribute('height',"200px");
	} 
}