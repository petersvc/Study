var tam = 3;
var ac = 1;
var nota = [];
var fu = document.getElementById("fu");
for (var i = 0; i < tam; i++) {
    nota[i] = ac; 
    fu.innerHTML += "Nota " + (i+1) + ": " + nota[i] + "<br/>";    
    ac+= 4;
}
var form = document.querySelector(".inp").value;
var fu2 = document.getElementById("fu2");
fu2.innerHTML = form;