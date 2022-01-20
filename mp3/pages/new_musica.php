<a href="?pages=albuns" class="btn btn-primary botao">Voltar para o album <?=$_GET['album']?></a>

<h1>Cadastrar nova Musica para o album <?=$_GET['album']?></h1>

<form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="file" name="audio" class="form-control">
    </div>
    <button type="submit" class="btn btn-success botao">cadastrar</button>
</form>

<?php

if ($_SERVER['RESQUEST_METHOD'] == 'POST') {
    $album = $_GET['album'];

    $path = "albuns/{$album}/musicas";

    if (is_dir($path)) {
        mkdir($path);
    }

    if (move_uploaded_file($_FILES['audio']['tmp_name'], $path . $_FILES['audio']['name'])) {
        header("Location: ?pages=musicas&album={$album}");
    }
}

?>