{"filter":false,"title":"world.php","tooltip":"/world.php","undoManager":{"mark":89,"position":89,"stack":[[{"group":"doc","deltas":[{"start":{"row":0,"column":0},"end":{"row":19,"column":2},"action":"insert","lines":["<?php","mysql_connect(","\"127.5.104.129\",","\"pigeonflight\"",");","mysql_select_db(\"world\");","","","$LOOKUP = $_REQUEST['lookup'];","","# execute a SQL query on the database","$results = mysql_query(\"SELECT * FROM countries WHERE name LIKE '%$LOOKUP%';\");","print $results;","# loop through each country","while ($row = mysql_fetch_array($results)) {","  ?>","  <li> <?php echo $row[\"name\"]; ?>, ruled by <?php echo $row[\"head_of_state\"]; ?> </li>","  <?php","}","?>"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":12},"end":{"row":3,"column":13},"action":"remove","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":11},"end":{"row":3,"column":12},"action":"remove","lines":["h"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":10},"end":{"row":3,"column":11},"action":"remove","lines":["g"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":9},"end":{"row":3,"column":10},"action":"remove","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":8},"end":{"row":3,"column":9},"action":"remove","lines":["l"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":7},"end":{"row":3,"column":8},"action":"remove","lines":["f"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":6},"end":{"row":3,"column":7},"action":"remove","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":5},"end":{"row":3,"column":6},"action":"remove","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":4},"end":{"row":3,"column":5},"action":"remove","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":3},"end":{"row":3,"column":4},"action":"remove","lines":["g"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":2},"end":{"row":3,"column":3},"action":"remove","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":1},"end":{"row":3,"column":2},"action":"remove","lines":["p"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":1},"end":{"row":3,"column":2},"action":"insert","lines":["B"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":2},"end":{"row":3,"column":3},"action":"insert","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":3},"end":{"row":3,"column":4},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":4},"end":{"row":3,"column":5},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":5},"end":{"row":3,"column":6},"action":"insert","lines":["d"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":6},"end":{"row":3,"column":7},"action":"insert","lines":["y"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":7},"end":{"row":3,"column":8},"action":"insert","lines":["9"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":8},"end":{"row":3,"column":9},"action":"insert","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":9},"end":{"row":3,"column":10},"action":"insert","lines":["3"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":4},"end":{"row":2,"column":14},"action":"remove","lines":[".5.104.129"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":4},"end":{"row":2,"column":5},"action":"insert","lines":["."]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":5},"end":{"row":2,"column":6},"action":"insert","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":6},"end":{"row":2,"column":7},"action":"insert","lines":["."]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":7},"end":{"row":2,"column":8},"action":"insert","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":8},"end":{"row":2,"column":9},"action":"insert","lines":["."]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":9},"end":{"row":2,"column":10},"action":"insert","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":10},"end":{"row":2,"column":11},"action":"insert","lines":["."]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":11},"end":{"row":2,"column":12},"action":"insert","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":1},"end":{"row":3,"column":10},"action":"remove","lines":["Brandy903"]},{"start":{"row":3,"column":1},"end":{"row":3,"column":2},"action":"insert","lines":["g"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":2},"end":{"row":3,"column":3},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":3},"end":{"row":3,"column":4},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":4},"end":{"row":3,"column":5},"action":"remove","lines":["\""]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":3},"end":{"row":3,"column":4},"action":"remove","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":2},"end":{"row":3,"column":3},"action":"remove","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":1},"end":{"row":3,"column":2},"action":"remove","lines":["g"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":0},"end":{"row":3,"column":1},"action":"remove","lines":["\""]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":0},"end":{"row":3,"column":1},"action":"insert","lines":["g"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":1},"end":{"row":3,"column":2},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":1},"end":{"row":3,"column":2},"action":"remove","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":1},"end":{"row":3,"column":2},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":2},"end":{"row":3,"column":3},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":3},"end":{"row":3,"column":4},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":4},"end":{"row":3,"column":5},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":5},"end":{"row":3,"column":6},"action":"insert","lines":["v"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":6},"end":{"row":3,"column":8},"action":"insert","lines":["()"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":7},"end":{"row":3,"column":7},"action":"insert","lines":[""]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":8},"end":{"row":3,"column":9},"action":"insert","lines":[";"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":7},"end":{"row":3,"column":9},"action":"insert","lines":["\"\""]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":8},"end":{"row":3,"column":8},"action":"insert","lines":[""]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":8},"end":{"row":3,"column":9},"action":"insert","lines":["C"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":9},"end":{"row":3,"column":10},"action":"insert","lines":["9"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":10},"end":{"row":3,"column":11},"action":"insert","lines":["_"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":11},"end":{"row":3,"column":12},"action":"insert","lines":["U"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":12},"end":{"row":3,"column":13},"action":"insert","lines":["S"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":13},"end":{"row":3,"column":14},"action":"insert","lines":["E"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":14},"end":{"row":3,"column":15},"action":"insert","lines":["R"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":11},"end":{"row":2,"column":12},"action":"remove","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":10},"end":{"row":2,"column":11},"action":"remove","lines":["."]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":9},"end":{"row":2,"column":10},"action":"remove","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":8},"end":{"row":2,"column":9},"action":"remove","lines":["."]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":7},"end":{"row":2,"column":8},"action":"remove","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":6},"end":{"row":2,"column":7},"action":"remove","lines":["."]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":5},"end":{"row":2,"column":6},"action":"remove","lines":["0"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":4},"end":{"row":2,"column":5},"action":"remove","lines":["."]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":3},"end":{"row":2,"column":4},"action":"remove","lines":["7"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":2},"end":{"row":2,"column":3},"action":"remove","lines":["2"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":1},"end":{"row":2,"column":2},"action":"remove","lines":["1"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":0},"end":{"row":2,"column":2},"action":"remove","lines":["\"\""]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":0},"end":{"row":2,"column":1},"action":"insert","lines":["g"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":1},"end":{"row":2,"column":2},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":2},"end":{"row":2,"column":3},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":3},"end":{"row":2,"column":4},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":4},"end":{"row":2,"column":5},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":5},"end":{"row":2,"column":6},"action":"insert","lines":["v"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":6},"end":{"row":2,"column":8},"action":"insert","lines":["()"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":7},"end":{"row":2,"column":7},"action":"insert","lines":[""]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":7},"end":{"row":2,"column":9},"action":"insert","lines":["\"\""]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":8},"end":{"row":2,"column":8},"action":"insert","lines":[""]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":8},"end":{"row":2,"column":9},"action":"insert","lines":["I"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":9},"end":{"row":2,"column":10},"action":"insert","lines":["P"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":12},"end":{"row":2,"column":13},"action":"remove","lines":[","]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":12},"end":{"row":2,"column":13},"action":"insert","lines":[";"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":12},"end":{"row":2,"column":13},"action":"remove","lines":[";"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":12},"end":{"row":2,"column":13},"action":"insert","lines":[","]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":17},"end":{"row":3,"column":18},"action":"remove","lines":[";"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":17},"end":{"row":3,"column":18},"action":"insert","lines":[","]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":17},"end":{"row":3,"column":18},"action":"remove","lines":[","]}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":19,"column":2},"end":{"row":19,"column":2},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":12,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1416585831000,"hash":"dda4ac9e5723877b15f152c270fc77f6155d0089"}