# Sialou Market - Site Vitrine

Ce projet est le site vitrine pour Sialou Market, une épicerie proposant une variété de produits. Le site a été conçu pour être moderne, responsive et offrir une expérience utilisateur agréable grâce à des animations fluides.

**Lien vers le site :** [https://ralphassane.github.io/sialoumarket/](https://ralphassane.github.io/sialoumarket/)

---

## 🚀 Fonctionnalités

- **Design Responsive :** Entièrement adaptable sur mobiles, tablettes et ordinateurs de bureau en utilisant des techniques modernes de CSS (Flexbox, Grid).
- **Navigation Multi-pages :** Structure claire avec une page d'accueil, une page produits et une page de contact.
- **Transitions de Page Fluides :** Des animations de transition en JavaScript sont utilisées lors de la navigation entre les pages pour une expérience utilisateur améliorée.
- **Catalogue de Produits :** Une section dédiée à la présentation des différentes familles de produits avec images, descriptions et prix.
- **Formulaire de Contact Fonctionnel :** Le projet montre deux approches :
  1.  Une intégration avec le service externe [FormSubmit.co](https://formsubmit.co/) pour une mise en place rapide sans backend (`contact.html`).
  2.  Un script backend en PHP (`index.php`) qui gère l'envoi d'email, incluant des mesures de sécurité de base (validation et nettoyage des données).

---

## 🛠️ Technologies Utilisées

- **Frontend :**
  - HTML5
  - CSS3 (Variables, Flexbox, Grid, Animations)
  - JavaScript (ES6) pour l'interactivité et les animations.
- **Backend (alternative pour le formulaire) :**
  - PHP pour le traitement du formulaire de contact.

---

## ✨ Pistes d'Amélioration

Ce projet constitue une excellente base. Voici quelques pistes pour aller plus loin et démontrer des compétences de développement avancées :

1.  **Centraliser le code JavaScript :** La fonction `handleTransition` est dupliquée dans `saliou.js` et `produits.js`. Il serait judicieux de créer un fichier commun (ex: `js/main.js`) pour héberger cette fonction et de l'inclure dans toutes les pages HTML. Cela respecte le principe DRY (Don't Repeat Yourself) et facilite la maintenance.

2.  **Améliorer l'Accessibilité (a11y) :** Ajouter des attributs `aria-label` sur les boutons et liens pour les lecteurs d'écran, s'assurer que les contrastes de couleurs sont suffisants, et utiliser des balises HTML plus sémantiques (ex: `<article>` pour chaque produit).

3.  **Robustesse du Backend PHP :** Pour le script `index.php`, l'utilisation d'une bibliothèque comme **PHPMailer** est recommandée. Elle offre plus de fiabilité et de sécurité (envoi via SMTP, meilleure gestion des en-têtes) que la fonction `mail()` de base de PHP.

---

## ⚙️ Installation et Lancement

Le site étant principalement statique, vous pouvez le lancer très simplement.

1.  Clonez le dépôt sur votre machine locale.
2.  Ouvrez les fichiers `.html` (comme `contact.html`) directement dans votre navigateur.

**Pour tester le formulaire de contact avec PHP :**
Vous aurez besoin d'un serveur local avec PHP (comme WAMP, MAMP, XAMPP). Placez les fichiers dans le répertoire de votre serveur et accédez-y via `http://localhost`. Assurez-vous que votre configuration PHP est paramétrée pour permettre l'envoi d'emails.
