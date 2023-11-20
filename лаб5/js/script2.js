
function multiMassive(massiv) {
    let multiply = 1; // при определении нуля, элементы будут умножаться на ноль, чего не надо
    let negative = false; // сначала определяем как ложь, чтобы при достижении подходящего условия значение перешло в true
   for (let i = massiv.length - 1; i >= 0; i--) {
    if (Math.sin(massiv[i]) < 0) { // главное условие 
        let negative = true;
    }
    if (negative) {
        multiply = multiply * massiv[i]; // можно кратко записать *=
    }
   } 
   return multiply;
}
const massiv = [21, 2, 12, 14, 51, 6, 7, 8, -9, 24]; // сам массив
const multiply = multiMassive(massiv); // определяем ссылку на функцию
console.log('Произведение элементов массива:', multiply);
