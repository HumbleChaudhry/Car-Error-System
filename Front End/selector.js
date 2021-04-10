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
  });
});

//Make
const selectedMake = document.querySelector("#selected-make");
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

// //Part Name
const selectedPartName = document.querySelector(".selected-part-name");
const optionsContainerPartName = document.querySelector(
  ".options-container-part-name"
);

const optionsListPartName = document.querySelectorAll(".option-part-name");

selectedPartName.addEventListener("click", () => {
  optionsContainerPartName.classList.toggle("active");
});

optionsListPartName.forEach((o) => {
  o.addEventListener("click", () => {
    selectedPartName.innerHTML = o.querySelector("label").innerHTML;
    optionsContainerPartName.classList.remove("active");
  });
});

document.addEventListener("DOMContentLoaded", (e) => {
  var radios = document.querySelectorAll('input[name="selectPartBy"]');
  for (var i = 0, max = radios.length; i < max; i++) {
    radios[i].onclick = function () {
      if (
        this.value == "Engine" ||
        this.value == "Transmission" ||
        this.value == "Chassis"
      ) {
        selectedPartName.classList.add("form--hidden");
        selectedMake.classList.remove("form--hidden");
        selectedModel.classList.remove("form--hidden");
        selectedYear.classList.remove("form--hidden");
      } else {
        selectedMake.classList.add("form--hidden");
        selectedModel.classList.add("form--hidden");
        selectedYear.classList.add("form--hidden");
        selectedPartName.classList.remove("form--hidden");
      }
    };
  }
});
