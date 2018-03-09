window.document.getElementById("contact").onchange=valider;

function valider(){
//controle de nom
  var resultat = document.getElementById("name").value;/*recupere valeur de sasie*/
  var regle = /[A-Z,a-z]$/;/*condition de sasie*/
  document.getElementById("name").value=resultat.toUpperCase();/*Change les minusules en majuscules*/
  if (resultat.match(regle)) {/*Si sasie est valide*/
    document.getElementById("name").style.border='3px solid yellowgreen';
    document.getElementById("name").style.backgroundColor='white';
    document.getElementById("erreur").innerHTML='';
  }
  else if (resultat==""){/*Si champ est non remplie*/
    document.getElementById("erreur").innerHTML="Ce champ est obligatoire";
    document.getElementById("contact").submit='none';
    document.getElementById("name").style.backgroundColor='pink';
  }
  else {/*si champ est containt autres characteres que dans le regle*/
    document.getElementById("erreur").innerHTML="Ecrivez votre nom en majuscules ";
    document.getElementById("name").style.backgroundColor='pink';
    document.getElementById("contact").submit='none';
  }
//controle de n°tel 
  var regle = /[0-9]$/;/*condition de sasie*/
  var resultat = document.getElementById("phone").value;/*recupere valeur de sasie*/
  if (resultat.match(regle)) {/*Si sasie est valide*/ 
    document.getElementById("phone").style.border='3px solid yellowgreen';
    document.getElementById("phone").style.backgroundColor='white';
    document.getElementById("erreur1").innerHTML='';
  }
  else if (resultat==""){/*Si champ est non remplie*/
    document.getElementById("phone").style.border='3px solid yellowgreen';
    document.getElementById("phone").style.backgroundColor='white';    
  }
  else{/*si champ est containt autres characteres que dans le regle*/
    document.getElementById("erreur1").innerHTML="N° de télephone doit contenir que les chiffres ou rester vide";
    document.getElementById("phone").style.backgroundColor='pink';
    document.getElementById("contact").submit='none';
  }
//controle de message
  var regle = /[^{}%!]$/;/*condition de sasie*/
  var resultat = document.getElementById("message").value;/*recupere valeur de sasie*/
  if (resultat.match(regle)) {/*Si sasie est valide*/
    document.getElementById("message").style.border='3px solid yellowgreen';;
    document.getElementById("message").style.backgroundColor='white';
    document.getElementById("erreur2").innerHTML='';
  }
  else if (resultat==""){/*Si champ est non remplie*/
    document.getElementById("erreur2").innerHTML="Ce champ est obligatoire";
    document.getElementById("message").style.backgroundColor='pink';
    document.getElementById("contact").submit='none';
  }
  else{/*si champ est containt autres characteres que dans le regle*/
    document.getElementById("erreur2").innerHTML="Le champ message ne dois pas contenir les signes suivantes: {, },!, %  ";
    document.getElementById("message").style.backgroundColor='pink';
    document.getElementById("contact").submit='none';
  }
//controle d'e-mail
  var regle = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;/*condition de sasie*/
  var resultat = document.getElementById("email").value;/*recupere valeur de sasie*/
  if (resultat.match(regle)) {/*Si sasie est valide*/
    document.getElementById("email").style.border='3px solid yellowgreen';
    document.getElementById("email").style.backgroundColor='white';
    document.getElementById("erreur3").innerHTML='';

  }
  else if (resultat==""){/*Si champ est non remplie*/
    document.getElementById("erreur3").innerHTML="Ce champ est obligatoire";
    document.getElementById("email").style.backgroundColor='pink';
    document.getElementById("contact").submit='none';
  }
  else{/*si champ est containt autres characteres que dans le regle*/
    document.getElementById("erreur3").innerHTML="Donnez une adresse e-mail valide" 
    document.getElementById("email").style.backgroundColor='pink';
    document.getElementById("contact").submit='none';
  }
//controle de captcha
  var reponse = document.getElementById("reponse").value;/*recupere valeur de sasie*/
  var chiffre1 = parseInt(document.getElementById("chiffre1").innerHTML);/*recupere valeur mise par fonction captcha()*/
  var chiffre2 = parseInt(document.getElementById("chiffre2").innerHTML);/*recupere valeur mise par fonction captcha()*/
  var sum = chiffre1 + chiffre2;/*calcule le resultat pour verification*/
  if(reponse == sum){/*Si la reponse est bonne*/
    document.getElementById("info").innerHTML = "C'est correct! Maitenant vous pouvez envoyer votre message.";
    document.getElementById("reponse").style.border='3px solid yellowgreen';
    document.getElementById("reponse").style.backgroundColor='white';
  }
  else if (reponse==""){/*Si champ est non remplie*/
    document.getElementById("info").innerHTML="Ce champ est obligatoire";
    document.getElementById("reponse").style.backgroundColor='pink';
    document.getElementById("contact").submit='none';
  }
  else if (reponse != sum){/*si resultat n'est pas bon*/
    document.getElementById("info").innerHTML = "Votre résultat n'est pas bon!";
    document.getElementById("reponse").style.backgroundColor='pink';
    document.getElementById("contact").submit='none';
  }
  else{/*si champ est containt autres characteres que dans le regle*/
    document.getElementById("reponse").style.backgroundColor='pink';
    document.getElementById("contact").submit='none';
  }
//instructions pour bloquer envoi de formulaire si les champs sont roses//
  if(document.getElementById("name").style.backgroundColor=='pink'){
    return false;
  }
  if(document.getElementById("phone").style.backgroundColor=='pink'){
    return false;
  }
  if(document.getElementById("message").style.backgroundColor=='pink'){
    return false;
  }
  if(document.getElementById("email").style.backgroundColor=='pink'){
    return false;
  }
  if(document.getElementById("reponse").style.backgroundColor=='pink'){
    return false;
  }
}