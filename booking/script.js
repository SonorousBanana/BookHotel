//παρακατω μεχρι την πρωτη συναρτηση κανω ελεγχο στις ημερομηνιες και μπλοκαρω αυτες που εχουν περασει και στο check αλλα και στο booking

const startDate = document.getElementById("start");
const startDate1 = document.getElementById("start1");
  const today = new Date();
  const dd = String(today.getDate()).padStart(2, '0');
  const mm = String(today.getMonth() + 1).padStart(2, '0');
  const yyyy = today.getFullYear();

  startDate.setAttribute("min", yyyy + "-" + mm + "-" + dd);
  startDate1.setAttribute("min", yyyy + "-" + mm + "-" + dd);

  const endDate = document.getElementById("end");
  const endDate1 = document.getElementById("end1");
  const thisday = new Date();
  const dd1 = String( thisday.getDate()).padStart(2, '0');
  const mm1 = String( thisday.getMonth() + 1).padStart(2, '0');
  const yyyy1 = thisday.getFullYear();

  endDate.setAttribute("min", yyyy1 + "-" + mm1 + "-" + dd1);
  endDate1.setAttribute("min", yyyy1 + "-" + mm1 + "-" + dd1);

  startDate.addEventListener("change", function() {
    endDate.setAttribute("min", this.value);
  });

  startDate1.addEventListener("change", function() {
    endDate1.setAttribute("min", this.value);
  });

  endDate.addEventListener("change", function() {
    startDate.setAttribute("max", this.value);
  });

  endDate1.addEventListener("change", function() {
    startDate1.setAttribute("max", this.value);
  });

//εδω κανει τον ελεγχο της ημερομηνιας αλλα επειδη δεν ετρεχε με JS και δεν μπορεσα να βρω τον λογο, το εκανα με PHP
function check() {
    //alert("boo");
    //const start = document.querySelector('input[name="start"]');
    //const startValue = start.value;
    
   // const end = document.querySelector('input[name="end"]');
    //const endValue = end.value;

    //const select = document.querySelector('select[name="reservation_name"]');
    //const selectedValue = select.options[select.selectedIndex].value;

      const startValue = document.getElementById("start").value;
		  const endValue = document.getElementById("end").value;
			const selectedValue = document.getElementById("reservation_name").value;
      const url = `http://localhost/panorama_hotel/php-api/check.php?start=${startValue}&end=${endValue}&resevation_name=${selectedValue}`;


    fetch(url).then((data)=>{
      return data.json();
  }).then((objectData)=>{
      console.log(objectData[0].reservation_name);
      let tableData="";
      objectData.map((values)=>{
          tableData+=` <tr>
          <td>${values.reservation_name}</td>
          <td>${values.reservation_start}</td>
          <td>${values.reservation_end}</td>
          <td>${values.res}</td>
      </tr>`;
      });
      document.getElementById("check").innerHTML=tableData;
  }).catch((err)=>{
      console.log(err);
  })/*.then((data)=>{
        return data.json();
    }).then((objectData)=>{
        console.log(objectData[0].reservation_name);
        let tableData="";
    });
            document.getElementById("check").innerHTML = `<br><br><p>Availability: ${result}</p>`;*/
    
}

//Παρακάτω εντολη παιρνει την global μεταβλητη email που ελαβε απ το login και τη χρησιμοποιει οπου χρειάζεται ώστε να μην χαθει, και οτι κανει η λειτουργικοτητα να λαμβανει παντα το email

   const emailValue = localStorage.getItem("email");


fetch("http://localhost/panorama_hotel/php-api/api.php?email="+emailValue).then((data)=>{
    return data.json();
}).then((objectData)=>{
    console.log(objectData[0].reservation_name);
    let tableData="";
    objectData.map((values)=>{
        tableData+=` <tr>
        <td>${values.reservation_name}</td>
        <td>${values.reservation_start}</td>
        <td>${values.reservation_end}</td>
    </tr>`;
    });
    document.getElementById("table_body").innerHTML=tableData;
}).catch((err)=>{
    console.log(err);
})
//}

//εμφανιζει την τιμη του δωματιου που εχει επιλεξει ο χρηστης στον αντιστοιχο πινακα
function book() {


    const select = document.querySelector('select[name="reservation_name"]');
    const selectedValue = select.options[select.selectedIndex].value;
    //alert(selectedValue);
    fetch("http://localhost/panorama_hotel/php-api/price.php?reservation_name="+selectedValue).then((data)=>{
    return data.json();
}).then((objectData)=>{
    console.log(objectData[0].room_price);
    let tableData="";
    objectData.map((values)=>{
        tableData+=` <tr>
        <td>${values.room_price} Euro</td>
    </tr>`;
    });
    document.getElementById("table_price").innerHTML=tableData;
}).catch((err)=>{
    console.log(err);
})
}

//παρακάτω ειναι οι 2 απο τις αποτυχημενες προσπαθειες του book με js μεσω API οπου δεν ετρεχε σωστα και στις εγγραφες πέταγε NULL τιμές
/*function book1() {
    var start1=$('#start1').val();
    var end1=$('#end1').val();
    var reservation_name=$('#reservation_name').val();
    var email=$('#email').val();

    var fd = new FormData();
    fd.append('start1', start1);
    fd.append('end1', end1);
    fd.append('reservation_name', reservation_name);
    fd.append('email', email);

    $.ajax({
        url:"http://localhost/panorama_hotel/php-api/create1.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(_data){
            alert('Product Added successfully.');
            $('form').trigger('reset');
            alert('welldone');
        }
    });
}*/

/*function book1(){
    

    const start = document.querySelector('input[name="start"]');
    const startValue = start.value;

    const end = document.querySelector('input[name="end"]');
    const endValue = end.value;

    const select = document.querySelector('select[name="reservation_name"]');
    const reservation_nameValue = select.options[select.selectedIndex].value;
    

    //const start = document.getElementById("start").value;
    //const end = document.getElementById("end").value;
    //const reservation_name = document.getElementById('reservation_name').value;
    const emailValue = localStorage.getItem("email");

    const data = {
      start: startValue,
      end: endValue,
      reservation_name: reservation_nameValue,
      email: emailValue

    };
    alert("blaaa");
    fetch("http://localhost/panorama_hotel/php-api/create.php", {
      method: "POST",
      body: JSON.stringify(data),
      headers: {
        "Content-Type": "application/json"
      }
    })
      .then(function(response) {
        return response.json();
      })
      .then(function(data) {
        console.log("Success:", data);
      })
      .catch(function(error) {
        console.error("Error:", error);
      });
  
}*/