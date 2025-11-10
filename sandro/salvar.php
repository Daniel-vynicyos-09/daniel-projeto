<?php
include 'config.php';

$nome = $_POST['nome'];
$data_nasc = $_POST['data_nascimento'];
$curso = $_POST['curso'];
$turno = $_POST['turno'];
$ano = $_POST['ano'];

$sql = "INSERT INTO alunos (nome, data_nascimento, curso, turno, ano)
        VALUES ('$nome', '$data_nasc', '$curso', '$turno', '$ano')";

if (mysqli_query($conn, $sql)) {
    echo "✅ Cadastro realizado com sucesso!<br>";
    echo "<a href='index.php'>Voltar</a> | <a href='tabela.php'>Ver Tabela</a>";
} else {
    echo "Erro: " . mysqli_error($conn);
}
?>
