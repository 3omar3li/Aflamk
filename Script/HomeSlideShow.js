var counter = 1;

function next(){
	if(counter == 12){
		counter = 1;
	}
	else{
		counter++;
	}
	
	document.getElementById("slideshow").src = "ImagesForTheSlideShow/"+counter+".jpg";
}

function prev(){
	if(counter == 1){
		counter = 12;
	}
	else{
		counter--;
	}
	
	document.getElementById("slideshow").src = "ImagesForTheSlideShow/"+counter+".jpg";
}

setInterval(next, 2000);