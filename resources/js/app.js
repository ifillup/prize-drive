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
if (document.getElementById("show-drops")) {
    document.getElementById("show-drops").addEventListener("click", () => {
        document
            .querySelectorAll(".drop-rate")
            .forEach(el => el.classList.toggle("show"));
    });
}
if (document.querySelector(".products-thumbs")) {
    setInterval(() => {
        let carosel = document.querySelector(".products-thumbs");
        carosel.appendChild(document.querySelector(".border-wrap"));
    }, 1000);
}
if (document.querySelector(".feature")) {
    setInterval(() => {
        let carosel = document.querySelector(".feature");
        carosel.appendChild(document.querySelector(".featured"));
    }, 3000);
}

//box opening
