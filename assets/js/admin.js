function checkTitle(input) {
    let check = 0 < input.value.length && input.value.length < 256
    if (!check) {
        if (document.getElementById("titleErr") == null) {
            const titleErr = document.createElement("p")
            titleErr.id = "titleErr"
            titleErr.innerText = "Titre vide ou plus long que 255"
            titleErr.style = "color: red"
            input.parentElement.insertAdjacentElement("afterend", titleErr)
        }
    } else {
        document.getElementById("titleErr")?.remove()
    }
    return check
}

function checkDescription(textarea) {
    let check = 0 < textarea.value.length && textarea.value.length < 1024
    if (!check) {
        if (document.getElementById("descErr") == null) {
            const descErr = document.createElement("p")
            descErr.id = "descErr"
            descErr.innerText = "Description vide ou plus long que 1023"
            descErr.style = "color: red"
            textarea.parentElement.insertAdjacentElement("afterend", descErr)
        }
    } else {
        document.getElementById("descErr")?.remove()
    }
    return check
}

function checkImage(input) {
    let check = input.files[0] != undefined && input.files[0].size < 10_000_000
    if (!check) {
        if (document.getElementById("imageErr") == null) {
            const imageErr = document.createElement("p")
            imageErr.id = "imageErr"
            imageErr.innerText = "Image vide ou plus volumineux que 10Mo"
            imageErr.style = "color: red"
            input.parentElement.insertAdjacentElement("afterend", imageErr)
        }
    } else {
        document.getElementById("imageErr")?.remove()
    }
    return check
}

function checkImageAlt(input) {
    let check = 0 < input.value.length && input.value.length < 256
    if (!check) {
        if (document.getElementById("imageAltErr") == null) {
            const imageAltErr = document.createElement("p")
            imageAltErr.id = "imageAltErr"
            imageAltErr.innerText = "Text alternative pour l'image vide ou plus long que 255"
            imageAltErr.style = "color: red"
            input.parentElement.insertAdjacentElement("afterend", imageAltErr)
        }
    } else {
        document.getElementById("imageAltErr")?.remove()
    }
    return check
}

function checkAll(form) {
    let errCount = 0
    if (!checkTitle(form.querySelector("label input[name='title']"))) {
        errCount++
    }
    if (!checkDescription(form.querySelector("label textarea[name='description']"))) {
        errCount++
    }
    if (!checkImage(form.querySelector("label input[name='image']"))) {
        errCount++
    }
    if (!checkImageAlt(form.querySelector("label input[name='image-alt']"))) {
        errCount++
    }
    return errCount
}

let executedOnce = false
document
    .querySelector("body main form")
    .addEventListener("submit", function (event) {
        event.preventDefault()
        if (checkAll(this) == 0) {
            this.submit()
        } else if (!executedOnce) {
            this
                .querySelector("label input[name='title']")
                .addEventListener("input", function () {
                    checkTitle(this)
                })
            this
                .querySelector("label textarea[name='description']")
                .addEventListener("input", function () {
                    checkDescription(this)
                })
            this
                .querySelector("label input[name='image']")
                .addEventListener("input", function () {
                    checkImage(this)
                })
            this
                .querySelector("label input[name='image-alt']")
                .addEventListener("input", function () {
                    checkImageAlt(this)
                })
            executedOnce = true
        }
    })
