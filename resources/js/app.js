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
