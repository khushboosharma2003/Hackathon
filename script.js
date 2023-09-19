const mainElement = document.getElementById("main");
console.log(mainElement.textContent)
mainElement.style.transition='.5s'
mainElement.addEventListener("mouseover", () => {
    mainElement.style.color='rgb(198, 34, 243)'
    mainElement.textContent = "Technical Projects";

});
mainElement.addEventListener("mouseout", () => {
    mainElement.textContent = "TechPro";
    mainElement.style.color='white'
});
