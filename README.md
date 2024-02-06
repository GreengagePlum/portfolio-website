# Portfolio Website

[![en](https://img.shields.io/badge/lang-en-red.svg)](README.md)
[![fr](https://img.shields.io/badge/lang-fr-yellow.svg)](README.fr.md)

You'll find here the project for the class of "Web Programming 2" done during the second year of the Computer Science degree at the University of Strasbourg.

The project consists of the creation of a website presenting our projects and our skills to showcase our personal portfolio. HTML, CSS, JavaScript, PHP and a database (SQLite in my case) was to be used without any other external library.

I was inspired by these resources:

* [Ekrem İmamoğlu](https://www.ekremimamoglu.com)

## Author

**Efe ERKEN**

Year: 2nd year 4th semester Spring 2023

Groups: TD2-TP4

## Unimplemented features

Here I will explain the cosmetic parts of the project for which I didn't have the time to finish. As said, these are only cosmetic and are not necessary for the technical demands of the project.

### Real projects

I didn't have the time to include my real projects, neither my skills, nor real images, nor my actual social media, nor a real logo and nor a real slogan and copyright. I also didn't include a real "About" page, this is only temporary.

Since I concentrated a lot on the demands and the grading criteria of the project, and also due to the other projects that popped up close to the end of the year, I didn't have the time to do a real personal website with this project.

But, at the end I learned many things about web development and the cosmetic parts are only details that do no harm.

### Theme and design

It's true that the site is not the most beautiful and the most sophisticated in terms of style. I wanted a site simple in its style and easy to understand right from the beginning but again due to time contraints I didn't lean on it much.

Fonts and colors are yet to be chosen for a coherent theme as well as possibly some animations are to be added.

### Applauding projects

I didn't implement the "applaud" feature for the projects. It was supposed to display the number of times a project was "applauded" just like in the site that inspired me.

## Usage

First, make sure that you have `php` installed on your machine as well as `sqlite`. Then, to launch the site, open a terminal in the project folder and write this command:

```sh
php -S localhost:8000
```

You can now open your browser and write `localhost:8000` in the address bar to see the site.

Attention, there is an extra page which is a sort of a hidden page for administrators. To access it, write `localhost:8000/admin.php` in the address bar. There is no other way to access it.

## Git repository

The git repository of [this project](https://greengageplum.github.io/sokoban/) follows a clear and determined
structure put forth by Vincent Driessen in his
post "[A successful Git branching model](https://nvie.com/posts/a-successful-git-branching-model/)".

So don't be surprised by the fact that the `main branch` has few commits. All the development is happening on
the `develop branch`. Before each version, everything is prepared and guaranteed functional to be merged
into `main branch` which only has stable and complete versions.

### Emoji legend

These are the meanings of the emojis used in the git commit messages. See [gitmoji](https://gitmoji.dev/) also.

Emoji | Meaning
:-|:-
✨ NEW | New file or feature
🔧 UPDATE | Update of a part of the program
🔨 CONFIG | Changes in config files like makefile and doxyfile
♻️ REFACTOR | Rewrite of a part of the program
🐛 BUGFIX | A bug fix
🔥 DELETION | Removal of a file or a feature
📝 DOC | Changes in the documentation
🎉 EPOCH | The beginning of the project
🚀 RELEASE | A new version of the program
