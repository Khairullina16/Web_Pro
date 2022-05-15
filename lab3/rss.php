<?php
   $tek=$_GET["tek"];
   $rss = simplexml_load_file("index.rss");      
   $s=0;
   foreach ($rss->channel->item as $item) {
       $s++;
	   echo "<div style='width: 1800px; border: 1px solid black; background-color: #F5FFFA'>";
       echo '<h2 style="font-weight: bold">'.$item->title.'</h2>';
       echo '<p><big>'.$item->description.'</big></p>'; 
       echo "<img src=\"". (string)$item->enclosure['url'][0]. "\" style='width: 600px'></div><br>";
       if($s==$tek) {
          break;
         }
   }
?>