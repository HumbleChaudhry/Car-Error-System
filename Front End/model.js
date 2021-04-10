const selectedIssueName = document.querySelector(".selected-issue-name");
const optionsContainerIssueName = document.querySelector(
  ".options-container-issue-name"
);

const optionsListIssueName = document.querySelectorAll(".option-issue-name");

selectedIssueName.addEventListener("click", () => {
  optionsContainerIssueName.classList.toggle("active");
});

optionsListIssueName.forEach((o) => {
  o.addEventListener("click", () => {
    selectedIssueName.innerHTML = o.querySelector("label").innerHTML;
    optionsContainerIssueName.classList.remove("active");
  });
});
