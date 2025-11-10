<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Formulário</title>
</head>
<body>

<h2>Cadastro de Alunos</h2>

<form action="salvar.php" method="POST">
    Nome: <input type="text" name="nome" required><br><br>

    Data de Nascimento: 
    <input type="date" name="data_nascimento" required><br><br>

    Curso:
    <input type="text" name="curso" required><br><br>

    Turno:
    <select name="turno" required>
        <option>Manhã</option>
        <option>Tarde</option>
        <option>Noite</option>
    </select><br><br>

    Ano:
    <input type="number" name="ano" required><br><br>

    <button type="submit">Salvar</button>
</form>

<br>
<a href="tabela.php">📄 Ver tabela de alunos cadastrados</a>

</body>
</html>
