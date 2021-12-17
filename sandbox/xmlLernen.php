<?php
if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $message = $_POST['message'];

    write($user, $message);
}


function write($user, $message){
    $add_content = "<br><user>".$user."</user>"."<br><message>.".$message."</message><br></alles>";
    $file_handle = fopen("liste.xml", 'a++');
    fwrite($file_handle, $add_content);
}


?>

<html>
<head>

</head>
<body>
<div style="border-color: black; border-width: 1px">
    <?php


    ?>

</div>

<form action="xmlLernen.php" method="post">
    <input type="text" name="user">
    <br>
    <input type="text" name="message">
    <br>
    <button type="submit" name="submit">
        Abschicken
    </button>
</form>
</body>
</html>
