<?php
  require "../vendor/autoload.php";
  $yaml = new Symfony\Component\Yaml\Parser();


  $cgeo = "../lib/cities.geojson";
  $allcities = json_decode(file_get_contents($cgeo),TRUE);
  $cities = $allcities['features'];


  $db = [];
  $source = "../source/";
  foreach (new DirectoryIterator($source) as $fileinfo) {
    if ($fileinfo->isDot()) continue;
    if ($fileinfo->getExtension() != 'yml') continue;
    $fn = $fileinfo->getFilename();
    $pn = $fileinfo->getPathname();

    echo "FOUND ".$fn . "<br>\n";
    $dbfrag = $yaml->parse(file_get_contents($pn));
    
    foreach ($dbfrag as $d) {
      $ct = $d['city'];
      $key = array_search ($ct, array_column($cities,'id'));
      echo "Search $ct is ";
      if ($key) {
        echo "Coordinates at ";
        var_dump($cities[$key]['geometry']['coordinates']);
      } else {
        echo "NOT FOUND\n";
      }
    }


    $db[] = $dbfrag;

  }
  echo "-------\nDUMP:\n";
  var_dump($db);

  echo "------\nCITIES:\n";
  var_dump($cities);
