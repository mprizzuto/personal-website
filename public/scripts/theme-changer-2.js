console.clear();

let themeChanger = {
  getValidThemes() {
    let themes = ["os-theme", "light-theme", "dark-theme"];

    return themes;
  },
  renderThemeIcon(theme) {
    let currentTheme = document.querySelector("#current-theme");

    switch(theme) {
      case "os-theme": 
        currentTheme.textContent = "🌓";
        break;

      case "light-theme": 
        currentTheme.textContent = "☀️";
        break;

      case "dark-theme": 
        currentTheme.textContent = "🌜";
        break;  

    // default: 
    //   currentTheme.textContent = "🌓";

    }
  },
  renderMenu() {
    let themeList = document.querySelector(".theme-list");

    let eventTargets = ["toggle-themes", "current-theme"];

    window.addEventListener("click", (event) => {
      // setting the targets for menu toggle
      if ( eventTargets.includes(event.target.id) ) {
        themeList.classList.toggle("hide-themes");
        themeList.classList.toggle("show-themes");
      }

      // only write to local storage if theme is valid
      if ( this.getValidThemes().includes(event.target.id) ) {
        this.saveThemeToLs(event.target.id);

        themeList.classList.add("hide-themes");
        themeList.classList.remove("show-themes");

        this.applyTheme(event.target.id);

        this.renderThemeIcon(event.target.id);
      }

      else if ( !eventTargets.includes(event.target.id) ) {
        themeList.classList.add("hide-themes");
        themeList.classList.remove("show-themes");
      }

    });

    window.addEventListener("DOMContentLoaded", (event) => {
      themeList.classList.toggle("hide-themes");

    });
  },
  applyTheme(theme) {
    // if the theme is valid, apply to body
    if ( this.getValidThemes() ) {
      // remove
      document.querySelector("html").classList = [];
      document.querySelector("html").classList.add(theme);

      // console.log( document.querySelector("html").classList.length );
    }
    // on page load get theme from LS, and apply to DOM
    // window.addEventListener("DOMContentLoaded", () => {
    //   document.querySelector("html").classList = [];
    //   // console.log(themeChanger.getThemeFromLs());
    //   document.querySelector("html").classList.add(themeChanger.getThemeFromLs());
    // });
  },
  saveThemeToLs(theme) {
    if (!theme) {
      localStorage.setItem("mr-theme", "os");
    }
    else {
      localStorage.setItem("mr-theme", theme);
    }
  },
  getThemeFromLs() {
    return localStorage.getItem("mr-theme");
  }

}

themeChanger.renderMenu();

//on page load, get theme from LS and add to DOM
window.addEventListener("DOMContentLoaded", () => {
  document.querySelector("html").classList = [];

  document.querySelector("html").classList.add(themeChanger.getThemeFromLs());

  themeChanger.renderThemeIcon(themeChanger.getThemeFromLs());
});



