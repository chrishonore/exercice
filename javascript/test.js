let condition1 = 10 > 5; // true
let condition2 = 9 == 4; // false
let annee = 2024;
let estBissextile = annee % 4 == 0 && (annee % 100 != 0 || annee % 400 == 0); // true

// ET logique
console.log(condition1 && condition2); // false
console.log()

// OU logique
console.log(condition1 || condition2); // true

// NON logique
console.log(!condition1); // false

// 2024 est-elle une année bissextile ?
console.log(annee + " est-elle une année bissextile ? " + estBissextile); // true