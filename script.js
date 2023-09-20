const mainElement = document.getElementById("main");
console.log(mainElement.textContent)
mainElement.style.transition='.5s'
mainElement.addEventListener("mouseover", () => {
    mainElement.style.color='rgb(198, 34, 243)'
    mainElement.textContent = "Technical Projects";
    mainElement.style.transition = '0.3s ease-in-out';


});
mainElement.addEventListener("mouseout", () => {
    mainElement.textContent = "TechPro";
    mainElement.style.color='white'
    mainElement.style.transition = '0.3s ease-in-out';
});
let signup = document.querySelector(".signup");
let login = document.querySelector(".login");
let slider = document.querySelector(".slider");
let formSection = document.querySelector(".form-section");

signup.addEventListener("click", () => {
	slider.classList.add("moveslider");
	formSection.classList.add("form-section-move");
});

login.addEventListener("click", () => {
	slider.classList.remove("moveslider");
	formSection.classList.remove("form-section-move");
});
