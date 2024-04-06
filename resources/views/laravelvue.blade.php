
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token"  content="{{csrf_token()}}"/>      {{--     ajax meta   --}}
    <script src="{{asset('js/cdnvue.js')}}" type="text/javascript" ></script> 
    <script src="{{asset('js/Axios.min.js')}}" type="text/javascript" ></script> 

</head>


  <title>  welcome vue lesson 2</title>

  <body> 
    
 



  <div id="app"> 
  
  
<article
    v-for="(data,i) in users"
    :key="i"
    class="uk-comment uk-comment-primary"
    style="padding: 36px; height: 250px" >
    <header class="uk-comment-header">
      <div class="uk-grid-medium uk-flex-middle uk-grid" uk-grid="">
        <div class="uk-width-auto uk-first-column">
          <!--<img class="uk-comment-avatar" :src="" width="80" height="80" alt="">-->
        </div>
        <div class="uk-width-expand">
          <h4 class="uk-comment-title uk-margin-remove">
            <a class="uk-link-reset" href="https://getuikit.com/docs/comment#"
              >Author</a
            >
          </h4>
          <ul
            class="
              uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top
            "
          >
            <li>
              <a href="https://getuikit.com/docs/comment#">@{{ data.Name }}</a>
            </li>
            <li>
              <a href="https://getuikit.com/docs/comment#">@{{ data.email }}</a>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <div class="uk-comment-body">
      <p>@{{ data.Post }}</p>
    </div>
     </article> 
  
    </div>

  
  

  </div>
 


  <script src="{{asset('js/vueappscript.js')}}" type="text/javascript" ></script> 


  <!-- <script>

new Vue(
    { el: "#app",
     data: { users: [] }, 
    methods: 
    { 
    getUser() { 
    const URL="{{asset('js/example.php')}}";
     axios.
     get(URL) .
     then(res => { this.users = res.data.data; }) }  }
    , mounted() { this.getUser(); }, 
    
    })



</script> -->

  </body>
</html>