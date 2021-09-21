<?php
$postagens = TCG\Voyager\Models\Post::first(); 
?>

@can('browse',$postagens)
    voce pode listar as postagens
    @else
    Voce nao pode listar as postagens
@endcan
