var formLabels = document.getElementsByTagName("label");

function validation(){
	var valid = true;	
	
	var firstName = document.signUpValid.firstName.value;
	if(firstName == ""){
		formLabels[0].innerHTML = "First Name: [Required]";
		formLabels[0].style.color = "red";
		valid = false;
	}
	else if(!isNaN(firstName)){
		formLabels[0].innerHTML = "First Name: [Text Only]";
		formLabels[0].style.color = "red";
		valid = false;
	}
	else{
		formLabels[0].innerHTML = "First Name:";
		formLabels[0].style.color = "black";
		valid = (valid) ? true : false;
	}
	
	
	var lastName = document.signUpValid.lastName.value;
	if(lastName == ""){
		formLabels[1].innerHTML = "Last Name: [Required]";
		formLabels[1].style.color = "red";
		valid = false;
	}
	else if(!isNaN(lastName)){
		formLabels[1].innerHTML = "Last Name: [Text Only]";
		formLabels[1].style.color = "red";
		valid = false;
	}
	else{
		formLabels[1].innerHTML = "Last Name:";
		formLabels[1].style.color = "black";
		valid = (valid) ? true : false;
	}
	
	
	/*var email = document.signUpValid.email.value;
	var at = email.indexOf("@");
	var dot = email.indexOf(".");
	if(email == ""){
		formLabels[2].innerHTML = "Email: [Required]";
		formLabels[2].style.color = "red";
		valid = false;
	}
	else if(at == -1 || dot == -1 || dot < at){
		formLabels[2].innerHTML = "Email: [Incorrect Email]";
		formLabels[2].style.color = "red";
		valid = false;
	}
	else{
		formLabels[2].innerHTML = "Email:";
		formLabels[2].style.color = "black";
		valid = (valid) ? true : false;
	}*/
	
	
	var email = document.signUpValid.email.value;
	var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(email == ""){
		formLabels[2].innerHTML = "Email: [Required]";
		formLabels[2].style.color = "red";
		valid = false;
	}
	else if(!regex.test(email)){
		formLabels[2].innerHTML = "Email: [Incorrect Email]";
		formLabels[2].style.color = "red";
		valid = false;
	}
	else{
		formLabels[2].innerHTML = "Email:";
		formLabels[2].style.color = "black";
		valid = (valid) ? true : false;
	}
	
	
	var password = document.signUpValid.password.value;
	if(password == ""){
		formLabels[3].innerHTML = "Password: [Required]";
		formLabels[3].style.color = "red";
		valid = false;
	}
	else if(password.length < 8 ){
		formLabels[3].innerHTML = "Password: [The Password is Too Weak]";
		formLabels[3].style.color = "red";
		valid = false;
	}
	else{
		formLabels[3].innerHTML = "Password:";
		formLabels[3].style.color = "black";
		valid = (valid) ? true : false;
	}
	
	return valid;
}

function clear2(){
	var myLabels = new Array();
	myLabels[0] = "First Name:";
	myLabels[1] = "Last Name:";
	myLabels[2] = "Email:";
	myLabels[3] = "Password:";
	
	for(var i = 0; i < myLabels.length; i++){
		formLabels[i].innerHTML = myLabels[i];
		formLabels[i].style.color = "black";
	}
}

/*function register(){
	document.getElementById("button").innerHTML = "Successfully Registered";
}*/