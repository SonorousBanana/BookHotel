<div >
  <h2>All Customers</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Username </th>
        <th class="text-center">first/lastName</th>
        <th class="text-center">Country</th>
        <th class="text-center">City</th>
        <th class="text-center">address</th>
        <th class="text-center">Email</th>
        <th class="text-center">Type</th>
      </tr>
    </thead>
    <?php
      define('DBINFO', 'mysql:host=localhost;dbname=panorama_db');
      define('DBUSER', 'root');
      define('DBPASS', '');
      include_once "../config/dbconnect.php";
      $sql="SELECT * from users";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["username"]?></td>
      <td><?=$row["firstname"]?> <?=$row["lastname"]?></td>
      <td><?=$row["country"]?></td>
      <td><?=$row["city"]?></td>
      <td><?=$row["address"]?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["type"]?></td>
      <td><button class="btn btn-primary" style="height:40px" onclick="userEditForm('<?=$row['id']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="customerDelete('<?=$row['id']?>')">Delete</button></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>

    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Customer
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Customer</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="./controller/addSizeController.php" enctype='multipart/form-data' method="POST">
            <div class="form-group">
              <label for="username">username:</label>
              <input type="text" class="form-control" name="username" id="username" required>
            </div>
            <div class="form-group">
              <label for="password">password:</label>
              <input type="text" class="form-control" name="password" id="password" required>
            </div>
            <div class="form-group">
              <label for="firstName">first Name:</label>
              <input type="text" class="form-control" name="firstName" id="firstName" required>
            </div>
            <div class="form-group">
              <label for="lastName">last Name:</label>
              <input type="text" class="form-control" name="lastName" id="lastName" required>
            </div>
            <div class="form-group">
            <label for="country">Country:</label>
              <select name="country" id="country-select" class="countries form-control" id="inputCountry">
                <option value="" required>Select Country</option>
              </select>
            </div>
            <div class="form-group">
            <label for="city">City:</label>
            <select name="city" id="city-select" class="countries form-control" id="inputCountry">
            <option value="" required>Select City</option>
            </select>
            </div>
            <div class="form-group">
              <label for="address">address:</label>
              <input type="text" class="form-control" name="address" id="address" required>
            </div>
            <div class="form-group">
              <label for="email">email:</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group">
              <label for="type">type:</label>
              <input type="text" class="form-control" name="type" id="type" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="submit" id="submit" style="height:40px">Add Customer</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>
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
</div>