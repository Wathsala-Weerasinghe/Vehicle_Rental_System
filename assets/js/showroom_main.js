/* taken from https://stackoverflow.com/questions/951021/what-is-the-javascript-version-of-sleep
function sleep(ms) {
	return new Promise(resolve => setTimeout(resolve, ms));
}*/



function populateItems() {
	populateCarouselItems();
	populateMPVouselItems();
	populateMiscouselItems();
}

/*********** CAR section ************/

var liEls = [];

function populateCarouselItems() {
	liEls = document.querySelectorAll('ul.sr_carousel li');
}

var index = 0;
function showCarouselItem(increase) {
	index = index + increase;
	liEls[index].scrollIntoView({ behavior: 'smooth', inline: 'start', block: 'nearest' });
}

var stopRotation = true;
function stopCarousel() {
	stopRotation = true;
}

function sleep(ms) {
	return new Promise(resolve => setTimeout(resolve, ms));
}

async function goLeft() {
	stopRotation = false;
	while (index > 0 && !stopRotation) {
		await sleep(400);
		showCarouselItem(-1);
    }
}

async function goRight() {
	stopRotation = false;
	while (index < (liEls.length - 1) && !stopRotation) {
		await sleep(400);
		showCarouselItem(+1);
	}
}

/*********** MVP section ************/

var liElsMPV = [];

function populateMPVouselItems() {
	liElsMPV = document.querySelectorAll('ul.sr_MPVousel li');
}

var stopRotationMPV = true;
var indexMPV = 0;
function showMPVouselItem(increase) {
	indexMPV = indexMPV + increase;
	liElsMPV[indexMPV].scrollIntoView({ behavior: 'smooth', inline: 'start', block: 'nearest' });
}

function stopMPVousel() {
	stopRotationMPV = true;
}

function sleepMPV(ms) {
	return new Promise(resolve => setTimeout(resolve, ms));
}

async function goLeftMPV() {
	stopRotationMPV = false;
	while (indexMPV > 0 && !stopRotationMPV) {
		await sleepMPV(400);
		showMPVouselItem(-1);
    }
}

async function goRightMPV() {
	stopRotationMPV = false;
	while (indexMPV < (liElsMPV.length - 1) && !stopRotationMPV) {
		await sleepMPV(400);
		showMPVouselItem(+1);
	}
}

/*********** MISC section ************/

var liElsMisc = [];

function populateMiscouselItems() {
	liElsMisc = document.querySelectorAll('ul.sr_Miscousel li');
}

var stopRotationMisc = true;
var indexMisc = 0;
function showMiscouselItem(increase) {
	indexMisc = indexMisc + increase;
	liElsMisc[indexMisc].scrollIntoView({ behavior: 'smooth', inline: 'start', block: 'nearest' });
}

function stopMiscousel() {
	stopRotationMisc = true;
}

function sleepMisc(ms) {
	return new Promise(resolve => setTimeout(resolve, ms));
}

async function goLeftMisc() {
	stopRotationMisc = false;
	while (indexMisc > 0 && !stopRotationMisc) {
		await sleepMisc(400);
		showMiscouselItem(-1);
    }
}

async function goRightMisc() {
	stopRotationMisc = false;
	while (indexMisc < (liElsMisc.length - 1) && !stopRotationMisc) {
		await sleepMisc(400);
		showMiscouselItem(+1);
	}
}