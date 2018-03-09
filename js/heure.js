//recupere  heure mise a jour au moment de sousmission de formulaire et l'affiche dans le message de confirmation//
  var today = new Date();
  var hour = today.getHours();
  if (hour<10){
    hour="0"+hour;
  }
  var minute = today.getMinutes();
  if (minute<10){
     minute="0"+minute;
  }
  var seconds = today.getSeconds();
  if (seconds<10){
    seconds="0"+seconds;
  }
  document.getElementById("hour").innerHTML="L'heure de soumission de formulaire: " +hour+":"+minute+":"+seconds;
