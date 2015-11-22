var passwd = document.getElementById('inputPassword');
var confPasswd = document.getElementById('inputConfPassword');

function validatePassword(){
    if(passwd.value != confPasswd.value) {
        confPasswd.setCustomValidity("Passwords Don't Match");
    }
    confPasswd.setCustomValidity("");
}

passwd.onchange = validatePassword;
confPasswd.onkeyup = validatePassword;