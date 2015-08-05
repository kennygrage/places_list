<?php
class Place
{
    private $place;
    private $time_stayed;

    function __construct($place, $time_stayed)
    {
        $this->place = $place;
        $this->time_stayed = $time_stayed;
    }

    //setters
    function setPlace($new_place)
    {
        $this->place = (string) $new_place;
    }

    function setTimeStayed($time_stayed)
    {
        $this->time_stayed = (string) $new_time_stayed;
    }

    //getters
    function getPlace()
    {
        return $this->place;
    }

    function getTimeStayed()
    {
        
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
