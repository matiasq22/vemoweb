
<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <title>MOMO</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="/resources/css/login/style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="/css/fontawesome/font-awesome.css"/>
    <link rel="stylesheet" href="/css/font-awesome-animation.css"/>
    <link rel="stylesheet" href="/css/animate.css"/>
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.css"/>

</head>

<body class="bodylogin">

<div class="containerlogin">
    <div id="cow" class="" style="text-align: center;">
        <img  src="/css/login/cow.png" style=" display:none;width: 25px; height: 25px;">
    </div>

    <div id="login" style="padding-top: 10px;" class="animated fadeIn">
                    <div>
                <h1 class="h1login">MOMO</h1>
            </div>
                <form id="login" action="https://momobo.unnaki.net/login" method="post">
            <fieldset class="clearfixi">
                <p class="p"><span  class="fa fa-user"></span><input class="input" placeholder="Usuario" name="username" type="text" value=""  required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p class="p"><span  class="fa fa-lock"></span><input class="input" placeholder="Contraseña" name="password" type="password" autocomplete="false"  required></p> <!-- JS because of IE support; better: placeholder="Password" -->
                <p class="p"><input class="input" type="submit" value="Iniciar Sesion"></p>
                <input  onclick="cow()" class="input" name="_token" type="hidden" value="H95fKqYL1x9CuTEYjAXMPS99Ddf4Z5ddIynkNReX"/>
            </fieldset>
        </form>
    </div> <!-- end login -->



<div style="text-align: center;color: white; width: 280px; padding-top: 15px" >
    <div style="padding-top:30px float: none; margin: 0 auto;">
    <div>
    <blockquote  style="color:#839496; font-size:15px;border-left: none;line-height: 120%">
        El dolor es inevitable pero el sufrimiento es opcional
    </blockquote>
    <p style="text-align: center; font-size:medium;font-weight: bold"><b>Buda</b></p>
    </div>
    </div>
    <div style="padding-top: 30px">
        <img src='/css/login/unnakil.png' style="width: 50px; height: 67px">
    </div>
    </div>

</div>

</body>
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap/bootstrap.js"></script>
<script src="/js/noty/packaged/jquery.noty.packaged.js"></script>
<script src="/js/noty/themes/bootstrap.js"></script>
<script src="/js/konami.js"></script>
<script type="text/javascript">
    $('#login').submit(function() {
        cow();
    });

    function cow(){

        document.getElementById("cow").innerHTML='' +
        '<div class="animated bounceInUp" style="animation-duration: 2s;">' +
        '<img  src="/css/login/cow.png" style="width: 25px; height: 25px;">'+
        '</div>';
    }
</script>
<script>
                                                                                            </script>
</html>
