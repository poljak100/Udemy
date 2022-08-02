

<?php

class song
{
    public $songId;
    public $songTitle;
}

$metallicaSong = new song();
$metallicaSong->songId = 1;
$metallicaSong->songTitle = "One";

$korn = new song();
$korn->songId = 2;
$korn->songTitle = "blind";

//echo '<pre/>';

//print_r($metallicaSong);

class playlist
{
    public $name;
    public $songs = [];
    public function addSong($song)
    {
        $this->songs[] = $song;
    }
}



$playlist = new playlist();
$playlist->name = "Rock";
$playlist->addSong($metallicaSong);
$playlist->addSong($korn);
echo '<pre/>';

print_r($playlist->songs);
