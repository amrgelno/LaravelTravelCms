
@echo '<xml version="1.0" encoding="utf-8"?>';
@echo '<urlset  xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';
      
@foreach($box as $boxitem)	

<url>
<loc>https://asphallt.net?box_ID={{ $boxitem -> ID}} </loc>
<!--<loc>https://asphallt.net/Blog?box_ID={{ $boxitem -> cat_Name}} </loc>-->
<lastmod>{{ $boxitem -> created_at}} </lastmod>
<changefreq>daily</changefreq>
 <priority>1.0</priority>
 </url>

@endforeach

@echo'</urlset>';

