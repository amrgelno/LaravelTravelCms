<?php

namespace App\Http\Controllers;
use App\Models\paragraph ;
use App\Models\nav ;
use App\Models\box ;
use App\Models\topic ;
use App\Http\Traits\UploadImg;
use App\Http\Traits\Navset;
use Illuminate\Http\Request;

class paragraph_crud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    #USE Navset; 
    public function index(Request $request)
    {

        @$MainM_ID=$request->MainM_ID;          // pagenumber

        @$page_id=$request->page_id;             //nav_id  -  box_id -   relatedtopic_id

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
          
        $paragraph=paragraph::where ($page_id,$MainM_ID)
        ->orderBy('id')
        ->paginate(20,['id','Paragraph',$page_id]);

        // $paragraph=paragraph::paginate(1,['id','Paragraph']);

        $countparagraph = count($paragraph);

    if( $countparagraph > 0){ 

        return view('Admin.Auth.paragraph',compact('paragraph'),
    [

        'MainM_ID'=>$MainM_ID,
        'page_id' =>$page_id,
        'pagename' => $pagename,
      
        
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
     * @param  \App\Models\paragraph 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits

    public function store(Request $request)
    {       
        @$MainM_ID=$request->MainM_ID;
        @$box_id=$request->box_ID;
        @$Topic_id=$request->Topic_ID;
        @$page_id=$request->page_id;
        @$href="MainM_ID=$MainM_ID&Editparagraph=Editparagraph&page_id=$page_id";
         
        if(!empty($request -> IMG &&  $request -> UPDATE )){
                    
            @$FILENAME= $this -> saveImage($request -> IMG ,'front/IMG/');
          
        }elseif (!empty($request -> IMG &&  $request -> UPDATE)){
    
                @$FILENAME=' ';
    
            }elseif (!empty($request -> DEL_ICON )) {
               
                @$FILENAME=' ';

            }

        if(!empty($MainM_ID)){

              echo  "<script>   alert('Data send success'); </script>";

            paragraph::create([
    
                'Paragraph'=>$request->Paragraph,

                'Ar_paragraph'=> 'Arabic_paragraph',
                      
                $page_id =>  $request->MainM_ID
                
                
                ]);

                // return view('Admin.Auth.newtopic',[
             
                //     'navID' => $request->MainM_ID ,        
                    
                //  ]); 

        return redirect()->route('paragraph.index',[$href])->with('success','update  sent  succefuly');

            }


    }

    /**
     * Display the specified resource.
     * @param  App\Http\UploadImg;
     * @param  int  $id
     * @param  \App\Models\paragraph 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,paragraph $paragraphitem)
    {
           
        @$paragraph_ID= $request->paragraph ;

        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;



        $paragraphD=paragraph::where ('id',$paragraph_ID)->where($page_id,$MainM_ID)->get();

        $countparagraph = count($paragraphD);

        if( $countparagraph > 0){ 
    
            return view('Admin.Auth.paragraph',compact('paragraphD'),[
             
                'paragraphID' =>  $MainM_ID   ,
                
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
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\paragraph 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits
    
    public function update(Request $request,paragraph $paragraphitem)
    {

        echo  "<script>   alert('Data updated success'); </script>";


        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;



        @$href="MainM_ID=$MainM_ID&Editparagraph=Editparagraph&page_id=$page_id";


        if(!empty($request -> IMG &&  $request -> UPDATE )){
                    
            @$FILENAME= $this -> saveImage($request -> IMG ,'front/IMG/');
          
        }elseif (!empty($request -> IMG &&  $request -> UPDATE)){
    
                @$FILENAME=' ';
    
            }elseif (!empty($request -> DEL_ICON )) {
               
                @$FILENAME=' ';

            }


            paragraph::where('ID',$request->paragraph)->update([    
       
                'Paragraph'=> $request->updateparagraph,
                'Ar_paragraph' =>$request->Ar_paragraph,

                
           ] );



        //    return view('Admin.Auth.newtopic',[
             
        //     'navID' => $request->MainM_ID         
            
        //  ]); 


    return redirect()->route('paragraph.index',[$href])->with('success','update  sent  succefuly');


    }

    /**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\paragraph 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,paragraph $paragraphitem)
    {


    if($request["DELETE_Item"]){


        echo  "<script>   alert('Data Deleted success'); </script>";

        $ID=$request->paragraph;

        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;


        @$href="MainM_ID=$MainM_ID&Editparagraph=Editparagraph&page_id=$page_id";



        paragraph::where('ID',$ID)->Delete();


        // return view('Admin.Auth.newtopic',[
             
        //     'navID' => $request->MainM_ID         
            
        //  ]); 



return redirect()->route('paragraph.index',[$href])->with('success','update  sent  succefuly');

        }

    }

/**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\paragraph 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function  Del_Bulk(Request $request,paragraph $paragraphitem)
    {

#for($i=0;$i<=$counter;$i++){
 //dd($request->checkbox);

    @$MainM_ID =$request->MainM_ID ;
        
    @$page_id=$request->page_id;

	@$_SET=$request->checkbox;
	
	 #@$DEL_ID=implode(",",$_SET);
    
    
    paragraph::whereIn('ID' ,$_SET)->Delete();

	 
    @$href="MainM_ID=$MainM_ID&Editparagraph=Editparagraph&page_id=$page_id";
   
    #$DELETE="delete from box where ID IN ($DEL_ID)";   
      
//     #print_r($request->checkbox);
// #	 }	

     return redirect()->route('paragraph.index',[$href])->with('success','update  sent  succefuly');


    }
    
}
