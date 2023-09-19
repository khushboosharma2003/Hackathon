const mainElement = document.getElementById("main");
console.log(mainElement.textContent)
mainElement.style.transition='.5s'
mainElement.addEventListener("mouseover", () => {
    mainElement.style.color='rgb(99, 225, 229)'
    mainElement.textContent = "Technical Projects";

});
mainElement.addEventListener("mouseout", () => {
    mainElement.textContent = "TechPro";
    mainElement.style.color='white'
});
