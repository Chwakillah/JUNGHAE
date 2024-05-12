<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Daftar Komplain</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="style.css">
   <style>
      body {
         font-family: Arial, sans-serif;
         margin: 0;
         padding: 0;
         background-color: #FFEEF5; 
      }

      .container {
         max-width: 800px;
         margin: 20px auto;
         padding: 20px;
         background-color: #FFEEF5; 
         border-radius: 5px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      h1 {
         text-align: center;
         margin-bottom: 20px;
         color: #D02D7F; 
      }

      .complaint {
         border: 1px solid #720741; 
         border-radius: 5px;
         padding: 10px;
         margin-bottom: 10px;
         background-color: #FFEEF5; 
      }

      .complaint p {
         margin: 5px 0;
         color: #940555;
      }
   </style>
</head>
<body>
   <div class="container">
      <h1>Daftar Komplain</h1>
      <?php
   
      include 'components/connect.php';

      session_start();

      if(isset($_SESSION['user_id'])){
         $user_id = $_SESSION['user_id'];
      } else {
         header("Location: login.php");
         exit;
      }

      $select_complaints = $conn->prepare("SELECT * FROM `messages` WHERE user_id = ?");
      $select_complaints->execute([$user_id]);

      if($select_complaints->rowCount() > 0){
         while($fetch_complaint = $select_complaints->fetch(PDO::FETCH_ASSOC)){
            echo "<div class='complaint'>";
            echo "<p><strong>Nama:</strong> " . $fetch_complaint['name'] . "</p>";
            echo "<p><strong>Email:</strong> " . $fetch_complaint['email'] . "</p>";
            echo "<p><strong>Nomor:</strong> " . $fetch_complaint['number'] . "</p>";
            echo "<p><strong>Keluhan:</strong> " . $fetch_complaint['message'] . "</p>";
            echo "</div>";
         }
      } else {
         echo "<p>Tidak ada komplain yang telah diajukan.</p>";
      }
      ?>
   </div>
</body>
</html>
