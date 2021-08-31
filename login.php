<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Login Sistema Financeiro</title>
</head>
<body>
    <div>
        <nav id="topo">
            <div id="cabeçalho">
                <img src="img/opyt.png" alt="" width="100px">
            </div>
        </nav>
        <div class="container">
        <div class="row justify-content-md-center" id="teste" >
            <div id="divcentral" class="col col-lg-2">
                <form action="dados.php"method="POST">
                    <div><label for="user" class="form-label">Usuario</label>
                    <input type="text" name="usuario" class="form-control" id=""/>
                    </div><br>       
                    <div><label for="password" class="form-label">Senha </label>
                    <input type="password" name="senha" class="form-control"/>
                    </div><br>
                    <div id="botao">                    
                    <button  type="submit"class="btn btn-primary btn-lg ">Entrar</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>