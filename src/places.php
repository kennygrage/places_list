<?php
class Places
{
    private $place;

    function __construct($place)
    {
        $this->place = $place;
    }

    function setPlace($new_place)
    {
        $this->place = (string) $new_place;
    }

    function getPlace()
    {
        return $this->description;
    }

    function save()
    {
        array_push($_SESSION['list_of_places'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_places'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_places'] = array();
    }



}
?>
