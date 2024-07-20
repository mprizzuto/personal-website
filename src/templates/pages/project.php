<?php 
$projectName = $_GET["slug"] ?? null;

// $projectsJSON = getAllProjects();
 // formatVar(getProjectBySlug($_GET["slug"]) );
// getProjectBySlug($_GET["slug"]);

if ( getProjectBySlug($_GET["slug"]) ) {
  // echo $_GET["slug"];
}
?>

<section class="mr-projects">
  <inner-column>
    <?php
      switch ($projectName) {
        case "responsive-layout-garden":
          include "../src/templates/pages/projects/rlg/garden.php";
          break;
        
        case "theming-challenge":
          // echo "theming challenge";
          break;

        case "php-guestBook":
          // echo "php-guestBook";
          break;


        case "vdi-app":
          // echo "vdi-app";
          break;
            
        default:
          echo "<h2>invalid Project. Check your URL and try again</h2>";
          break;
      }
    ?>
  </inner-column>
</section>

