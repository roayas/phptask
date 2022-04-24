<?php
  $text = "roa mohammad yaseen alyaseen ";
  $text = preg_replace('/(\b[a-z])/i', 
  '<span style="color:orange;">\1</span>', $text);
  echo $text.'<br>';
  ?>