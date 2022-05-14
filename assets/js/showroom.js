var slideIndex = 1;
var currentDescMPV = '';
var currentPriceMPV = 0;
var currentNameMPV = '';
var currentIdMPV = 0;

function changeSlidesMPV(n) {
	showSlidesMPV(slideIndex += n);
}

function showSlidesMPV(n) {
	var i;
	var slides = document.getElementsByClassName("sr_slide-itemMPV");
	
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
	
	currentNameMPV = currentSlide.querySelector('.item-name').value;
	currentDescMPV = currentSlide.querySelector('.item-description').value;
	currentPriceMPV = currentSlide.querySelector('.item-price').value;
	currentIdMPV = currentSlide.querySelector('.item-id').value;
}

function displayInfoMPV()
{
	var divInfo1 = document.getElementById("sr_info1");
	divInfo1.style.display = "block";
	divInfo1.innerHTML = "<center>" + currentNameMPV + "</center><br />Rent (100KM): Rs." + currentPriceMPV + "/-<br /><br />" + currentDescMPV;
}

function hideInfoMPV(off)
{
	document.getElementById("sr_info1").style.display = "none";
}

function rentVehicleMPV(){
	location.href = 'payment.php?type=car&id=' + currentIdMPV;
}

var slideIndex = 1;
var currentDescMISC = '';
var currentPriceMISC = 0;
var currentIDMISC = 0;
var currentNameMISC = '';

function changeSlidesMISC(n) {
	showSlidesMISC(slideIndex += n);
}


function showSlidesMISC(n) {
	var i;
	var slides = document.getElementsByClassName("sr_slide-itemMISC");
	
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
	
	currentNameMISC = currentSlide.querySelector('.item-name').value;
	currentDescMISC = currentSlide.querySelector('.item-description').value;
	currentPriceMISC = currentSlide.querySelector('.item-price').value;
	currentIDMISC = currentSlide.querySelector('.item-id').value;
}

function displayInfoMISC()
{
	var divInfo2 = document.getElementById("sr_info2");
	divInfo2.style.display = "block";
	divInfo2.innerHTML = "<center>" + currentNameMISC + "</center><br />Rent (100KM): Rs." + currentPriceMISC + "/-<br /><br />" + currentDescMISC;
}

function hideInfoMISC(off)
{
	document.getElementById("sr_info2").style.display = "none";
}

function rentVehicleMISC(){
	location.href = 'payment.php?type=car&id=' + currentIDMISC;
}





