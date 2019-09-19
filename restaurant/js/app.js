/*contact form function*/
function formSubmit(){
    var name = document.getElementById("name").value;
    var mobile = document.getElementById("mobile").value;
    var email = document.getElementById("email").value;
    var msg = document.getElementById("msg").value;
    var error = document.getElementById("error");
    
    //name validation
    if(name == ""){
        error.innerHTML = "**please enter name**";
        return false;
    }
    if(!isNaN(name)) {
        error.innerHTML ="**characters are allowed**";
        return false;
    }



    //mobile no validation
    if(mobile == ""){
        error.innerHTML = "**please enter mobile number**";
        return false;

    }
    if(isNaN(mobile)) {
        error.innerHTML = "**only numbers are allowed**";
        return false;
    }
    if(mobile.length != 10) {
        error.innerHTML = "**length of digits must be 10**";
        return false;
    }


    //email validagtion
    var regx = /^([a-z0-9\.-]+)@([a-z0-9-]+).([a-z]{2,3})(.[a-z]{2,3})$/;
    if(email == "") {
        error.innerHTML = "**please enter email** ";
        return false;
    }
    if(!regx.test(email))
    {
        error.innerHTML ="**Invalid Email**";
        return false;
    }


    //message box 
    if(msg == ""){
        error.innerHTML = "**please drop your message**";
        return false;
    }
}
/* end of contact form*/








