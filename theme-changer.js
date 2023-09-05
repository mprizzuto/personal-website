console.clear();

let themeChanger = {
  themeMenuButton: function() {
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
        }
        if ( this.getOsTheme().osThemeLight.matches ) {
          document.body.classList.remove("dark-theme");
          document.body.classList.add("os-theme","light-theme");
        }
      }
    }

    if ( !this.getThemeFromLs() ) {
      if ( this.getOsTheme().osThemeDark.matches ) {
        document.body.classList.remove("light-theme");
        document.body.classList.toggle("dark-theme", "os-theme");
      }

      if ( this.getOsTheme().osThemeLight.matches ) {
        console.log("applyThemeToBody: Light THEME");
        
        document.body.classList.remove("dark-theme");
        document.body.classList.toggle("light-theme", "os-theme");
      }

    }
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
  if ( !themeList.classList.contains("hide-themes") && 
    event.target.id !== "toggle-themes") {
    themeList.classList.toggle("hide-themes");
  }
  
  if (event.target.id === "os-theme") {
    themeChanger.saveThemeToLs("os-theme");

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
  
}); 



window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
  
  
  if (themeChanger.getThemeFromLs() === "os-theme" || themeName.textContent === "os") {
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



//sending the theme to the server
window.addEventListener("click", event => {
  let themeButtonIds = [
    themeChanger.themeButtons().osTheme.id, 
    themeChanger.themeButtons().lightTheme.id, 
    themeChanger.themeButtons().darkTheme.id
  ];

  if ( themeButtonIds.includes(event.target.id ) ) {
    console.log( themeButtonIds.includes(event.target.id) );
  }

  
}); 



