var signup = document.getElementById("signup");
var login = document.getElementById("login");
var applyloan = document.getElementById("applyloan");
var register = document.getElementById("register");
var meeting = document.getElementById("meeting");

var slideIndex = 0;

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
    location.replace("SignupForm.php");
}

function logIn() {
    location.replace("LogInForm.html");
}

function addImage(){
  
}

function showSlides() {
  var i;

  var slides = document.getElementsByClassName("hero");
  
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
      slideIndex = 1
    }
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 10000); // Change image every 2 seconds
}

window.onload = function(){
  var img = document.createElement('img');
  var icon = document.getElementById("icon");
  img.setAttribute("src", "./img/university-solid.png");
  img.setAttribute("width", "40");
  img.setAttribute("height", "40");
  
  icon.appendChild(img);

  var i;

  var slides = document.getElementsByClassName("hero");
  
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
      slideIndex = 1
    }
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 10000); // Change image every 2 seconds
}

