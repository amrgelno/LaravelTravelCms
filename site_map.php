<?php
echo'<?xml version="1.0" encoding="utf-8"?>';
echo'<urlset  xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd"        
        >';
include("con_db2.php");
$MAIN_ID=1;
$SELECT="select * From  box  Where  Box_id ='$MAIN_ID' ORDER BY  box.ID ASC";
$boxquery=mysqli_query($connect,$SELECT);
while($column=mysqli_fetch_array($boxquery)){
?>	
<url>
<loc>https://asphallt.net?box_ID=<?php echo $column['ID']?></loc>
<!--<loc>https://asphallt.net/Blog?box_ID=<?php echo $column['ID']?></loc>-->
<lastmod><?php echo $column['Time']?></lastmod>
<changefreq>daily</changefreq>
 <priority>1.0</priority>
 </url>
<?php
}
echo'</urlset>';
?>
