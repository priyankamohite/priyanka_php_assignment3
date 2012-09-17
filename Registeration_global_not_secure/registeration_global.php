<?php
 function valid_user()
{
   echo "in function ";
  return false;
}
if (valid_user()) {
    $valid = true;
}

if ($valid) {
    echo "in true";
}
echo "out";
?>


