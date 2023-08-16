console.clear();

let themeOptions = document.querySelectorAll("input[id$='-theme'");

let themeForm = document.querySelector("#theme-changer-form");

const [dayTheme, nightTheme] = themeOptions;

// console.log(dayTheme.checked)

window.addEventListener("click", (event) => {
  if (event.target.matches("#theme-changer-form button[type='submit']")) {
    console.log(dayTheme.checked, "day theme");
    if ( dayTheme.checked ) {
      // console.log(dayTheme.checked, dayTheme.value, "day theme");
      localStorage.setItem("theme", dayTheme.value);
    }
    if ( nightTheme.checked ) {
      // console.log(nightTheme.checked, nightTheme.value);
      localStorage.setItem("theme", nightTheme.value);
    }

  }

});
// console.log(localStorage.getItem("theme").split(" ").join("-"));

window.addEventListener("DOMContentLoaded",  (event) => {
  // console.log(event, "loaded")
  let selectedThemeLS = localStorage.getItem("theme").split(" ").join("-");
  let selectedTheme = document.querySelector(`#${selectedThemeLS}`);
  // console.log(selectedTheme.checked = true);
  selectedTheme.checked = true;
});
/*
add click event on window

  if event matches the form button

    check which radio is checked

  add checked button to local storage with theme-change key

on page load, 

get the item from local storage, find the matching radio button, and leave it checked it
*/ 
