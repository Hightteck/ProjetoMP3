<?php

function getAlbuns() {
    $albuns = glob('albuns/*');

    return $albuns;
}

function getMusicas($album) {
    $musicas = glob("albuns/{$album}/musicas/*.mp3");

    return $musicas;
}