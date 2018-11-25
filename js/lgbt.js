
var idMenu = ["headerLiIndex","headerLiActu","headerLiAgenda","headerLiProjet","headerLiGalerie","headerLiLogin"];
var idMenuBool = [false,false,false,false,false,false];
var color = ['red','green','blue','orange','purple','yellow'];
var i=0;
while (i<idMenu.length) {
  var rand =Math.floor((Math.random() * idMenu.length));
  if (!idMenuBool[rand]) {
    var elem = document.getElementById(idMenu[i]);
    elem.style.background=color[rand];
    idMenuBool[rand]=true;
  }
  else {
    i--;
  }
  i++;
}
