# TODOS:
KEEP THINGS SMALL UNTIL
- we figure out proper file structure
- bundle CSS files by theme

- create function to create unique id for database

- project page control flow
  - if project is found, output project
  - if project isnt found/empty output "invalid project, check URL and try again"

- fix CSS for 404 page

- fix site map page
 - include links to respective pages

- Projects
  - abstract require stattements into function and paths to files into a database
  - improve HTML, as it's now being embedded in other HTML. 
    - so, remove major landmarks i.e main. only 1 main per page!
  - stop project modules from inheriting theme changes
  - rename project.php to project-detail.php

  blog-post-detail
  - when post-detail slug is invalud
  	- remove pritning of unsanitiized $_GET param 
