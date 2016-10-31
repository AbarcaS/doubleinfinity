<?php 
if(!defined('mypage'))
{

 die("you are not allowed here");
}
 ?>



			<table class="tg">
			


			  <tr>
			    <th class="tg-031e">BUILT</th>
			    <th class="tg-yw4l">BUILDING</th>
			    <th class="tg-yw4l">CITY</th>
			    <th class="tg-yw4l">ROOF</th>
			  </tr>
<?php
 $dbc = new PDO('mysql:host=localhost;dbname=di', "root", "");

 $query = $dbc->query("select * from skyscrapers");
$arr = [];
while($results = $query->fetch()){


echo "
 			  <tr>
			    <th class=\"tg-031e\">$results[built]</th>
			    <th class=\"tg-yw4l\">$results[name]</th>
			    <th class=\"tg-yw4l\">$results[city]</th>
			    <th class=\"tg-yw4l\">$results[height]</th>
			  </tr>
			  ";

}


?>




			</table>