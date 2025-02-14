The solution involves checking if the key exists before accessing the array element.  This prevents the notice and improves the robustness of the code.

```php
<?php
$myArray = ['a' => 1, 'b' => 2];

// Solution 1: Using isset()
if (isset($myArray['c'])) {
  echo $myArray['c'];
} else {
  echo 'Index "c" does not exist.';
}

// Solution 2: Using the null coalescing operator (??)
echo $myArray['c'] ?? 'Index "c" does not exist.';
?>
```