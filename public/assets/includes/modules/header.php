<?php 
  require_once "./assets/includes/functions.php";

?>


<!doctype html>
  <html lang="en">
  
 <?php include "head.php"; ?>


  <body class= "<?php echo getClassByQuery() . "-page" //. $_SESSION["theme"] ?? null; ?>"> 
    <header>
      <inner-column>
        <dev-info class="dev-info">
          <div class="dev-credential">
            <p class="heading-one">Marco Rizzuto</p>

            <div class="credentials">
              <?php include "./assets/images/svgs/arrow.svg"; ?>
              <span class="job">Web Developer</span>
            </div>

            <?php 

            // Check if the request method is POST
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Read the raw POST data
                $data = file_get_contents('php://input');
                
                // Decode the JSON data into a PHP associative array
                $decoded_data = json_decode($data, true);
                
                // Process the data (for example, you can access the theme like this)
                $theme = $decoded_data['theme'];
                
                // Prepare the response data
                $response = [
                    'status' => 'success',
                    'message' => 'POST request received',
                    'theme' => $theme, // Include the theme in the response
                    // You can include additional data in the response if needed
                ];
                
                // Set the appropriate headers to indicate JSON content
                header('Content-Type: application/json');
                
                // Send the response back to the client in JSON format
                echo json_encode($response);
            } else {
                // Handle invalid request method
                http_response_code(405); // Method Not Allowed
                echo json_encode(['error' => 'Only POST requests are allowed']);
                var_dump($_SERVER['REQUEST_METHOD']);
            }


            ?>

           <?php include "./assets/includes/components/nav.php";?>

           <?php include "./assets/includes/components/theme-changer.php"; ?>
          </div>
        </dev-info>
      </inner-column>
    </header>