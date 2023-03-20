<?php
  include "booking.php";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = array(
      "start" => $_POST["start"],
      "end" => $_POST["end"],
      "reservation_name" => $_POST["reservation_name"],
      "email" => $_POST["email"]
    );
    $data_json = json_encode($data);

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, "http://localhost/panorama_hotel/php-api/create.php");
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_json);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
     "Content-Type: application/json",
     "Content-Length: " . strlen($data_json)
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    echo "Well done!";
  }
?>
