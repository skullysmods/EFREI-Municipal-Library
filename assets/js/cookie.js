let themeColor = "light"
document.cookie = `themeColor=${themeColor}`
const themeBtn = document.querySelector("button.theme")

themeBtn.addEventListener("click", function() {
    themeColor === "light" ? themeColor = "dark" : themeColor = "light"
    document.cookie = `themeColor=${themeColor}`
    themeColor === "light" ? (themeBtn.style.color = "black") && (themeBtn.style.backgroundColor = "white") : (themeBtn.style.color = "white") && (themeBtn.style.backgroundColor = "black")
})