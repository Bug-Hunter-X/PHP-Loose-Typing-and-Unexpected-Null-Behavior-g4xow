function foo(a, b) {
  if (!isset($a) || !isset($b)) {
    return null;
  }
  if (!is_numeric($a) || !is_numeric($b)) {
    return 'Non-numeric value provided.'; // Handle non-numeric input
  }
  return $a + $b;
}

$result = foo(1, null); // $result is null
$result = foo(1, 2); // $result is 3
$result = foo(null, 2); // $result is null
$result = foo(null, null); // $result is null
$result = foo('a', 2); // $result is 'Non-numeric value provided.'
$result = foo(1, 'b'); // $result is 'Non-numeric value provided.' 