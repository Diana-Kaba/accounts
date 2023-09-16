<?php
$users1 = ["John" => "qwerty", "Nicole" => "asdf", "Mark" => "ww"];
$users2 = ["Joan" => "1234", "Mark" => "poiu", "Nicole" => "ggg"];

// $users = $users1 + $users2;

$users = array_merge_recursive($users1, $users2);
$keys = array_intersect_key($users1, $users2);
$repeatUsers = array_intersect_key($users, $keys);
$no_repeatUsers1 = array_diff_key($users1, $users2);
$no_repeatUsers2 = array_diff_key($users2, $users1);
$no_repeatUsersFull = array_merge($no_repeatUsers1, $no_repeatUsers2);

print_r($repeatUsers);
print_r($no_repeatUsersFull);