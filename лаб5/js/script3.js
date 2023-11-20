function geometricProgression(num) {
    const quantity = num.toString().split('').map(Number);
    let relat = quantity[1] / quantity[0];
    for (let i = 1; i < quantity.length - 1; i++) {
      if (quantity[i + 1] / quantity[i] !== relat) {
        return false;
      }
    }
    return true;
  }
  
  function secondProgression(arr) {
    return arr.filter(num => {
      return !geometricProgression(Math.abs(Math.trunc(num)));
    });
  }
  const massive = [123, 256, 343, 555, 666, 1000, 1200, 2400, 4321];
  const endMassive = secondProgression(massive);
  console.log('Окончательный массив:', endMassive);