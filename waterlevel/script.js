


function pumpWater(){
	var pump = ["level1","level2","level3","level4","level5","level6","level7","level8","level9","level10"];
	
	for (var i = 0; i < pump.length; i++) {
		pump[i].fillStyle = "blue";
		document.getElementById("pumping").innerHTML = pump[i].fill();
	}
}

function drawWater(){

}
function stopPump(){
	
}