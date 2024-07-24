<?php
function templateSiteMap(array $sitemapData) {
  echo "<ul class='site-map-list'>";

 // formatVar($sitemapData);
  // foreach ($sitemapData as $data) {
  //   formatVar($data);
  //   // code...
  // }

  foreach ($sitemapData["home"] as $data) {
    foreach ($data as $linkString => $queryString) {
      if ($linkString === "home") {
        echo "<li>" . "<h2>Home</h2>" . "</li>";
        echo "<li>" .
        "<ul class='home-page-links'>";
        // echo "<li>" . $linkString . "</li>";
        continue;
      }
      echo "<li>" . "<a href='$queryString'>" . $linkString . "</a>" . "</li>";
    }
      echo "</ul>" 
    . "</li>";
  }
  echo "<li>" . 
  "<h2>Projects</h2>".
  "<li>" . 
    "<ul class='home-page-links'>";


    foreach ( getAllProjects() as $key => $projectData) {
      // formatVar($projectData["title"]);
      echo "<li>" . "project: <a href='?page=project&slug=" . $projectData['slug'] . "'>" . $projectData['title'] . "</a>" . "</li>";
      echo "<li>" . "case study: <a href='?page=case-study&slug=" . $projectData['case-study-slug'] . "'>" . $projectData['title'] . "</a>" . "</li>"; 
    }
    echo "</ul>".
    "</li>";
  echo "</ul>";

  
}

?>
