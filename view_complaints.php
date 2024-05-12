<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Daftar Komplain</title>
   <!-- Font Awesome CSS untuk ikon -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <style>
      /* CSS khusus untuk halaman view_complaints.php */
      body {
         font-family: Arial, sans-serif;
         margin: 0;
         padding: 0;
         background-color: #FFEEF5; /* Warna latar belakang */
      }

      .container {
         max-width: 800px;
         margin: 20px auto;
         padding: 20px;
         background-color: #FFEEF5; /* Warna latar belakang */
         border-radius: 5px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      h1 {
         text-align: center;
         margin-bottom: 20px;
         color: #D02D7F; /* Warna teks judul */
      }

      .complaint {
         border: 1px solid #720741; /* Warna border */
         border-radius: 5px;
         padding: 10px;
         margin-bottom: 10px;
         background-color: #FFEEF5; /* Warna latar belakang */
      }

      .complaint p {
         margin: 5px 0;
         color: #940555; /* Warna teks */
      }
   </style>
</head>
<body>
   <div class="container">
      <h1>Daftar Komplain</h1>
      <?php
      // Sertakan file koneksi ke basis data
      include 'components/connect.php';

      // Mulai sesi
      session_start();

      // Periksa apakah pengguna sudah masuk
      if(isset($_SESSION['user_id'])){
         $user_id = $_SESSION['user_id'];
      } else {
         // Jika pengguna belum masuk, arahkan mereka ke halaman masuk
         header("Location: login.php");
         exit;
      }

      // Buat kueri untuk memuat daftar komplain yang telah dibuat oleh pengguna
      $select_complaints = $conn->prepare("SELECT * FROM `messages` WHERE user_id = ?");
      $select_complaints->execute([$user_id]);

      // Periksa apakah ada komplain yang telah dibuat
      if($select_complaints->rowCount() > 0){
         // Tampilkan daftar komplain
         while($fetch_complaint = $select_complaints->fetch(PDO::FETCH_ASSOC)){
            echo "<div class='complaint'>";
            echo "<p><strong>Nama:</strong> " . $fetch_complaint['name'] . "</p>";
            echo "<p><strong>Email:</strong> " . $fetch_complaint['email'] . "</p>";
            echo "<p><strong>Nomor:</strong> " . $fetch_complaint['number'] . "</p>";
            echo "<p><strong>Keluhan:</strong> " . $fetch_complaint['message'] . "</p>";
            echo "</div>";
         }
      } else {
         // Jika tidak ada komplain yang telah dibuat, tampilkan pesan
         echo "<p>Tidak ada komplain yang telah diajukan.</p>";
      }
      ?>
   </div>
</body>
</html>
