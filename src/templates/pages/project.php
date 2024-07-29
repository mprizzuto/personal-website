<?php 
$projectName = $_GET["slug"] ?? null;
?>

<section class="mr-projects">
  <inner-column>
    <?php
      switch ($projectName) {
        case "responsive-layout-garden":
          // include "../src/templates/pages/projects/rlg/garden.php";
          include "../src/projects/rlg/garden.php";
          break;
        
        case "theming-challenge":
        include "../src/projects/theming-challenge/index.php";
          break;

        case "php-guestBook":
          break;

        case "vdi-app":
          break;
            
        default:
          echo "<mark>invalid Project. Check your URL and try again</mark>";
          break;
      }
    ?>
  </inner-column>
</section>

