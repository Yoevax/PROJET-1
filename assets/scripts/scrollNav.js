
let prevScrollpos = window.pageYOffset;
window.onscroll = () => {
  let currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("header_accueil").style.top = "0";
  } else {
    document.getElementById("header_accueil").style.top = "-250px";
  }
  prevScrollpos = currentScrollPos;
}
