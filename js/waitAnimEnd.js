// Et voilou ! Je suis content, j'en ai bavé ^^, je me suis bien arraché les cheveux.
// Merci à Copilot pour beaucoup de choses, j'ai beaucoup appris, et je suis allé bien plus loin que mes cours actuels donc je suis content que ça fonctionne :)
// Je pensais avoir les bases en JS pour attaquer mais non il me manquait beaucoup de notions ^^ notamment les query, les fonctions fléchées c'était vraiment tout tout frais...
// Ça a demandé une réorganisation du CSS, c'était pas évident de me dire qu'il fallait que je revienne sur ça, mais j'ai l'impression que ça doit arriver assez souvent dans ce genre de cas.
// J'ai essayé beaucoup de choses différentes avant d'arriver à quelque chose de satisfaisant. Je suis même passé par de la fonction asynchrone avant d'abandonner parce que c'était hors de propos xD 
// Dis-moi ce que tu en penses ! Je suis curieux d'avoir ton avis. Grosses bises le couz'!

const schemaContainer = document.querySelector(".schema_container");
const spans = document.querySelectorAll(".schema_container span");

// On répertorie les images pour les appeler par leurs index plus bas dans le forEach
const classesImages = [
  "image-1",
  "image-2",
  "image-3",
  "image-4",
  "image-5"
];

// Pour les arguments des fonctions et savoir sur quelle image on travaille, également checker si transition en cours
let imageActuelle = null;
let imageDemandee = null;
let transitionEnCours = false;

function changerImage(nouvelleImage) {
  // L'image demandée par l'event mouseenter ou mouseleave (qui sera nulle pour ce dernier)
  imageDemandee = nouvelleImage;

  // Si transition en cours on sort
  if (transitionEnCours) return;

  // On informe qu'une transition est en cours
  transitionEnCours = true;

  // On lance la classe de transition à 0%
  schemaContainer.classList.add("fading");
}

// Pour chaque span (sauf le vide)
spans.forEach((span, index) => {
  if (span.classList.contains("span_vide")) return;

  // Pour récupérer le bon index de span vu le span vide en position 0, comme ça index span = index classeImages
  const classeImage = classesImages[index - 1];

  // Si pas d'image ciao
  if (!classeImage) return;

  // Inputs de survols ou dé-survols
  span.addEventListener("mouseenter", () => {
    changerImage(classeImage);
  });

  span.addEventListener("mouseleave", () => {
    // Retour à l'état sans image
    changerImage(null);
  });
});

schemaContainer.addEventListener("transitionend", (event) => {
  // On back des déclenchements hors du container principal ou qui ne concernent pas notre transition d'opacité
  if (event.target !== schemaContainer) return;
  if (event.propertyName !== "opacity") return;

  // On est en fin de transition donc on peut changer les bg
  // Merci Copilot pour les "...classesImages"
  schemaContainer.classList.remove(...classesImages);

  if (imageDemandee) {
    schemaContainer.classList.add(imageDemandee);
  }

  // Permet d'éviter une demande inutile si on a déjà l'image chargée (merci copilot)
  imageActuelle = imageDemandee;

  // Force le navigateur à enregistrer l'état invisible (merci Copilot)
  void schemaContainer.offsetWidth;

  // Réaffiche le conteneur
  schemaContainer.classList.remove("fading");

  transitionEnCours = false;
});