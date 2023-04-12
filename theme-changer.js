const btn = document.querySelector(".btn-toggle");

// Listen for a click on the button 
btn.addEventListener("click", function() {
  // Toggle the .dark-theme class on the body
  // document.body.classList.remove("light-mode");
  document.body.classList.toggle("dark-mode");
  
  // Let's say the theme is equal to light
  let theme = "light";
  // If the body contains the .dark-theme class...
  if (document.body.classList.contains("dark-mode")) {
    // ...then let's make the theme dark
    theme = "dark";
  }
  else if (document.body.classList.contains("light-mode")) {
    // ...then let's make the theme dark
    document.body.classList.toggle("light-mode");
    theme = "light";
  }
  // Then save the choice in a cookie
  document.cookie = "theme=" + theme;
  document.body.classList.toggle("light-mode");
});