const mainElement = document.getElementById("main");
console.log(mainElement.textContent)
mainElement.style.transition = '0.5s';
mainElement.addEventListener("mouseover", () => {
    mainElement.textContent = "Technical Projects";
});
mainElement.addEventListener("mouseout", () => {
    mainElement.textContent = "TechPro";
});
