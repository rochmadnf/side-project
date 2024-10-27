import IMask from "imask";

import Swal from "sweetalert2/dist/sweetalert2.js";
import "sweetalert2/dist/sweetalert2.min.css";

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
        // new Notify({
        //     status: "success",
        //     title: "Berhasil",
        //     text: flashMsg.value,
        //     effect: "slide",
        //     speed: 500,
        //     autotimeout: 5000,
        //     showCloseButton: false,
        //     position: "x-center top",
        // });

        Swal.fire({
            html: `<div class="gap-y-2 flex flex-col justify-center items-center">
                <h4 class="text-base font-medium uppercase">Bawang Merahmu masuk dalam kategori</h4>
                <span tabindex="0" class="text-xl font-bold border-b-2 select-none border-b-gray-900 bg-blue-500 text-white px-4 py-2 rounded-md">${flashMsg.value}</span>
            </div>`,
            icon: "info",
            showConfirmButton: false,
            focusConfirm: false,
            focusCancel: false,
            showCloseButton: true,
            allowOutsideClick: false,
            allowEscapeKey: false,
            didOpen: (modal) => {
                modal.querySelector(".swal2-close").blur();
            },
        });

        flashMsg.remove();
    }
});
