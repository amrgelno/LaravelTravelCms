

@foreach($paragraph  as    $paragraphitem     )

<div class="program_box_data mb-3">
<p>  

@if(empty (@$_GET['lang']) ) 
                  

              {!!$paragraphitem->Paragraph !!}
                   @elseif(@$_GET['lang'] =='fr')
                {!!$paragraphitem->Fr_paragraph !!}
                  @elseif(@$_GET['lang'] =='ar')

                {!!$paragraphitem->Ar_paragraph !!}

                  @endif





 </p>
</div>


@endforeach


