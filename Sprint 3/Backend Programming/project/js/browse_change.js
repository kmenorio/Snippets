var current = 1;

function setCurrent(i){
    document.getElementById("p"+current).style.fontStyle = "normal !important";
    document.getElementById("p"+i).style.fontStyle = "italic !important";
    current = i;
}