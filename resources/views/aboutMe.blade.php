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
</head>
<body>
	<header style="padding-left: 40px; width: 100%;  background-color:white;height: 95px; margin-bottom: 14px">

		    	<nav class="menu1"style="padding-top:20px;" >
					<ul style="list-style-type: none; justify-content: center; display: flex;">
			   				 <li style="width:18%; padding-left:50px"onclick="window.location.reload()"><a href="{{ route('main') }}" ><img src="https://cdn4.iconfinder.com/data/icons/wirecons-free-vector-icons/32/home-512.png" alt="hjg" style="width: 18%; margin-right:14px;">MAIN </a> </li>
						

								<li style="width: 13%" id="n2" >
									<a href="{{ route('contact') }}">
									<img src="https://cdn1.iconfinder.com/data/icons/communication-vol-2/48/061-512.png" alt="ddfg" style="width: 19%; margin-right:15px;">CONTACT</a>
								</li>
				
								<li style="width:13%;" id="n3">
									<a href="#">
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
      <div class="abme">	        
         	<div style=""><h1 style="display:flex;justify-content: center;color: white;margin-top: 0px">About Me</h1>
           	</div>
         <div style="background-image: url(http://www.zwalls.ru/pic/201309/1280x800/zwalls.ru-16554.jpg); background-size: cover; height: 700px;padding-right: 80px">

         	<img src="/images/u2.jpeg" alt="" style="height: 100%; float: left; margin-right: 90px;">
         	 <hr>
            <h3 style="margin-bottom: 30px; font-size: 30px; margin-top: 30px;color: black">Family</h3>
           	<p style="font-family: fantasy; font-size: 28px; color: grey; margin-bottom: 80px">I was born on October 11, 2001 in Karaganda. I am the youngest in the family. And so I was very moody. I have two brothers and one sister. And for me, <br> my family always comes first.</p>
        	<hr>
        	<h3 style="margin-bottom: 30px;margin-top: 30px;color: black">Education</h3>
        	<p style="font-family: fantasy; font-size: 28px; color: grey; margin-bottom: 100px">I went to the secondary school named after Zhusipbek Aymauytov. After school, I entered the Suleyman Demirel University with a degree in Information Systems. And now I'm a sophomore</p>
        	
         </div></div>
</body>
</html>