<?php 
$projectName = $_GET["slug"] ?? null;

$projectsJSON = file_get_contents("../src/database/projects.json");

$projectsArr = json_decode($projectsJSON, true);
 
?>

<section>
  <inner-column>
    <?php
      switch ($projectName) {
        case "responsive-layout-garden":
          echo "RLG PROJECT";
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

