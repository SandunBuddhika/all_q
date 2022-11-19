var firstValue = null;
var secondValue = null;
var operator = null;

function m(x) {

    var text = document.getElementById("txt");
    if (firstValue == null) {
        firstValue = x;
        text.value = firstValue;
    } else if (x == "+") {
        operator = x;
        text.value = firstValue + x;
    } else if (x == "-") {
        operator = x;
        text.value = firstValue + x;
    } else {
        secondValue = x;
        if (operator != null) {
            text.value = firstValue + operator + secondValue;
        } else {
            firstValue = secondValue;
            text.value = firstValue;
        }
    }
}
function awnser() {
    var text = document.getElementById("txt");
    text.value = "";
    if(operator == "+"){
        text.value = firstValue + secondValue;
    } else if (operator == "-"){
        text.value = firstValue - secondValue;
    }
}

function c(){
    var text = document.getElementById("txt");
    text.value = "";
    firstValue = null;
    secondValue = null;
    operator = null;
}