/*var selectedPicTag = "";

function selectMPV(img){
	var divInfo1 = document.getElementById("info1");
	divInfo1.style.display = "none";
	
	var divimage1 = document.getElementById("image1");
	var divbimage1 = document.getElementById("blimage1");
	
	if (img == "pic1"){
		divimage1.src = "../images/multi purpose/van1.jpg";
		divbimage1.src = "../images/multi purpose/van1.jpg";
		divimage1.style.display = "block";
		divbimage1.style.display = "block";
		selectedPicTag = "MPV1";
	}
	else if (img == "pic2"){
		divimage1.src = "../images/multi purpose/van2.jpg";
		divbimage1.src = "../images/multi purpose/van2.jpg";
		divimage1.style.display = "block";
		divbimage1.style.display = "block";
		selectedPicTag = "MPV2";
	}
	else if (img == "pic3"){
		divimage1.src = "../images/multi purpose/bus1.jpg";
		divbimage1.src = "../images/multi purpose/bus1.jpg";
		divimage1.style.display = "block";
		divbimage1.style.display = "block";
		selectedPicTag = "MPV3";
	}
	else if (img == "pic4"){
		divimage1.src = "../images/multi purpose/car1.jpg";
		divbimage1.src = "../images/multi purpose/car1.jpg";
		divimage1.style.display = "block";
		divbimage1.style.display = "block";
		selectedPicTag = "MPV4";
	}
}

var selectedPicTagMisc = "";

function selectMisc(img){
	var divInfo2 = document.getElementById("info2");
	divInfo2.style.display = "none";

	var divimage2 = document.getElementById("image2");
	var divbimage2 = document.getElementById("blimage2");
	
	if (img == "pic1"){
		divimage2.src = "../images/misellanious/hlp.jpg";
		divbimage2.src = "../images/misellanious/hlp.jpg";
		divimage2.style.display = "block";
		divbimage2.style.display = "block";
		selectedPicTagMisc = "Misc1";
	}
	else if (img == "pic2"){
		divimage2.src = "../images/misellanious/lc1.jpg";
		divbimage2.src = "../images/misellanious/lc1.jpg";
		divimage2.style.display = "block";
		divbimage2.style.display = "block";
		selectedPicTagMisc = "Misc2";
	}
	else if (img == "pic3"){
		divimage2.src = "../images/misellanious/lc3.jpg";
		divbimage2.src = "../images/misellanious/lc3.jpg";
		divimage2.style.display = "block";
		divbimage2.style.display = "block";
		selectedPicTagMisc = "Misc3";
	}
	else if (img == "pic4"){
		divimage2.src = "../images/misellanious/WedPackage.jpg";
		divbimage2.src = "../images/misellanious/WedPackage.jpg";
		divimage2.style.display = "block";
		divbimage2.style.display = "block";
		selectedPicTagMisc = "Misc4";
	}
}

function displayInfoMPV()
{
	var divInfo1 = document.getElementById("info1");
	switch(selectedPicTag){
		case 'MPV1':
			divInfo1.style.display = "block";
			divInfo1.innerHTML = "<br/><center>Mercedes-Benz Vito</center><br/><br/><code>Driver + 5+ 2 Passenger (Loses 2 seats for heavy luggage) Multi A/C, 3 & 2 Point Seat Belts, Android, CD Mp3 Player, Auto<br/><br/>Price: Rs:23,000/-<br/><br/>A Mercedes people carrier or MPV is ideal for transporting large groups and makes a stylish vehicle for a family vacation or road trip.You can drive a Mercedes 5-Seater when you hire a Mercedes Benz Vito in Sri Lanka.This is a luxurious yet practical MPV, which can also be turned into a 5-Seater people carrier.Also seating 5 passengers is the Mercedes Benz Vito.  We are providing transport such as Airport Transfers, Taxi Services, Taxi Packages & day packages for both short term and long-term Mercedes minivan hire. </code><br/><br/>";
			break;
		case 'MPV2':
			divInfo1.style.display = "block";
			divInfo1.innerHTML = "<br/><center>Toyota Alphard</center><br/><br/><code>Driver + 6 Passenger (Loses 3 seats for heavy luggage) Multi A/C, 3 & 2 Point Seat Belts, CD Mp3 Player, Auto<br/><br/>Price: Rs:22,000/-(100km)<br/><br/>The Toyota Alphard (Japanese: トヨタ・アルファード, Toyota Arufādo) is a minivan produced by the Japanese automaker Toyota since 2002. It is available as a seven- or eight-seater with petrol and hybrid engine options. Hybrid variants have been available since 2003 and it incorporates Toyota's Hybrid Synergy Drive technology. </code><br/><br/>";
			break;
		case 'MPV3':
			divInfo1.style.display = "block";
			divInfo1.innerHTML = "<br/><center>TOYOTA ALPHARD EXECUTIVE LOUNGE</center><br/><br/><code>Driver + 6 Passenger (Loses 3 seats for heavy luggage) Multi A/C, 3 & 2 Point Seat Belts, CD Mp3 Player, Auto<br/><br/>Price: Rs:22,000/-(100km)<br/><br/>This new 2019 Toyota Alphard Hybrid Executive Lounge 4WD 2.5L 7 seater people mover with 90 km, JBL sound system, LED roof lighting and sunroof was inspected for a client in April 2019.Auction grade S A A (completely new).Luxury features included radar cruise control with collision prevention, full cameras, dual powerslide doors, power tailgate, flip down rear TV and top of the range JBL sound system. </code><br/><br/>";
			break;
		case 'MPV4':
			divInfo1.style.display = "block";
			divInfo1.innerHTML = "<br/><center>PERODUA (DAIHATSU) AXIA</center><br/><br/><code>A/C, Power Steering, CD Player, Auto<br/><br/>Price: Rs:7,000/-(80km)<br/><br/>The Perodua Axia is the company's most affordable model. Powering the Axia is a new 1.0-litre 1KR-VE three-cylinder petrol engine that outputs 68 PS and 91 Nm. The engine can be paired to a 5-speed manual or a 4-speed automatic. When paired with the 5-speed manual, Perodua claims that the Axia can deliver up to 22.5 km/L. All variants of the Perodua Axia come with dual SRS airbags. Apart from base Axia 1.0E MT, all Axia variants come with ABS with EBD, anti-snatch hook, driver seat belt reminder and headlight reminder. With all these features, the Axia scores 4 stars in the ASEAN NCAP safety rating. All new Perodua Axia models are backed by a 5-year/150,000 kilometre (whichever comes first) new vehicle warranty. </code><br/><br/>";
			break;
	}
}

function displayInfoMISC() {
	var divInfo2 = document.getElementById("info2");
	switch (selectedPicTagMisc) {
		case 'Misc1':
			divInfo2.style.display = "block";
			divInfo2.innerHTML = "<br/><center>Airbus helicopter</center><br/><br/><code>Make a grand entrance, surprise someone or add some glamour to a special occasion to make memories to last a lifetime:<br/><ul><li>Surprise birthday treat</li><li>Coming of age ceremonies</li><li>Proposals</li><li>Anniversaries & Valentine’s Day</li><li>Pre-wedding shoot & Wedding </li></ul></code><br/><br/>";
			break;
		case 'Misc2':
			divInfo2.style.display = "block";
			divInfo2.innerHTML = "<br/><center>Chrysler 300C</center><br/><br/><code>Leather Int. A/C, Power Steering, CD Player, With Driver Only<br/><br/>Price: Rs:25,000/-<br/><br/>The Chrysler 300 is a full-size sedan that's old enough to be retro-cool again like Zubaz pants.While the 300C's rip-roaring V-8 was carried over, the revised 300 gained a new look inside and out, plus Chrysler's excellent 3.6-liter Pentastar V-6, making 283 horsepower. They also got a much-upgraded interior—in both materials and refinement—and features like a standard USB port, an available navigation system with Sirius Travel Link services, and a Uconnect Web wi-fi hotspot option. </code><br/><br/>";
			break;
		case 'Misc3':
			divInfo2.style.display = "block";
			divInfo2.innerHTML = "<br/><center>Mercedes-Benz S-Class</center><br/><br/><code>Long Wheel Base, Leather Int. A/C, Ambient/ Mood lighting, Power Steering, Blue Tooth, With Driver Only<br/><br/>Price: Rs:30,000/-<br/><br/>The Mercedes-Benz S-Class seats five people. This stately luxury car has what might be the most enviable seating of any car outside of quarter-million-dollar vehicles from Rolls Royce and Bentley. This Benz makes a strong case for being the most opulent car across all of our rankings. Premium leathers and real wood adorn most of the cabin, and nearly all other touchpoints are of the highest quality.<br><br>The S-Class sedan has a near class-leading 18.7 cubic feet of trunk space. The base S 450 features a 362-horsepower 3.0-liter twin-turbocharged V6Optional features include a 26-speaker Burmester premium stereo, a rear-seat entertainment system, rear-seat wireless device charging, quad-zone automatic climate control, and a cabin air purification and fragrance system. Also available is Magic Sky Control, which electronically adjusts the tint for the panoramic sunroof. </code><br/><br/>";
			break;
		case 'Misc4':
			divInfo2.style.display = "block";
			divInfo2.innerHTML = "<br/><center>Chrysler 300C Limo</center><br/><br/><code>Price: Rs:30,000/-<br/><br/><ul><li>Air conditioning</li><li>Automatic Shift</li><li>4 Doors</li><li>8 Seats</li><li>2 Suitcase & 5 Bags</li><li>Air Baloons</li><li>Fuel type: Petrol</li></li></ul></code><br/><br/>";
			break;
	}
}*/


