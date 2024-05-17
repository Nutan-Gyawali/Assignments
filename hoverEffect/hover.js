var box = document.getElementById("box");

box.addEventListener("mouseenter", function () {
    box.style.backgroundColor = "green";
});

box.addEventListener("mouseleave", function () {
    box.style.backgroundColor = "yellow";
});