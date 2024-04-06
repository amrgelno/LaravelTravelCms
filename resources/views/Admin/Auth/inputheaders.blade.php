 <button type="button" onclick="goback()" class="btn btn-outline-success"> <<  </button>  &nbsp;  &nbsp;   &nbsp;
 <button type="button" onclick="gonext()" class="btn btn-outline-warning"> >> </button>    &nbsp;  &nbsp;   &nbsp;
 <button onClick="window.location.reload();" class="btn btn-outline-info">↻</button>      &nbsp;  &nbsp;   &nbsp;
 <button data-widget="fullscreen" href="#" role="button" class="btn btn-outline-dark"  > <i class="fas fa-expand-arrows-alt"></i>
</button>   &nbsp;  &nbsp;   &nbsp;


 <script>
    function goback(){
        window.history.go(-1);
    }

        
</script>

<script>
    function gonext(){
        window.history.go(+1);
    }

</script>

<script>
const reloadtButton = document.querySelector("#reload");
// Reload everything:
function reload() {
    reload = location.reload();
}
// Event listeners for reload
reloadButton.addEventListener("click", reload, false);
</script>