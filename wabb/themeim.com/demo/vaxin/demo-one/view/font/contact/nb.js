


  var n = 365;
  // Nombre final du compteur
var cpt = 0;

var cpt3=75; // Initialisation du compteur
var duree = 1; // Durée en seconde pendant laquel le compteur ira de 0 à 15
var delta = Math.ceil((duree * 1000) / n);// On calcule l'intervalle de temps entre chaque rafraîchissement du compteur (durée mise en milliseconde)
var node =  document.getElementById("compt1"); // On récupère notre noeud où sera rafraîchi la valeur du compteur
 
  var node3 =  document.getElementById("compt3"); 

function countdown() {
  node.innerHTML = ++cpt;
   
    node3.innerHTML = ++cpt3;

  if( cpt < n || cpt3 < n3 ) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
     setTimeout(countdown, delta);
  }
}
 
setTimeout(countdown, delta);

