<?php

function get_header() {
	$srv_root=$_SERVER['DOCUMENT_ROOT'];
	$srv_dirs=explode('/', $srv_root);
	$dir_root=$srv_dirs[count($srv_dirs)-3];
if ($dir_root="www.enzomanso.com") {
	$doc_root="www.enzomanso.com";
}
else
{ 
	$doc_root="http://localhost:8888/MyWebSite";
	
}

echo <<<_END

	    <div id="menu">
        		<ul>
                <li><a href="$doc_root/index.php" title="HOME" class=logo>home</a></li>
                <li><a href="$doc_root/travel/grid.php" title="My Trips"><span>travelling</span></a></li>
                <li><a href="#">images</a></li>
                <li><a href="#">words</a></li>
				<li><a href="#">about</a></li>
          		</ul>
		</div>                
_END;
}
function get_footer() {
echo<<<_END
<div id="footer">
</div>
_END;
}
?>