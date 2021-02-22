<?php

//CODE BY VIT ID

system("clear");

function banner(){
  echo "\n\033[1;32m[\033[1;36m#\033[1;32m] \033[1;37mBASE64 DECRYPT AND ENCRYPT \033[1;32m[\033[1;36m#\033[1;32m]\033[0m\n";
  echo "       \033[0;41mCREATED BY VIT ID\033[0m          \n\n";
}

banner();
echo "\033[1;32m[\033[1;36m1\033[1;32m]\033[1;33m.\033[1;37mEncrypt to base64\n";
echo "\033[1;32m[\033[1;36m2\033[1;32m]\033[1;32m.\033[1;37mDecrypt base64\n\n";
echo "\033[1;34mChoice \033[1;33m~> \033[1;32m";
$pilih = trim(fgets(STDIN));

if ($pilih == 1) {
  system("clear");
  banner();
  echo "\033[1;34mKalimat \033[1;33m~> \033[1;31m";
  $kata = trim(fgets(STDIN));
  $enc = base64_encode($kata);
  echo "\n\033[1;34mHasil \033[1;33m> \033[1;32m$enc\n\n";
}

elseif ($pilih == 2) {
  system("clear");
  banner();
  echo "\033[1;34mEncrypt \033[1;33m~> \033[1;31m";
  $kata = trim(fgets(STDIN));
  $dec = base64_decode($kata);
  echo "\n\033[1;34mResult \033[1;32m> \033[1;32m$dec\n\n";
}

?>
