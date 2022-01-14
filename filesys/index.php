<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


// $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
// $txt = "John Doe\n";
// fwrite($myfile, $txt);
// fclose($myfile);

if(isset($_POST['submit'])) {

    if(empty($_POST['input'])) {
        echo 'Please enter on object for the list.';
    } else {
        $object = $_POST['input'];
        

        // if(preg_match("/^[A-Za-z0-9-]+$/", $object) {
        

        $myfile = fopen("reminders.txt", "a") or die("Unable to open file!");
        $nLine = "\n";
        fwrite($myfile, '-' . $object . $nLine);
        fclose($myfile);
        
        // }
    }
}

if(isset($_POST['submit2'])) {
    $myfile = fopen("reminders.txt", "w") or die("Unable to open file!");
}





?>

<form method="POST">
    <p>Add something to the list:</p>
    
<input name='input' value=''>
<input type='submit' name='submit' value='Add'>
<input type='submit' name='submit2' value='Delete List'>

</form>
    
<p><a href="reminders.txt">Download TEXT file</a></p>
<!-- <p><a href="download.php?path=downloads/newfile.text">Download PDF file</a></p> -->

</body>
</html>