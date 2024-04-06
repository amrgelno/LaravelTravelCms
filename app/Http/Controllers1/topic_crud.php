<?php

namespace App\Http\Controllers;
use App\Models\topic ;
use App\Models\nav ;
use App\Models\seo ;
use App\Models\box ;
use App\Http\Traits\UploadImg;
use Illuminate\Http\Request;

class topic_crud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get(); 

        foreach ($SEO as $SEOitem){
    
            $Domain_site = $SEOitem-> Domain_site ; 
       
           }

        @$MainM_ID=$request->MainM_ID;
        @$page_id=$request->page_id;

        $topic=topic::where($page_id,$MainM_ID)
        ->orderBy('id')
        ->paginate(20,['id','content','subject','ImageName',$page_id]);


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

        $counttopic = count($topic);

    if( $counttopic > 0){ 

        return view('Admin.Auth.topic',compact('topic'),
        [
    
            'MainM_ID'=>$MainM_ID,
            'page_id' =>$page_id,
            'pagename' => $pagename,
            'Domain_site' => $Domain_site

          
            
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
     * @param  \App\Models\topic 
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

        @$href="MainM_ID=$MainM_ID&EDIT_TOPIC=EDIT_TOPIC&page_id=$page_id";


if(!empty($request -> upload)){

                            
            @$FILENAME= $this -> saveImage($request -> upload ,'Front/IMG/');
          

}else{


            @$FILENAME=' ';



}


       
        if(!empty($MainM_ID)){

              echo  "<script>   alert('Data send success'); </script>";

            topic::create([
    
                'content'=>$request->content,
                      
                $page_id =>  $request->MainM_ID,

                'subject' =>$request->subject,

                'ImageName' => $FILENAME,

                'Topic_style'=>'Article'
                
                ]);


return redirect()->route('topic.index',[$href])->with('success','update  sent  succefuly');

            }


    }

    /**
     * Display the specified resource.
     * @param  App\Http\UploadImg;
     * @param  int  $id
     * @param  \App\Models\topic 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,topic $topicitem)
    {
           
        @$topic_ID= $request->topic ;

        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;

        $topicD=topic::where ('id',$topic_ID)->where($page_id,$MainM_ID)->get();

        $counttopic = count($topicD);

        if( $counttopic > 0){ 
    
            return view('Admin.Auth.topic',compact('topicD'),[
             
                'topicID' =>  $MainM_ID   ,
                
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
     * @param  \App\Models\topic 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits
    
    public function update(Request $request,topic $topicitem)
    {

        echo  "<script>   alert('Data updated success'); </script>";

        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;

        @$href="MainM_ID=$MainM_ID&EDIT_TOPIC=EDIT_TOPIC&page_id=$page_id";


        if(!empty($request->Topic_STYLE)){
       
        
            @$Topic_STYLE=$request->Topic_STYLE;
        
        }else{

 @$Topic_STYLE='NULL';



}


            if(!empty($request -> upload )){

                @$FILENAME= $this -> saveImage($request -> upload ,'Front/IMG/');
    
           
                topic::where('ID',$request->topic)->update([    
       
                    'content'=>$request->content,
                          
                     $page_id =>  $request->MainM_ID,
    
                    'subject' =>$request->subject,
                    
                    'Ar_subject' => $request->Ar_subject,
    
                    'Ar_content' => $request->Ar_content,
    
                    'ImageName' => $FILENAME,
                    
                    'Topic_style' =>$Topic_STYLE
                    
 
                   
               ] );
    
                    
    
             }else{
    
                topic::where('ID',$request->topic)->update([    
       
                    'content'=>$request->content,
                          
                     $page_id =>  $request->MainM_ID,
    
                    'subject' =>$request->subject,
                    
                    'Ar_subject' => $request->Ar_subject,
    
                    'Ar_content' => $request->Ar_content,
                    
                    'Topic_style' =>$Topic_STYLE
     
                    
               ] );
    
    
                }



return redirect()->route('topic.index',[$href])->with('success','update  sent  succefuly');


    }

    /**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\topic 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,topic $topicitem)
    {

        echo  "<script>   alert('Data Deleted success'); </script>";

        $ID=$request->topic;

        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;

        @$href="MainM_ID=$MainM_ID&EDIT_TOPIC=EDIT_TOPIC&page_id=$page_id";

topic::where('ID',$ID)->Delete();

return redirect()->route('topic.index',[$href])->with('success','update  sent  succefuly');

    }


    /**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\paragraph 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function  Del_Bulk(Request $request,topic $topicitem)
    {

#for($i=0;$i<=$counter;$i++){
 //dd($request->checkbox);

    @$MainM_ID =$request->MainM_ID ;
        
    @$page_id=$request->page_id;

	@$_SET=$request->checkbox;
	
	 #@$DEL_ID=implode(",",$_SET);
    
    topic::whereIn('ID' ,$_SET)->Delete();
 
    @$href="MainM_ID=$MainM_ID&Editparagraph=Editparagraph&page_id=$page_id";
   
    #$DELETE="delete from box where ID IN ($DEL_ID)";   
      
//     #print_r($request->checkbox);
// #	 }	

     return redirect()->route('topic.index',[$href])->with('success','update  sent  succefuly');


    }

}
