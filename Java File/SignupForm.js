var signup = document.getElementById("signup");
var login = document.getElementById("login");
// var fname = document.getElementById("fname");
// var lname = document.getElementById("lname");
// var email = document.getElementById("email");
// var password= document.getElementById("password");
// var submit = document.getElementById("submit");


signup.addEventListener("click", signUp);
login.addEventListener("click",logIn);
submit.addEventListener("click", inputValidation);

function signUp() {
    location.replace("SignupForm.html");
}

function logIn() {
    location.replace("LogInForm.html");
}


