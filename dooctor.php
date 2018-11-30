<?php

include("dodatabase.php");

 if(isset($_POST['submit']))
 {

  $disease_name=$_POST['disease_name'];



   $q="SELECT * FROM dooctor where disease_name=?;";
   $rows=$db->getRows($q,array($disease_name));

                if(count($rows)>0)
                {

                  echo "<center>The Result</center>";
                  echo "<table border=1>";
                  echo "<tr><th>Disease_name</th> <th>Drug1</th> <th>Drug2</th> <th>Drug3</th> <th>age</th></tr>";
                   foreach($rows as $row)
                   {

                     echo "<tr><td>$row[0]</td> <td>$row[1]</td> <td>$row[2]</td>  <td>$row[3]</td>  <td>$row[4]</td></tr>";


                   }
                   echo "</table>";
                }


                 else{
                    echo "empty";
                      }
                      }




?>
<html>

<head>
<meta charset="utf-8">
  <title></title>
</head>
<link href="diseases.css" rel="stylesheet">
</html>

