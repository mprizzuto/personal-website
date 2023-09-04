console.clear();

let themeChanger = {
  themeMenuButton: function() {
    // return document.querySelector("#toggle-themes");
    return this.themeButtons().themeMenu;
  },
  themeButtons: function() {
    let buttons = document.querySelectorAll("button[id*='-theme']");
    
    const [themeMenu, osTheme, lightTheme, darkTheme] = buttons;
    
    return {
      themeMenu, 
      osTheme, 
      lightTheme, 
      darkTheme
    }
  },
  themesList: function() {
    return document.querySelector(".theme-list");
  },
  saveThemeToLs: function(theme) {
    localStorage.setItem("mr-theme", theme);
  },
  getThemeFromLs: function() {
    return localStorage.getItem("mr-theme");
  },
  applyThemeToBody: function() {
    if ( this.getThemeFromLs() ) {
      document.body.classList.add(this.getThemeFromLs());

      if ( this.getThemeFromLs() === "os-theme" ) {
        if (this.getOsTheme().osThemeDark.matches) {
          document.body.classList.remove("light-theme");
          document.body.classList.add("os-theme", "dark-theme");
          console.log("apply theme to bofy!, dark theme");
        }
        if ( this.getOsTheme().osThemeLight.matches ) {
          console.log("apply theme to bofy!, light theme");
          document.body.classList.remove("dark-theme");
          document.body.classList.add("os-theme","light-theme");
        }
      }
    }



    //detect real time OS change
    // const setColorScheme = e => {

    //   if (e.matches) {
    //     console.log("set color scheme()", e);
    //     document.body.classList.remove("light-theme");
    //     document.body.classList.toggle("dark-theme");
    //     // document.body.classList.remove("dark-theme");
    //   } 
    //   else {
    //     console.log("set color scheme()", e);

    //     document.body.classList.remove("light-theme");
    //     document.body.classList.toggle("dark-theme");

        
    //   }
    // }


    if ( !this.getThemeFromLs() ) {
      if ( this.getOsTheme().osThemeDark.matches ) {
        console.log("applyThemeToBody: DARK THEME");
        document.body.classList.remove("light-theme");

        document.body.classList.toggle("dark-theme", "os-theme");
        // this.getOsTheme().osThemeDark.addEventListener("change", setColorScheme);
      }

      if ( this.getOsTheme().osThemeLight.matches ) {
        console.log("applyThemeToBody: Light THEME");
        document.body.classList.remove("dark-theme");

        document.body.classList.toggle("light-theme", "os-theme");
        // this.getOsTheme().osThemeLight.addEventListener("change", setColorScheme);
      }

    }

    // this.getOsTheme().osThemeDark.addEventListener("change", setColorScheme);
    // this.getOsTheme().osThemeLight.addEventListener("change", setColorScheme);
  },
  getOsTheme: function() {
    const osThemeDark = window.matchMedia("(prefers-color-scheme: dark)");
    const osThemeLight = window.matchMedia("(prefers-color-scheme: light)");

    return {
      osThemeDark,
      osThemeLight
    }

  },
};

let themeButton = themeChanger.themeMenuButton();
let themeList = themeChanger.themesList();

let themeName = document.querySelector("#current-theme");

themeButton.addEventListener("click", (event) => {
  themeList.classList.toggle("hide-themes");
});


