<?php 
use Irmantas\OriginalPaintings\Models\OriginalPainting;class Cms611e3261bfbda475172350_afceeef666482bcf2a8fc238816276b3Class extends Cms\Classes\PageCode
{

public function onStart()
{   
    $maxEntries = 5;
    $similarEntries = OriginalPainting::limit($maxEntries + 1)->get();
    
    $filtered = $similarEntries->where('id','!=', $this->param('id'));

    $this['similar'] = $filtered;
}
}
