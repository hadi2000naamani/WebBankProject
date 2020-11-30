var signup = document.getElementById("signup");
var login = document.getElementById("login");
var applyloan = document.getElementById("applyloan");
var register = document.getElementById("register");
var meeting = document.getElementById("meeting");

signup.addEventListener("click", signUp);
login.addEventListener("click",logIn);
applyloan.addEventListener("click", goToLoan);
register.addEventListener("click",goToRegister);
meeting.addEventListener("click", goToMeeting);

function goToRegister() {
    location.replace("RegisterCard.html");
}

function goToMeeting() {
    location.replace("scheduleMeeting.html");
}

function goToLoan() {
    location.replace("applyLoan.html");
}


function signUp() {
    location.replace("SignupForm.html");
}

function logIn() {
    location.replace("LogInForm.html");
}


