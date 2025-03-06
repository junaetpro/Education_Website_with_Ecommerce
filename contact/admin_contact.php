<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM contact");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>table</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="./../assets/css/style.css">

    <style>
      .btn_update, .btn_delete{
background-color: #1bb79b;
color: #FFF;
text-decoration: none;
text-transform: capitalize;
padding: 5px 10px;
border-radius: 10px;
display: inline;
display: inline;
text-align: center;
font-size: 15px;
margin-bottom: 5px;
box-sizing: border-box;
      }

      .btn_delete{
        background-color: #ff595e;
      }
      

      .btn_add{
background-color: #1bb79b;
color: #FFF;
text-decoration: none;
text-transform: capitalize;
padding: 8px 15px;
border-radius: 10px;
display: inline-block;
font-size: 15px;
margin: 20px;
      }

      .btn_add:hover, .btn_update:hover, .btn_delete:hover{
        text-decoration: none;
        color: #FFF;
      }
    </style>
  

</head>





<body id="top">

  

<div style="width: 90%;margin: auto;" class="conteiner">
<h1 style="font-size:30px; text-align: center;padding-top: 100px;" class="mt-5 mb-3">Contact List</h1>

 <a href="contact.html" class="btn_add">Add New</a>
   


    <?php
if (mysqli_num_rows($result) > 0) {
?>



<table  class="table table-hover text-center">
    <thead class="table-dark table-striped">
    <tr style="background-color:#83c5be">
      <th scope="col">id</th>
      <th scope="col">Name:</th>
      <th scope="col">Email:</th>
      <th scope="col">Mobile:</th>
      <th scope="col">Free Time:</th>
      <th scope="col">Problem:</th>
      
      <th scope="col">action</th>
    </tr>
    </thead>

    <?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
    <tbody>

    <tr>
	    <td><?php echo $row["id"]; ?></td>

		<td><?php echo $row["name"]; ?></td>

		<td><?php echo $row["email"]; ?></td>

		<td><?php echo $row["mobile"]; ?></td>

		<td><?php echo $row["freetime"]; ?></td>

    <td><?php echo $row["problem"]; ?></td>

    

		<td><a class="btn_update" href="contact_update.php?id=<?php echo $row["id"]; ?>">Update</a>
    <a class="btn_delete" href="tablecontactdelete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>

      </tr>
			<?php
			$i++;
			}
			?>


  </tbody>
</table>
<?php
}
else
{
    echo "No result found";
}
?>
</div>


  





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back top top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./../assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>