<?php
class Events{
  protected $events = array(
    1 =>array(
      'name'=>'Exellent php event',
      'date'=>12343450,
      'location'=>'Amsterdan'
    ),
    2 => array(
      'name'=>'Mallevus php event',
      'date'=>1111111,
      'location'=>'USA'
    ),
    3 => array(
      'name'=>'Kings php event',
      'date'=>23114566,
      'location'=>'China'
    )
  );

  public function getEvents(){
    return $this->events;
  }

  public function getEventById($eventId){
    if(isset($this->events[$eventId])){
      return $this->events[$eventId];
    }else{
      throw new Exception("Event not found");
    }
  }

}


?>
