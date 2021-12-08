<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&family=Poppins&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Files in /public/css -->
        <link rel="stylesheet" href='{{ URL::asset("css/global.css") }}'>
        <link rel="stylesheet" href='{{ URL::asset("css/styles.css") }}'>

        <!-- Files in /public/js -->
        <script src='{{ URL::asset("js/main.js") }}'></script>

        <title>Document</title>
    </head>

    <body>

        <div class="header center-container">
            <h1>To Do List</h1>
        </div>
        
        <div class="content">

            <div class="list">

                <div class="center-container">
                    <h2>Listagem de Afazeres</h2>
                </div>

                <div class="search-container">
                    <div class="input-container">
                        <label for="name-search">Filtrar</label>
                        <input type="name-search" name="name-search" id="name-search">
                    </div>

                    <div class="input-container">
                        <label for="category-search">Categoria</label>
                        <select name="category-search" id="category-search">
                            <option value="null"></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>

                    <button>Filtrar</button>
                </div>

                <div class="list-container">
                    <ul>
                        <li>
                            <div>
                                <input type="checkbox" id="done" name="done">
                                <p id="title">Compra banana</p>
                            </div>

                            <ul>
                                <li>Categoria: Sobrevivência</li>
                                <li>Cadastrado em 21/02/2021</li>
                            </ul>
                        </li>

                        <li>
                            <div>
                                <input type="checkbox" id="done" name="done">
                                <p id="title">Abastecer tanque do carro</p>
                            </div>

                            <ul>
                                <li>Categoria: Sobrevivência</li>
                                <li>Cadastrado em 21/02/2021</li>
                            </ul>
                        </li>
                        
                        <li>
                            <div>
                                <input type="checkbox" id="done" name="done">
                                <p id="title">Talar metagross no Pokemon Go</p>
                            </div>

                            <ul>
                                <li>Categoria: Diversão</li>
                                <li>Cadastrado em 21/02/2021</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="form">

                <div class="center-container">
                    <h2>Atualização de Afazeres</h2>
                </div>

                <form action="post">
                    <div class="input-container">
                        <label for="description">Descrição</label>
                        <input type="text" name="description" id="description">
                    </div>

                    <div class="input-container">
                        <label for="category">Categoria</label>
                        <select name="category" id="category">
                            <option value="null"></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>

                    <div class="buttons-container">
                        <button onclick="cleanFunctions(event)">Limpar</button>
                        <button>Cadastrar</button>
                    </div>
                </form>
            </div>

        </div>

    </body>

</html>
