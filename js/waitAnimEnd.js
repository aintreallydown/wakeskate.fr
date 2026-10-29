// salut le couz pour l'instant j'ai juste corriger quelque pb de syntaxe rapide, j'ai pas encore tout regarder sur la logique meme si ca a l'air de marché
// re regarderai encore plus en détails aprés. Et oui le JS peux etre un peu plus compliqué, prend le temps et ne te pete pas le crane, vas y doucement.


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
  if (transitionEnCours) {
    return;
  }

  // On informe qu'une transition est en cours
  transitionEnCours = true;

  // On lance la classe de transition à 0%
  schemaContainer.classList.add("fading");
}

// Pour chaque span (sauf le vide)
spans.forEach((span, index) => {

  if (span.classList.contains("span_vide")) {
    return;
  }

  // Pour récupérer le bon index de span vu le span vide en position 0, comme ça index span = index classeImages
  const classeImage = classesImages[index - 1];

  // Si pas d'image ciao
  if (!classeImage) {
    return;
  }

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

  if (event.target !== schemaContainer) {
    return;
  }

  if (event.propertyName !== "opacity") {
    return;
  }

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