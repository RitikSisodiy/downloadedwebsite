<?PHP
  $dirlist = getFileList("images");
  echo "<pre>",print_r($dirlist),"</pre>";

/* sample output

  Array
  (
    [0] => Array
        (
            [name] => images/background0.jpg
            [type] => image/jpeg
            [size] => 86920
            [lastmod] => 1077461701
        )

    [1] => ...
  )

*/
?>
