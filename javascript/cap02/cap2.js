var n1 = 10;
var n2 = 25;
var n3 = 40;
var i = 0;
var frase = "Olá mundo! ";
document.getElementById("iten1").innerHTML = frase;
document.getElementById("iten2").innerHTML = "n1 + n2 = " + (n1 + n2);
document.getElementById("iten3").innerHTML = "n1 = " + n1 + ", n2 = " + n2 + ", n1 e n2 = " + n1 + n2;
document.getElementById("iten4").innerHTML = "n1 = " + n1 + ", n2 = " + n2 + ", o maior é: " + Math.max(n1, n2);
document.getElementById("iten5").innerHTML = "n1 = " + n1 + ", n2 = " + n2 + ", o maior é: " + Math.min(n1, n2);
document.getElementById("iten6_1").innerHTML = "n1 = " + n1 + ", n2 = " + n2 + ", n3 = " + n3;
if(n1 > n3)
  {
    document.getElementById("iten6_2").innerHTML = "n1 é o maior que n3";
  }
    else if (n1 > n2)
    {
      document.getElementById("iten6_2").innerHTML = "n1 é maior que n2";
    }
    else {
      document.getElementById("iten6_2").innerHTML = "n1 é o menor";
    }
while(i <= 10)
{
  document.getElementById("iten7").innerHTML += i;
  i++;
  if (i <= 10) {
    document.getElementById("iten7").innerHTML += ", ";
  }
}
i = 10;
do
{
  document.getElementById("iten7_1").innerHTML += i;
  i--;
  if (i >= 0)
  {
    document.getElementById("iten7_1").innerHTML += ", ";
  }
} while (i >= 0);
