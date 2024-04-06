
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        
        @foreach($box as $boxitem)

{
  "@type": "ListItem",
  "position": {{ $boxitem -> ID}} ,
  "name": "Recipes",
  "item": "https://asphallt.net?/Blog/box_ID={{ $boxitem -> ID}}"
},

@endforeach

{
  "@type": "ListItem",
  "position":'' ,
  "name": "Recipes",
  "item": "https://asphallt.net?"
}

        
        ]
    }
    </script>




    


