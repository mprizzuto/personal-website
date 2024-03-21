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
  // if it's a button, allow the menu to toggle
  if ( themeChanger.getThemeButtons().includes(event.target.id) ) {
    console.log(`event is menu button or sub butt: ${event.target.id}`,themeChanger.getThemeButtons().includes(event.target.id));
   
    themeChanger.getThemeMenu().classList.toggle("hide-themes");
    themeChanger.getThemeMenu().classList.toggle("show-themes");

  }

  // allow the menu to close if you click anywhere but the buttons
  if ( !themeChanger.getThemeButtons().includes(event.target.id) ) {
      themeChanger.getThemeMenu().classList.add("hide-themes");
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



