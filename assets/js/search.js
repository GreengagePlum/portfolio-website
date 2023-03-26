// Load more articles on button click using AJAX
document
    .querySelector("body main div button")
    .addEventListener("click", async function () {
        let existingArticleCount = document.querySelectorAll("body main #articles article").length
        let demandedArticleCount = this.dataset.articlecount
        let searchTerm = (new URLSearchParams(window.location.search)).get("search")
        const response = await fetch("assets/php/loadArticle.php?from=" + existingArticleCount + "&count=" + demandedArticleCount + "&search=" + searchTerm, { method: "GET", })
        const data = await response.text()
        document.querySelector("#articles article:last-child").insertAdjacentHTML("afterend", data)
    })
