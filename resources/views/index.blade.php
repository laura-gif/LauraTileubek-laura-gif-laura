<!DOCTYPE html>
<html lang="en">
<head>
	<title>laura</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
	<style>
		
.contact-form{
	width: 85%;
	max-width: 600px;
	background: #f1f1f1;
	position: absolute;
	margin-top: 60px;
	left: 47%;
	transform: translate(-50%;-50%);
	padding:30px,40px;
	box-sizing: border-box;
	border-radius: 8px;
	text-align: center;
	box-shadow: 0 0 20px #000000b3;
	font-family: "Montserrat", sans-serif;

}
.contact form h1{
	margin-top: 0;
	font-weight: 200;
}

.basc{
    		background-color: purple;
    		background-image: url(/images/pp.jpg);
    		background-size: 100%;

    	}
 
    	
		.menu1{
			display: flex;
			justify-content: center;
			width: 100%;
			font-family: Cuprum, Arial, Helvetical, sans-serif;
			border-right: 1px solid #c7c8ca;
			padding-right:130px;
		}

		.menu1 li ul{
			display: none;
			position: absolute;
			min-width: 210px;
			margin-left: -40px;
			z-index: 1;
		}

		.menu1 li:hover>ul{
			display: block;
		}
		.menu1 li>ul li{
			border:1px solid #c7c8ca;
		}
		.menu1 li>ul li a{
			padding: 10px;
			text-transform: none;
			}

		.menu1>ul li a{
			color: black;
			display: block;
			background:#ececed;
			font-size: 12px;
			text-decoration: none;
			padding: 15px 13px 15px 25px;
			text-transform: none;
			transition: all 0.3s ease;
			/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#ffffff+0,f3f3f3+50,ededed+51,ffffff+100;White+Gloss+%232 */
			background: rgb(255,255,255); /* Old browsers */
			background: -moz-linear-gradient(top,  rgba(255,255,255,1) 0%, rgba(243,243,243,1) 50%, rgba(237,237,237,1) 51%, rgba(255,255,255,1) 100%); /* FF3.6-15 */
			background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(243,243,243,1) 50%,rgba(237,237,237,1) 51%,rgba(255,255,255,1) 100%); /* Chrome10-25,Safari5.1-6 */
			background: linear-gradient(to bottom,  rgba(255,255,255,1) 0%,rgba(243,243,243,1) 50%,rgba(237,237,237,1) 51%,rgba(255,255,255,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */
			}

		.menu1 li a:hover{
			/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#1e5799+0,7db9e8+100&1+0,0+100;Blue+to+Transparent */
background: -moz-linear-gradient(top,  rgba(30,87,153,1) 0%, rgba(125,185,232,0) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(30,87,153,1) 0%,rgba(125,185,232,0) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(30,87,153,1) 0%,rgba(125,185,232,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#007db9e8',GradientType=0 ); /* IE6-9 */

		}
      .dws{
      	position: fixed;
      	top: 80%;
      	left: 4%;
      	transform: translate(-50%,-50%);
        
      }
      .pulse{
      	background:#5CC2E2;
      	position: relative; 
      	transition: .5s;
      }
      .phone{
      	font-size: 50px;
      	line-height: 94px;
      	animation: phone .9s ease-in-out infinite;
      }
      .bloc{
      	cursor: pointer;
      	z-index: 1;
      	overflow: hidden;
      }
      .pulse,.bloc,.phone{
      	position: absolute;
      	width: 90px;
      	height: 90px;
      	color: #fff;
      	text-align: center;
      	border-radius: 50%;
      }
      .pulse:hover .phone{
      	opacity: 0;

      }
      .pulse:hover{
      	background:#29AEE3;
      }
      .text{
      	opacity: 0;
      	position: absolute;
        text-transform: uppercase;
        font-weight: 700;
        top: 25px;
        font-size: 15px;
        transform: scaleX(-1);
        transition: .5s ease-in-out;
      }
      .pulse:hover .text{
      	transform: scaleX(1);
      	transition: .5s ease-in-out;
      	opacity: 1;

      }
      .pulse:hover i{
      	transform: scaleX(1);
      	transition: .5s ease-in-out;
      	opacity: 1;
      }
      .pulse:hover::before,
      .pulse:hover::after{
      	content: '';
      	position: absolute;
      	border:1px solid #29AEE3;
      	left: -20px;
      	right: -20px;
      	top: -20px;
      	bottom: -20px;
      	border-radius: 50%;
      	animation: pulse 1.8s linear infinite;
      	opacity: 0;
      }
      .pulse:hover::after{
      	animation-delay: .5s;
      }
      .phone i{
      	transition: .5s ease-in-out;
      }
      @keyframes phone{
      	0%, 100%{
      		transform: rotate(-28deg);

      	}
      	50%{
      		transform: rotate(21deg);
      	}
      }
      @keyframes pulse{
      	0%{
      		transform: scale(0.5);
      		opacity: 0;
      	}
      	50%{
      		opacity: 1;
      		      	}
        100%{
        	transform: scale(1.2);
        	opacity: 0;
        }
      }


      .tat{
			position: fixed;
			top: 0px;
			justify-content: center;
			width: 100%;
			height: 100%;
            display: none;
			background-color: rgb(0, 0, 0, 0.5); 
			align-items: center;
			z-index: 1;
			}
		.tat1{
			background-size: cover;
			color: white;
			width: 500px;
			height: 490px;
			padding-left: 70px;
			padding-right: 30px;
			border-radius:10px; 
			padding-top: 20px;
			text-align: center;
			margin-top: 60px;
			margin-left: 420px;
			background-image: url(https://sun9-35.userapi.com/c604728/v604728728/312f/zMDE4zVZCyk.jpg); 
		}


	</style>
</head>

<body>
		@extends('layout')
		@section('content')
		<header style="padding-left: 40px; width: 100%;  background-color:white;height: 95px; margin-bottom: 14px">

		    	<nav class="menu1"style="padding-top:20px;" >
					<ul style="list-style-type: none; justify-content: center; display: flex;">
			   				 <li style="width:18%; padding-left:50px"onclick="window.location.reload()"><a href="#" ><img src="https://cdn4.iconfinder.com/data/icons/wirecons-free-vector-icons/32/home-512.png" alt="hjg" style="width: 18%; margin-right:14px;">{{__('lang.one')}}</a> </li>
						

								<li style="width: 13%" id="n2" >
									<a href="/contact/{lang}">
									<img src="https://cdn1.iconfinder.com/data/icons/communication-vol-2/48/061-512.png" alt="ddfg" style="width: 19%; margin-right:15px;">{{__('lang.two')}}</a>
								</li>
				
								<li style="width:13%;" id="n3">
									<a href="/abme/{lang}">
									<img src="https://cdn.onlinewebfonts.com/svg/img_398816.png" alt="jkk" style="width: 19%; margin-right:15px;" >{{__('lang.three')}}</a>
								</li>

					</ul>
				</nav>
    	</header>   	
        <a href="tel:87051812701">
	    <div class="dws">
	    	<div class="pulse">
	    		<div class="bloc"></div>
	    		<div class="phone"><i class="fa fa-phone" aria-hidden="true"></i></div>
	    		<div class="text">link button</div>
	    	</div>
	    </div></a>
     
		<div style="display: flex; padding-bottom: 20px; height:570px; margin-bottom: -15px" class="basc">
			     <img src="/images/as1.png" alt="j" style="width: 550px; height: 570px;  margin-right:100px; display: flex">
			     <h1 style=" font-family: Brush Script MT, Brush Script Std, cursive; letter-spacing:5px; transition: 1s; color: black;  font-size:90px; margin-top:80px; " id="welc">Laura </h1><h1  style=" font-family: Brush Script MT, Brush Script Std, cursive; letter-spacing:5px; transition: 1s; color: black;  font-size:90px; margin-top:150px; ">Tileubek</h1>
			     <p style="font-size: 25px; margin-top:300px; margin-left:-500px; margin-right: 150px; font-family: fantasy">{{__('lang.body')}}</p>
        </div>


        <div style="padding-bottom: 100px " class="profile"  >
        	<h1 style="display:flex;justify-content: center;color: lightgreen; margin-top: 80px; margin-bottom: 50px">{{__('lang.pro')}}</h1>
        	<hr>
        	<h2 style="color: lightgreen; margin-left: 270px; padding-right: 200px; margin-top: 30px">{{__('lang.details')}}</h2>	
        	<div style="float: left;margin-left: 270px; margin-right: 130px; margin-top: 20px"><h6>{{__('lang.name')}}</h6>
        	<p>{{__('lang.herName')}}</p>
        	<h6>{{__('lang.age')}}</h6>
        	<p>{{__('lang.herAge')}}</p>
        	<h6>{{__('lang.local')}}:</h6>
        	<p >{{__('lang.herLocal')}}</p></div>
        	<img src="/images/pro.jpg" style="height: 200px; float: left; margin-right: 90px; margin-top: -20px" alt="">
        	
        	<p style="margin-right: 150px; margin-top: 30px; margin-bottom: 10px">{{__('lang.herMotto')}} <br> <br> {{__('lang.author')}}</p> <br>	
            <button class="btn-primary" style="width: 10%; padding:3px; " onclick="inn()">{{__('lang.skiils')}}</button>      
        </div>

      	
      	<div class="tat">
			<div class="tat1">
				<h1 style="margin-left: -30px">{{__('lang.skiils')}}</h1>
				<div style="margin-bottom: 10px;">
					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/1200px-HTML5_logo_and_wordmark.svg.png" alt="h" style="width: 16%;float: left">
					<div style="max-width: 80%; margin-top: 30px; padding-top: 20px">
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
					</div>
				</div>
				<div style="margin-bottom: 10px;">
					<img src="https://cdn.worldvectorlogo.com/logos/css10.svg" alt="" style="width: 17%;float: left;">
					<div style="max-width: 80%;padding-top: 20px">
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
					</div>
				</div>
				<div style="margin-bottom: 10px;">
					<img src="https://yandex-images.naydex.net/9OGcx6435/b09b5eSuER6Q/Ng_Xf0E7RXDRdgWG94TRswxsartnSEVoHtmTtTYQZWX9I3rx92vZ7cWVni61jEueLEzcv2ekIYzyvxqBChVK0UauI58FDsFg9dISk3eF9We5DMq7Zvnw_R-4ZsV3BOGgiKWq1fZvHOhQU14epR25bI59O8zVRzYOpUjuhD-wH8CHS5Iso69WQUBlwUaV9LZCjX34KmVvlKpvT6HXR0Wn5xyy29A0DE66omC5u0J72x3NPErN9iTXjVVbDfbt8R8ycplRbmFY1ADitbLnVLcmMD0Oedq1nLWpXg8yR6RWp1ff8qkzpP8eSqLAS1iQOfpeHQ4IjjSmRRxHGy6WXeBtM5F58z9ieQUSUOaiJlUXtGJvDfrZlH-k-K9_kbf2JuX0LJCaERYOXuuSISlbURhZ7EwOiV2VBxS-xwmdRg8THcBy2BEP8kg2cZDWY7S3RGYD_S4ae4Se1_nPT8E1tyalp1zASZKVTbzJwSKLmLBoOk5-v0iftScEz0d6HrY9sq6R8vuyDbIJZGNBdcDGpbT0MH5MSIvknnXaDJxRRMfF5-b8QenSps6-2GCzuSiy2MkOXl463wbkRb4Fi24GrXHfE0Mp40-QOeWz0XVi5KcUdhLcTLjaR60nqw0ewFd0R9ZUzWJqMbdP7orDUIgowMhKv28eS68VhzSvx1q9tx2hbMNgygG_wDh0ImCmYBYGtIZADe54q3Ys91rvD3DUdDXVxC8w2_F1L2xo0xEreCJr-h2_PEi_ZqZ1r6TKv8cvw26TEovRvUDLBnOBZUF0xoblkT3uG6n3zncYj_5RVve3pUWdAQiT1v5M6DLBO4jwCzhfji-5_DVW5xxWin5mHFEsA0KpQPxyKBdCgWVCBMWGdwBeXahYZD3WKL4dgPUEdbYnnoC7wzT9HEhyIegqonhJvCz_qM3lpXfMRosPBB3ijdBTKTOsc8m3Q-MXkGT3dWZAXv0oeeTuBLgtbnEFE" alt="" style="width: 20%;float: left">
					<div style="max-width: 80%; margin-bottom: 20px; padding-top: 20px">
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
					</div>
				</div>
					<div style="margin-bottom: 20px;">
						<img src="https://taysirsolutions.com/sites/default/files/technology/jquery_0.png" alt="" style="width: 15%;float: left">
						<div style="max-width: 80%; padding-top: 20px">
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
					    </div>
					</div>
					<div style="margin-bottom: 10px;">
						<img src="https://pbs.twimg.com/media/DWOmMdeXUAAraL6.png:large" alt="" style="width: 16%;float: left">
						<div style="max-width: 80%;padding-top: 10px">
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
					</div>
					</div>
					<div style="margin-bottom: 10px;">
						<img src="https://static.tildacdn.com/tild3061-6166-4738-a161-623636323339/photo.png" alt="" style="width: 20%;float: left">
						<div style="max-width: 80%; padding-top: 20px">
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
					</div>
					</div>
					</div>
				<img class="icon1" src="https://cdn.pixabay.com/photo/2017/11/07/07/06/x-2925826_960_720.png" alt="m" width="6%" onclick="out()" style="margin-top:-510px; margin-left: 900px;position: absolute; width: 3%">
        </div></div>


        <div style="background-color: black; height: 350px; padding-top: 40px; display: block;justify-content: center" class="fut">
            <div  style="width: 45%; height: 270px; margin-top: 5px;float: left; margin-left: -180px; margin-right: 110px" class="qw"></div>	
            	<h2 style="text-align: left; margin-bottom: 20px; margin-top: 10px; margin-left: -520px; " id="contactt">{{__('lang.con')}}</h2>
            	<p style="float: left;margin-left: -350px; font-size: 20px"> {{__('lang.email')}}</p>
            	<a style="font-size: 20px;margin-left: -120px" href="">tileubeklaura@gmail.com</a>
            	<p style="float: left;margin-left: -350px; font-size: 20px; margin-top: 80px">{{__('lang.net')}} <br> {{__('lang.follow')}}</p>
            		
    			<ul style="list-style-type: none; margin-left: 100px">
                    <li>
                    	<a href="https://www.instagram.com/bitlabacademy" target="_blank"><img src="https://pngicon.ru/file/uploads/telegram.png" alt="j" style="width:3.2%; margin-left: -60px; margin-right: 10px; margin-top: 70px; float: left">
                    	</a>
                    </li>
				    
				    <li>
				    	<a href="https://www.facebook.com/bitlab.kz/" target="_blank"><img src="https://www.podushechka.biz/wp-content/uploads/2018/10/instagram-colourful-icon.png" alt="j" style="width:3%;float: left;margin-right: 20px; margin-top: 70px">
				    	</a>
				    </li>
				</ul> 
                 
                <p style="margin-top: 150px;">{{__('lang.made')}} </p>
            </div>
            @endsection

            <script>

		   function out(){
			document.querySelector('.tat').style.display="none";
		}
		 function inn(){
			document.querySelector('.tat').style.display="block";
		}
   </script>
   </body>
   
</html>