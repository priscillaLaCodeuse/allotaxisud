// Système toggle Menu
const openNav = document.querySelector("#opennav");
const closeNav = document.querySelector("#closenav");
const nav = document.querySelector("nav");

openNav.addEventListener("click", () => {
  nav.style.display = "block";
  openNav.style.display = "none";
  closeNav.style.display = "block";
});

closeNav.addEventListener("click", () => {
  nav.style.display = "none";
  closeNav.style.display = "none";
  openNav.style.display = "block";
});

// Sytème accordéon donné par chatGPT
document.addEventListener("DOMContentLoaded", function () {
  const questions = document.querySelectorAll(".question");

  questions.forEach((question) => {
    question.addEventListener("click", () => {
      const currentReponse = question.nextElementSibling;

      // Si la réponse est déjà visible, on la ferme
      const isOpen = currentReponse.style.display === "block";

      // Fermer toutes les réponses
      document.querySelectorAll(".reponse").forEach((reponse) => {
        reponse.style.display = "none";
      });

      // Si elle n'était pas ouverte, on l'affiche
      if (!isOpen) {
        currentReponse.style.display = "block";
      }
    });
  });
});

// Étapes formulaire de contact
const steps = document.querySelectorAll(".form-step");
const nextBtns = document.querySelectorAll(".next");
const prevBtns = document.querySelectorAll(".prev");
let currentStep = 0;

function showStep(step) {
  steps.forEach((s, i) => {
    s.classList.toggle("active", i === step);
  });
}

nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    const currentFields = steps[currentStep].querySelectorAll(
      "input, select, textarea"
    );
    let valid = true;

    for (const field of currentFields) {
      if (!field.checkValidity()) {
        field.reportValidity(); // Affiche le message de l'input HTML5
        valid = false;
        break;
      }
    }

    if (valid && currentStep < steps.length - 1) {
      currentStep++;
      showStep(currentStep);
    }
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    if (currentStep > 0) {
      currentStep--;
      showStep(currentStep);
    }
  });
});

showStep(currentStep);

//Button up

window.addEventListener("scroll", () => {
  const button = document.querySelector(".button-up");
  if (window.scrollY > window.innerHeight * 0.01) {
    button.classList.add("show");
  } else {
    button.classList.remove("show");
  }
});
