/*RESPONSIVE HAMBURGER */
window.onload = function () {
  const hambuger = document.querySelector(".hambuger");
  const navMenu = document.querySelector(".nav-menu");

  hambuger.addEventListener("click", () => {
    hambuger.classList.toggle("active");
    navMenu.classList.toggle("active");
  });

  document.querySelectorAll(".nav-link").forEach((n) =>
    n.addEventListener("click", () => {
      hambuger.classList.remove("active");
      navMenu.classList.remove("active");
    })
  );
};

/* FORM VALIDATION */
function validate() {
  if (document.myForm.FirstName.value == "") {
    alert("Please provide your First Name!");
    document.myForm.FirstName.focus();
    return false;
  }
  if (document.myForm.LastName.value == "") {
    alert("Please provide your Last Name!");
    document.myForm.LastName.focus();
    return false;
  }
  if (
    document.myForm.PhoneNumber.value == "" ||
    isNaN(document.myForm.PhoneNumber.value) ||
    document.myForm.PhoneNumber.value.length != 10
  ) {
    alert("Please provide your Phone Number");
    document.myForm.PhoneNumber.focus();
    return false;
  }
  if (document.myForm.Country.value == "-1") {
    alert("Please provide your country!");
    return false;
  }
  if (document.myForm.Message.value == "") {
    alert("Please provide your Message!");
    document.myForm.Message.focus();
    return false;
  }
  return true;
}

//coords
griditem1.onclick = function (event) {
  // window-relative field coordinates
  let gridCoords = this.getBoundingClientRect();

  // the ball has position:absolute, the field: position:relative
  // so ball coordinates are relative to the field inner left-upper corner
  let starCoords = {
    top:
      event.clientY -
      gridCoords.top -
      griditem1.clientTop -
      star.clientHeight / 2,
    left:
      event.clientX -
      gridCoords.left -
      griditem1.clientLeft -
      star.clientWidth / 2,
  };

  // prevent crossing the top field boundary
  if (starCoords.top < 0) starCoords.top = 0;

  // prevent crossing the left field boundary
  if (starCoords.left < 0) starCoords.left = 0;

  // // prevent crossing the right field boundary
  if (starCoords.left + star.clientWidth > griditem1.clientWidth) {
    starCoords.left = griditem1.clientWidth - star.clientWidth;
  }

  // prevent crossing the bottom field boundary
  if (starCoords.top + star.clientHeight > griditem1.clientHeight) {
    starCoords.top = griditem1.clientHeight - star.clientHeight;
  }

  star.style.left = starCoords.left + "px";
  star.style.top = starCoords.top + "px";
};

//ARRAYS
const hobbies = ["Designer", "Rsearcher", "Developer", "Coder", "Engineer"];

function getRandomhobby() {
  const randomIndex = Math.floor(Math.random() * hobbies.length);
  return hobbies[randomIndex];
}

function displayhobby() {
  document.getElementById("small").innerHTML = getRandomhobby();
}

//TESTAPP
function sumInput() {
  let numbers = [];
  while (true) {
    let value = prompt("A number please?", 0);
    // should we cancel?
    if (value === "" || value === null || !isFinite(value)) break;
    numbers.push(+value);
  }
  let sum = 0;
  for (let number of numbers) {
    sum += number;
  }
  return sum;
}

function displaySum(){
  let inputNumbers = document.getElementById("inputNumbers").value;
  let numbers = inputNumbers.split(',').map(Number);
  let sum = 0;
  for (let number of numbers) {
    sum += number;
  }
  alert(sum);
}

