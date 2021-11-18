<?php session_start();
include '../config/conexao.php';
?>

<!doctype html>
<html lang="pt-br">

<head>

    <script type="text/javascript">
        $("#telefone, #celular").mask("(00) 00000-0000");
        $("#cpf").mask("000.000.000-00");
    </script>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        form {
            margin-top: 5%;
        }

        .container-geral {
            height: 100%;
        }

        .my-toast {
            color: white;
            font-weight: bolder;
            border: 2px solid gray;
            position: absolute;
            left: 50%;
            transform: translate(-50%);
            top: 10px;
            width: auto;
            padding: 10px;
            background-color: tomato;
        }


        .row1 {
            margin-top: 5vh;
        }

        .row1 button {
            border-radius: 10px;
            width: auto;
        }

        .row2 {
            margin-top: 10px;
        }

        #myTabContent {
            height: 70vh;
            overflow: auto;
            border: 2px solid rgb(0, 0, 0, 0.2);
        }

        #meuForm {
            margin-bottom: 3vh;
        }
    </style>


    <title>Login</title>
</head>

<body>
   

    <?php include 'include/toast-index.php' ?>


    <div class="container container-geral">
        <h1>Sistema de cadastro</h1>
        <div class="row row1">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCadastrar"> Cadastrar </button>
            <?php include 'include/modal-cadastro.php' ?>
        </div>

        <div class="row row2">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">

                <?php
                $selectCli = "select * from cliente";
                $queryCli = mysqli_query($conn, $selectCli)
                ?>

                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Nascimento</th>
                                <th scope="col">Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($rowCli = mysqli_fetch_array($queryCli)) {;
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $rowCli[0] ?></th>
                                    <td><?php echo $rowCli[1] ?></td>
                                    <td><?php echo $rowCli[2] ?></td>
                                    <td><?php echo $rowCli[3] ?></td>
                                    <td>
                                        <div style="max-width: 200px; float:right;">

                                            <?php include 'include/modal-editar.php';
                                            include 'include/modal-doc.php';
                                            ?>

                                            <a class="btn btn-danger" href="include/excluir.php?idcli=<?php echo $rowCli[0] ?>">X</a>
                                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar<?php echo $rowCli[0]?>">E</button>
                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDoc<?php echo $rowCli[0]?>">DOC</button>
                                        </div>
                                    </td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>
        </div>
        <!-- Tabs content -->
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>