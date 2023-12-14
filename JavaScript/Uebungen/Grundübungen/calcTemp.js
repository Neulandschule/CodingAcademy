/**
 * Erstelle eine Funktion "calcTemp(temp, from, to)", 
 * welche Temperaturen umwwandeln kann.
 * Celsius = 'c' 
 * Kelvin = 'k'        => Celsius + 273.15
 * Fahrenheit = 'f'    => Celsius * 1.8 + 32
 */

let celsius = 0;
let kevin = calcTemp(celsius, 'c', 'k');
console.log(kevin);       //OUTPUT: 273.15
let fahrenheit = calcTemp(celsius, 'c', 'f');
console.log(fahrenheit);  //OUTPUt: 32


