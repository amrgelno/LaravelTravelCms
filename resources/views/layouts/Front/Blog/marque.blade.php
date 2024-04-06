<section class="marque">
    <div class="news"> top news </div>
    <marquee  direction="up" behavior="scroll"   bgcolor="#CCCCCC"    scrollamount="1" font-size="25px"  width= "100%"  height="20px">
    <div align="center">
    
    @foreach($marque as $marqitem)
   
    <a>{{$marqitem -> NEWS}}</a>
    <br />
    <br />
    <br />  
    @endforeach 
    </div>     			                 
    </marquee>	    
    </section>
   
    