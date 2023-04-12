const btn = document.querySelector(".btn-toggle");
const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

if (prefersDarkScheme.matches) {
  document.body.classList.toggle("dark-mode");
  var theme = document.body.classList.contains("light-mode")
      ? "light"
      : "dark";
      console.log("matches dark")
  }
  // Listen for a click on the button 
  btn.addEventListener("click", function() {


  // Toggle the .dark-theme class on the body
  document.body.classList.toggle("dark-mode");
  
  // Let's say the theme is equal to light
    // If the body contains the .dark-theme class...
  if (document.body.classList.contains("dark-mode")) {
    let theme = "light";
    // ...then let's make the theme dark
    theme = "dark";
  }
  else if (document.body.classList.contains("light-mode")) {
    // ...then let's make the theme dark
    document.body.classList.toggle("light-mode");
    theme = "light";
  }
  // Then save the choice in a cookie
  document.cookie = "mode=" + theme;
  document.body.classList.toggle("light-mode");
});

  