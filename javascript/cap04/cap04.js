var tam = 3;
var ac = 1;
var nota = [2,2,2];
for (var i = 0; i < tam; i++) {
    nota[i] += ac; 
    console.log("Nota " + (i+1) + ": " + nota[i]);    
    ac+= 4;
}