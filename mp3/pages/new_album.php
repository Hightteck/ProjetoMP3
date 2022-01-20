<a href="?pages=albuns" class="btn btn-primary botao">Voltar para os albuns</a>
<h1>Cadastrar um novo album</h1>

<form action="#" method="POST" enctype="multipart/form-date">
    <div class="form-gtoup">
        <input type="text" name="name" placeholder="Nome" class="form-control">
    </div>
    <div class="form-group">
        <input type="file" name="image">
    </div><br>
    <button type="submit" class="btn btn-success botao1">Cadastrar</button>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $album = $_POST['name'];

    $path = "albuns/{$albuns}";

    if (!is_dir($path)) {
        mkdir($path);
    }

    $file = $_FILES['image'];
    $fileInfo = explode('.', $file['name']);

    $extension = $fileInfo[1];
    $nameImage = $album . '.' . $extension;

    if (move_uploaded_file($file['tmp_name'], $path.'/'.$nameImage)) {
        header('location: ?pages=albuns');
    } else {
        echo 'falha no UPLOAD!';
    }
}

?>