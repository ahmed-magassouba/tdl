document.addEventListener("DOMContentLoaded", function () {
  const container = document.querySelector(".container"),
    pwShowHide = document.querySelectorAll(".showHide"),
    pwFields = document.querySelectorAll(".password"),
    signUp = document.querySelector(".signup-link"),
    logIn = document.querySelector(".login-link");

  /* ================ SHOW/HIDE PASSWORD ================= */

  pwShowHide.forEach((eyeIcon) => {
    eyeIcon.addEventListener("click", () => {
      pwFields.forEach((pwField) => {
        if (pwField.type === "password") {
          pwField.type = "text";

          pwShowHide.forEach((icon) => {
            icon.classList.replace("uil-eye-slash", "uil-eye");
          });
        } else {
          pwField.type = "password";

          pwShowHide.forEach((icon) => {
            icon.classList.replace("uil-eye", "uil-eye-slash");
          });
        }
      });
    });
  });

  /* ================ SIGN UP ================= */
signUp.addEventListener("click", () => {
//   container.classList.replace("login-container", "signup-container");
  container.classList.add("active");
//   logIn.classList.remove("active");

});

/* ================ LOG IN ================= */
logIn.addEventListener("click", () => {
    // container.classList.replace("login-container", "signup-container");
    // signUp.classList.add("active");
    container.classList.remove("active");
  
  });



});
