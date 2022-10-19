

//personnalisation du curseur
const cursor_follower = document.getElementById('curseur'); //on recup l'ID de la div
const cursor_followerStyle = cursor_follower.style; // on modifie son style

document.addEventListener('mousemove', (e) => { // sur toute la page on modifie le cpt de la souris qd elle bouge
  window.requestAnimationFrame(() => { // indique au navigateur qu'on souhaite exécuter une animation et demande que celui-ci exécute une fonction spécifique de mise à jour de l'animation, avant le prochain rafraîchissement à l'écran du navigateur. 
    cursor_followerStyle.top = `${ e.clientY - cursor_follower.offsetHeight/2 }px`;
    cursor_followerStyle.left = `${ e.clientX - cursor_follower.offsetWidth/2 }px`;

  });
});

let mdpUser = document.getElementsByClassName('mdp');

    seePassword = () =>{
    for(let i = 0; i<mdpUser.length; i++){
        if (mdpUser[i].type == 'password') {
                mdpUser[i].type = 'text';
            }

            else
                mdpUser[i].type = 'password';
    }
}

//MENU HAMBURGER RESPONSIVE
let icone = document.querySelector('.links i');
let video = document.getElementById('videoAccueil');
let landing = document.getElementById('landing');
let scrolling = document.querySelector('.scroll a ');
let contentPage2 = document.getElementById('contentPage2');
let allQuestions = document.getElementById('allQuestions');
let flecheHaut = document.querySelector('.flecheHaut a svg path'); 
let formulaire = document.getElementById("formulaire");
let menu = document.querySelector('.menu'); 
let menuListe = document.querySelectorAll(".li");



icone.addEventListener("click", () => {
  video.classList.add("hide");
  landing.classList.add("hide");
  scrolling.classList.add("hide");
  contentPage2.classList.add("hide");
  allQuestions.classList.add("hide");
  flecheHaut.classList.add("hide");
  formulaire.classList.add("hide");

  menu.style.display = "flex";

  
})



