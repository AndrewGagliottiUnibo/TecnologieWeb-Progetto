const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");
sessionStorage.setItem("cookieBannerDisplayed", "false");

cookieButton.addEventListener("click", () => {
    cookieContainer.classList.remove("active");
    sessionStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
if (!sessionStorage.getItem("cookieBannerDisplayed")) {
    cookieContainer.classList.add("active");
}
}, 2000);