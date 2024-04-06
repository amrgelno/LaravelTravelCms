<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('Front/css/Uiframework.css') }}" rel="stylesheet" type="text/css">
    <!-- <link href="{{ asset('Front/css/selector.css') }}" rel="stylesheet" type="text/css"> -->

    <title>Nav</title>
</head>

<style>
    body {
        background: rgb(240 242 246);
        overflow: unset;
    }

    .inputNum {

        width: 42px;
    }

    input[type="text"] {
        width: 100px;

    }


    .input-sm {

        border: 2px solid #0CF;
    }
    .table-head{
        background-color: #c7c7c766;
    }
    tr{
        background-color: #dfdfdf4f;
    }
</style>

<body>
    <div class="card-body" style='background:white;'>
        <div class='card card-primary card-outline'>

            <div class="card-header" style="text-align:center;">
                <strong>
                    <h1> All page links & menu </h1>
                </strong>
            </div>

            <hr /> <br />
            <div style="display:flex; justify-content:space-between; padding-bottom:20px">
                <form action="{{ route('nav.store') }}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div style='display:flex;'>

                        &nbsp; &nbsp; <input type="text" name="Maintitle" class='form-control' placeholder="اضافة قائمة" required> &nbsp; &nbsp;

                        <label for='upload'><img src="{{ asset('Front/ICON/uploadfile.png') }}" width="20px" height="20px" title="upload Menu icon" class="camera" /></label>
                        <input type="file" name='IMG' id='upload' value="search for a file" style='display:none;' />

                        @if (!empty($navID))
                            <input name='parent_id' type='hidden' value="{{ $navID }}" />
                            <!-- <input    name='parent_id' type='hidden' value="0" /> -->
                        @endif

                        @if (!empty($parent_id))
                            <input name='SUBMENUID' type='hidden' value="{{ $parent_id }}" />
                        @endif

                        <br /><input type="SUBMIT" name="ADD" VALUE="ADD" class="Mainbt1   input-md">

                    </div>

                </form>

                <select id="langOpt" style="margin-right:10px;">
                    <option value="en"> أنجيلزي-EN </option>
                    <option value="ar"> عربي-Ar </option>
                    <option value="fr"> فرنسي-fr </option>
                </select>

                <script>
                    document.querySelector('#langOpt').addEventListener('change', function(e) {
                        document.querySelectorAll('.lang-option').forEach(element => {
                            if (element.dataset.lang === e.target.value) {
                                element.style.display = 'block';
                            }else {
                                element.style.display = 'none';
                            }
                        });
                    });
                </script>
            </div>

           <div class="table-responsive col-lg-12">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr class = "table-head">
                            <th>ID</th>
                            <th>Main Menu</th>
                            <th>Link Position</th>
                            <th>Menu ico</th>
                            <th>Update</th>
                            @if (@$BSModel != 'landing_page')
                                <th>Add submenu</th>
                            @endif
                            <th>Content</th>
                            <th>SEO</th>
                            <th>Delete</th>
                            <th>Customize</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @php   $i=0;   @endphp

                        @if(!empty($nav))
                        @foreach( $nav as $navitem)
                            <td>{{++$i}}</td>
                            <form action="{{route('nav.update',$navitem->id)}}" method="Post"  enctype="multipart/form-data">
                         @csrf
                        @method('PUT')

                        <!-- <td class="language-picker js-language-picker" data-trigger-class="li4-btn li4-btn--subtle js-tab-focus" >
                            <form action="" class="language-picker__form">
                                <label for="language-picker-select">Select your language</label>
                                <select name="language-picker-select" id="language-picker-select">
                                    <option lang="en" value="english" selected>English</option>
                                    <option lang="fr" value="Arabic">Arabic</option>
                                </select>
                            </form>
                        </td> -->
                        <td style = "color: grey;" >
                            <div class="lang-option" data-lang="en">
                                EN: <input  style = "border-radius: 5px; border-color: white;" type="text" name="SUBMENU" VALUE="<?PHP echo $navitem->sub1menu;?>" id="sub1menu">
                            </div>
                            <div class="lang-option" data-lang="ar" style="display:none;">
                                AR: <input style = "border-radius: 5px; border-color: white;" type="text" name="Ar_sub1menu" VALUE="<?PHP echo $navitem->Ar_sub1menu;?>" id="sub1menu">
                            </div>
                            <div class="lang-option" data-lang="fr" style="display:none;">
                                FR: <input style = "border-radius: 5px; border-color: white;" type="text" name="Fr_sub1menu" VALUE="<?PHP echo $navitem->Fr_sub1menu;?>" id="sub1menu">
                            </div>
                        </td>

                            <td>
                            <select  name='LinkPosition'  require>
                            @if(isset($navitem->Active))
                            <option  value="{{$navitem->Active}}"  style = "align : center">  Select LinkPosition </option> 
                            <option value="nav">   @if(($navitem->Active)=='nav') o nav @else  nav  @endif </option> 
                            <option value="footer"> @if(($navitem->Active)=='footer') o footer  @else   footer  @endif  </option> 
                          @else
                            <option  style = "align : center"> Select LinkPosition </option> 
                            <option value="nav"> nav  </option> 
                            <option value="footer">  footer  </option>
                            @endif
                            </select>
                            </td>

                            <td>
                            <img src="http://{{$Domain_site}}/Front/IMG/{{$navitem->submenuico}}" style="width:40px; height:40px;"/>
                            @if(empty($navitem->submenuico))
                            <input  type="file"  name='IMG'   value="search for a file"  style="width:85px;"  class='input-sm'  />
                            @else
                            <input type="SUBMIT" name="DEL_ICON" VALUE="RemoveICON"  class="btn btn-primary" style='background:red'>
                            @endif </td>
                            
                            <td>
                            <div align="center">
                            <input type="SUBMIT" name="UPDATE"  VALUE="UPDATE"   class="btn btn-primary" style='background:blue'  >
                            </form>
                            </div>
                            </td>
                            @if(@$BSModel != 'landing_page')





                            <td>
                            @if(empty($parent_id)&&($navitem->Active) == 'nav')
                            <form  action="{{route('nav.show',$navitem->id)}}"  method="POST">
                            @csrf  
                                @method('GET')

                                @if(!empty($navID))

                                <input    name='parent_id'  type='hidden' value="{{$navID}}" />
                                @endif
                                <input type="SUBMIT" name="SELECT" value=""/>
                                </form>
                                @endif
                            </td>
                            @endif



                            <td>
                            @if(empty($navitem->footer))
                            <a    href="http://{{$Domain_site}}/index.php?MainM_ID=<?php echo $navitem->id;?>" target='_blank'> 
                            <input type="submit" title="VIEWPAGE" value="">
                            </a>
                            	@endif
                            </td>


                            <td>
                            @if(empty($navitem->footer))
                            <a    href="https://freetools.seobility.net/en/seocheck/{{$Domain_site}}" target='_blank'>
                            <input type="submit" name="selecttoupdate" class="update" title="VIEW SEO REport" value="">
                            
                            </a> @endif
                            </td>


                            <td>
                            <div style = "align : center"> <form action="{{route('nav.destroy',$navitem->id)}}" method="Post">
                            @csrf
                            @method('DELETE')
                            @if(!empty($navID))
                            <input    name='parent_id'  type='hidden' value="{{$navID}}" />
                            @endif
                            @if(!empty($parent_id))
                            <input    name='SUBMENUID'  type='hidden'  value="{{$parent_id}}" />
                            @endif
                            <input type="SUBMIT" name="DELETE"  value="" />
                            </form></div>
                            </td>


                            @if(@$BSModel != 'landing_page')

                            <td>
                            <div style = "align : center">     
                            @if(empty($navitem->footer))
                            <form action="{{route('cms')}}" method="post">
                            @csrf
                            @method('GET')
                            <input type="hidden" name="MainM_ID" VALUE="{{$navitem->id}}">
                            <input type="SUBMIT" name="INSERT" VALUE="<HTML>"  class="btn btn-primary" style='background:orange' ></div>
                            </form>  @ENDIF
                            </td>

                            @else
                            @if($navitem->id==1)


                            <td>
                            <div style = "align : center">     
                            <form action="{{route('cms')}}" method="post">
                            @csrf
                            @method('GET') 
                            <input type="hidden" name="MainM_ID" VALUE="1">
                            <input type="SUBMIT" name="INSERT" VALUE="->>"  class="btn btn-primary" style='background:orange' ></div>
                            </form>
                            </td>
                            @endif
                            @endif    
                        </tr>
                    </tbody>
                    @endforeach
                    @endif
                </table>
            </div>
        </div>
    </div>
    <!-- jquery -->
    <script src="{{ asset('Front/JS/jquery.min.js') }}" type="text/javascript" defer></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('Front/JS/bootstrap.bundle.min.js') }}" type="text/javascript" defer></script>
    <!-- selector -->
    <!-- <script src="{{ asset('Front/JS/selector.js') }}" type="text/javascript" defer></script> -->
</body>

</html>
