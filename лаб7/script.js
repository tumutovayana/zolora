const display = document.querySelector (".display");
const buttons = Array.from(document.querySelectorAll(".calc__btn"));
let currentValue = 0;
let memoryValue = 0;

function ClearEntry() {
    display.innerText = "0";
}

function Equals() {
    try {
        display.innerText = eval(display.innerText);
    } catch (e) {
        display.innerText = "Error!";
    }
}

function SignChange() {
    if (display.innerText !== "0") {
        display.innerText = (parseFloat(display.innerText) * -1).toString();
    }
}

function Percentage() {
    display.innerText = (parseFloat(display.innerText) / 100).toString();
}

function Decimal() {
    if (!display.innerText.includes(".")) {
        display.innerText += ".";
    }
}

function Clear() {
    display.innerText = "";
}
 
function Sqrt() {
    let num = parseFloat(display.innerText); 
    display.innerText = Math.sqrt(num).toString(); 
}

    let memory = 0;
function memoryMinus() {
    display.innerText = memory -= currentValue.toString();
}

function memoryPlus() {
    display.innerText = memory += currentValue.toString();
}

function memoryRecall() {
    display.innerText = memory = currentValue.toString();
}

function NumberInput(number) {
    if (display.innerText == "0" && number !== ".") {
        display.innerText = number;
    } else {
        display.innerText += number;
    }
}

buttons.forEach((calc__btn) => {
  calc__btn.addEventListener("click", (e) => {
        switch (e.target.innerText) {
            case "C/CE":
                ClearEntry();
                break;
            case "=":
                Equals();
                break;
            case "+/-":
                SignChange();
                break;   
            case "%":
                Percentage();
                break;
            case ".":
                Decimal();
                break;
            case "OFF":
                Clear();
                break;
            case "√":
                Sqrt();
                break;
            case "M-":
                memoryMinus();
                break;
            case "M+":
                memoryPlus();
                 break;  
            case "MRC":
                memoryRecall();
                break;                      
            default:
                NumberInput(e.target.innerText);
        }
    });
});


