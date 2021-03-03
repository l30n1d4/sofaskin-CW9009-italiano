<?php
function getBaseValue($arr, $search_key){
  $pending_calls = [];
  foreach($arr as $key => $value){
    if(is_array($value)){
      $pending_calls[] = $value; // queue them for later judgement
    } else if($search_key === $key){
      return $value;
    }
  }
  foreach($pending_calls as $call){
    $returned_val = getBaseValue($call,$search_key);
      if($returned_val !== false) return $returned_val;
  }
  return false;
}

$data = file_get_contents("../api.json", true);
$data = html_entity_decode($data);
$json = json_decode($data, true);

if (isset($_REQUEST['getvalue'])) {
  $value = getBaseValue($json, $_REQUEST['getvalue']);
} else if (isset($_REQUEST['get'])) {
  $value = getBaseValue($json, $_REQUEST['get']);
  $array = array($_REQUEST['get'] => $value);
  $value = json_encode($array);
} else {
  $value = json_encode($json);
}

header('Content-Type: application/json');
echo $value;
?>
