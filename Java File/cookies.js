var signup = document.getElementById("signup");
var login = document.getElementById("login");
var logout = document.getElementById("logout");
var dashboard = document.getElementById("dashboard");
var editprofile = document.getElementById("editProfileButton");

var myCookue = getCookie("userTolkien");
var myCookie = getCookie("adminTolkien");
if(myCookue != null) {
    window.addEventListener("load",hide);
    function hide() {
        login.style.display = "none";
        signup.style.display = "none";
        logout.style.display = "block";
        dashboard.style.display = "none";

    }
}

else if(myCookie != null) {
    window.addEventListener("load",hide);
    function hide() {
        login.style.display = "none";
        signup.style.display = "none";
        logout.style.display = "block";
        editprofile.style.display = "none";
        dashboard.style.display = "block";
    }
}

else{
    window.addEventListener("load",hide);
    function hide() {
        login.style.display = "block";
        signup.style.display = "block";
        logout.style.display = "none";
        editprofile.style.display = "none";
        dashboard.style.display = "none";
    }
}


function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        }
    }
    // because unescape has been deprecated, replaced with decodeURI
    //return unescape(dc.substring(begin + prefix.length, end));
    return decodeURI(dc.substring(begin + prefix.length, end));
}
