<?php 
  // $experimentDetail = $_GET["experiment-detail"] ?? null;
  $experiment = getExperimentName();

setExperimentDetailTitle(getExperimentName());
?>

<section>
  <inner-column>
    <?php
      switch ($experiment) {
        case "ts-symptom-checker":
          experimentDetailBuilder("TS symptom checker", "can i create a form with seamless UX to empower people with TS to report their symptoms?", " affinity designer, sublime text", "https://via.placeholder.com/150", "a figure showing screenshots of my work", "the result was, the users found the form easy to fill out and use!");
          break;

        case "form-validator":
          experimentDetailBuilder("form validator", "can i validate form data?", " affinity designer, sublime text", "https://via.placeholder.com/150", "ALT", "It turns out, valid form data benefits human and computer users!");
          break;

        case "efp_php":
          experimentDetailBuilder("Exercises for Programmers. <br>PHP edition", "Exploring PHP through bite-sized programming exercises", "paper, pencil, sublime", "https://via.placeholder.com/150", "ALT", "i got lots of practice with pseudocode, form handling and UX");
          break;

        case "efp_js":
          experimentDetailBuilder("Exercises for Programmers. <br>JS edition", "Exploring JavaScript (JS) through bite-sized programming exercises", "paper, pencil, sublime", "https://via.placeholder.com/150", "ALT", "i got lots of practice with pseudocode, form handling and UX");
          break;     
        
        // case "":
        //   experimentDetailBuilder("name", "hypothesis", "materials", "image", "alt", "result");
        //   break;


        
        default:
          echo "<mark>invalid experiment! check the URL and try again</mark>";
          break;
      }
    ?>
  </inner-column>
</section>