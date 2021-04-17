// //Ratings Name
const selectedRatingsName = document.querySelector(".selected-rating-name");
const optionsContainerRatingsName = document.querySelector(
  ".options-container-rating-name"
);

const optionsListRatingsName = document.querySelectorAll(".option-rating-name");

selectedRatingsName.addEventListener("click", () => {
  optionsContainerRatingsName.classList.toggle("active");
});

optionsListRatingsName.forEach((o) => {
  o.addEventListener("click", () => {
    selectedRatingsName.innerHTML = o.querySelector("label").innerHTML;
    optionsContainerRatingsName.classList.remove("active");
  });
});
