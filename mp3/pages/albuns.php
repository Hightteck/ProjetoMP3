<h1>Album</h1>

<a href="?pages=new_album" class="btn btn-success botao">Adicionar um novo album</a>

<div class="row">
    <?php
        $albuns = getAlbuns();
        
        //for ($i = 1; $i <= 10; $i++):
        foreach ($albuns as $album):

            $infoAlbum = explode('/', $album);
            $nameAlbum = $infoAlbum[1];
            //$imgAlbum = $album . '/' . $nameAlbum . 'jpg';
            $imgAlbum = "{$album}/{$nameAlbum}.jpg";
    ?>
    <div class="col-3 album">
        <a href="?pages=musicas&album=<?=$nameAlbum?>">
            <img src="<?=$imgAlbum?>" alt="<?=$nameAlbum?>" class="img-album">
            <h6><?=$nameAlbum?></h6>
        </a>
    </div>
    <?php
        endforeach;
        //endfor;
    ?>
</div>