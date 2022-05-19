const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");

cookieButton.addEventListener("click", () => {
    cookieContainer.classList.add("active");
    sessionStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
if (!sessionStorage.getItem("cookieBannerDisplayed")) {
    cookieContainer.classList.remove("active");
}
}, 2000);