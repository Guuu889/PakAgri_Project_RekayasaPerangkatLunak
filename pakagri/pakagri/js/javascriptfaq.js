document.addEventListener("DOMContentLoaded", function () {
  const questions = document.querySelectorAll(".isitanya");

  questions.forEach(function (question) {
    question.addEventListener("click", function () {
      this.classList.toggle("show");
    });
  });
});
