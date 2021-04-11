<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div id="app">
    <div style="background-color: #343a40;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
           
                      
                        <div style="">
                            <a  href="/main/en"><img src="/images/img/en.png" width="20"> en</a>
                            <a  href="/main/kz"><img src="/images/img/kz.png" width="20"> kz</a>
                            <a  href="/main/ru"><img src="/images/img/ru.png" width="20"> ru</a>
                            
                        </div>
                   
        </nav>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
</div>  
</body>
</html>