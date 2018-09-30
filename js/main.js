function clicked() {

	var user = document.getElementById('username');
	var pass = document.getElementById('password');
	//specify the login user name and password
	var coruser = "time";
	var corpass = "series";
	
	//if they are correct
	if(user.value == coruser) {	
		if(pass.value == corpass) {
			//alert and move to next page
			window.alert("You are logged in as " + user.value);
			window.location.href = "uploadFiles.html";
			

		} else {		
			window.alert("Incorrect username or password!");		
		}	
	} else {
			window.alert("Incorrect username or password!");
	}
}

