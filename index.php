<?php
  $testArr = [
    ['a1', 'a2', 'a3', 'a4'],
    ['b1', 'b2', 'b3', 'b4'],
    ['e1', 'e2', 'e3', 'e4'],
  ];

  function extractNestedArrayPosition($arr, int $position): array {  
    $res = [];

    for ($i = 0; $i < count($arr); $i++) {
      $res[] = $arr[$i][$position];
    }
    
    return $res;
  }

  var_dump(extractNestedArrayPosition($testArr, 3));

  function findChapters($input, string $chapter = 'b') {
    return is_string($input) ? substr_count($input, $chapter) : false;
  }

  var_dump(findChapters('acdbb'));

  $deepNumbers = [
    1,
    [2, 3, [4, 5, 6]],
    [7, [8, [9, 10], 11], 12],
    13,
    [14, [15], [16]],
  ];

  function calculateNestedNumbers(array $arr): int {
    $sum = 0;

    foreach ($arr as $value) {
      $sum+= is_array($value) ? calculateNestedNumbers($value) : $value;
    }

    return $sum;
  }

  var_dump(calculateNestedNumbers($deepNumbers));

  function calculateSquares(float $max, float $size): float {
    return $max / $size;
  }

  var_dump(calculateSquares(12, 5));