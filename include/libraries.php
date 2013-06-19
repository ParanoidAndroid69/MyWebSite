<?php

function get_header() {
	$srv_root=$_SERVER['DOCUMENT_ROOT'];
	$srv_dirs=explode('/', $srv_root);
	$dir_root=$srv_dirs[count($srv_dirs)-1];
if ($dir_root!="home") {
	$doc_root="http://localhost:8888/MyWebSite";
}
else
{ 
	$doc_root="www.enzomanso.com";
}

echo <<<_END
<div id="header">
	    <div id="menu">
        		<ul>
                <li><a href="$doc_root/index.php" title="HOME">home</a></li>
                <li><a href="$doc_root/travel/grid.php" title="My Trips"><span>travelling</span></a></li>
                <li><a href="#">images</a></li>
                <li><a href="#">travel info</a></li>
           		</ul>
		</div>                
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