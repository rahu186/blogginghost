

<?php
    
    // Creating to the database
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'mydata';

    // Create a connection 
    $conn = mysqli_connect($server, $username, $password,$db);

      // Die if Connection was not Successful 
      // if ($conn){
      //   echo "connected successfully";
        
      //  }
      //  else{
      //      echo "Connetion was not successful";
           
      //  }
   
       

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $query =$_POST['query'];
        $suggestion =$_POST['suggestion'];
        
        
        // echo "$name";
        // echo "$email";
        // echo "$contact";
        $insertquery = "insert into sitedata(name,email,contact,query,suggestions) values ('$name','$email','$contact','$query','$suggestion')";
        
        $res = mysqli_query($conn,$insertquery);
        if($res){
          ?>
        <!-- echo "data inserted successfully"; -->
        <script>
          alert("data inserted successfully")
        </script>
        <?php
        }
        
        else{
          echo "data not inserted successfully";
        }
        
        }

    // Create a DataBase
    // $sql = "CREATE DATABASE dbshiva2";
    // $result = mysqli_query($conn, $sql);
    // echo "The result is: ". var_dump($result);
    

  


 
    ?>
