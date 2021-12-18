<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Dresses</title>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Dresses</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input id="search" class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
      </form>
      <?php
      session_start();
      $user = null;
      $user = $_SESSION['user'];
      if ($user != null) {
          echo "<button id='addNew' type='button' class='btn btn custom-btn my-2 my-sm-0' >";
          echo "Add New Dress";
          echo "</button>";
          echo "<a rel='$user' class='btn btn custom-btn my-2 my-sm-0' style='margin-left:5px;' id='logout' href='loginPage.html'>Log Out</a>";
      } else {
          echo "<a class='btn btn custom-btn my-2 my-sm-0'  href='loginPage.html' >SIGN IN</a>";
      }
      ?>
      
      </form>
    </div>
</nav>
    
    <div id="dress" class="dress">
    </div>

      <div id="form" class="add-new" style="padding-top:0px;">
        <div id="forma" class="form" >
          <form class="add-form" method="post" action="controller/addProduct.php">
            <input style="color:black;"type="text" name="url" placeholder="ImageURL"/>
            <input style="color:black;"type="text" name="name" placeholder="Name"/>
            <input style="color:black;"type="text" name="price" placeholder="Price"/>
            <button class='btn btn custom-btn' >Save Dress</button>
          </form>
        </div>
      </div>
    
</body>
</html>
<script >
$(document).ready(function() {
    document.getElementById("forma").style.display = "none";
        $.ajax({
            url: 'controller/userGetProducts.php',
            type: 'POST',
            success: function(show_products) {
                if (!show_products.error) {
                    $('#dress').html(show_products);
                }
            }
});


$("#logout").on('click', function() {
        $.ajax({
                url: 'controller/logout.php',
                type: 'POST',
                success: function() {
                    window.location.replace("http://localhost/dresses/index.html");
                }
            });
        });
});

$("#addNew").on('click', function() {
    document.getElementById("forma").style.display = "block";
});

$('#search').keyup(function(){
    var search=$('#search').val();
    $.ajax({
      url:'controller/searchProducts.php',
      //prosledjujemo preko kljuca search atribut search
      data:{search:search},
      type:'POST',
      success:function(show_products){
        if(!show_products.error){
          $('#dress').html(show_products);
          if(show_products==""){
            $.ajax({
            url:'controller/getProducts.php',
            type:'POST',
            success:function(show_products){
              if(!show_products.error){
                $('#dress').html(show_products);
              }  
            } 
            });  
          }
        }
      }     
    });
  });



function myFunction(id) {
    console.log(id);

    var user1 = document.getElementById("logout");
    var user = $(user1).attr('rel');
    $.ajax({
        url: 'controller/makeOrder.php',
        type: 'POST',
        data: {
            user: user,
            id: id
        },
        success: function(data) {
            console.log(data);
            alert("uspesna kupovina");
        }
    });
}

function edit(id) {
    // var prod=document.getElementById("change");
    //  var id=$(prod).attr('value');
    console.log(id);
    $.ajax({
        url: 'controller/getProduct.php',
        type: 'POST',
        data: {
            id: id
        },
        success: function(data) {
            $('#form').html(data);
        }
    });
}

function update(event, id) {
    console.log(id);
    var name1 = document.getElementById("name");
    var name = $(name1).attr('value');
    var url1 = document.getElementById("url");
    var url = $(url1).attr('value');
    var price1 = document.getElementById("price");
    var price = $(price1).attr('value');
    $.ajax({
        url: 'controller/changeProduct.php',
        type: 'POST',
        data: {
            id: id,
            name: name,
            price: price,
            url: url
        },
        success: function(data) {
            console.log(data)
        }
    });
}

function deleteProduct(id) {
    console.log(id);
    $.ajax({
        url: 'controller/deleteProducts.php',
        type: 'POST',
        data: {
            id: id
        },
        success: function(data) {
            console.log(data);
            location.reload();
        }
    });
} 
</script>