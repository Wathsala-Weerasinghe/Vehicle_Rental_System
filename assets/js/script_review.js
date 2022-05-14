function checkusername(){
	if(document.getElementById("fname1").value != document.getElementById("fname2").value){
		alert("Usernames are mismatched.");
		return false;
	}
		
		else{
			alert("Usernames are matched.");
			return true;
		}
}

function enableBtn(){
	if(document.getElementById("accept").checked){
		document.getElementById("btn1").disabled=false;
	}
		else{
			document.getElementById("btn1").disabled=true;
		}
}

function activeBtn(){
	if( document.getElementById("confirm").checked){
		document.getElementById("btn1").disabled=false;
	}
	else{
		document.getElementById("btn1").disabled=true;
	}
}

