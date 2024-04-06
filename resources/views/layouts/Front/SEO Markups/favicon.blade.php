  <!-- favicon  and  apple touch  -->


@foreach($Maxcompanyid as  $Maxid )

<link rel="apple-touch-icon" href="Front/IMG/{{$Maxid->path_pic}}">
<link rel="apple-touch-icon" sizes="57x57" href="Front/IMG/{{$Maxid->path_pic}}">
<link rel="apple-touch-icon" sizes="72x72" href="Front/IMG/{{$Maxid->path_pic}}">
<link rel="apple-touch-icon" sizes="76x76" href="Front/IMG/{{$Maxid->path_pic}}">
<link rel="apple-touch-icon" sizes="114x114" href="Front/IMG/{{$Maxid->path_pic}}">
<link rel="apple-touch-icon" sizes="120x120" href="Front/IMG/{{$Maxid->path_pic}}">
<link rel="apple-touch-icon" sizes="144x144" href="Front/IMG/{{$Maxid->path_pic}}">
<link rel="apple-touch-icon" sizes="152x152" href="Front/IMG/{{$Maxid->path_pic}}">	
<link rel="icon" href="Front/IMG/{{$Maxid->path_pic}}" type="image/x-icon" />

@endforeach

   <!-- end favicon  and  apple touch   -->