const selected = document.querySelector(".selected");
const optionsContainer = document.querySelector(".options-container");

const optionsList = document.querySelectorAll(".option");

selected.addEventListener("click", () => {
  optionsContainer.classList.toggle("active");
});

optionsList.forEach((o) => {
  o.addEventListener("click", () => {
    selected.innerHTML = o.querySelector("label").innerHTML;
    optionsContainer.classList.remove("active");
    document.getElementById("Car").checked == true;
  });
});

//Make
const selectedMake = document.querySelector(".selected-make");
const optionsContainerMake = document.querySelector(".options-container-make");

const optionsListMake = document.querySelectorAll(".option-make");

selectedMake.addEventListener("click", () => {
  optionsContainerMake.classList.toggle("active");
});

optionsListMake.forEach((o) => {
  o.addEventListener("click", () => {
    selectedMake.innerHTML = o.querySelector("label").innerHTML;
    optionsContainerMake.classList.remove("active");
  });
});

//Model
const selectedModel = document.querySelector(".selected-model");
const optionsContainerModel = document.querySelector(
  ".options-container-model"
);

const optionsListModel = document.querySelectorAll(".option-model");

selectedModel.addEventListener("click", () => {
  optionsContainerModel.classList.toggle("active");
});

optionsListModel.forEach((o) => {
  o.addEventListener("click", () => {
    selectedModel.innerHTML = o.querySelector("label").innerHTML;
    optionsContainerModel.classList.remove("active");
  });
});

//Year
const selectedYear = document.querySelector(".selected-year");
const optionsContainerYear = document.querySelector(".options-container-year");

const optionsListYear = document.querySelectorAll(".option-year");

selectedYear.addEventListener("click", () => {
  optionsContainerYear.classList.toggle("active");
});

optionsListYear.forEach((o) => {
  o.addEventListener("click", () => {
    selectedYear.innerHTML = o.querySelector("label").innerHTML;
    optionsContainerYear.classList.remove("active");
  });
});

document.addEventListener("DOMContentLoaded", (e) => {
  //   if (document.getElementById("Car").checked) {
  //     e.preventDefault();
  //     selectedMake.classList.remove(".form--hidden");
  //   } else if (document.getElementById("Issue").checked) {
  //     e.preventDefault();
  //     selectedMake.classList.add(".form--hidden");
  //   }

  var radios = document.querySelectorAll('input[name="category"]');
  for (var i = 0, max = radios.length; i < max; i++) {
    radios[i].onclick = function () {
      alert(this.value);
    };
  }
});
