<?php 

function nav_main($dbc, $path) {

	$q = "SELECT * FROM navigation ORDER BY position ASC";
    $r = mysqli_query($dbc, $q);

    while ($nav = mysqli_fetch_assoc($r)) { 

        $user_login = '';

        	if (isset($_SESSION['username'])) {
        		if(strcasecmp($nav['label'], 'Login') == 0) {
        		$nav['label'] = 'Logout';
        		}
        		if(strcasecmp($nav['label'], 'Logout') == 0) {
        			$nav['url'] = 'logout';
        		}

        	}
    	?> 

    <li<?php selected($path['call_parts'][0], $nav['url'], ' class="active"'); ?>><a href="<?php echo $nav['url']; ?>"><?php echo $nav['label']; ?></a></li>


	<?php }

}


 ?>