<?php


 if(isset($_POST['pseudo'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    
    if($pseudo === "f") {
    echo"Valid";
} else {
    echo"False";
}

 }

?>
