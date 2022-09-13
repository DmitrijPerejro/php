<?php
  $arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
  var_dump(count($arr));
  $movedArr = array_merge(array_slice($arr, 4), array_slice($arr, 0, 4));
  var_dump($movedArr);
  var_dump($arr[3] + $arr[4] + $arr[5]);
  var_dump($movedArr[3] + $movedArr[4] + $movedArr[5]);

  $firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'foure' => 5,
    'five' => 12,
  ];

  $secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'foure' => 5,
    'five' => 13,
    'six' => 37,
  ];

  var_dump(array_diff_key($secondArr, $firstArr));
  var_dump(array_intersect_key($firstArr, $secondArr));
  var_dump(array_intersect($firstArr, $secondArr));
  var_dump(array_diff_assoc($secondArr, $firstArr));

  $nestedArr = [
    'one' => 1,
    'two' => [
      'one' => 1,
      'seven' => 22,
      'three' => 32,
    ],
    'three' => [
      'one' => 1,
      'two' => 2,
    ],
    'foure' => 5,
    'five' => [
      'three' => 32,
      'foure' => 5,
      'five' => 12,
    ], 
  ];

  // получить все вторые элементы вложенных массивов
  $res = [];
  foreach ($nestedArr as $item => $value) {
    if (is_array($value)) {
      $i = 0;
      foreach ($value as $nestedKey => $nestedValue) {
        if ($i === 1) {
          $res[$nestedKey] = $nestedValue;
          break;
        }
        $i++;
      }
    }
  }

  var_dump($res);

  // получить общее количество элементов в массиве
  $sumItems = 0;
  foreach ($nestedArr as $item => $value) {
    if (is_array($value)) {
      $sum+= count($value);
    } else {
      $sum++;
    }
  }

  var_dump($sum);

  //получить сумму всех значений в массиве
  $sumValues = 0;
  foreach ($nestedArr as $item => $value) {
    if (is_array($value)) {
      foreach ($value as $nestedKey => $nestedValue) {
        $sumValues+= $nestedValue;
      }
    } else {
      $sumValues+= $value;
    }
  }

  var_dump($sumValues);

