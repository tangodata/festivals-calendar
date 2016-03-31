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
    try {
      $dbfrag = $yaml->parse(file_get_contents($pn));
    } catch (Exception $e) {
      echo "ERROR!";
    }
    
    foreach ($dbfrag as $k=>$d) {
      $ct = $d['City'];
      $key = array_search ($ct, array_column($cities,'id'));
      if ($key) {
        $dbfrag[$k]['coordinates'] = 
          $cities[$key]['geometry']['coordinates'];
      }
      else {
          echo "Unknown city = ".$ct."\n";
      }
    }
    
    


    $db[] = $dbfrag;

  }
  echo "-------\nDUMP:\n";
  var_dump($db);

  //echo "------\nCITIES:\n";
  //var_dump($cities);


  $cnt = 0;
  foreach ($db as $m) {
    echo "FILE ";
    $x = count($m);
    echo $x;
    $cnt += $x;
    echo " => ";
    echo $m[0]['Country'];
    echo "\n";
  }
  echo "TOTAL is ".$cnt."\n";
