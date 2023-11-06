<?php require_once('../../cronjob.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <!-- Opções do menu -->
      <?php require_once('navbar.php'); ?>

        <!-- Listar os produtos -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SKU</th>
                    <th scope="col">Data que enviou para eles</th>
                    <th scope="col">Descrição sobre o defeito</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Status</th>
                    <th scope="col">Ferramentas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">FRA-008</th>
                    <td>06/11/2023</td>
                    <td>Esta rasgado...</td>
                    <td>Otto</td>
                    <td>Em andamento</td>
                    <!-- Editar produto -->
                    <td>Editar</td>
                </tr>
            </tbody>
        </table>





    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>