# Mini-projet Portfolio - PHP / HTML / CSS / JavaScript

Projet réalisé dans le cadre de l'immersion "Facil" pour découvrir les bases du développement web.

## 🎯 Objectif

Créer une page de portfolio simple, responsive et interactive, en utilisant uniquement :

- PHP pour la génération dynamique de contenu.
- HTML5 pour la structure sémantique.
- CSS3 (Flexbox, Media Queries) pour la mise en page responsive.
- JavaScript (DOM, gestion d'événements) pour l'interactivité de base.

## 🛠️ Technologies utilisées

- Serveur PHP (version 7.4+ recommandée)
- HTML5
- CSS3
  - Flexbox
  - Media Queries
- JavaScript
  - Manipulation du DOM
  -Gestion d'événements (clicks, scroll)

## 📁 Structure du projet

```bash
php-js-css-html/              # Racine du projet
├─ index.php                  # Page d'accueil du portfolio
├─ contact/                   # Dossier de la page de contact
│  └─ index.php               # Formulaire de contact (PHP)
├─ components/                  # Blocs réutilisables
│  ├─ header.php              # En‑tête + navigation
│  └─ footer.php              # Pied de page
├─ assets/                    # Ressources statiques
│  ├─ css/
│  │  └─ style.css            # Styles globales
│  ├─ js/
│  │  └─ main.js              # Scripts d'interaction
│  └─ images/                 # Images et icônes
└─ README.md                  # Documentation du projet
``` 

## 🚀 Installation et configuration

Cloner le dépôt :
```bash
git clone https://github.com/louisdaniel444/php-js-css-html.git
cd php-js-css-html
```

Démarrer un serveur local :
1. Avec XAMPP : déposer le dossier dans htdocs et lancer Apache.
2. Avec PHP intégré (version 7.4+) :

Accéder au site :

* Ouvrez votre navigateur sur http://localhost/php-js-css-html (ou http://localhost:8000).

## ⚙️ Utilisation

1. Navigation :
   * Le menu principal (partials/header.php) génère dynamiquement les liens.
   *  classes d'affichage : .menu (desktop) et .menu-mobile (mobile).
   * Vous pouvez définir la variable $menuClass avant l’include pour choisir la version.
2. Formulaire de contact :
   * Soumet les données vers contact/index.php.
   * Validation basique côté client (JavaScript) et côté serveur (PHP).
3. Personnalisation :
   * Modifiez les sections dans index.php et partials/header.php pour ajouter vos propres projets.
   * Adaptez les styles dans assets/css/style.css.

## 🤝 Contribution
Les contributions sont les bienvenues !
1. Forkez le projet
2. Créez votre branche : git checkout -b feature/ma-feature
3. Commitez vos changements : git commit -m "Ajout de ma feature"
4. Pushez sur la branche : git push origin feature/ma-feature
5. Ouvrez une Pull Request