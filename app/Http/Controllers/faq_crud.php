<?php

namespace App\Http\Controllers;
use App\Models\topic ;
use App\Models\faqs  ;
use App\Models\nav ;
use App\Models\seo ;
use App\Models\box ;
use App\Http\Traits\UploadImg;
use Illuminate\Http\Request;

class faq_crud extends Controller
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

        $faqs=faqs::where($page_id,$MainM_ID)
        ->orderBy('id')
        ->paginate(25,['id','Question','Answer',$page_id]);


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

        $countfaqs = count($faqs);

    if( $countfaqs > 0){ 

        return view('Admin.Auth.faqs',compact('faqs'),
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
     * @param  \App\Models\faqs 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits

    public function store(Request $request){  

        @$MainM_ID=$request->MainM_ID;
        @$box_id=$request->box_ID;
        @$faqs_id=$request->faqs_ID;
        @$page_id=$request->page_id;
        $AccordionPanel="AccordionPanel";

        @$href="MainM_ID=$MainM_ID&EDIT_faqs=EDIT_faqs&page_id=$page_id";
                                      
       
        if(!empty($MainM_ID)){

              echo  "<script>   alert('Data send success'); </script>";

            faqs::create([
    
                'Question'=>$request->subject,

                'Answer' =>$request->content,
            
                 $page_id => $request->MainM_ID
                
                ]);


return redirect()->route('faq.index',[$href])->with('success','update  sent  succefuly');

            }


    }

    /**
     * Display the specified resource.
     * @param  App\Http\UploadImg;
     * @param  int  $id
     * @param  \App\Models\faqs 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,faqs $faqitem)
    {
           
        @$faqs_ID= $request->faqs ;

        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;


        $faqsD=faqs::where('ID',$request->faq_ID)->where($page_id,$MainM_ID)->get();

        $countfaqs = count($faqsD);

        if( $countfaqs > 0){ 
    
            return view('Admin.Auth.faqs',compact('faqsD'),[
             
                'faqsID' =>  $MainM_ID   ,
                
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
     * @param  \App\Models\faqs 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits
    
    public function update(Request $request,faqs $faqitem)
    {

        echo  "<script>   alert('Data updated success'); </script>";

        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;

        @$href="MainM_ID=$MainM_ID&EDIT_faqs=EDIT_faqs&page_id=$page_id";

           
                faqs::where('ID',$request->faq)->update([    
       
                    'Question'=>$request->subject,
                          
                     $page_id =>  $request->MainM_ID,
    
                    'Answer' =>$request->content,

                    
                    'Ar_Question' => $request->Ar_subject,
    
                    'Ar_Answer' => $request->Ar_content,
                        
                   
               ] );
    

return redirect()->route('faq.index',[$href])->with('success','update  sent  succefuly');


    }

    /**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\faqs 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,faqs $faqitem)
    {

        echo  "<script>   alert('Data Deleted success'); </script>";

        $ID=$request->faqs;

        @$MainM_ID = $request->MainM_ID ;
        
        @$page_id=$request->page_id;

        @$href="MainM_ID=$MainM_ID&EDIT_faqs=EDIT_faqs&page_id=$page_id";

faqs::where('ID',$request->faq_ID)->Delete();

return redirect()->route('faq.index',[$href])->with('success','update  sent  succefuly');

    }


    /**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\paragraph 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function  Del_Bulk(Request $request,faqs $faqitem)
    {

#for($i=0;$i<=$counter;$i++){
 //dd($request->checkbox);

    @$MainM_ID =$request->MainM_ID ;
        
    @$page_id=$request->page_id;

	@$_SET=$request->checkbox;
	
	 #@$DEL_ID=implode(",",$_SET);
    
    faqs::whereIn('ID' ,$_SET)->Delete();
 
    @$href="MainM_ID=$MainM_ID&EDIT_faqs=EDIT_faqs&page_id=$page_id";
   
    #$DELETE="delete from box where ID IN ($DEL_ID)";   
      
//     #print_r($request->checkbox);
// #	 }	

     return redirect()->route('faq.index',[$href])->with('success','update  sent  succefuly');


    }

}
