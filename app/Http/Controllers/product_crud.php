<?php

namespace App\Http\Controllers;
use App\Models\member_pr ;
use App\Models\nav ;
use App\Models\box ;
//use App\Models\topic ;
use App\Models\seo;
use App\Http\Traits\UploadImg;
use App\Http\Traits\UploadImg2;
use App\Http\Traits\UploadImg3;
use Illuminate\Http\Request;

class product_crud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        @$MainM_ID=$request->MainM_ID;
        @$page_id=$request->page_id;

        $SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get(); 

        foreach ($SEO as $SEOitem){

            $Domain_site = $SEOitem-> Domain_site ; 
       
           }
    
        if($page_id=='Box_ID'){
          
                   @$table='box';
          
                   $boxes=box::where('id',$MainM_ID)->get();
          
                   foreach ($boxes as $box ) {
                  
                      $pagename=$box -> title;
                      
                      }
          
                  }
           
        $member_pr=member_pr::where ($page_id,$MainM_ID)
        ->orderBy('id')
        ->paginate(3,['id','product_Model','product_ver','product_cat','product_cost','product_price','Discount','QR','supplier','product_Des','Image1','Image2','Image3','Image4','created_at',$page_id]);


        $countmember_pr = count($member_pr);

    if( $countmember_pr > 0){ 

        return view('Admin.Auth.product',compact('member_pr'),[

            'MainM_ID'=>$MainM_ID,
            'page_id' =>$page_id,
            'pagename' =>$pagename,
            'Domain_site' =>$Domain_site
            
        ]);

    }else{


       echo'لايوجد محتوى حتى الان';


    }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

    }

    /**
     * Store a newly created resource in storage.
     * @param  App\Http\UploadImg;
     * @param  App\Http\UploadImg2;
     * @param  App\Http\UploadImg3;
     * @param  \App\Models\member_pr 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits

    USE UploadImg2;   //  use Traits

    USE UploadImg3;   //  use Traits

    public function store(Request $request)
    {       
        @$MainM_ID=$request->MainM_ID;
        @$box_id=$request->box_ID;
        @$Topic_id=$request->Topic_ID;
        @$page_id=$request->page_id;

        @$href="MainM_ID=$MainM_ID&Edit_product=Edit_product&page_id=$page_id";
                            
        @$counter2=$request['countnum'];  //2  ->   2 > $i++ [0 1]  

        for ($i = 0; $i<$counter2 ; $i++)    {


            @$FILENAME= $this -> saveImage($request -> uploadimage1[$i] ,'front/IMG/');


            @$FILENAME2= $this -> saveImage($request -> uploadimage2[$i] ,'front/IMG/');



            @$FILENAME3= $this -> saveImage($request -> uploadimage3[$i] ,'front/IMG/');


            $prodModel=$request -> prodModel[$i];
            $prodver=$request -> prodver[$i];
            $prodcost=$request -> prodcost[$i];
            $prodprice=$request -> prodprice[$i];
            $Discount=$request -> prodDiscount[$i];
            $supplier=$request ->prodsupplier[$i];
            $prodQR=$request ->prodQR[$i];
            $proddisc=$request ->proddisc[$i];
            
       
              echo  "<script>   alert('Data send success'); </script>";

            member_pr::create([
    
                'product_Model' =>$prodModel,

                'product_ver' =>$prodver,

                'product_cost' =>$prodcost,

                'product_price' =>$prodprice,

                'Discount'=>$Discount,

                'supplier'=>$supplier,

                'QR' =>$prodQR,

                'product_Des' =>$proddisc,

                $page_id =>  $request->MainM_ID,

                'Image1'=>$FILENAME,
                'Image2'=>$FILENAME2, 
                'Image3'=>$FILENAME3,  

                'Box_ID'=>$MainM_ID

                
                ]);

            }
return redirect()->route('product.index',[$href])->with('success','update  sent  succefuly');

            
    }

    /**
     * Display the specified resource.
     * @param  App\Http\UploadImg;
     * @param  int  $id
     * @param  \App\Models\member_pr 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,member_pr $member_pritem)
    {
           
        //@$member_pr_ID= $request->member_pr ;
        @$ID=$request->product;
        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;

        $member_prD=member_pr::where ('id',$ID)->where($page_id,$MainM_ID)->get();

        $countmember_pr = count($member_prD);

        if( $countmember_pr > 0){ 
    
            return view('Admin.Auth.product',compact('member_prD'),[
             
                'MainM_ID'=>$MainM_ID,
                'page_id' =>$page_id,
                
             ]);
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        



    }

    /**
     * Update the specified resource in storage.
     * @param  App\Http\UploadImg;
     * @param  App\Http\UploadImg2;
     * @param  App\Http\UploadImg3;
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\member_pr; 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits

    USE UploadImg2;   //  use Traits

    USE UploadImg3;   //  use Traits
    
    public function update(Request $request,member_pr $member_pritem)
    {

        echo  "<script>   alert('Data updated success'); </script>";


        $ID=$request->product;


        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;

        @$href="MainM_ID=$MainM_ID&Edit_product=Edit_product&page_id=$page_id";

                    
        @$FILENAME= $this -> saveImage($request -> uploadimage1 ,'front/IMG/');


        @$FILENAME2= $this -> saveImage($request -> uploadimage2 ,'front/IMG/');



        @$FILENAME3= $this -> saveImage($request -> uploadimage3 ,'front/IMG/');
          
      

            member_pr::where('id',$ID)->update([    
       
                'product_Model' =>$request->prodModel,

                'product_ver' =>$request->prodver,

                'product_cost' =>$request->prodcost,

                'product_price' =>$request->prodprice,

                'Discount'=>$request->prodDiscount,

                'supplier'=>$request->prodsupplier,

                'QR' =>$request->prodQR,

                'product_Des' =>$request->proddisc,

                $page_id =>  $request->MainM_ID,

                'Image1'=>$FILENAME,
                'Image2'=>$FILENAME2, 
                'Image3'=>$FILENAME3,  

                'Box_ID'=>$MainM_ID
 
          
           ] );


return redirect()->route('product.index',[$href])->with('success','update  sent  succefuly');


    }

    /**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\member_pr 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,member_pr $member_pritem)
    {

        echo  "<script>   alert('Data Deleted success'); </script>";

        $ID=$request->product;

        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;

        @$href="MainM_ID=$MainM_ID&Edit_product=Edit_product&page_id=$page_id";

member_pr::where('ID',$ID)->Delete();

return redirect()->route('product.index',[$href])->with('success','update  sent  succefuly');



    }



    /**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\member_pr 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function  Del_Bulk(Request $request,member_pr $member_pritem)
    {

#for($i=0;$i<=$counter;$i++){
 //dd($request->checkbox);

    @$MainM_ID =$request->MainM_ID ;
        
    @$page_id=$request->page_id;

	@$_SET=$request->checkbox;
	
	 #@$DEL_ID=implode(",",$_SET);
    
   member_pr::whereIn('ID' ,$_SET)->Delete();
 
    @$href="MainM_ID=$MainM_ID&Edit_product=Edit_product&page_id=$page_id";
   
    #$DELETE="delete from box where ID IN ($DEL_ID)";   
      
       //     #print_r($request->checkbox);
       // #	 }	

     return redirect()->route('product.index',[$href])->with('success','update  sent  succefuly');


    }


}
