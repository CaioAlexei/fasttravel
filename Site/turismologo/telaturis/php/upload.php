  <?php
  include("../../../server/conexao/connc.php");
  include("../../../server/cookie/validacookie.php");
  include("../../../server/cookie/cookietu.php");
  

  
  
  // If upload button is clicked ...
  if (isset($_POST['ok'])) {
  	// Get image name
  	$image = $_FILES['imagem']['name'];
  	
  	

  	// image file directory
  	$target = "../imagem_perfil/".basename($image);
    move_uploaded_file($_FILES['imagem']['tmp_name'], $target);  

  	$sql = "UPDATE turismologos SET imagem_perfil='$image'  WHERE id='$id'";
  	// execute query
  	mysqli_query($con, $sql);
    header("Location:../perfilturis.php");

  	
  }
  
?>