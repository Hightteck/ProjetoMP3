<a href="?pages=albuns" class="btn btn-primary botao">Voltar para os albuns</a>
<h1>Musicas do album <?=$_GET['album']?></h1>

<a href="?pages=new_musica&album=<?=$_GET['album']?>" class="btn btn-success botao">Cadatrar nova musica</a>
<hr>

<?php 
$album = $_GET['album'];
$musicas = getMusicas($album);

foreach ($musicas as $musica):
?>

<div class="col-12">
    <audio src="<?=$musica?>" controls></audio>
</div>

<?php
endforeach;
?>