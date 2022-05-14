function loadAlert(){
	alert("Content is added to the main page.");
}

function loadStrike(){
	alert("Content is added to the strike page.");
}


function loadData(name){
	if(name=="button1"){
	document.getElementById("img1").src="../images/4.jpg";
	document.getElementById("para").innerHTML="I was not truely satisfied with the car provided to me by the CAR RENTAL .Actually the car was not cleaned after the previous ride.There was a bad smell inside the car.Actually I felt like vomiting inside the because of the bad smell."}
	
		else if(name=="button2"){
		 document.getElementById("img1").src="../images/5.jpg";
		 document.getElementById("para").innerHTML="Actually our family hired a car with a diver from this vehicle rental company.It was in very bad condition.And also our driver driving was so bad.Our entire journey went bad because of this condition of the vehicle"}

				else{
				alert("Invalid");
		}
}
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
