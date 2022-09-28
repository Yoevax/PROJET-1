'use strict';

//l'ensemble des questions
let q1 = document.getElementById("q1");
let q2 = document.getElementById("q2");
let q3 = document.getElementById("q3");
let q4 = document.getElementById("q4");


//les retours en arriere
let previousQ1 =  document.getElementById("previousQ1");
let previousQ2 =  document.getElementById("previousQ2");
let previousQ3 =  document.getElementById("previousQ3");

//reponses question 1
let betterHalf = document.getElementById("betterHalf");
let parents = document.getElementById("parents");
let children = document.getElementById("children");
let friends = document.getElementById("friend");
let no_one = document.getElementById("no_one");

//reponse random
let random = document.getElementById("random");

//reponses question 2
let smart = document.getElementById("smart");
let laugh = document.getElementById("laugh");
let cry = document.getElementById("cry");
let more = document.getElementById("more");
let chmgtNb =  document.querySelectorAll("questionNumber");


//reponses question 3
let love = document.getElementById("love");
let action = document.getElementById("action");
let scare = document.getElementById("scare");
let teen = document.getElementById("teen");



//EVENT QUESTION 1
//event de la reponse 1 a la question 1
betterHalf.addEventListener("click", () => {
    q1.classList.add("hidden");
    q1.classList.remove("questions");
 
    q3.classList.add("hidden");
    q3.classList.remove("questions");

    q4.classList.add("hidden");
    q4.classList.remove("questions");

    q2.style.display = "flex";
    q2.classList.remove("hidden");
});

//event de la reponse 2 a la question 1
parents.addEventListener("click", () => {
    q1.classList.add("hidden");
    q1.classList.remove("questions");
 
    q3.classList.add("hidden");
    q3.classList.remove("questions");

    q4.classList.add("hidden");
    q4.classList.remove("questions");

    q2.style.display = "flex";
    q2.classList.remove("hidden");
});

//event de la reponse 3 a la question 1
children.addEventListener("click", () => {
    q1.classList.add("hidden");
    q1.classList.remove("questions");
 
    q3.classList.add("hidden");
    q3.classList.remove("questions");

    q4.classList.add("hidden");
    q4.classList.remove("questions");

    q2.style.display = "flex";
    q2.classList.remove("hidden");
});

//event de la reponse 4 a la question 1
friends.addEventListener("click", () => {
    q1.classList.add("hidden");
    q1.classList.remove("questions");
 
    q3.classList.add("hidden");
    q3.classList.remove("questions");

    q4.classList.add("hidden");
    q4.classList.remove("questions");

    q2.style.display = "flex";
    q2.classList.remove("hidden");
    q2.classList.add("questions");
});

//event de la reponse 5 a la question 1
no_one.addEventListener("click", () => {
    q1.classList.add("hidden");
    q1.classList.remove("questions");
 
    q3.classList.add("hidden");
    q3.classList.remove("questions");

    q4.classList.add("hidden");
    q4.classList.remove("questions");

    q2.style.display = "flex";
    q2.classList.remove("hidden");
});



//EVENT QUESTION 2
//event de la reponse 2 a la question 1
smart.addEventListener("click", () => {
    chmgtNb.innerText = "03";
    q1.classList.add("hidden");
    q1.classList.remove("questions");
 
    q2.classList.add("hidden");
    q2.classList.remove("questions");
    q2.style.display = "none";

    q4.style.display = "flex";
    q4.classList.add("questions");
    q4.classList.remove("hidden");

    q3.style.display = "none";
    q3.classList.add("hidden");
    
});

laugh.addEventListener("click", () => {
    q1.classList.add("hidden");
    q1.classList.remove("questions");
 
    q2.classList.add("hidden");
    q2.classList.remove("questions");
    q2.style.display = "none";

    q4.style.display = "flex";
    q4.classList.add("questions");
    q4.classList.remove("hidden");

    q3.style.display = "none";
    q3.classList.add("hidden");
});

cry.addEventListener("click", () => {
    q1.classList.add("hidden");
    q1.classList.remove("questions");
 
    q2.classList.add("hidden");
    q2.classList.remove("questions");
    q2.style.display = "none";

    q4.style.display = "flex";
    q4.classList.add("questions");
    q4.classList.remove("hidden");

    q3.style.display = "none";
    q3.classList.add("hidden");
});

more.addEventListener("click", () => {
    q1.classList.add("hidden");
    q1.classList.remove("questions");
 
    q2.classList.add("hidden");
    q2.classList.remove("questions");
    q2.style.display = "none";

    q4.classList.add("hidden");
    q4.classList.remove("questions");

    q3.style.display = "flex";
    q3.classList.remove("hidden");
    q3.classList.add("questions");
});

//question 3 eevent
love.addEventListener("click", () => {
    q1.classList.add("hidden");
    q1.classList.remove("questions");
 
    q2.classList.add("hidden");
    q2.classList.remove("questions");
    q2.style.display = "none";

    q4.style.display = "flex";
    q4.classList.add("questions");
    q4.classList.remove("hidden");

    q3.style.display = "none";
    q3.classList.add("hidden");
});

scare.addEventListener("click", () => {
    q1.classList.add("hidden");
    q1.classList.remove("questions");
 
    q2.classList.add("hidden");
    q2.classList.remove("questions");
    q2.style.display = "none";

    q4.style.display = "flex";
    q4.classList.add("questions");
    q4.classList.remove("hidden");

    q3.style.display = "none";
    q3.classList.add("hidden");
});

action.addEventListener("click", () => {
    q1.classList.add("hidden");
    q1.classList.remove("questions");
 
    q2.classList.add("hidden");
    q2.classList.remove("questions");
    q2.style.display = "none";

    q4.style.display = "flex";
    q4.classList.add("questions");
    q4.classList.remove("hidden");

    q3.style.display = "none";
    q3.classList.add("hidden");
});

teen.addEventListener("click", () => {
    q1.classList.add("hidden");
    q1.classList.remove("questions");
 
    q2.classList.add("hidden");
    q2.classList.remove("questions");
    q2.style.display = "none";

    q4.style.display = "flex";
    q4.classList.add("questions");
    q4.classList.remove("hidden");

    q3.style.display = "none";
    q3.classList.add("hidden");
});


//previous de la question 2 (retour à la q1)
previousQ1.addEventListener("click", () =>{
    q1.classList.remove("hidden");
    q1.classList.add("questions");
    q2.style.display = "none";
    q2.classList.add("hidden");
})

//retour en arriere (a la question 2)
previousQ2.addEventListener("click", () =>{
    q1.classList.add("hidden");
    q1.classList.remove("questions");
 
    q3.classList.add("hidden");
    q3.style.display = "none";

    q4.classList.add("hidden");
    q4.classList.remove("questions");
    q4.style.display = "none";

    q2.style.display = "flex";
    q2.classList.remove("hidden");
})

//retour en arriere (a la question 3)
previousQ3.addEventListener("click", () =>{
    q1.classList.add("hidden");
    q1.classList.remove("questions");
 
    q3.classList.add("hidden");
    q3.style.display = "none";

    q4.classList.add("hidden");
    q4.classList.remove("questions");
    q4.style.display = "none";

    q3.style.display = "flex";
    q3.classList.remove("hidden");
})

