var current = 1;

function setCurrent(i){
    document.getElementById("p"+current).style.fontStyle = "normal";
    document.getElementById("p"+i).style.fontStyle = "italic";
    current = i;
}