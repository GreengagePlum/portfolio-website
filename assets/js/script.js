// Set website language cookie on button click
document
    .querySelectorAll("body header div #header-buttons button:not(:last-child)")
    .forEach((currentButton) => {
        currentButton
            .addEventListener("click", function () {
                const d = new Date()
                d.setTime(d.getTime() + 24 * 60 * 60 * 1000)
                let expires = "expires=" + d.toUTCString()
                document.cookie = "lang=" + this.value + ";" + expires + ";path=/"
                location.reload()
            })
    })
