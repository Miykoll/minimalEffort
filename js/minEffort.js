console.log("Min Effort js script loaded.");

function responsiveNavBarFunction(){
    var x = document.getElementById("nav-responsive");
    if (x.className === "nav-links") {
        x.className += " responsive";
    } else {
        x.className = "nav-links";
    }
}