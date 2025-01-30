```php
function my_function_correct($array){
  return array_filter($array, function($value) { return $value !== 'some_value';});
}

$my_array = ['a' => 'some_value', 'b' => 'another_value', 'c' => 'some_value'];
$result = my_function_correct($my_array);
print_r($result); // Output: Array ( [b] => another_value )
```