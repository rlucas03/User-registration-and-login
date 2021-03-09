<?php

$clean = array();
$errors = array();


			$menu = array();
			$menu ['index.php? echo SID; '] = 'Home';
			$menu ['admin.php? echo SID; '] = 'Admin';
			# slide 22 on Foreach Loop
			echo '<ul>';
			foreach ($menu as $key => $menuitem) {
				echo '<li><a href ="'.$key .'">' . $menuitem . '</a></li>';
				
				
			}
			echo '</ul>';

				echo '<ul>
					<li><a href="DTresults.php?SID "> DTResults</a></li>
					<li><a href="P1results.php?SID">P1Results</a></li>
					<li><a href="PfPresults.php?SID">PfPResults</a></li>
				</ul>';



?>