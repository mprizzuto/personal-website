console.clear();

let themeChanger = {
  getThemeNameById() {
    let themeName = document.querySelector("#current-theme");

    return themeName;
  },
  getThemeButtons() {
    // return document.querySelector("#toggle-themes");
    let buttonIds = ["toggle-themes", "current-theme", "os-theme", "light-theme", "dark-theme"];

    return buttonIds;
  },

  getThemeMenu() {
    return document.querySelector(".theme-list");
  },
	saveThemeToLs(theme) {
    localStorage.setItem("mr-theme", theme);
  },
	getThemeFromLs() {
    return localStorage.getItem("mr-theme");
	},
  templateThemeNameOnLoad() {
    let lsTheme = this.getThemeFromLs();
    // return lsTheme ? lsTheme : this.;

    this.getThemeNameById().textContent = lsTheme;

  },
  templateThemeName(name) {
    this.getThemeNameById().textContent = name+ "-theme";
    // themeName.textContent = name;
  },
  applyTheme(event) {
    let themeName = document.querySelector("#current-theme");
    // if it's a button, allow the menu to toggle
    if ( this.getThemeButtons().includes(event.target.id) ) {
      console.log(`event is menu button or sub butt: ${event.target.id}`,themeChanger.getThemeButtons().includes(event.target.id));
     
      this.getThemeMenu().classList.toggle("hide-themes");
      this.getThemeMenu().classList.toggle("show-themes");

    }

    // allow the menu to close if you click anywhere but the buttons
    if ( !themeChanger.getThemeButtons().includes(event.target.id) ) {
        this.getThemeMenu().classList.add("hide-themes");
      }

    if (event.target.id === "os-theme") {
      // console.log("theme-os");
      document.body.classList.toggle("os-theme");
      document.body.classList.remove("dark-theme", "light-theme");

      this.templateThemeName("os");

      this.saveThemeToLs("os-theme");

    }

    if (event.target.id === "light-theme") {
      // console.log("theme-light");
      
      document.body.classList.toggle("light-theme");
      document.body.classList.remove("dark-theme", "os-theme");

      this.templateThemeName("light");

      this.saveThemeToLs("light-theme");
    }

    if (event.target.id === "dark-theme") {
      // console.log("theme- dark");
      document.body.classList.add("dark-theme");
      document.body.classList.remove("light-theme", "os-theme");

      this.templateThemeName("dark");

      this.saveThemeToLs("dark-theme");
      console.log("DARKTHEMEZ");
      alert("DAKR THEM")
    }
  }
};


window.addEventListener("click", (event) => {
  themeChanger.applyTheme(event);
  console.log("CLIDKED")

});


// hide the theme menu upon page loading
window.addEventListener("DOMContentLoaded", () => {
  console.log("page laoded");

  themeChanger.getThemeMenu().classList.toggle("hide-themes");

  if ( themeChanger.getThemeFromLs() ) {
    // if upon page loading the loacal storage oreferencde is set, set it on the body. 
    console.log( themeChanger.getThemeFromLs() );

    themeChanger.templateThemeNameOnLoad();
  }
});



