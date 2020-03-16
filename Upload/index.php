<html>
    <head>
    <title>MongoDB Example</title>
    </head>
    <body>
        <form action="" method="post">
            <pre>
                Member Id   :   <input type ="text" name="mid"><br>
                First Name  :   <input type ="text" name="fname"><br>
                Last Name   :   <input type ="text" name="lname"><br>
                Cell        :   <input type ="text" name="cell"><br>
                Profession  :   <select name="prof">
                                    <option value="">Select</option>
                                    <option value="">Banking</option>
                                    <option value="">Finance</option>
                                    <option value="">Trader</option>
                                </select><br>
                Car Model   :   <input type="text" name = "cmodel"><br>
                Car Year    :   <input type="text" name = "cyear"><br>
                Car Value   :   <input type="text" name = "cvalue"><br>

                <input type="submit" name="submit" value="Insert">
            </pre>
        </form>
    </body>
</html>



<?php 

if(isset($_REQUEST['submit']))
{
    $id = $_POST['mid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $cell = $_POST['cell'];
    $prof = $_POST['prof'];
    $car = array($_POST['cmodel'],$_POST['cyear'],$_POST['cvalue']);
    
require "vendor/autoload.php"; // include Composer's autoloader 
$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->mca->student; 

$collection->insertOne()
//echo "Inserted with Object ID '{$result->getInsertedId()}'"; 

}

?>
 