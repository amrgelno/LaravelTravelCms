
<?php
header('Content-type:text/css; charset:utf-8');

include("con_db2.php");
$selector="select * from view where id=(select max(id) from view)";
$exe=mysqli_query($connect,$selector);
if($column=mysqli_fetch_assoc($exe)){
?>

.header {

    background-color:<?php echo $column['ulcolor'] ?>!important ;
   /* background-color: #09415d !important ; */
    color : white !important; 
}



h1{

    /*color: white !important;*/
     color:<?php echo  $column['H1_Color'] ?>!important;

}



h2{

    color:<?php echo  $column['H2_Color'] ?>!important;
    /*color :  #09415d !important; */
}


h3{
    color:<?php echo  $column['H3_Color'] ?>!important;
    /*color :  #09415d !important;*/ 
}


.dropdown-menu megamenu show{


    background-color : #09415d !important ; 
    color : white !important ; 

}

.navbar .megamenu {

    /*background: #fafafa;*/

    background:<?php echo  $column['sub1color'] ?>!important;
  
}


button{
   /* background-color : #c4a948 !important ;*/ 
    /*color : white !important ; */
}


a:hover{
   /* color : #c4a948 !important;
     color:<?php echo  $column['Link_Hover'] ?>;
}



input:[type:button]{
    color : #c5c5c5 !important; 
}


p{


/*color:black!important;*/

}




<?php
}
?>
