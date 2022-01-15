<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        html,body{
            width:100%;
            background:#38d182;
        }
        .login-container{
            width:350px;
            margin:100px auto auto auto;
            border:solid 5px;
            padding:30px;
            background:lightgreen;
            border-radius:10px;
        }
        .title{
            text-align:center;
        }
        .input-label{
            width:400px;
            display:block;
        }
        .input{
            padding 5px 0px;
        }
        input{
            width:100%;
        }
        button{
            width:100px;
            padding:10px;
            cursor:pointer;
            transition-duration: 0.4s;
            background: #4CAF50;
            border: solid 2px white;
            
        }
        button:hover{
            background-color: green;
            color:white;
        }
        h1{
            font-family: 'Fruktur', cursive;
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
                    <input type="text" id="username" name="username" placeholder="Nama Pengguna" >
            </div>
            <div class="input">
                <label for="password" class="input-label">Kata Sandi</label>
                <input type="password" id="password" name="password" placeholder="Sandi">
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

        $query= mysqli_query($koneksi,"SELECT * from user where username='".$_POST['username']."' && password='".
        $_POST['password']."'");
        
        
        // if(($user == $_POST['username'])&& ($katasandi == $_POST['password'])){
        if(mysqli_num_rows($query)>0){
            header('location:admin.php');
        }else{
            ?>
            <script>
                alert("username/password salah")
            </script>
            <?php
            
        } 
    }
?>
 
        