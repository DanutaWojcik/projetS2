//affiche les chiffres par hasard pour addiction en captcha, functionne avec evenment onblur sur le champ au dessous de champ captcha-"email"//
function captcha(){
  var afficher_num1 = Math.floor(Math.random() * (1,3) + 1);
  var afficher_num2 = Math.floor(Math.random() * (1,3) + 1);
  document.getElementById("chiffre1").innerHTML = afficher_num1+"+";
  document.getElementById("chiffre2").innerHTML = afficher_num2+"=";
}