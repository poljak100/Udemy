

<?php

class song
{
    public $songId;
    public $songTitle;
}

$techno = new song();
$techno->songId = '3';
$techno->songTitle = 'Techno';

$metallicaSong = new song();
$metallicaSong->songId = 1;
$metallicaSong->songTitle = "One";

$korn = new song();
$korn->songId = 2;
$korn->songTitle = "blind";


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
$playlist->name = "Techno";
$playlist->addSong($metallicaSong);
$playlist->addSong($techno);
$playlist->addSong($korn);
echo '<pre/>';

var_dump($playlist->songs);
