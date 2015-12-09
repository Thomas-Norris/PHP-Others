<?PHP
  function check($var){
    if(isset($var)) return $var;
    return null;
  }
// EXAMPLE OF USE
// If you want check var to value, use this function.
// May be you have POST in HTML form with name `test`
  $test = check($_POST['test']); // It`s function very cool :)
  if(empty($test)){ echo "Var is empty";} else { echo $test;}
?>
