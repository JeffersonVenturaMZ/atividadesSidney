<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <?php
    // $id = $_GET["id"]; ID CADASTRADO
    $conn = mysqli_connect("localhost", "root", "root", "bd_cia");
    if (!$conn) {
        echo (mysqli_errno($conn) . " -> " . mysqli_error($conn));
        die;
    }
    $sql = "SELECT * FROM tb_pessoa";
    // $sql = "SELECT * FROM tb_pessoa WHERE id = $id"; BUSCAR POR ID DE CADASTRO
    $result = mysqli_query($conn, $sql);
    ?>
    <div class="container">
        <div class="row justify-content-md-center">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>IDADE</th>
                </tr>
            </thead>
            <?php
            while ($linha = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $linha['id'] . "</td>" .
                    "<td>" . $linha['nome'] . "</td>" .
                    "<td>" . $linha['idade'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>          
    </div>
</body>
</html>