// Set website language cookie on button click
document
    .querySelectorAll("body header div #header-buttons button:not(:last-child)")
    .forEach((currentButton) => {
        currentButton
            .addEventListener("click", function () {
                const d = new Date();
                d.setTime(d.getTime() + 24 * 60 * 60 * 1000);
                let expires = "expires=" + d.toUTCString();
                if (this.value == "fr") {
                    document.cookie = "lang=fr;" + expires + ";path=/";
                } else if (this.value == "en") {
                    document.cookie = "lang=en;" + expires + ";path=/";
                }
                location.reload();
            })
    })
