<?php 
  // $experimentDetail = $_GET["experiment-detail"] ?? null;
  $experiment = getExperimentName();

setExperimentDetailTitle(getExperimentName());
?>

<section>
  <inner-column>
    <?php
      switch ($experiment) {
        case "most-a11y-page":
          experimentDetailBuilder("most-a11y-page", "can i make the most accessible page ever?", "skitch, affinity designer, sublime text", "https://via.placeholder.com/150", "a figure showing screenshots of my work", "the result was, i was successful!");
          break;

        case "ts-symptom-checker":
          experimentDetailBuilder("TS symptom checker", "can i create a form with seamless UX to empower people with TS to report their symptoms?", " affinity designer, sublime text", "https://via.placeholder.com/150", "a figure showing screenshots of my work", "the result was, the users found the form easy to fill out and use!");
          break;

        case "form-validator":
          experimentDetailBuilder("form validator", "can i validate form data?", " affinity designer, sublime text", "https://via.placeholder.com/150", "a figure showing screenshots of my work", "It turns out, valid form data benefits human and computer users!");
          break;
        
        // case "":
        //   experimentDetailBuilder("", "", "", "", "I");
        //   break;


        
        default:
          echo "<mark>invalid experiment! check the URL and try again</mark>";
          break;
      }
    ?>
  </inner-column>
</section>