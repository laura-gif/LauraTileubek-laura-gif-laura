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
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @switch($locale)
                                @case('en')
                                <img src='/images/img/en.png' width="20"> English
                                @break
                                @case('kz')
                                <img src='/images/img/kz.png' width="20"> Қазақ тілі
                                @break
                                @case('ru')
                                <img src="/images/img/ru.png" width="20"> Русский язык
                                @break
                                @default
                                <img src="/images/img/en.png" width="20"> English
                            @endswitch
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/main/en"><img src="/images/img/en.png" width="20"> English</a>
                            <a class="dropdown-item" href="/main/kz"><img src="/images/img/kz.png" width="20"> Қазақ тілі</a>
                            <a class="dropdown-item" href="/main/ru"><img src="/images/img/ru.png" width="20"> Русский язык</a>
                            
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
</div>  
</body>
</html>