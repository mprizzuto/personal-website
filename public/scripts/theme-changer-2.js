console.clear();

let themeChanger = {
  getThemeButtons() {
    // return document.querySelector("#toggle-themes");
    let buttonIds = ["toggle-themes", "os-theme", "light-theme", "dark-theme"];
    return buttonIds;
  },

  getThemeMenu() {
    return document.querySelector(".theme-list");
  },
	saveThemeToLs(theme) {
    localStorage.setItem("mr-theme", theme);
  },
	getThemeFromLs() {

	}
};

window.addEventListener("click", (event) => {

  if ( [...themeChanger.getThemeMenu().classList].includes("show-themes") ) {
    // if ( true ) {
    //   themeChanger.getThemeMenu().classList.toggle("hide-themes");
    //   console.log("fuck")
    // }

    console.log("THEME MENU open");
    // themeChanger.getThemeMenu().classList.toggle("hide-themes");
    // if (event.target) {
      // themeChanger.getThemeMenu().classList.toggle("hide-themes");
    // }
  }
  if (
    themeChanger.getThemeButtons().includes(event.target.id)
  ) {
    themeChanger.getThemeMenu().classList.toggle("show-themes");
    themeChanger.getThemeMenu().classList.toggle("hide-themes");
  }

  if (event.target) {
    // themeChanger.getThemeMenu().classList.toggle("hide-themes");
  }

  if (event.target.id === "os-theme") {
    // console.log("theme-os");
    document.body.classList.toggle("os-theme");
    document.body.classList.remove("dark-theme", "light-theme");

    themeChanger.saveThemeToLs("os-theme");

  }

  if (event.target.id === "light-theme") {
    // console.log("theme-light");
    
    document.body.classList.toggle("light-theme");
    document.body.classList.remove("dark-theme", "os-theme");

    themeChanger.saveThemeToLs("light-theme");
  }

  if (event.target.id === "dark-theme") {
    // console.log("theme- dark");
    document.body.classList.toggle("dark-theme");
    document.body.classList.remove("light-theme", "os-theme");

    themeChanger.saveThemeToLs("dark-theme");
  }

});


// hide the theme menu upon page loading
window.addEventListener("DOMContentLoaded", () => {
  console.log("page laoded");

  themeChanger.getThemeMenu().classList.toggle("hide-themes");

});



