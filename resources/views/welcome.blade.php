<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LABURO</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
            body {
                margin: 0px;
                padding: 0px;
                font-family: 'Nunito', sans-serif;
            }
            .principal-nav{
                display: flex;
                justify-content: space-between;
            }
            .inicio{
                width: 30%;
                display: flex;
                justify-content: space-between;
                margin: 20px;
            }
            .inicio div a{
                margin: 50px;
                text-decoration: none;
                background: #A0FFAF;
                color: black;
                padding: 10px 20px 10px 20px;
                border-radius: 10px;
                box-shadow: 10px 10px 5px gray;
            }

            .inicio div a:hover{
                background: #76CC9B;
            }

            .separacion{
                width: 50%;

            }

            .cara{
                background: #A0FFAF;
                box-shadow: 10px 10px 5px gray;
            }

            .titulo{
                font-size: 200px;
                text-align: center;
                padding: 50px 0px 50px 0px;
            }
            
            footer{
                background: #A0FFAF;
                text-align: center;
                padding: 20px 0px 20px 0px;
            }

            .cate{
                display: flex;
                justify-content: space-around;
                margin: 50px 0px 50px 0px;
            }
            .parte{
                width: 20%;
                background: #87E8B1;
                padding: 10px 20px 10px 20px;
                box-shadow: 10px 10px 5px gray;
            }
            .parte h3{
                text-align: center;
            }

            .contenido{
                width: 60%;
                margin: auto;
                padding: 20px;
                background: #87E8B1;
                text-align: center;
                box-shadow: 10px 10px 5px gray;
            }

        </style>
    </head>
    <body class="antialiased">
        <div class="principal-nav">
            <div class="separacion"></div>
            <div class="inicio">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline"><strong> Home</strong></a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline"><strong>Log in</strong></a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline"><strong>Register</strong></a>
                            @endif
                        @endauth
                    </div>
                @endif    
            </div>
        </div>
        <div class="cara">
            <h1 class="titulo">LABURO</h1> 
        </div>

        <div class="contenido">
            <hgroup>
                <h2>¿Necesitas Trabajo?</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quaerat aperiam qui sed quos ad inventore consequatur exercitationem ex libero dolor quidem, provident suscipit sint minus repudiandae? Voluptatem, vero tempore?</p>
            </hgroup>
            <hgroup>
                <h2>¿Necesitas personal?</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum commodi maiores ullam iure voluptates totam ut labore molestiae facilis, exercitationem quo minima eaque deleniti! Voluptatem repudiandae omnis illo delectus esse.</p>
            </hgroup>
        </div>

        <div class="cate">
            <div class="parte">
                <hgroup>
                    <h3>Programacion</h3>
                </hgroup>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur dolor at ut atque possimus esse, ullam numquam adipisci, quam architecto porro praesentium laborum qui minima a rem molestiae ipsum vero.
                </p>
            </div>
            <div class="parte">
                <hgroup>
                    <h3>Diseño</h3>
                </hgroup>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur dolor at ut atque possimus esse, ullam numquam adipisci, quam architecto porro praesentium laborum qui minima a rem molestiae ipsum vero.
                </p>
            </div>
            <div class="parte">
                <hgroup>
                    <h3>Marketing</h3>
                </hgroup>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur dolor at ut atque possimus esse, ullam numquam adipisci, quam architecto porro praesentium laborum qui minima a rem molestiae ipsum vero.
                </p>
            </div>
        </div>
        
        <footer>
            <hgroup> 
                <h4>Huánuco - Perú <br> 2021</h4>
                <h5>©  Todos lo derechos reservados </h5>
            </hgroup>
        </footer>
    </body>
</html>
