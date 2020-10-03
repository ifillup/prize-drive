require("./bootstrap");

document.querySelectorAll(".box").forEach(box => {
    box.addEventListener(
        "click",
        e => {
            console.log(e);
        },
        true
    );
});

document.getElementById("show-drops").addEventListener("click", () => {
    document
        .querySelectorAll(".drop-rate")
        .forEach(el => el.classList.toggle("show"));
});
