// JavaScript Document
function checkRePassword(document)
{
    var pwd = document.getElementById("password");
    var pwd_msg = document.getElementById('pwd_msg');
    var error_msg=document.getElementById("password_check");
    var repwd = document.getElementById("rePassword");

    if (pwd.value != repwd.value)
         {
            pwd_msg.innerHTML = "The two passwords are not the same.";
            repwd.value = "";
            pwd.focus();
            return false;
          }

    else
        {
          pwd_msg.innerHTML = "";
        }
    return true;
}

function passwordCheck(document){
 var password= document.getElementById("password").value;
 var error_msg=document.getElementById("password_check");
 var password1 = password.length;
  if (password1 <= 7) {
   error_msg.innerHTML="Please enter more than 8 characters";
   password.focus();
     pwd.focus();
   return false; }
 else {
   password_check.innerHTML=""
   return true;
   }
}


function checkZIPCode(document) {
    var zip = document.getElementById("zip");
    var zip_msg = document.getElementById("zip_msg");
    var isNum = /^[0-9]{4}$/.test(zip.value); // 4 digits
    if(!isNum) {
        zip_msg.innerHTML = "4 digits are required.";
        zip.focus();
        return false;
    }
    else {
        zip_msg.innerHTML = "";
    }
    return true;
}
function reset_frm(document) {
    document.getElementById('pwd_msg').innerHTML = "";
    document.getElementById("zip_msg").innerHTML = "";
}

function validateInfo(document) {
    if ( checkRePassword(document) && checkZIPCode(document) )
    {
        return true;
    }
    return false;
}
