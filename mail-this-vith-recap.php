<?php
                  // All reCAPTCHA code is from their documentation edited to work on my site
    

                  function url_get_contents($Url)
                  {
                    if (!function_exists('curl_init')) {
                      die('CURL is not installed!');
                    }
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $Url);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $output = curl_exec($ch);
                    curl_close($ch);
                    return $output;
                  }
                  
                  $to = "info@leah.wales";
                  $subject = "Contact mail";
                  $from = $_POST["email"];
                  $msg = $_POST["msg"];
                  $headers = "From: $from";
    
    
                  // Storing google recaptcha response
                  // in $recaptcha variable
                  
                  $recaptcha = $_POST['g-recaptcha-response'];
                  
                  //echo "$recaptcha";
    
                  // Put secret key here, which we get
                  // from google console

                  $secret_key = '6Lfv1DYgAAAAAHyL6oRhlRyR5RAoWVk-GmVeilG0';
    
                  // Hitting request to the URL, Google will
                  // respond with success or error scenario
                  $url = 'https://www.google.com/recaptcha/api/siteverify?secret='
                    . $secret_key . '&response=' . $recaptcha; //
    
                  // Making request to verify captcha
                  $response = file_get_contents($url); //file_get_contents is disabled on the server alternate function used.
                  $response = url_get_contents($url);
                  echo "$response";
    
                  // Response return by google is in
                  // JSON format, so we have to parse
                  // that json
                  $response = json_decode($response);
    
                  // Checking, if response is true or not
                  if ($response->success == true) {
                    echo '<script>alert("Google reCAPTACHA verified, email sent!")</script>';
                    mail($to, $subject, $msg, $headers);
                    echo "Email successfully sent..";
                  } else {
                    echo '<script>alert("Error in Google reCAPTACHA")</script>';
                  }
