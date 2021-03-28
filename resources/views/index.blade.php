<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Menu</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrar</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <img width="200" height="115" src="https://www.inf.ufrgs.br/site/wp-content/uploads/2017/09/logo-inf-200x115.jpg" class="attachment-size-logo-principal size-size-logo-principal" alt="" srcset="https://www.inf.ufrgs.br/site/wp-content/uploads/2017/09/logo-inf-200x115.jpg 200w, https://www.inf.ufrgs.br/site/wp-content/uploads/2017/09/logo-inf-300x172.jpg 300w, https://www.inf.ufrgs.br/site/wp-content/uploads/2017/09/logo-inf-768x440.jpg 768w, https://www.inf.ufrgs.br/site/wp-content/uploads/2017/09/logo-inf.jpg 983w" sizes="(max-width: 200px) 100vw, 200px">
                <h1>INF01127 - Engenharia de Software N - Turma B</h1>
                <h2>Etapa 2</h2>
                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://github.com/arturrossi/trab-eng-sw">GitHub do grupo</a>
                </div>
                
                <div class="row justify-content-center" style="padding: 30px;">
                    <table class="m-b-md flex-center">
                        <tr>
                            <td>
                                <b>André Carini</b>
                            </td>
                            <td>
                                andre.carini@inf.ufrgs.br
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Artur Rossi</b>
                            </td>
                            <td>
                                arossi@inf.ufrgs.br
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Paulo C. V. R. Junior</b>
                            </td>
                            <td>
                            	paulocesar.junior@inf.ufrgs.br
                            </td>
                        </tr>    
                        <tr>
                            <td>
                                <b>Santiago Lühring</b>
                            </td>
                            <td>
                                santiago.luhring@inf.ufrgs.br
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Vitor Hugo D. Ferrari</b> 
                            </td>
                            <td>
                                vhdferrari@inf.ufrgs.br
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>