<?php

namespace App\Http\Controllers;
use App\Models\nav ;
use App\Models\seo ;
use App\Models\view ;
use App\Http\Traits\UploadImg;
use Illuminate\Http\Request;

class nav_crud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  

    $parent_id=$request['parent_id'];

    $nav=nav::where('parent_id',NULL)->get();

    $SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get(); 

    foreach ($SEO as $SEOitem){

     $Domain_site = $SEOitem-> Domain_site ; 

    }


    $view=view::whereRaw("ID = (select Max(id) from view )")->get();

    foreach ($view as $viewitem){

      $BusinessModel = $viewitem->BusinessModel ; 
     

     }

            
    $countnav = count($nav);

    if( $countnav > 0){ 

        return view('Admin.Auth.nav',compact('nav'),[

'Domain_site' => $Domain_site,
'BSModel' => $BusinessModel


    ]);

    }else{

        return view('Admin.Auth.nav');

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
     * @param  \App\Models\nav;
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits

    public function store(Request $request)
    {

        if(!empty($request -> IMG)){
       
            @$FILENAME= $this -> saveImage($request -> IMG ,'Front/IMG/');
        
    }else{

            @$FILENAME=NULL;

        }

         


       if(!empty($request->parent_id)){
       
        nav::create([

            'sub1menu'=>$request->Maintitle,
  
            'submenuico'=>$FILENAME,
            
            'parent_id' =>$request->parent_id ,
            
  
            ]);


          nav::where('ID',$request->parent_id)->update([    
       
            'footer'=> $request->parent_id,
            
       ] );
        
          }elseif(!empty($request->SUBMENUID)){



            nav::create([

                'sub1menu'=>$request->Maintitle,
      
                'submenuico'=>$FILENAME,
                
                'parent_id' =>'0',
                
                'SUBMENUID' =>$request->SUBMENUID 
      
                ]);

            nav::where('ID',$request->SUBMENUID)->update([    
       
                'footer'=> $request->SUBMENUID,
                
           ] );



          }else{

            nav::create([

                'sub1menu'=>$request->Maintitle,
      
                'submenuico'=>$FILENAME,
                
                'parent_id' =>$request->parent_id ,
                
      
                ]);



          }


          
          return redirect()->route('nav.index')
          ->with('success','create  sent  succefuly');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,nav $navitem)
    {
        



        $SEO=seo::whereRaw("ID = (select Max(id) from seo )")->get(); 

        foreach ($SEO as $SEOitem){

            $Domain_site= $SEOitem-> Domain_site ; 
       
           }


$parent_id=$request->parent_id;

        if(empty ($parent_id)){

        $ID=$request->nav;

        $nav=nav::where('parent_id',$ID)->get();

        
        $countnav = count($nav);

        if( $countnav > 0){ 
    
            return view('Admin.Auth.nav',compact('nav'),[
         
                'navID' => $request->nav ,  
                
                'Domain_site' => $Domain_site
                
             ]);
             
            }else{

                return view('Admin.Auth.nav',[
             
                    'navID' => $request->nav ,        
                    'Domain_site' => $Domain_site


                 ]); 
            } 
    
        
    }elseif(!empty($parent_id)){


        $ID=$request->nav;

        $nav=nav::where('SUBMENUID',$ID)->get();

        
        $countnav = count($nav);

        if( $countnav > 0){ 
    
            return view('Admin.Auth.nav',compact('nav'),[
         
                'parent_id' => $request->nav ,        
                'Domain_site' => $Domain_site
             ]); 

            }else{


                return view('Admin.Auth.nav',[
             
                    'parent_id' => $request->nav ,        
                    
                 ]); 
            } 


    
        } 
    
     

    }


    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,nav $navitem)
    {
        




    }

    /**
     * Update the specified resource in storage.
     * @param  App\Http\UploadImg;
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nav 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits

    public function update(Request $request,nav $navitem)
    {

        $ID=$request->nav;
        $SUBMENU=$request->SUBMENU;
        $Ar_sub1menu =$request->Ar_sub1menu;  

        if(!empty($request -> UPDATE )){

            if (!empty($request -> IMG)){
  
  @$FILENAME= $this -> saveImage($request -> IMG ,'Front/IMG/');

  $navitem-> where('ID',$ID)->update([    //   $admin=Admin::all();  -     $admin->  $admin= Admin::
       
    'sub1menu'=> $SUBMENU,

    'Ar_sub1menu' => $Ar_sub1menu,

    'Active' => $request->LinkPosition,


    'submenuico'=> $FILENAME,




] );


  
  }else{
            
    $navitem-> where('ID',$ID)->update([    //   $admin=Admin::all();  -     $admin->  $admin= Admin::
       
        'sub1menu'=> $SUBMENU,
        'Ar_sub1menu' => $Ar_sub1menu,
        'Active' => $request->LinkPosition,

    
    
    ] );
    
  }
  
  }elseif (!empty($request -> DEL_ICON )) {
                 
                  @$FILENAME=NULL;


                  $navitem-> where('ID',$ID)->update([    //   $admin=Admin::all();  -     $admin->  $admin= Admin::
       
                    'submenuico'=> $FILENAME,
                
                
                ] );
  
              }

        
        

    return redirect()->route('nav.index')
             ->with('success','updated  succefuly');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,nav $navitem)
    {
        
           
        if(!empty ($request->parent_id)){

            $ID=$request->nav;
        
            nav::where('ID',$ID)->Delete();

            nav::where('footer',$request->parent_id)->update([   
       
                'footer'=>NULL,
    
           
           ] );
    
        return redirect()->route('nav.index')
                 ->with('success','Delete  succefuly');
    

    
            }elseif(!empty ($request->SUBMENUID)){

            $ID=$request->nav;
        
            nav::where('ID',$ID)->Delete();
    

            nav::where('footer',$request->SUBMENUID)->update([   
       
                'footer'=>NULL,
    
           
           ] );


        return redirect()->route('nav.index')
                 ->with('success','Delete  succefuly');
    
                
    
            }else{
        
        $ID=$request->nav;
        
        nav::where('ID',$ID)->Delete();

    return redirect()->route('nav.index')
             ->with('success','Delete  succefuly');


        }


    }
}
