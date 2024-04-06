



 <style>

#loader {
    margin-top: 0px;
    background: rgb(240 242 246);
    z-index: 50;
    width: 100%;
    height: 1950px;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: 0.98;
    visibility: visible;
    z-index: 9999;
}



element.style {
}


div#loader{
    position: fixed;
    padding:5% 0% 0% 3%;
}


#load{
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    display:flex;
}

div#loader {
    padding: 20% 5% 0% 0%;
}

.loading{
	font-size:25px;
	width:50%;
	height:50px;
	margin:20% 0% 0% 43%;
}

div#loader>div {
    margin:0% 20% 0% 43%;
}

.point {
	position:absolute;
	margin:10% 0% 0% 5%;
    width: 15px;
    height: 15px;
    background: #00F;
	border-radius:100%;
	float:left;
	z-index:2;
	animation:point  6s infinite ease-out;
}
@keyframes point{	
	50%{transform:translatey(10px)}
	}
.point2 {
	position:absolute;
	margin:10% 0% 0% 10%;
    width: 15px;
    height: 15px;
    background: #00F;
	border-radius:100%;
	float:left;
	animation:point2 4s infinite ease-out;
}
@keyframes point2{	
	50%{transform:translatey(10px)}
	}
.point3 {
	position:absolute;
	margin:10% 0% 0% 15%;
    width: 15px;
    height: 15px;
    background:#00F;
	border-radius:100%;
	float:left;
	animation:point3 8s  infinite ease-out;

}


@keyframes point3{	
	50%{transform:translatey(10px)}
	}
	
	</style>
	
	
<div id='loader' >


<div id='load' align='center'>

<img src="{{asset('Front/ICON/spinner-2x.gif')}}" class="loading-logo">
<br/>
<div class="dashboaedpreloader">  <span > Loading customizer_DashBoard  </span></div>
<!-- <div class="loading"> loading... </div> -->
</div>

</div>





