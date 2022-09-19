const cursor_follower = document.getElementById('curseur'); //on recup l'ID de la div
const cursor_followerStyle = cursor_follower.style; // on modifie son style

document.addEventListener('mousemove', (e) => { // sur toute la page on modifie le cpt de la souris qd elle bouge
  window.requestAnimationFrame(() => { // indique au navigateur qu'on souhaite exécuter une animation et demande que celui-ci exécute une fonction spécifique de mise à jour de l'animation, avant le prochain rafraîchissement à l'écran du navigateur. 
    cursor_followerStyle.top = `${ e.clientY - cursor_follower.offsetHeight/2 }px`;
    cursor_followerStyle.left = `${ e.clientX - cursor_follower.offsetWidth/2 }px`;

  });
});



