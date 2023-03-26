// Set website language cookie on button click
document
    .querySelectorAll("body header div section>button")
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

function checkSearch(input) {
    let check = input.value.length < 256
    if (!check) {
        if (document.getElementById("searchErr") == null) {
            const searchErr = document.createElement("p")
            searchErr.id = "searchErr"
            searchErr.innerText = "Terme de recherche plus long que 255"
            searchErr.style = "color: red; background-color: black; padding: 10px; font-size: 18px; position: absolute;"
            input.parentElement.insertAdjacentElement("afterend", searchErr)
        }
    } else {
        document.getElementById("searchErr")?.remove()
    }
    return check
}

document
    .querySelector("body header div section form")
    .addEventListener("submit", function (event) {
        event.preventDefault()
        if (checkSearch(this.querySelector("label input"))) {
            this.submit()
        }
    })

document
    .querySelector("body header div section form label input")
    .addEventListener("input", function () {
        checkSearch(this)
    })
