const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const con = document.querySelector(".con");

sign_up_btn.addEventListener("click", () => {
  con.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  con.classList.remove("sign-up-mode");
})