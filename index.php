<video id="background-video" autoplay loop muted >
  <source src="video2.mp4" type="video/mp4">
</video>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        html,body{

        }
        .login-container{
            width:350px;
            margin:390px auto auto auto;
            padding:30px;
            background:transparent;
            border-radius:10px;
        }
        .title{
            text-align:center;
            color:white;
            text-decoration:bold;
        }
        .input-label{
            width:300px;
            display:block;
            color:white;
            text-decoration:bold;
            font-family: sans-serif;
        }
        .input{
            padding:10px 10px;
        }
        input{
            width:100%;
            height:30px;
            border-radius:5px  ;
        }
        button{
            width:100px;
            padding:10px;
            cursor:pointer;
            transition-duration: 0.4s;
            background: #4CAF50;
            border: solid 2px white;
            transition: 0,2s;
            border-radius:5px
            
        }
        button:hover{
            background-color:  lightgreen;
            color:white;
        }
        h1{
            font-family: sans-serif;
            text-decoration:bold;
        }
        #background-video {
        height: 100vh;
        width: 100vw;
        object-fit: cover;
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        z-index: -1;
}
    </style>
</head>
<body>
    <div class="login-container">
    <div class="title">
        <h1>LOGIN USER</h1>
    </div>
        <form action="" method="post">
            <div class="input">
                <label for="username" class="input-label">Nama Pengguna</label>
                    <input type="text" id="username" name="username" placeholder="Nama Pengguna" placeholder="username" required >
            </div>
            <div class="input">
                <label for="password" class="input-label">Kata Sandi</label>
                <input type="password" id="password" name="password" placeholder="Sandi" placeholder="password" required>
            </div>
            <div class="input"><br>
                <center><button type="submit" class="button" name="login" >LOGIN</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php
include('koneksi.php');

    // $user ="joko";
    // $katasandi="1234";
    
    


    if (isset($_POST['login'])) {
        $username= $_POST['username'];
        $password=$_POST['password'];

        $query= mysqli_query($koneksi,"SELECT * from petugas where username = '$username'");
        foreach ($query as $row) {
            $nama = $row['nama'];
            $jabatan = $row['jabatan'];
            $hash = $row ['password'];
        
    }
        
        // if(($user == $_POST['username'])&& ($katasandi == $_POST['password'])){
        if(mysqli_num_rows($query)>0){
            if(password_verify($password, $hash)){
          session_start();
          $_SESSION['status'] ='login';
          $_SESSION['nama'] = $nama ;
          $_SESSION['jabatan'] = $jabatan ;
            ?>
            <script>
                alert("Anda Berhasil Login !!!!")
                window.location.href='http://localhost/8_mywebsite_12RPL2/admin.php?page=petugas';
            </script>
            <?php
            }else {
                echo  'invalid password........';
            }
            }else {

                ?>

                <script> 
                alert ("username/ password salah!!!!")
                </script>
            <?php
            }
        } 

?>
 
        