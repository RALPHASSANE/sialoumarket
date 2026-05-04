# Sialou Market - Site Vitrine & Référentiel

Ce projet est le site vitrine pour Sialou Market, une épicerie de proximité. Au-delà de l'aspect visuel, ce dépôt constitue le **référentiel technique** du patrimoine applicatif de l'enseigne.

**Lien vers le site :** [https://ralphassane.github.io/sialoumarket/](https://ralphassane.github.io/sialoumarket/)

---

## 🏗️ Gestion du Patrimoine Applicatif

Afin d'assurer un recensement exhaustif et une maintenance simplifiée, le projet respecte une structure standardisée :

* **Racine :** Pages HTML principales (Vues) et scripts de traitement (PHP).
* **ASSET/ :** Gestion centralisée des ressources médias (Images, icônes).
* **CSS/ :** Feuilles de style séparées par module (Accueil, Contact, Produits).
* **JS/ :** Scripts d'interactivité et de transitions fluides.

---

## 🚀 Fonctionnalités & Standards

* **Design Responsive :** Adaptabilité multi-support (Flexbox/Grid) respectant les standards du Web.
* **Traitement de Données :**  approche externe pour le formulaire de contact  via FormSubmit .

---

## 🛡️ Sécurité & Continuité de Service

Pour répondre aux exigences de gestion du patrimoine, les mesures suivantes ont été mises en place :

* **Gestion des versions (Git) :** Historique complet des modifications (29 commits) permettant une **restauration immédiate** du service en cas d'incident technique.
* **Sauvegarde :** Externalisation du patrimoine sur GitHub, garantissant la pérennité des sources hors infrastructure locale.
* **Sécurité PHP :** Nettoyage des entrées (`htmlspecialchars`, validation d'email) pour prévenir les injections de scripts simples.
* **Habilitations :** Utilisation de GitHub pour limiter les droits de modification (Push/Pull) aux seuls acteurs autorisés.

---

## 🛠️ Technologies & Normes

* **Frontend :** HTML5 (Sémantique), CSS3 (Variables), JS ES6.
* **Backend :** PHP 8.x (Traitement serveur).
* **Standards :** Respect partiel des normes d'accessibilité (W3C).

---


---

## ⚙️ Installation & Exploitation

1. **Recensement local :** `git clone https://github.com/RALPHASSANE/sialoumarket.git`
2. **Déploiement Statique :** Consultation directe des fichiers `.html`.
