const navigation = document.getElementById("navigation");
const hamburger = document.getElementById("hamburger");

hamburger.addEventListener("click", () => {
  const classList = navigation.classList;
  const flag = classList.contains("is-show");
  if (flag === true) {
    classList.remove("is-show");
    classList.add("is-hide");
  } else {
    classList.remove("is-hide");
    classList.add("is-show");
  }
})