window.addEventListener("click", (event) => {
  if ( !themeList.classList.contains("hide-themes") && event.target.id !== "toggle-themes") {
    themeList.classList.toggle("hide-themes");
  }
  
  if (event.target.id === "os-theme") {
    themeChanger.saveThemeToLs("os-theme");
    
    // if (themeChanger.) {

    // }
    // document.body.classList.remove("dark-theme", "light-theme");
    themeChanger.applyThemeToBody();
    // console.log(themeChanger.getThemeFromLs());

    themeName.textContent = "os";
    
    themeChanger.themeButtons().osTheme.classList.add("selected-theme");
    
    themeChanger.themeButtons().darkTheme.classList.remove("selected-theme");
    themeChanger.themeButtons().lightTheme.classList.remove("selected-theme");
    
  }
  
  if (event.target.id === "light-theme") {
    themeChanger.saveThemeToLs("light-theme");
    document.body.classList.remove("os-theme", "dark-theme");
    themeChanger.applyThemeToBody();
    console.log(themeChanger.getThemeFromLs());
    themeName.textContent = "light";
    
    themeChanger.themeButtons().lightTheme.classList.add("selected-theme");
    
    themeChanger.themeButtons().darkTheme.classList.remove("selected-theme");
    
    themeChanger.themeButtons().osTheme.classList.remove("selected-theme");
    
  }
  
  if (event.target.id === "dark-theme") {
    themeChanger.saveThemeToLs("dark-theme");
    document.body.classList.remove("light-theme", "os-theme");
    themeChanger.applyThemeToBody();
    console.log(themeChanger.getThemeFromLs());
    themeName.textContent = "dark";
    
    themeChanger.themeButtons().darkTheme.classList.add("selected-theme");
    
    themeChanger.themeButtons().lightTheme.classList.remove("selected-theme");
    
    themeChanger.themeButtons().osTheme.classList.remove("selected-theme");
  }
  
});


window.addEventListener("DOMContentLoaded", (event) => {
  if ( !themeChanger.themesList().classList.contains("hide-themes") ) {
    themeChanger.themesList().classList.toggle("hide-themes");
  }
  
  if (themeChanger.getThemeFromLs() === "os-theme") {
    themeName.textContent = "os";
    
    document.body.classList.remove("dark-theme", "light-theme");
    
    themeChanger.applyThemeToBody();
    
    themeChanger.themeButtons().osTheme.classList.toggle("selected-theme");
    
    themeChanger.themeButtons().darkTheme.classList.remove("selected-theme");
    
    themeChanger.themeButtons().lightTheme.classList.remove("selected-theme");
  }



  if ( !themeChanger.getThemeFromLs() && window.matchMedia ) {
    console.log("LS emoty", themeChanger.getThemeFromLs());
    themeName.textContent = "os";
    themeChanger.applyThemeToBody(); //get this to listen and apply theme changes in real time, and also apply the current OS theme
    themeChanger.themeButtons().osTheme.classList.toggle("selected-theme");
  }
  


  if (themeChanger.getThemeFromLs() === "light-theme") {
    themeName.textContent = "light";
    
    document.body.classList.remove("os-theme", "dark-theme");
    
    themeChanger.applyThemeToBody();
    
    themeChanger.themeButtons().lightTheme.classList.toggle("selected-theme");
    
    themeChanger.themeButtons().darkTheme.classList.remove("selected-theme");
    
    themeChanger.themeButtons().osTheme.classList.remove("selected-theme");
  }
  
  if (themeChanger.getThemeFromLs() === "dark-theme") {
    themeName.textContent = "dark";
    
    document.body.classList.remove("light-theme", "os-theme");
    
    themeChanger.applyThemeToBody();
    
    themeChanger.themeButtons().darkTheme.classList.toggle("selected-theme");
    
    themeChanger.themeButtons().lightTheme.classList.remove("selected-theme");
    
    themeChanger.themeButtons().osTheme.classList.remove("selected-theme");
    
  }

  // console.log(themeChanger.getOsTheme().osThemeDark);

  
});


// const setColorScheme = e => {
//   if (e.matches) {
//     console.log("set color scheme()", e);
//     document.body.classList.remove("light-theme");
//     document.body.classList.toggle("dark-theme");
//     // document.body.classList.remove("dark-theme");
//   } 
//   else {
//     console.log("set color scheme()", e);

//     document.body.classList.remove("light-theme");
//     document.body.classList.toggle("dark-theme");

    
//   }
// }

// themeChanger.getOsTheme().osThemeDark.addEventListener("change", setColorScheme);
// themeChanger.getOsTheme().osThemeLight.addEventListener("change", setColorScheme);
    

window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
  
  
  if (themeChanger.getThemeFromLs() === "os-theme") {
    const newColorScheme = event.matches ? "dark" : "light";
    console.log(event, {newColorScheme});

    if ( newColorScheme === "dark" ) {
      document.body.classList.remove("light-theme");

      document.body.classList.toggle("dark-theme", "os-theme");
    }
    //or maybe an else statement here? 
    if ( newColorScheme === "light" ) {
      document.body.classList.remove("dark-theme");

        document.body.classList.toggle("light-theme", "os-theme");
    }
  }
});    

