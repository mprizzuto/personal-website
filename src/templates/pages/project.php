<?php 
$projectName = $_GET["slug"] ?? null;

$projectsJSON = getAllProjects();

$projectsArr = json_decode($projectsJSON, true);
 
?>

<section class="mr-projects">
  <inner-column>
    <?php
      switch ($projectName) {
        case "responsive-layout-garden":
          include "../src/templates/pages/projects/rlg/garden.php";
          break;
        
        case "theming-challenge":
          echo "theming challenge";
          break;

        case "php-guestBook":
          echo "php-guestBook";
          break;


        case "vdi-app":
          echo "vdi-app";
          break;
            
        default:
          echo "invalid Project. Check your URL and try again";
          break;
      }
    ?>
  </inner-column>
</section>

