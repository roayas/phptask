<?php
session_start();
include_once('connect.php');
$admin = 'rooayaseen@gmail.com';

if($_SESSION["userEmail"] !== $admin ){
    echo '<style type="text/css">
    table {
        display: none;
    }
    #pic{
        width: 200px;
        height: 200px;
    }
    h3{
        font-size: xxx-large;

    }
    p{
        color: #fff;
        font-weight: bold;
        font-size: x-large;
        margin-top: 10px;
    }
    @media only screen and (max-width: 400px) {
        #pic{
            width: 100px;
            height: 100px;
           
        }
        table {
          font-size: xx-small;
        }
        h3{
            font-size: medium;
        }
        p{
            font-size: medium;
            
        }

      }
    </style>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER PAGE</title>
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="userpage.css">
    <script src="https://kit.fontawesome.com/7b836f378e.js" crossorigin="anonymous"></script>
</head>
<body>
<p id='logo'>ROA</p>
<div class="wrapper">
    <div class="profile">
        <div class="overlay">
            <div class="about">
                <div id ='pic' class='pic'></div>
            
               <h3>Welcome <?php echo $_SESSION["userName"] ;?></h3>
               <p><?php echo $_SESSION["userEmail"] ;?></p>
               <p><?php echo $_SESSION["userMobile"] ;?></p>
                <table class="table" style='color:white'>
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Date Created</th>
                <th scope="col">Date Last Login</th>
                <th scope="col">Update</td>
                <th scope="col">Delete</td>
            </tr>
        </thead>
        <tbody>
        <?php
         $sql1="SELECT * FROM user_inf ;";
         $result= mysqli_query($conn , $sql1);
         $result_check= mysqli_num_rows($result);
        if ($result_check > 0) {
            while ($row=mysqli_fetch_assoc($result)) {

            echo "<tr>
                    
                    <td >".$row['fname']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['pass']."</td>
                    <td>".$row['created_at']."</td>
                    <td>".$row['loged_in']."</td>
                    <td>"."
                                 <form action='update.php' method='post'>
                                 <input type='hidden' name='edit_id' value='".$row['id']."'>
                                 <input type='submit' value='Update' name='edit_btn'> 
                                 </form><br>"."</td>
                               
                </tr>";
            
        }
    }
        ?>
        </tbody>
    </table>
            </div>
            <ul class="social-icons">
                <li><a href="https://web.facebook.com/roaa.yaseen.9/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.linkedin.com/in/ro-a-yaseen-58076696/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://twitter.com/rooayaseen" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/roaa.yaseen.9/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>