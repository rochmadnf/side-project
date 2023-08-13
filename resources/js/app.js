import "./bootstrap";
import "flowbite";

// New event listener:
window.addEventListener("load", function () {
    setTimeout(function () {
        // Hide the address bar:
        window.scrollTo(0, 1);
    }, 150);
});

document.getElementById("fullscreen-btn").addEventListener("click", (e) => {
    const isOpen = !(e.currentTarget.getAttribute("data-open") === "true");
    e.currentTarget.setAttribute("data-open", isOpen);

    const fullscreenOff = document.querySelector(".fullscreen-off");
    const fullscreenOn = document.querySelector(".fullscreen-on");

    if (isOpen) {
        fullscreenOff.classList.remove("hidden");
        fullscreenOn.classList.add("hidden");
        fullScreenMode();
    } else {
        fullscreenOff.classList.add("hidden");
        fullscreenOn.classList.remove("hidden");
        fullScreenMode("off");
    }
});

function fullScreenMode(mode = "on") {
    const docElm = document.documentElement;

    if (mode === "off") {
        document.exitFullscreen();
    } else if (docElm.requestFullscreen) {
        docElm.requestFullscreen();
    } else if (docElm.msRequestFullscreen) {
        docElm.msRequestFullscreen();
    } else if (docElm.mozRequestFullScreen) {
        docElm.mozRequestFullScreen();
    } else if (docElm.webkitRequestFullScreen) {
        docElm.webkitRequestFullScreen();
    }
}
