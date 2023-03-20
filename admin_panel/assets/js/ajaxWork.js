

function showProductItems(){  
    $.ajax({
        url:"./adminView/viewAllProducts.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}


function showCustomers(){
    $.ajax({
        url:"./adminView/viewCustomers.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showOrders(){
    $.ajax({
        url:"./adminView/viewAllOrders.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function userEditForm(id){
    $.ajax({
        url:"./controller/updateUserController.php",
        method:"post",
        data:{record:id},
        success:function(_data){
            alert('Product Added successfully.');
            $('form').trigger('reset');
            showCustomers();
        }
    });
}

//add room data
function addItems(){
    var room_type=$('#room_type').val();
    //var occupied=$('#occupied').val();
    var room_price=$('#room_price').val();

    var fd = new FormData();
    fd.append('room_type', room_type);
    //fd.append('occupied', occupied);
    fd.append('room_price', room_price);

    $.ajax({
        url:"./controller/addItemController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success:function(data){
            alert('Product Added successfully.');
            $('form').trigger('reset');
            showProductItems();
        }
    });
}

//edit room data (δεν χρησιμοποιείται)
function itemEditForm(id){
    $.ajax({
        url:"./adminView/editItemForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//update room after submit
function updateItems(){
    var room_id = $('#room_id').val();
    var room_price = $('#room_price').val();

    var fd = new FormData();
    fd.append('room_id', room_id);
    fd.append('room_price', room_price);

   
    $.ajax({
      url:'./controller/updateItemController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(_data){
        alert('Data Update Success.');
        $('form').trigger('reset');
        showProductItems();
      }
    });
}

//delete room data
function itemDelete(id){
    $.ajax({
        url:"./controller/deleteItemController.php",
        method:"post",
        data:{record:id},
        success:function(_data){
            alert('Items Successfully deleted');
            $('form').trigger('reset');
            showProductItems();
        }
    });
}

function orderDelete(id){
    $.ajax({
        url:"./controller/deleteOrderController.php",
        method:"post",
        data:{record:id},
        success:function(_data){
            alert('Items Successfully deleted');
            $('form').trigger('reset');
            showOrders();
        }
    });
}

//add customer data
function addCustomer(){
    var username=$('#username').val();
    var password=$('#password').val();
    var firstName=$('#firstName').val();
    var lastName=$('#lastName').val();
    var address=$('#address').val();;
    var email=$('#email').val();

    var fd = new FormData();
    fd.append('username', username);
    fd.append('password', password);
    fd.append('firstName', firstName);
    fd.append('lastName', lastName);
    fd.append('address', address);
    fd.append('email', email);

    $.ajax({
        url:"./controller/addSizeController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(_data){
            alert('Product Added successfully.');
            $('form').trigger('reset');
            showCustomers();
        }
    });
}

//delete customer data
function customerDelete(id){
    $.ajax({
        url:"./controller/deleteSizeController.php",
        method:"post",
        data:{record:id},
        success:function(_data){
            alert('Items Successfully deleted');
            $('form').trigger('reset');
            showCustomers();
        }
    });
}

