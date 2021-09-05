<?php 
use Irmantas\FineArtPrints\Models\FineArtPrint;class Cms611e32a65a462869082840_e6176adf960a14f22e03a00e1a1ed178Class extends Cms\Classes\PageCode
{

public function onStart()
{   
    $maxEntries = 5;
    $similarEntries = FineArtPrint::limit($maxEntries + 1)->get();
    
    $filtered = $similarEntries->where('id','!=', $this->param('id'));
    //dd($filtered->first()->image);
    $this['similar'] = $filtered;
}
}
