const openButton = document.querySelector("#open-modal")
const closeButton = document.querySelector("#close-modal")
const modal = document.querySelector("#modal")

openButton.addEventListener("click", () => {
    modal.showModal()
})

closeButton.addEventListener("click", () => {
    modal.close()
})