<?php


  if(isset($_POST['fname']))
  {
    $server="localhost";
    $user="root";
    $password="";
    $database="travell";
    $connection=mysqli_connect($server,$user,$password,$database);
    if(!$connection)
    {
        die(mysqli_connect_error());
    }
    echo "connected sucessfully";
    echo "<br>"; 
    $name=$_POST['fname'] ;
     
    $number=$_POST['mobile'];
    $password=$_POST['pass'];
    $city=$_POST['city'];
    $address=$_POST['address'];

    echo "<br>";
    echo $sql="INSERT INTO registration VALUES('$name',$number,'$password','$city','$address')";
    $query=mysqli_query($connection,$sql);
    if($query)
    {
      echo "<br>";
      echo"data inserted";
    }


    $name=$_POST['fname'];
    $sql="SELECT * from registration WHERE name='$name'";
    $query=mysqli_query($connection,$sql);
    if($query)
    {
      $row=mysqli_fetch_array($query);
      
      if($row>0)
      {
        echo "<table>";
        echo "<tr>";
        echo "<th>";
        echo "name";
        echo "</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>";
        echo $row['Name'];
        echo "</td>";
        echo "</tr>";
        echo "</table>";
      }
    }
  }
 
 ?>

