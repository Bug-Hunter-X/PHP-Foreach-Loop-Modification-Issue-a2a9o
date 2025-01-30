```php
function my_function($array) {
  foreach ($array as $key => $value) {
    if ($value === 'some_value') {
      unset($array[$key]);
    }
  }
  return $array;
}

$my_array = ['a' => 'some_value', 'b' => 'another_value', 'c' => 'some_value'];
$result = my_function($my_array);
print_r($result); // Output: Array ( [b] => another_value ) 

// The issue is that the foreach loop modifies the array while iterating, 
// resulting in skipping elements.  A better way to do it would be this: 

function my_function_correct($array){
  return array_filter($array, function($value) { return $value !== 'some_value';});
}
$my_array = ['a' => 'some_value', 'b' => 'another_value', 'c' => 'some_value'];
$result = my_function_correct($my_array);
print_r($result); //Output: Array ( [b] => another_value )
```