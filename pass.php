<?php


 if(isset($_POST['pseudo'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    
    if($pseudo === "Fisous") {
    echo"Valid";
} else {
    echo"False";
}

 }

?>
