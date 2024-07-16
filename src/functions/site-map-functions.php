<?php
function formatSitemap(array $sitemapData) {
    echo "<ul class='site-map-list'>";

    foreach ($sitemapData as $levelOneKey => $levelOneValue) {
      echo "<li><h3>$levelOneKey</h3>";

      echo "<ul class='home-page-list'>";

      foreach ($levelOneValue as $levelTwoKey => $levelTwoValue) {
        if ($levelTwoKey === "projects") {
            echo "<li><h3>$levelTwoKey</h3>";
            echo "<ul class='sitemap-project-list'>";

            foreach ($levelTwoValue as $projectKey => $projectValue) {
                echo "<li>" . $projectValue["title"] . "</li>";
                echo "<li>" . $projectValue['title'] . " detail page</li>";
                echo "<li>" . $projectValue['title'] . " case study page</li>";
            }

                echo "</ul></li>";
            } elseif ($levelTwoKey === "about") {
                echo "<li><h3>$levelTwoKey</h3>";
                echo "<ul class='sitemap-about-list'>";
                
                foreach ($levelTwoValue as $aboutArrIndex) {
                    echo "<li>$aboutArrIndex</li>";
                }

                echo "</ul></li>";
            } elseif ($levelTwoKey === "experiments") {
              echo "<li><h3>$levelTwoKey</h3>";
              echo "<ul class='experiment-list'>";
              
              foreach ($levelTwoValue as $experimentIndexValue) {
                  echo "<li>" . $experimentIndexValue["name"] . "</li>";
              }

              echo "</ul></li>";
          }
      }

        echo "</ul></li>";
    }

    echo "</ul>";
}
?>
