function countCuts(N, M) {
    let cuts = 0;
  
    while (N !== M) {
      if (N > M) {
        N -= M;
      } else {
        M -= N;
      }
      cuts++;
    }
  
    return cuts;
  }
  const N = 10;
  const M = 6;
  
  const cuts = countCuts(N, M);
  console.log("Количество отрезаний:", cuts);