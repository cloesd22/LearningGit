
<!DOCTYPE html>
<html lang="en" ng-app>
<head>
    <title>Bountytube</title>
    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <script src="js/app.js"></script>
</head>
{!!HTML::style('css/main16-9.css') !!}
<body>

<div class="HeadContainer">

        <div class="LogoFrame">
            <img src="/images/bounty_tube_logo_small.png" alt="Bountytube">
        </div>
        <div class="NavFrame">
            <ul style>
                <li>

                    <form method="link" action="{{action('Controlfreak@about')}}" class="toolbar">
                        <input class="headerbutton" input type="submit" value="Home">
                    </form>
                </li>
                <li>

                    <form method="link" action="{{action('Controlfreak@register')}}" class="toolbar">
                        <input class="headerbutton" input type="submit" value="Join">
                    </form>
                </li>
                <li>

                    <form method="link" action="{{action('Controlfreak@account')}}" class="toolbar">
                        <input class="headerbutton" input type="submit" value="Account">
                    </form>
                </li>

            </ul>
        </div>
        <div class="LoginFrame">

            @if(isset($_SESSION['username']))
            "you're logged in as {{$username}}"
                <form method="link" action="{{action('Controlfreak@login')}}">
                    <input class="headerbutton" input type="submit" value="Log Out">
                </form>
            @else
                <form method="link" action="{{action('Controlfreak@login')}}">
                    <input class="headerbutton" input type="submit" value="Log in">
                </form>
            @endif


        </div>
        </div>








</div>
<div class="ContentContainer">
@yield('content')
</div>


</br>
</br>
</br>
</br>
<div class="footer"> testfooter </div>

</body>
</html>





