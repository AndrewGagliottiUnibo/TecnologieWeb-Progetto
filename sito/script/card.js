const cards = document.querySelectorAll('.card');
const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");

cookieButton.addEventListener("click", () => {
    cookieContainer.classList.remove("active");
    localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
if (!localStorage.getItem("cookieBannerDisplayed")) {
    cookieContainer.classList.add("active");
}
}, 2000);


Array.prototype.forEach.call(cards, card => {
    let down, up, link = card.querySelector('h4 a');
    card.style.cursor = 'pointer';
    card.onmousedown = () => down = +new Date();
    card.onmouseup = () => {
        up = +new Date();
        if ((up - down) < 200) {
            link.click();
        }
    }
});