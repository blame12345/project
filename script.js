var uicon = "";
var uload = "";

function contestantsf(){
	 location.replace("contestants.php");
}
function homef(){
	 location.replace("index.php");
}
function sponsorsf(){
	 location.replace("sponsors.php");
}
function arenasf(){
	 location.replace("arenas.php");
}
function youf(){
		location.replace("you.php");
}
 function clickk(id) {
   var el = document.getElementById(id);
   el.style.display = el.style.display === 'inline-block' ? 'none' : 'inline-block';
 }
function sounds(){
	const videoNode = document.getElementById('v');
	if (videoNode.muted){
			videoNode.muted = false;
	}
	else {
			videoNode.muted = true;
	}
}
function startt() {
	window.scrollTo({ top: 0, behavior: 'smooth' });
}
function icon(id) {
	var ic = document.getElementById(id);
	var ic1 = document.getElementById('im1');
	var ic2 = document.getElementById('im2');
	var ic3 = document.getElementById('im3');
	var ic4 = document.getElementById('im4');
	var ic5 = document.getElementById('im5');
	var ic6 = document.getElementById('im6');
	var ic7 = document.getElementById('im7');
	var ic8 = document.getElementById('im8');
	if (ic.style.background === ""){
		ic1.style.background = "";
		ic2.style.background = "";
		ic3.style.background = "";
		ic4.style.background = "";
		ic5.style.background = "";
		ic6.style.background = "";
		ic7.style.background = "";
		ic8.style.background = "";

		ic.style.background = "rgba(113, 210, 133, 0.3)";
		uicon = ic.id;
		document.cookie="x=" + "icons/" + uicon + ".png";
	}
	else if (ic.style.background === "rgba(113, 210, 133, 0.3)") {
		ic.style.background = "";
}
}

function loadout(id) {
	var ic = document.getElementById(id);
	var ic1 = document.getElementById('lo1');
	var ic2 = document.getElementById('lo2');
	var ic3 = document.getElementById('lo3');
	var ic4 = document.getElementById('lo4');
	var ic5 = document.getElementById('lo5');
	var ic6 = document.getElementById('lo6');
	var ic7 = document.getElementById('lo7');
	var ic8 = document.getElementById('lo8');
	var ic9 = document.getElementById('lo9');
	var ic10 = document.getElementById('lo10');
	var ic11 = document.getElementById('lo11');
	var ic12 = document.getElementById('lo12');
	var ic13 = document.getElementById('lo13');
	var ic14 = document.getElementById('lo14');
	var ic15 = document.getElementById('lo15');
	var ic16 = document.getElementById('lo16');
	var ic17 = document.getElementById('lo17');
	var ic18 = document.getElementById('lo18');
	var ic19 = document.getElementById('lo19');
	var ic20 = document.getElementById('lo20');
	var ic21 = document.getElementById('lo21');
	var ic22 = document.getElementById('lo22');
	var ic23 = document.getElementById('lo23');
	var ic24 = document.getElementById('lo24');
	if (ic.style.opacity === ""){
		ic1.style.opacity = "";
		ic2.style.opacity = "";
		ic3.style.opacity = "";
		ic4.style.opacity = "";
		ic5.style.opacity = "";
		ic6.style.opacity = "";
		ic7.style.opacity = "";
		ic8.style.opacity = "";
		ic9.style.opacity = "";
		ic10.style.opacity = "";
		ic11.style.opacity = "";
		ic12.style.opacity = "";
		ic13.style.opacity = "";
		ic14.style.opacity = "";
		ic15.style.opacity = "";
		ic16.style.opacity = "";
		ic17.style.opacity = "";
		ic18.style.opacity = "";
		ic19.style.opacity = "";
		ic20.style.opacity = "";
		ic21.style.opacity = "";
		ic22.style.opacity = "";
		ic23.style.opacity = "";
		ic24.style.opacity = "";

		ic.style.opacity = "1";
		uload = ic.id;
		document.cookie="y=" + "loadouts/" + uload + ".png";
	}
	else if (ic.style.opacity === "1") {
		ic.style.opacity = "";
}
}
