console.clear();

let themeOptions = document.querySelectorAll("input[id$='-theme'");

let themeForm = document.querySelector("#theme-changer-form");

const [dayTheme, nightTheme] = themeOptions;

// console.log(dayTheme.checked)

window.addEventListener("click", (event) => {
  if (event.target.matches("#theme-changer-form button[type='submit']")) {
    console.log(dayTheme.checked, "day_theme");
    if ( dayTheme.checked ) {
      // console.log(dayTheme.checked, dayTheme.value, "day_theme");
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

  if ( !localStorage.getItem("theme") ) {
    let selectedTheme = document.querySelector("#day-theme");
    selectedTheme.checked = true;
  }

  if ( localStorage.getItem("theme") ) {
    let selectedThemeLS = localStorage.getItem("theme").split("_").join("-");

    let selectedTheme = document.querySelector(`#${selectedThemeLS}`);

    selectedTheme.checked = true;
  }

  activateDarkMode();

  // let selectedThemeLS = localStorage.getItem("theme").split(" ").join("-");

  // let selectedTheme = document.querySelector(`#${selectedThemeLS}`);

  // selectedTheme.checked = true;

  if (localStorage.getItem("theme") === "night_theme") {
    // activateDarkMode();
    // console.log("LS DS!!")
    document.querySelector("body").classList.add("dark-mode");
  }



});



function activateDarkMode() {
  // set style to dark
  let body = document.querySelector("body");

  var selectedTheme = document.querySelector("#night-theme");

  if (darkModePreference.matches) {

    localStorage.setItem("theme", "night_theme");

    body.classList.add("dark-mode");

    selectedTheme.checked = true;
  }
  if ( lightModePreference.matches ) {
    localStorage.setItem("theme", "day_theme");

    document.body.classList.remove("dark-mode");

    var selectedTheme = document.querySelector("#day-theme");

    selectedTheme.checked = true;
    console.log("DA YTHEME");
  }
}

// MediaQueryList
const darkModePreference = window.matchMedia("(prefers-color-scheme: dark)");

const lightModePreference = window.matchMedia("(prefers-color-scheme: light)");

// recommended method for newer browsers: specify event-type as first argument
darkModePreference.addEventListener("change", e => e.matches && activateDarkMode());

// deprecated method for backward compatibility
darkModePreference.addListener(e => e.matches && activateDarkMode());


// console.log(darkModePreference);



// if ( window.matchMedia("(prefers-color-scheme: light)").matches ) {
//     localStorage.setItem("theme", "day_theme");

//     document.body.classList.remove("dark-mode");

//     var selectedTheme = document.querySelector("#day-theme");

//     selectedTheme.checked = true;
//     console.log("DA YTHEME");
// }

// console.log(window.matchMedia("(prefers-color-scheme: dark)").matches === false)