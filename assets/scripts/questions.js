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
let answers = document.querySelectorAll("answers");

let answer1 = document.getElementById("answer1");
let answer2 = document.getElementById("answer2");
let answer3 = document.getElementById("answer3");
let answer4 = document.getElementById("answer4");
let answer5 = document.getElementById("answer5");
let answer6 = document.getElementById("answer6");
//reponse random
let random = document.getElementById("random");

//reponses question 2

let answer7 = document.getElementById("answer7");
let answer8 = document.getElementById("answer8");
let answer9 = document.getElementById("answer9");
let answer10 = document.getElementById("answer10");
let answer11 = document.getElementById("answer11");

//changement du numéro
let chmgtNb = document.getElementById("changeNb");


//reponses question 3
let answer12 = document.getElementById("answer12");
let answer13 = document.getElementById("answer13");
let answer14 = document.getElementById("answer14");
let answer15 = document.getElementById("answer15");
let answer16 = document.getElementById("answer16");

//reponses question 4
let answer17 = document.getElementById("answer17");
let answer18 = document.getElementById("answer18");
let answer19 = document.getElementById("answer19");
let answer20 = document.getElementById("answer20");




// EVENT QUESTION 1
// event de la reponse 1 a la question 1

answer1.addEventListener("click", () => {
   
    q1.classList.add("hidden");
    q1.classList.remove("questions");
 
    q3.classList.add("hidden");
    q3.classList.remove("questions");

    q4.classList.add("hidden");
    q4.classList.remove("questions");

    q2.style.display = "flex";
    q2.classList.remove("hidden");
});

// event de la reponse 2 a la question 1
answer2.addEventListener("click", () => {
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
answer3.addEventListener("click", () => {
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
answer4.addEventListener("click", () => {
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
answer5.addEventListener("click", () => {
    q1.classList.add("hidden");
    q1.classList.remove("questions");
 
    q3.classList.add("hidden");
    q3.classList.remove("questions");

    q4.classList.add("hidden");
    q4.classList.remove("questions");

    q2.style.display = "flex";
    q2.classList.remove("hidden");
});

answer6.addEventListener("click", () => {
    document.location.href = './views/random.php';
});



//EVENT QUESTION 2
//event de la reponse 2 a la question 1
answer7.addEventListener("click", () => {
    

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

answer8.addEventListener("click", () => {
 
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

answer9.addEventListener("click", () => {
  

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

answer10.addEventListener("click", () => {
    
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



//question 3 event
answer11.addEventListener("click", () => {
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

answer12.addEventListener("click", () => {
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

answer13.addEventListener("click", () => {
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

answer14.addEventListener("click", () => {
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



//question 3 event

// answer15.addEventListener("click", () => {
//     //    document.location.href = './views/selection.php';
// });
// answer16.addEventListener("click", () => {
//     // answer18.type = "submit";
// });
// answer17.addEventListener("click", () => {
//     // answer19.type = "submit";
    
// });





//previous de la question 2 (retour à la q1)
previousQ1.addEventListener("click", () =>{
    q1.classList.remove("hidden");
    q1.classList.add("questions");
    q2.style.display = "none";
    q2.classList.add("hidden");
})

//retour en arriere (à la question 2)
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



