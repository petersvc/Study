var tam = 3;
var ac = 1;
var nota = [];
var fu = document.getElementById("fu");
for (var i = 0; i < tam; i++) {
    nota[i] = ac;
    fu.innerHTML += "Nota " + (i+1) + ": " + nota[i] + "<br/>";
    ac+= 4;
}

var fu2 = document.getElementById("fu2");
var button = document.querySelector("#button");
button.onclick = function(){
    var data = document.querySelector(".inp").value;
    fu2.innerText = data;
};
var button2 = document.querySelector("#button2");
button2.onclick = function(){
    fu2.innerText = fu2.innerText.toUpperCase();
};
