import IMask from "imask";
import Notify from "simple-notify";
import "simple-notify/dist/simple-notify.css";

["diameter", "moisture_content"].forEach((element) =>
    IMask(document.getElementById(element), {
        mask: Number,
        scale: 5,
        padFractionalZeros: false,
        normalizeZeros: true,
        radix: ",",
        mapToRadix: ["."],
        min: 0,
        max: 1000,
    })
);

IMask(document.getElementById("hst"), {
    mask: Number,
    min: 1,
    thousandsSeparator: ".",
});

window.addEventListener("load", () => {
    const flashMsg = document.getElementById("flashMessage");
    if (flashMsg) {
        new Notify({
            status: "success",
            title: "Berhasil",
            text: flashMsg.value,
            effect: "slide",
            speed: 500,
            autotimeout: 5000,
            showCloseButton: false,
            position: "x-center top",
        });

        flashMsg.remove();
    }
});
