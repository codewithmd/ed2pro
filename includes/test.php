<?php

  $p = "mm";
  $md5 = md5($p);
  $sha1 = sha1($md5);
  $crypt = crypt($sha1, 'Ed');

  echo $crypt;
