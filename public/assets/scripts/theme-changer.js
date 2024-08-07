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


      // this logic shoudl be in itds own function
      // only write to local storage if theme is valid
      if ( this.getValidThemes().includes(event.target.id) ) {
        this.saveThemeToLs(event.target.id);

        themeList.classList.add("hide-themes");
        themeList.classList.remove("show-themes");

        this.applyTheme(event.target.id);

        this.renderThemeIcon(event.target.id);

        this.sendThemeToServer(event.target.id);

        document.documentElement.setAttribute('data-theme', event.target.id);

        // if theme is os theme
          // if theme is dark theme
            // send "dark-theme" string to server

        // if theme is light theme
          // send "light-theme" string to server

        if (event.target.id === "os-theme") {
          if (this.getUserOsTheme() === "light") {
            this.sendThemeToServer("light-theme");

            document.documentElement.setAttribute('data-theme', "os-theme-light");
          }

          if (this.getUserOsTheme() === "dark") {
            this.sendThemeToServer("dark-theme");

            document.documentElement.setAttribute('data-theme', "os-theme-dark");
          }
        } 
      }

      else if ( !eventTargets.includes(event.target.id) ) {
        themeList.classList.add("hide-themes");
        themeList.classList.remove("show-themes");
      }
    });


  },
  applyTheme(theme) {
    if ( this.getValidThemes() ) {
      document.querySelector("html").classList = [];
      document.querySelector("html").classList.add(theme);
    }

    if (this.getThemeFromLs() === "os-theme") {
      this.getUserOsTheme();
    }
  },
  saveThemeToLs(theme) {
    if (!theme) {
      localStorage.setItem("mr-theme", "os-theme");
    }
    else {
      localStorage.setItem("mr-theme", theme);
    }
  },
  getThemeFromLs() {
    return localStorage.getItem("mr-theme");
  },
  getUserOsTheme() {
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      document.querySelector("html").classList = [];
      document.querySelector("html").classList.toggle("os-theme");
      document.querySelector("html").classList.toggle("dark-theme");

      this.saveThemeToLs("os-theme");

      this.renderThemeIcon("os-theme");
      console.log("dark theme");

      document.documentElement.setAttribute('data-theme', "os-theme-dark");
      return "dark";
    }

    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches) {
      document.querySelector("html").classList = [];
      document.querySelector("html").classList.toggle("os-theme");
      document.querySelector("html").classList.toggle("light-theme");

      document.documentElement.setAttribute('data-theme', "os-theme-light");

      this.saveThemeToLs("os-theme");

      this.renderThemeIcon("os-theme");
      console.log("light theme");

      return "light";
    }


  },
  async sendThemeToServer(theme) {
    const URL = "index.php";

    var response = await fetch(URL, {
      method: "POST",
      headers: {
      "Content-Type": "text/plain",
      }, 
      body: theme
    });
    // var page = await response;

    if (!response.ok) {
      console.error('Network response was not ok', response.statusText);
      return;
    }
    console.log(response.text(), response);
  }
};


themeChanger.renderMenu();
// themeChanger.getUserOsTheme();

 // listen for changes only if current choice is os-theme

if ( themeChanger.getThemeFromLs() === "os-theme" ) {
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
    const newColorScheme = event.matches ? "dark" : "light";

    // console.log("NCS", newColorScheme);
    if (newColorScheme === "dark") {
      // console.log("DARK THEME");
      document.querySelector("html").classList = [];
      document.querySelector("html").classList.toggle("os-theme");
      document.querySelector("html").classList.toggle("dark-theme");

      themeChanger.saveThemeToLs("os-theme");
      themeChanger.sendThemeToServer("dark-theme");

      themeChanger.renderThemeIcon("os-theme");

      document.documentElement.setAttribute('data-theme', "os-theme-dark" );
    }

    else if ( newColorScheme === "light" ) {
      // console.log("LIGHT THEME");
      document.querySelector("html").classList = [];
      document.querySelector("html").classList.toggle("os-theme");
      document.querySelector("html").classList.toggle("light-theme");

      themeChanger.saveThemeToLs("os-theme");
      themeChanger.sendThemeToServer("light-theme");

      themeChanger.renderThemeIcon("os-theme");

      document.documentElement.setAttribute('data-theme', "os-theme-light" );
    }

  });

}


window.addEventListener("DOMContentLoaded", () => {
  document.querySelector("html").classList = [];
  themeChanger.renderThemeIcon(`${themeChanger.getThemeFromLs()}`);

  if ( themeChanger.getThemeFromLs() ) {
    themeChanger.applyTheme( themeChanger.getThemeFromLs() );

    // document.documentElement.setAttribute('data-theme', themeChanger.getThemeFromLs() );
  }
  
  else if ( !themeChanger.getThemeFromLs() ) {
    themeChanger.getUserOsTheme();
    themeChanger.saveThemeToLs("os-theme");
    themeChanger.renderThemeIcon(`os-theme`);
  }
  
});


