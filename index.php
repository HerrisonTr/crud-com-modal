<!doctype html>
<html lang="pt-br">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>

        form {
            margin-top: 5%;
        }

        .my-toast {
            color: white;
            font-weight: bolder;
            border: 2px solid gray;
            position: absolute;
            left: 50%;
            transform:translate(-50%); 
            top: 10px;
            width: auto;
            padding: 10px;
            background-color: tomato;
        }
    </style>

    <title>Login</title>
</head>

<body class="d-flex justify-content-center h-100">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        setTimeout(function() {
            var msg = document.getElementById("mytoast");
            msg.parentNode.removeChild(msg);
        }, 5000);
    </script>

    <?php

    if (isset($_GET['msg'])) {
        $msg = $_GET['msg'];
        if ($msg == "toast1") {
            $msg = "Preencha todos os campos";
        } elseif ($msg == "toast2") {
            $msg = "Usuário ou senha não cadastrado";
        };

    ?>
        <div id="mytoast" class="my-toast">
            <div class="title-toast">
                <?php echo $msg ?>
            </div>
        </div>
    <?php }
    ?>

    <form class="form-control w-25" action="include/verificar_login.php" method="POST">
        <label class="form-label" for="login"> Login </label>
        <input class="form-control" type="text" name="login">

        <label class="form-label" for="senha"> senha </label>
        <input class="form-control type=" password" name="senha">

        <button type="submit" class="btn btn-outline-primary">Login</button>
    </form>
</body>

</html>