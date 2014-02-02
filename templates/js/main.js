window.onload = function() {
	//Determine if element(s) exists in the document
	var detectOS = "Fishbook doesn't like your OS",
		email = document.getElementById("email"),
		elementExists = function(element) {
		while (element) {
			if (element === document) return true;
			element = element.parentNode;
		}
		return false;
	};
	
	//Determine if email exists, if it does focus it like Facebook does :D
	if (elementExists(email)) email.focus();
	
	//Init placeholders for older browsers
	Placeholders.init();
	
	//Detect OS to fix CSS issues on the same browsers on different OS's
	if (navigator.appVersion.indexOf("Win")  !=-1) detectOS = "Windows";
	if (navigator.appVersion.indexOf("Mac")  !=-1) detectOS = "MacOS";
	if (navigator.appVersion.indexOf("X11")  !=-1) detectOS = "UNIX";
	if (navigator.appVersion.indexOf("Linux")!=-1) detectOS = "Linux";
	
	console.log(detectOS);
}

