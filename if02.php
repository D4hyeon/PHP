<?PHP
  $aaa = 123;
  $b = 456;
  $c = 123.0;

  if ($aaa == $b)
      print "두 값이 같습니다.<br>";
  if ($aaa != $b)
      print "두 값이 같지 않습니다.<br>";
  if ($aaa < $b)
      print "$aaa 값이 $b 값보다 작습니다.<br>";
  if ($aaa > $b)
      print "$aaa 값이 $b 값보다 큽니다.<br>";
  if ($aaa <= $b)
      print "$aaa 값이 $b 값보다 작거나 같습니다.<br>";
  if ($aaa >= $b)
      print "$aaa 값이 $b 값보다 크거나 같습니다.<br>";
  if ($aaa === $b)
      print "$aaa 값이 $b 값과 동일합니다.<br>";
      if ($aaa == $c)
      print "두 값이 같습니다.<br>";
  if ($aaa === $c)
      print "$aaa 값이 $c 값과 동일합니다.<br>";
?>