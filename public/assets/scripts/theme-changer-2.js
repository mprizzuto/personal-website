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



       // fetch('/index.php', {
       //    method: 'POST',
       //    body: event.target.id,
       //    headers: {
       //      'Content-Type': 'text/plain'
       //    }
       //  })
       //  .then(response => response.text())
       //  .then(data => {
       //    console.log("data:", data); // This will log the response from the PHP script
       //  })
       //  .catch(error => {
       //    console.error('Error:', error);
       //  });



        this.sendThemeToServer(event.target.id);
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
    }

    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches) {

      document.querySelector("html").classList = [];
      document.querySelector("html").classList.toggle("os-theme");
      document.querySelector("html").classList.toggle("light-theme");

      this.saveThemeToLs("os-theme");

      this.renderThemeIcon("os-theme");
    }

    // listen for changes
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
      const newColorScheme = event.matches ? "dark" : "light";

      console.log("NCS", newColorScheme);

      if (newColorScheme === "dark") {
        // console.log("DARK THEME");
        document.querySelector("html").classList = [];
        document.querySelector("html").classList.toggle("os-theme");
        document.querySelector("html").classList.toggle("dark-theme");

        this.saveThemeToLs("os-theme");

        this.renderThemeIcon("os-theme");
      }

      else if ( newColorScheme === "light" ) {
        // console.log("LIGHT THEME");
        document.querySelector("html").classList = [];
        document.querySelector("html").classList.toggle("os-theme");
        document.querySelector("html").classList.toggle("light-theme");

        this.saveThemeToLs("os-theme");

        this.renderThemeIcon("os-theme");
      }

    });
  },
  async sendThemeToServer(theme) {
    const URL = "index.php";

    var response = await fetch(URL, {
      method: "POST",
      // headers: {
      // "Content-Type": "application/json",
      // } 
    });
    var page = await response.json();

    console.log(page);
  }
}

themeChanger.renderMenu();

// only run this if user clicks the os-theme button
if (themeChanger.getThemeFromLs() === "os") {
  themeChanger.applyTheme( themeChanger.getThemeFromLs() );
}

//on page load, get theme from LS and add to DOM
window.addEventListener("DOMContentLoaded", () => {
  document.querySelector("html").classList = [];

  // document.querySelector("html").classList.add(themeChanger.getThemeFromLs());
  console.log(`${themeChanger.getThemeFromLs()}`);
  themeChanger.renderThemeIcon(`${themeChanger.getThemeFromLs()}`);
  themeChanger.applyTheme( themeChanger.getThemeFromLs() );
});


