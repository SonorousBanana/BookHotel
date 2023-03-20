<?php

session_start(); //we need session for the log in thingy XD 
include "../includes/header.php";
include('../includes/functions.php');
include('../connection.php');
include "../includes/footer.php";

if (isset($_POST['signup'])) {

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $country = $_POST['country'];
  $city = $_POST['city'];
  $address = $_POST['address'];
  $username = $_POST['username'];

 $message = "$lastname $firstname would like to request an account.";

 $query = "SELECT * FROM users WHERE email = '$email'";
 $result = mysqli_query($conn,$query);

 if (mysqli_num_rows($result) > 0) {
  echo "<script> alert('This email is already registered!')</script>";
  } else {
    $query = "INSERT INTO `requests` (`id`, `firstname`, `lastname`, `email`, `country`, `city`, `address`, `username`, `password`, `message`, `date`) 
VALUES (NULL, '$firstname', '$lastname', '$email', '$country', '$city', '$address', '$username', '$password', '$message', CURRENT_TIMESTAMP)";

    if (performQuery($query)) {
      echo "<script>alert('Your account request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
    } else {
      echo "<script>alert('Unknown error occured.')</script>";
    }
  }
}

// όνομα, επώνυμο, χώρα, πόλη, διεύθυνση, e-mail, username και password

?>
<!--Παρακάτω είναι το η javascript που τραβαει δεδομενα απ το API που δώθηκε στην εκφώνηση της εργασίας-->
<script>
        fetch('https://countriesnow.space/api/v0.1/countries')
        .then(response => response.json())
        .then(data => {
          const countrySelect = document.getElementById('country-select');
          const citySelect = document.getElementById('city-select');

          // Populate the country dropdown
          data.data.forEach(country => {
            const option = document.createElement('option');
            option.value = country.country;
            option.text = country.country;
            countrySelect.appendChild(option);
          });

          // Populate the city dropdown based on the selected country
          countrySelect.addEventListener('change', () => {
            // Clear the city dropdown before adding new options
            citySelect.innerHTML = '';

            // Find the selected country object
            const selectedCountry = data.data.find(country => country.country === countrySelect.value);

            // Populate the city dropdown with options based on the selected country
            selectedCountry.cities.forEach(cities => {
              const option = document.createElement('option');
              option.value = cities;
              option.text = cities;
              citySelect.appendChild(option);
            });
          });
        });
</script>

<body class="text-center">
  <div class="container eg_register_cnt">

    <form method="post" class="form-signin eg_register_form">

      <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>

      <input name="firstname" type="text" id="inputFirstName" class="form-control" placeholder="First Name" required autofocus>

      <input name="lastname" type="text" id="inputLastName" class="form-control" placeholder="Last Name" required autofocus>


      <div class="">
        <select name="country" id="country-select" class="countries form-control" id="inputCountry">
          <option value="" required>Select Country</option>
        </select>
      

      </div>

      <select name="city" id="city-select" class="countries form-control" id="inputCountry">
      <option value="" required>Select City</option>
      </select>

      <input name="address" type="text" id="inputAddress" class="form-control" placeholder="Address" required autofocus>

      <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>

      <input name="username" type="text" id="inputUserName" class="form-control" placeholder="Username" required autofocus>

      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

      <button name="signup" class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>

      <a href="login.php" class="mt-5 mb-3 text-muted">Have already an account?</a>

    </form>
  </div>

</body>

</html>