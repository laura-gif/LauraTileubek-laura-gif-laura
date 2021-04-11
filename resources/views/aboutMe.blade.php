<!DOCTYPE html>
<html lang="en">
<head>
	<title>laura</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="aboutMe.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
	<style>
		 	.abme h1{
    		/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#f0f9ff+0,cbebff+47,a1dbff+100;Blue+3D+%2313 */
background: rgb(240,249,255); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(240,249,255,1) 0%, rgba(203,235,255,1) 47%, rgba(161,219,255,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#a1dbff',GradientType=0 ); /* IE6-9 */
		margin-bottom: -15px;
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

	</style>
</head>
<body>
		@extends('layout2')
		@section('content')
	<header style="padding-left: 40px; width: 100%;  background-color:white;height: 95px; margin-bottom: 14px">

		    	<nav class="menu1"style="padding-top:20px;" >
					<ul style="list-style-type: none; justify-content: center; display: flex;">
			   				 <li style="width:18%; padding-left:50px"onclick="window.location.reload()"><a href="/main/{lang}" ><img src="https://cdn4.iconfinder.com/data/icons/wirecons-free-vector-icons/32/home-512.png" alt="hjg" style="width: 18%; margin-right:14px;">{{__('lang.one')}}</a> </li>
						

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
      <div class="abme">	        
        
         <div style="background-image: url(http://www.zwalls.ru/pic/201309/1280x800/zwalls.ru-16554.jpg); background-size: cover; height: 700px;padding-right: 80px">

         	<img src="/images/u2.jpeg" alt="" style="height: 100%; float: left; margin-right: 90px;">
         	 <hr>
            <h3 style="margin-bottom: 30px; font-size: 30px; margin-top: 30px;color: black">{{__('lang.fam')}}</h3>
           	<p style="font-family: fantasy; font-size: 28px; color: grey; margin-bottom: 80px">{{__('lang.myFam')}}</p>
        	<hr>
        	<h3 style="margin-bottom: 30px;margin-top: 30px;color: black">{{__('lang.edu')}}</h3>
        	<p style="font-family: fantasy; font-size: 28px; color: grey; margin-bottom: 100px">{{__('lang.myEdu')}}</p>
        	
         </div></div>

</body>  @endsection
</html>