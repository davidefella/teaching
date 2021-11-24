<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>Associative Array - Cities</title>
</head>

<body>
    <h2>Large Cities<br /></h2>

    <?php


    //Create associative array with countries as keys, cities as values.
    
    $jsonobj = '{"Japan":"Tokyo","Mexico":"Mexico City","USA":"New York City", "India":"Mumbai"}';
    //echo file_get_contents('player.json');
    $cities = json_decode($jsonobj);

    //If form not submitted, display form.
    if (!isset($_POST['submit'])) {
        ?>

            <form method="post" action="#">
                <p>Please choose a city:</p>
                <select name="city">

                    <?php
                    //Use array to create options for select field.
                    //Be sure to escape the quotes and include a line feed. 
                    $contatore = 0; 
                    foreach ($cities as $k => $c) {
                        var_dump($cities); 
                        echo "<option value=\"$c\">$c</option>\n";
                        $contatore = $contatore + 1; 
                    }
                    ?>

                </select>
                <p />
                <input type="submit" name="submit" value="Go">
            </form>

        <?php
        //If form submitted, process input.
    } else {
        //Retrieve user response.
        $city = $_POST['city'];
        //Find corresponding key in associative array.
        $country = array_search($city, $cities);
        //Send the data back to the user.
        echo "<p>$city is in $country.</p>";
    }
    ?>
$_POST = ["city" => "Città inserita da utente"]
</body>

</html>