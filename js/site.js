window.onscroll = function () { topMenuClasses() };

var topMenu = document.getElementById("topMenu");
var imgSmallLogo = document.getElementById("imgSmallLogo");
var brandLink = document.getElementById("brandLink");

var topMenuOffsetTop = topMenu.offsetTop;

function topMenuClasses() {
    if (window.pageYOffset > topMenuOffsetTop) {
        topMenu.classList.add("shadow-sm");
        imgSmallLogo.classList.add("small-logo-show");
        brandLink.classList.add("brand-link-show");
    } else {
        topMenu.classList.remove("shadow-sm");
        imgSmallLogo.classList.remove("small-logo-show");
        brandLink.classList.remove("brand-link-show");
    }
}
