
//cerate the pic animation
    var x = 0; 
    var images = [];
    var time = 2000;

    images[0] = '../images/vip1.png';
    images[1] = '../images/vip7.png';
    images[2] = '../images/vip12.png';
    images[3] = '../images/vip5.png';
    images[4] = '../images/vipp.png';
    


    function changeImges(){
        document.slide.src = images[x];

        if(x < images.length - 1){
            x++;
        } else {
            x = 0;
        }

        setTimeout("changeImges()", time);
    }

    window.onload = changeImges;

//create the time in  js//
function timefun(){
    document.getElementById("date").innerHTML = Date();
}


function loadData(name){


if (name=="button5"){
    document.getElementById("para").style.display = "block";
}



}

function function1(){


      var newpassword = document.getElementById('newpassword').value;
      var confirmpassword=document.getElementById('confirmpassword').value;




      if(newpassword != confirmpassword){
        alert("password notmach !!!!!!!");
      }
    else if(newpassword===confirmpassword){
        alert("password are same !!!!");
    }
}

function checkPassword(){
    if(document.getElementById("pwd").value != document.getElementById("cnfrmpwd").value){
        alert("Password Mismatch");
        return false;
    }else{
        alert("Success");
        return true;
    }   
}

function enableButton(){
    if(document.getElementById("checkBox").checked){
     document.getElementById("submitBtn").disabled=false;
    }
    else{
         document.getElementById("submitBtn").disabled=true;
    }
}