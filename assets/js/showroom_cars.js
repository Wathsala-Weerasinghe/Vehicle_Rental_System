var slideIndex = 1;
var currentDesc = '';
var currentPrice = 0;
var currentName = '';
var currentID = 0;

function changeSlides(n) {
	showSlides(slideIndex += n);
}

function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("sr_slide-item");
	
	if (n > slides.length){
		slideIndex = 1;
	}
	if (n < 1){
		slideIndex = slides.length;
	}

	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}

	var currentSlide = slides[slideIndex - 1];
	currentSlide.style.display = "block";
	
	currentName = currentSlide.querySelector('.item-name').value;
	currentDesc = currentSlide.querySelector('.item-description').value;
	currentPrice = currentSlide.querySelector('.item-price').value;
	currentID = currentSlide.querySelector('.item-id').value;

}

function displayInfo()
{
	var divInfo = document.getElementById("sr_info");
	divInfo.style.display = "block";
	divInfo.innerHTML = "<center>" + currentName + "</center><br />Rent (100KM): Rs." + currentPrice + "/-<br /><br />" + currentDesc;
}

function hideInfo(off)
{
	document.getElementById("sr_info").style.display = "none";
}

function rentVehicle(){
	location.href = 'payment.php?type=car&id=' + currentID;
}




/*var selectedPicTag = "";

function selectCar(img){
	var divInfo = document.getElementById("info");
	divInfo.style.display = "none";
	
	var divimage = document.getElementById("image");
	var divbimage = document.getElementById("blimage");
	
	if (img == "pic1"){
		divimage.src = "../images/cars/car5.jpg";
		divbimage.src = "../images/cars/car5.jpg";
		divimage.style.display = "block";
		divbimage.style.display = "block";
		selectedPicTag = "C1";
	}
	else if (img == "pic2"){
		divimage.src = "../images/cars/car2.jpg";
		divbimage.src = "../images/cars/car2.jpg";
		divimage.style.display = "block";
		divbimage.style.display = "block";
		selectedPicTag = "C2";
	}
	else if (img == "pic3"){
		divimage.src = "../images/cars/car3.jpg";
		divbimage.src = "../images/cars/car3.jpg";
		divimage.style.display = "block";
		divbimage.style.display = "block";
		selectedPicTag = "C3";
	}
	else if (img == "pic4"){
		divimage.src = "../images/cars/luxurycar.jpg";
		divbimage.src = "../images/cars/luxurycar.jpg";
		divimage.style.display = "block";
		divbimage.style.display = "block";
		selectedPicTag = "C4";
	}
}

function displayInfo1()
{
	var divInfo = document.getElementById("info");
	divInfo.style.display = "block";
	switch(selectedPicTag){
		case 'C1':
			divInfo.innerHTML = "<br/><center>Toyota Prius 2012</center><br/><br/><code>Price: Rs:4,500/-(per day)<br/><br/>The 2012 Toyota Prius has excellent fuel economy, lots of cargo space and a long list of standard features, though reviewers agreed that it lacks agility.<br /><br />The Prius has 21.6 cubic feet of cargo space, which is outstanding for a midsize hybrid car. The 2012 Prius comes standard with automatic climate control, proximity key, push-button start, an infotainment system with a 6.1-inch touch-screen display, Bluetooth phone and music streaming and a USB port. Available features include navigation, satellite radio, adaptive cruise control, forward collision warning, lane departure warning, leatherette upholstery, an eight-way power-adjustable driver’s seat and a solar roof package that includes a moonroof and a solar-powered air conditioning system that cools the cabin when the car is turned off.</code><br/><br/>";
			break;
		case 'C2':
			divInfo.innerHTML = "<br/><center>Toyota Allion 2006</center><br/><br/><code>Price: Rs:9,000/-(per day)<br/><br/>The Toyota Allion is a compact, dynamic and sporty sedan backed up by Toyota’s world-renowned reliability. Depending on the model year, the Toyota Allion offers a wide range of features that make every drive safe, convenient, and comfortable<br/><br/>The Allion is a dynamic and sporty sedan developed with the concepts of “high quality and high functionality” in mind. This is a 5-number FF drive 4-door sedan that is a successor to Toyota’s historic Corona / Carina. All engines are inline 4-cylinder DOHC VVT-i, 109 hp 1.5L, 132 hp or 125 hp 1.8L, 152 hp 2L D-4 (direct injection). The distinctive rear seat has a reclining mechanism and a cushion-triggered split folding mechanism with a removable package tray. All models are equipped with dual airbags, EBD (Electronic Braking Force Distribution Control) ABS, brake assist, and standard seatbelts with pretensioners and force limiters. The 1.5L & 1.8L vehicles are certified by the Ministry of Land, Infrastructure, Transportation and Tourism as “super-low emission” vehicles, and the  2L vehicles certified as “good-low emission” vehicles.</code><br/><br/>";
			break;
		case 'C3':
			divInfo.innerHTML = "<br/><center>Toyota Allion 2015</center><br/><br/><code>Price: Rs:6,000/-<br/><br/><ul><li>Driver electric Seat, Push Start, Rear Viper.</li><li>Multifunction Steering Wheel.</li><li>Welcome light.</li><li>DVD + Reverse Camera,Factory Fitted Fog Lights, Scoop lights.</li><li>Original Door Wiser,Maroon Colour (Wine Red), Interior Beige & Teak.</li><li>Teak and leather steering wheel.</li></ul></code><br/><br/>";
			break;
		case 'C4':
			divInfo.innerHTML = "<br/><center>2010 Mercedes-Benz E-Class</center><br/><br/><code>Price: Rs:10,000/-<br/><br/>The 2010 Mercedes-Benz E-Class strikes a brilliant balance between ride quality and handling ability. Within its segment, the E is by far the most adaptable, rewarding and confident car for the widest variety of surfaces and situations. Although it's not the most athletic car to drive, it nevertheless offers highly tactile steering, strong engines and a chassis that inspires confidence. Regardless of body style or engine, the 2010 E-Class is a remarkable luxury car to drive.<br /><br />Superb ride and handling balance, potent engines, extensive array of luxury- and safety-oriented features, first-class cabin appointments, spacious interior.</code><br/><br/>";
			break;
	}
}*/