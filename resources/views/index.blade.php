<!DOCTYPE html>
<html lang="en">
<head>
	<title>laura</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
</head>

<body>
		
		<header style="padding-left: 40px; width: 100%;  background-color:white;height: 95px; margin-bottom: 14px">

		    	<nav class="menu1"style="padding-top:20px;" >
					<ul style="list-style-type: none; justify-content: center; display: flex;">
			   				 <li style="width:18%; padding-left:50px"onclick="window.location.reload()"><a href="#" ><img src="https://cdn4.iconfinder.com/data/icons/wirecons-free-vector-icons/32/home-512.png" alt="hjg" style="width: 18%; margin-right:14px;">MAIN </a> </li>
						

								<li style="width: 13%" id="n2" >
									<a href="{{ route('contact') }}">
									<img src="https://cdn1.iconfinder.com/data/icons/communication-vol-2/48/061-512.png" alt="ddfg" style="width: 19%; margin-right:15px;">CONTACT</a>
								</li>
				
								<li style="width:13%;" id="n3">
									<a href="{{ route('abme') }}">
									<img src="https://cdn.onlinewebfonts.com/svg/img_398816.png" alt="jkk" style="width: 19%; margin-right:15px;" >ABOUT ME</a>
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
			     <p style="font-size: 25px; margin-top:300px; margin-left:-500px; margin-right: 150px; font-family: fantasy">Student of SDU. Novice programmer. I focus all my efforts on creating a better and more comfortable life for myself and my family. My goal is to become the best version of myself</p>
        </div>


        <div style="padding-bottom: 100px " class="profile"  >
        	<h1 style="display:flex;justify-content: center;color: lightgreen; margin-top: 80px; margin-bottom: 50px">Profile</h1>
        	<hr>
        	<h2 style="color: lightgreen; margin-left: 270px; padding-right: 200px; margin-top: 30px">Details</h2>	
        	<div style="float: left;margin-left: 270px; margin-right: 130px; margin-top: 20px"><h6>Name:</h6>
        	<p>Laura Tileubek</p>
        	<h6>Age:</h6>
        	<p>19 years</p>
        	<h6>Location:</h6>
        	<p >Kazakhstan, Karaganda</p></div>
        	<img src="/images/pro.jpg" style="height: 200px; float: left; margin-right: 90px; margin-top: -20px" alt="">
        	<h2 style="color: lightgreen; margin-top: -35px ">My motto all my life</h2>
        	<p style="margin-right: 150px; margin-top: 30px; margin-bottom: 10px">Life changes very quickly, in a very positive way, if you let it <br> <br> (Lindsey Vonn)</p> <br>	
            <button class="btn-primary" style="width: 10%; padding:3px; " onclick="inn()">My skiils</button>      
        </div>

      	
      	<div class="tat">
			<div class="tat1">
				<h1 style="margin-left: -30px">My Skiils</h1>
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
            	<h2 style="text-align: left; margin-bottom: 20px; margin-top: 10px; margin-left: -520px; " id="contactt">Contact Me:</h2>
            	<p style="float: left;margin-left: -350px; font-size: 20px">Email: </p>
            	<a style="font-size: 20px;margin-left: -280px" href="">tileubeklaura@gmail.com</a>
            	<p style="float: left;margin-left: -350px; font-size: 20px; margin-top: 80px">Networks: <br> Give me a follow on this sites</p>
            		
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
                 
                <p style="margin-top: 150px;">Copyright © 2021 Laura Tileubek - made by laura</p>
            </div>
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