// Javascript Document

//Change Colour
document.getElementById("changeExample").addEventListener("change", changeFunction);

function changeFunction() {
    var output = document.getElementById("changeExample").value;
    document.getElementById("output").innerHTML = "You picked " + output;

}


//Enter Event
document.getElementById("keyExample").addEventListener("keydown", keyFunction);

function keyFunction(ev) {
    var x = ev.keyCode;
    if (x === 13) {
        alert("Click submit to continue");
        ev.preventDefault();
    }
}

//Submit Event
document.getElementById("submitExample").addEventListener("submit", submitFunction);

function submitFunction() {
    alert("Your review was succesfully submitted")
}

//Resize Event
function big() {
    document.getElementById("result").style.fontSize = "xx-large";

}


function small() {
    var adjustText = document.getElementById("result").style.fontSize = "small";
}



bigger.addEventListener("click", big);
smaller.addEventListener("click", small);

//Touch Event
document.getElementById("content").addEventListener("touchstart", touchFunction);

function touchFunction(event) {
    event.target.style.color = "#E45F4E";

}



