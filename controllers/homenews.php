<!--
This page displays all news in the rotating news feed in the home page
-->

<?php
			 error_reporting(E_ALL ^ E_NOTICE);

		if(!($db = @ mysql_connect('localhost', 'dvera', 'Letdanin123')))
			{
				print "Error: Could not connect to our database sorry for any inconvience.</td></tr> Please try at a later time.";
			}
			 //select which database you want to edit
			mysql_select_db("edinburg_site");

			$news_id=mysql_real_escape_string($_GET[news_id]);

			$query = "SELECT * FROM news ORDER BY news_id DESC LIMIT 1";
			$result = mysql_query($query);
		?>

            <!-- end of controllers-->
    <?php
		 		$i = 1;

				while ($r=mysql_fetch_array($result))
				{
					$news_id=$r["news_id"];
					$title = mysql_real_escape_string($r["title"]);
					$fulldesc= mysql_real_escape_string($r["fulldesc"]);
					$pic=$r["file"];
		?>
    <?php
						if ($pic!="")
				 		print '<a href="/images/'.$pic.'" title=""><img src="/images/'.$pic.'" title="" width="170" height="135" class="floatright" style="align="right" /></a>';
				 		else
				 		print '<img src="/images/elogo.jpg" title="" width="170" height="135" class="floatright" style="align="right" />';
				 ?>
        <?php print "<h3><a href='newspage.php?news_id={$news_id}'>".$title."</a></h3>"; ?>
            <?php print "<p>" .substr($fulldesc = strip_tags($r["fulldesc"]), 0, 265) ;
		          print "<a href='http://www.cityofedinburg.com/newsite/test/newspage.php?news_id={$news_id}'>Full Story</a>"; ?></p>
    <?php
		 		$i++;
			}//end while loop
		?>
		<p><a href="newspage.php">All News Stories</a></p>

<!-- end news cont. -->
