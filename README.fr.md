# Portfolio Website

[![en](https://img.shields.io/badge/lang-en-red.svg)](README.md)
[![fr](https://img.shields.io/badge/lang-fr-yellow.svg)](README.fr.md)

Vous trouverez ici le projet fait pour l'UE "Programmation Web 2" lors de la deuxième année de la licence informatique à l'Université de Strasbourg.

Il s'agit de créer un site internet qui présente nos projets et nos compétences pour faire un portfolio personnel. Il fallait utiliser HTML, CSS, Javascript, PHP et une base de données (SQLite dans mon cas) sans aucune bibliothèque externe.

Je me suis inspiré de ces ressources :

* [Ekrem İmamoğlu](https://www.ekremimamoglu.com)

## Auteur

**Efe ERKEN**

Année : L2S4 Printemps 2023

Groupes : TD2-TP4

## Fonctionnalités non implémentées

Voici je vous explique les parties cosmétiques du projet pour lesquelles je n'ai pas eu le temps de les finir. Comme dit, ce ne sont que cosmétique et non nécessaire pour les demandes techniques du projet.

### De vrais projets

Je n'ai pas eu le temps de mettre mes vrais projets, ni mes compétences, ni de vrais images, ni mes vrais résaux sociaux, ni un vrai logo et ni un vrai slogan et copyright. Je n'ai non plus pas mis une vrai page "À propos", ce n'est juste temporaire.

Puisque je me suis concentré beaucoup sur les demandes et les critères de notation du projet, et aussi à cause des autres projets qui se sont ajouté vers la fin de l'année, je n'ai pas eu le temps de faire de ce projet un vrai site personnel.

Mais finalement, j'ai appris plein de choses sur le développement web et les parties cosmétiques ne sont que des détails qui ne nuisent à rien.

### Thème et conception

C'est vrai que le site n'est pas le plus beau et le plus sophistiqué en termes de style. Je voulais un site simple dans son style et facile à comprendre dès le départ mais à cause des contraintes de temps encore je me suis pas trop penché dessus.

Des polices et des couleurs restent à choisir pour un thème cohérent ainsi que possiblement des animations à ajouter.

### Applaudir des projets

Je n'ai pas implementé la fonctionnalité "applaudir" pour les projets. Elle était censé afficher le nombre de fois un projet avait été "applaudit" comme dans le site qui m'a inspiré.

## Utilisation

D'abord assurez vous que vous avez `php` installé sur votre machine ainsi que `sqlite`. Ensuite, pour lancer le site, ouvrez un terminal dans le répertoire du projet et tapez la commande suivante :

```sh
php -S localhost:8000
```

Vous pouvez désormais ouvrir votre navigateur et taper `localhost:8000` dans la barre d'adresse pour voir le site.

Attention, il existe une page en plus qui est une sorte de page cachée pour les administrateurs. Pour y accéder, tapez `localhost:8000/admin.php` dans la barre d'adresse. Il n'existe pas d'autre moyen pour y accéder.

## Dépôt Git

Le dépôt git de [ce projet](https://git.unistra.fr/erken/portfolio-website) suit une structure claire et déterminée proposée par Vincent Driessen à son poste [A successful Git branching model](https://nvie.com/posts/a-successful-git-branching-model/).

Du coup ne soyez pas surpris par le fait que `branch main` n'a presque pas de commit. Tout le développement se passe sur le `branch develop`. Avant chaque version, tout est préparé et assuré fonctionnel pour être inauguré au `branch main` qui n'a que des versions stables et complètes.

### Légende emoji

La signification des emojis utilisé dans les descriptions des commits git.

Emoji | Signification
:-|:-
✨ NEW | Nouveau fichier ou fonctionnalité
🔧 UPDATE | Mise à jour d'une partie de programme
🔨 CONFIG | Manipulation des fichiers de configuration comme makefile ou doxyfile
♻️ REFACTOR | Réécriture d'une partie du programme
🐛 BUGFIX | Une correction de bogue
🔥 DELETION | Suppression d'un fichier ou d'une fonctionnalité
📝 DOC | Manipulation de la documentation
🎉 EPOCH | Le début du projet
🚀 RELEASE | Une nouvelle version du programme
