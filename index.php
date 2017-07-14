<?php
$data = array(
  'name' => 'Jogn',
  'age' => 21,
  'adult' => 'Yes'
);

$new_data = json_encode($data);

echo "<pre>";

print_r(json_decode($new_data));
?>

<?php
$data = array(
  'name' => 'jogn',
  'age' => 21,
  'adult' => 'yes'
);

$new_data = json_encode($data);

echo "<pre>";

print_r(json_decode($new_data));
 ?>
