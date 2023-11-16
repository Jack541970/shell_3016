// <!-- _________________________Burger_______________________________ -->


const burger = document.querySelector("#burger");
const pop = document.querySelector("#pop");

let isPopUpVisible = false;

burger.addEventListener('click', () => {
  // Vérifier l'état actuel de la pop-up
  if (isPopUpVisible) {
    // Si la pop-up est visible, la masquer en définissant le transform à sa valeur initiale (par exemple translateX(-100%))
    pop.style.transform = 'translateX(100%)';
    // Mettre à jour l'état de la pop-up
    isPopUpVisible = false;
  } else {
    // Si la pop-up est cachée, l'afficher en définissant le transform à 'translateX(0)'
    pop.style.transform = 'translateX(0)';
    // Mettre à jour l'état de la pop-up
    isPopUpVisible = true;
  }
});

// <!-- _________________________Compteur jours sans accident_______________________________ -->

    // Initialise les variables avec les valeurs récupérées depuis localStorage ou les définit par défaut à zéro
let lastAccidentDate = new Date(localStorage.getItem('lastAccidentDate'));
let daysWithoutAccident = parseInt(localStorage.getItem('daysWithoutAccident')) || 0;
let recordDaysWithoutAccident = parseInt(localStorage.getItem('recordDaysWithoutAccident')) || 0;

// Fonction pour définir la date du dernier accident en fonction de l'entrée de l'utilisateur et mettre à jour le compteur
function setLastAccidentDate() {
  const inputDate = document.getElementById('lastAccidentDate').value;
  lastAccidentDate = new Date(inputDate);
  localStorage.setItem('lastAccidentDate', lastAccidentDate);
  updateCounter();
}

// Fonction pour mettre à jour le compteur des jours sans accident et afficher les informations associées
function updateCounter() {
  const currentDate = new Date();
  const lastAccidentDateDisplay = document.getElementById('lastAccidentDateDisplay');

  // Calcule les jours sans accident
  if (lastAccidentDate) {
    const differenceInTime = currentDate - lastAccidentDate;
    daysWithoutAccident = Math.floor(differenceInTime / (1000 * 3600 * 24));
  } else {
    daysWithoutAccident = 0;
  }

  // Met à jour et affiche les jours sans accident
  document.getElementById('daysWithoutAccident').innerText = daysWithoutAccident;

  // Met à jour et affiche le record du plus long intervalle sans accident
  if (daysWithoutAccident > recordDaysWithoutAccident) {
    recordDaysWithoutAccident = daysWithoutAccident;
    localStorage.setItem('recordDaysWithoutAccident', recordDaysWithoutAccident);
  }
  document.getElementById('recordDaysWithoutAccident').innerText = recordDaysWithoutAccident;

  // Affiche la date du dernier accident ou un message s'il n'y a aucun accident enregistré
  if (lastAccidentDate) {
    lastAccidentDateDisplay.textContent = lastAccidentDate.toLocaleDateString();
  } else {
    lastAccidentDateDisplay.textContent = "Aucun accident enregistré";
  }
}

// Fonction pour réinitialiser le record du plus long intervalle sans accident à zéro
function resetRecordDaysWithoutAccident() {
  recordDaysWithoutAccident = 0;
  localStorage.setItem('recordDaysWithoutAccident', recordDaysWithoutAccident);
  document.getElementById('recordDaysWithoutAccident').innerText = recordDaysWithoutAccident;
}

// Fonction pour incrémenter les jours sans accident à minuit en utilisant setInterval
function incrementDaysWithoutAccidentAtMidnight() {
  setInterval(function() {
    const currentDate = new Date();
    const hours = currentDate.getHours();
    const minutes = currentDate.getMinutes();
    const seconds = currentDate.getSeconds();

    // Vérifie s'il est minuit et incrémente le compteur des jours sans accident
    if (hours === 0 && minutes === 0 && seconds === 0) {
      const daysWithoutAccident = parseInt(localStorage.getItem('daysWithoutAccident')) || 0;
      localStorage.setItem('daysWithoutAccident', daysWithoutAccident + 1);
      updateCounter();
    }
  }, 1000);
}

// Appelle la fonction pour incrémenter les jours sans accident à minuit
incrementDaysWithoutAccidentAtMidnight();

// Gestionnaire d'événement pour window.onload afin de remplir le champ d'entrée et mettre à jour les compteurs
window.onload = function() {
  // Remplit le champ d'entrée avec la date du dernier accident formatée, si disponible
  if (lastAccidentDate) {
    const formattedDate = lastAccidentDate.toISOString().split('T')[0];
    document.getElementById('lastAccidentDate').value = formattedDate;
  }

  // Met à jour les compteurs et les informations associées
  updateCounter();
}



      document.addEventListener("DOMContentLoaded", function() {
        var button = document.getElementById("bt4");

        button.addEventListener("click", function() {
          window.location.href = "../Entreprise/view_files.php"; //URL pour le lien
        });
      });


