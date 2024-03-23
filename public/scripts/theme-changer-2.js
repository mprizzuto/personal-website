console.clear();

let themeChanger = {
  getValidThemes() {
    let themes = ["os-theme", "light-theme", "dark-theme"];

    return themes;
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

      }

      // if () {

      // }

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
      document.body.classList.toggle(theme);
    }
  },
  saveThemeToLs(theme) {
    if (!theme) {
      localStorage.setItem("mr-theme", "os");
    }
    else {
      localStorage.setItem("mr-theme", theme);
    }
  }

}

themeChanger.renderMenu();