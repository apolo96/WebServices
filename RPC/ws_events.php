<?php
require 'Events.php';

if(isset($_GET['method'])){
  switch($_GET['method']){
    case "eventList":
        $events = new Events();
        $data = $events->getEvents();
        break;
    case "event":
        $eventID = (int) $_GET['eventID'];
        $events = new Events();
        $data = $events->getEventById($eventID);
        break;
    default:
        http_response_code(400);
        $data = array('Error'=>"Method not found");
        break;
  }
}else{
  http_response_code(400);
  $data = array("error"=>"Bad request");
}
header("Content-Type: application/json");
echo json_encode($data);
?>
