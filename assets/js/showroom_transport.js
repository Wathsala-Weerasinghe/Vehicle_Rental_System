var slideIndex = 1;
var currentDesc = '';
var currentPrice = 0;
var currentId = 0;
var currentName = '';
var currentTran_percentage = 0;
var pricePerKM = 20;

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
	currentId = currentSlide.querySelector('.item-id').value;
	
	var rentValueContainer = document.getElementById('sr_rent-value-container');
	rentValueContainer.innerHTML = 'Rs: ' + currentPrice + '/-';

	currentTran_percentage = currentSlide.querySelector('.tran-capacity').value;
	setProgress(currentTran_percentage);
}

function setProgress(val) {
	var progressInner = document.getElementById('sr_progress-bar-inner');
	progressInner.innerHTML = val + '%';
	progressInner.style.width = (val * 5) + 'px';
}

function displayInfo()
{
	var divInfo = document.getElementById("sr_info");
	divInfo.style.display = "block";
	divInfo.innerHTML = "<center>" + currentName + "</center><br /><br />" + currentDesc;
}

function hideInfo(off)
{
	document.getElementById("sr_info").style.display = "none";
}

function rentVehicle(){
	var distance = document.getElementById("distanceKM").value;
	var fullPrice = (currentPrice * 1) + (distance * pricePerKM);
	location.href = 'payment.php?type=transport&id=' + currentId + '&fullRent=' + fullPrice;
}
 
function calculatePaymentPerDistance() {
	var inputDistance = document.getElementById("distanceKM");
    var displayDistance = document.getElementById('Distance');
	var displayPayment = document.getElementById('Payment');
	
	displayDistance.innerHTML = inputDistance.value + 'KM';
	displayPayment.innerHTML = 'Rs: ' + (inputDistance.value * pricePerKM) + '/-';
}




/*var slideIndex = 1;

function plusSlides(n) {
	showSlides(slideIndex += n);
}

// extracted from http://
function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	
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

	var rentValue = currentSlide.querySelector('.rent-value');
	var rentValueContainer = document.getElementById('rent-value-container');
	rentValueContainer.innerHTML = 'Rs: ' + rentValue.value + '/-';

	var tranCapacity = currentSlide.querySelector('.tran-capacity');
	setProgress(tranCapacity.value);
}

function setProgress(val) {
	var progressInner = document.getElementById('progress-bar-inner');
	progressInner.innerHTML = val + '%';
	progressInner.style.width = (val * 5) + 'px';
}
 
function GetRoute() {
	var divduration = document.getElementById('duration');
	var divfullPayment = document.getElementById('fullPayment');
    var divdistance = document.getElementById('Distance');
	var divpayment = document.getElementById('Payment');
	divdistance.innerHTML = divduration.value + 'KM';
	divpayment.innerHTML = 'Rs: ' + divfullPayment.value + '/-';
}*/

