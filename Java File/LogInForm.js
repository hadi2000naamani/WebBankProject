var LogAdmin = document.getElementById("LogAdmin");
var signup = document.getElementById("signup");
var login = document.getElementById("login");

LogAdmin.addEventListener("click", showAdmin);
signup.addEventListener("click", signUp);
login.addEventListener("click",logIn);


function signUp() {
    location.replace("SignupForm.php");
}

function logIn() {
    location.replace("LogInForm.html");
}

function showAdmin() {
    var x = document.getElementById("LoginForm");
    if(x.style.display === "none"){
        LogAdmin.innerHTML = "Hide Admin Form"
        x.style.display = "block";
    } else{
        LogAdmin.innerHTML = "Log In as Admin";
        x.style.display = "none";
    }
}