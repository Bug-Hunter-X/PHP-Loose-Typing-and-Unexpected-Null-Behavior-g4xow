function foo(a, b) {
  if (a === null || b === null) {
    return null; // This line will cause an error
  }
  return a + b;
}

$result = foo(1, null); // $result is null, as expected
$result = foo(1, 2); // $result is 3, as expected
$result = foo(null, 2); // $result is null, as expected
$result = foo(null, null); // $result is null, as expected