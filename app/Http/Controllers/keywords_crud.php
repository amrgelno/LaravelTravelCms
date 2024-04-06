<?php

namespace App\Http\Controllers;
use App\Models\keywords ;
use App\Models\nav ;
use App\Models\box ;
use App\Models\topic ;
use Illuminate\Http\Request;

class Keywords_crud extends Controller
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

        if($page_id=='nav_id'){

            @$table='nav';
          
            $navs=nav::where('id',$MainM_ID)->get();
          
            foreach ($navs as $nav ) {
                  
              $pagename=$nav -> sub1menu;
              
              }
          
                  }elseif($page_id=='box_id'){
          
                   @$table='box';
          
                   $boxes=box::where('id',$MainM_ID)->get();
          
                   foreach ($boxes as $box ) {
                  
                      $pagename=$box -> title;
                      
                      }
          
                  }elseif($page_id=='relatedtopic_id'){
          
             @$table='topic';
          
             $topics=topic::where('id',$MainM_ID)->get();
          
             foreach ($topics as $topic ) {
                  
              $pagename=$topic -> subject;
              
              }
           
              }

        $keywords=keywords::where ($page_id,$MainM_ID)
        ->orderBy('ID')
        ->paginate(3,['ID','Keyword','description','author','title',$page_id]);

        $countKeyword = count($keywords);

    if( $countKeyword > 0){ 

        return view('Admin.Auth.keywords',compact('keywords'),[
      

            'MainM_ID'=>$MainM_ID,
            'page_id' =>$page_id,
            'pagename' =>$pagename



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
     * @param  \App\Models\keywords 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {       
        @$MainM_ID=$request->MainM_ID;
        @$box_id=$request->box_ID;
        @$Topic_id=$request->Topic_ID;
        @$page_id=$request->page_id;
        @$href="MainM_ID=$MainM_ID&EditKeyword=EditKeyword&page_id=$page_id";
         
         echo  "<script>   alert('Data send success'); </script>";

            keywords::create([
    
            'Keyword'=>$request->keywords,
            'description'=> $request->description,
            'author'=> $request->author,
            'title'=> $request->title,
             $page_id =>  $request->MainM_ID
                
                
                ]);

                // return view('Admin.Auth.newtopic',[
             
                //     'navID' => $request->MainM_ID ,        
                    
                //  ]); 

        return redirect()->route('keywords.index',[$href])->with('success','update  sent  succefuly');

            }



    /**
     * Display the specified resource.
     * @param  int  $id
     * @param  \App\Models\keywords 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,keywords $keywordsitem)
    {

        $ID=$request->ID;

        @$Keyword_ID= $request->keywords ;

        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;

        echo  $Keyword_ID ;

        $keywords=keywords::where ('ID',$ID)->where($page_id,$MainM_ID)->get();

        $countKeyword = count($keywords);

        if( $countKeyword > 0){ 
    
            return view('Admin.Auth.keywords',compact('keywords'));
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
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\keywords 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request,keywords $keywordsitem)
    {

        echo  "<script>   alert('Data updated success'); </script>";

        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;

        @$href="MainM_ID=$MainM_ID&EditKeyword=EditKeyword&page_id=$page_id";
                    
          
            keywords::where('ID',$request->ID)->where($page_id,$MainM_ID)->update([    
       
                'Keyword'=>$request->keyword,
                'description'=> $request->description,
                'author'=> $request->author,
                'title'=> $request->title
                
                
                
           ] );




    return redirect()->route('keywords.index',[$href])->with('success','update  sent  succefuly');


    }

    /**
     * Remove the specified resource from storage.
     * @param  
     * @param  \App\Models\keywords 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,keywords $keywordsitem)
    {

        echo  "<script>   alert('Data Deleted success'); </script>";

        $ID=$request->ID;
        

        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;


        @$href="MainM_ID=$MainM_ID&EditKeyword=EditKeyword&page_id=$page_id";


        keywords::where('ID',$ID)->Delete();


return redirect()->route('keywords.index',[$href])->with('success','update  sent  succefuly');



    }
/**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\keywords
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function  Del_Bulk(Request $request,keywords $keywordsitem)
    {

#for($i=0;$i<=$counter;$i++){
 //dd($request->checkbox);

    @$MainM_ID =$request->MainM_ID ;
        
    @$page_id=$request->page_id;

	@$_SET=$request->checkbox;
	
	 #@$DEL_ID=implode(",",$_SET);
    
     keywords::whereIn('ID' ,$_SET)->Delete();
 
    @$href="MainM_ID=$MainM_ID&EditKeyword=EditKeyword&page_id=$page_id";
   
    #$DELETE="delete from box where ID IN ($DEL_ID)";   
      
       //     #print_r($request->checkbox);
       // #	 }	

     return redirect()->route('keywords.index',[$href])->with('success','update  sent  succefuly');


    }




}
