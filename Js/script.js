function progress(){

	var prg = document.getElementById('progress');
	var percent = document.getElementById('percentCount');
	var counter = 5;
	var progress=25;
	var id = setInterval(frame,50);

	function frame(){

		if (progress==500 && counter ==100) {
			clearInterval(id);
			abrir();
		}else{

			progress+=5;
			counter +=1;
			prg.style.width = progress + 'px';
			percent.innerHTML = counter + "%";
		}

	}
}

function abrir(){

	document.location.target="post";
	document.location.href= "pagina1.php";
}
progress();


