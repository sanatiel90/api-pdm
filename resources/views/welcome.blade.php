<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Api Feira PDM</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <style>
        body{
    font-family: 'Josefin Sans', sans-serif;
}

.menu-row{
    background-color: #C5CAE9;
    font-style: bolder;
    font-size: 24px;
    margin-bottom: 10px;
}

.route-line{
    background-color: #E3F2FD;
    margin-bottom: 6px;
}


.verb-get{
    background-color: #0D47A1;
    color: white;
}

.verb-post{
    background-color: #558B2F;
    color: white;
}

.verb-put{
    background-color: #7E57C2;
    color: white;
}

.verb-delete{
    background-color: #C62828;
    color: white;
}
    </style>
    
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <h1>Api Feira PDM </h1> 
        </div>  
        <div class="row justify-content-left  menu-row">
            <div class="col"># Rotas</div>  
        </div>  
        
        <div class="row justify-content-center">
            <div class="col-md-2 text-center"><h4>Verbo</h4></div>
            <div class="col-md-7 text-center"><h4>Rota</h4></div>
            <div class="col-md-3 text-center"><h4>Ação</h4></div>
        </div>  
    

        <div class="row justify-content-center route-line">
            <div class="col-md-2 text-center route-column verb-get">GET</div>
            <div class="col-md-7 text-center route-column">https://web-service-pdm.herokuapp.com/api/v1/products</div>
            <div class="col-md-3 text-center route-column">Retorna todos os produtos</div>
        </div>

        <div class="row justify-content-center route-line">
            <div class="col-md-2 text-center route-column verb-post">POST</div>
            <div class="col-md-7 text-center route-column">https://web-service-pdm.herokuapp.com/api/v1/products</div>
            <div class="col-md-3 text-center route-column">Cadastra novo produto</div>
        </div>

        <div class="row justify-content-center route-line">
            <div class="col-md-2 text-center route-column verb-get">GET</div>
            <div class="col-md-7 text-center route-column">https://web-service-pdm.herokuapp.com/api/v1/products/{id}</div>
            <div class="col-md-3 text-center route-column">Retorna um produto específico</div>
        </div>

        <div class="row justify-content-center route-line">
            <div class="col-md-2 text-center route-column verb-put">PUT</div>
            <div class="col-md-7 text-center route-column">https://web-service-pdm.herokuapp.com/api/v1/products/{id}</div>
            <div class="col-md-3 text-center route-column">Atualiza os dados de um produto</div>
        </div>

        <div class="row justify-content-center route-line">
            <div class="col-md-2 text-center route-column verb-delete">DELETE</div>
            <div class="col-md-7 text-center route-column">https://web-service-pdm.herokuapp.com/api/v1/products/{id}</div>
            <div class="col-md-3 text-center route-column">Deleta um produto</div>
        </div>
    

        <div class="row justify-content-left  menu-row" style="margin-top: 30px">
            <div class="col"># Parâmetros POST e PUT</div>  
        </div>  

        <div class="row justify-content-left">
            <div class="col">Para cadastrar novos produtos usando POST ou atualizar um produto usando PUT, adicione os seguintes parâmetros no <strong>body</strong> da requisição. Os valores informados nesses paramêtros serão os dados a serem cadastrados/atualizados na Api.</div>
        </div>
        <br>    

        <div class="row justify-content-left">
          
            <table class="table table-sm table-striped table-bordered table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Parâmetro</th>
                        <th scope="col">Valor</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>nome</td>
                    <td>Nome do produto</td>
                </tr>
                <tr>
                    <td>local</td>
                    <td>Local onde o produto foi visto</td>
                </tr>
                <tr>
                    <td>preco</td>
                    <td>Preço do produto na data em que foi visto</td>
                </tr>
                <tr>
                    <td>categoria</td>
                    <td>Categoria a qual o produto pertence</td>
                </tr>
                </tbody>
            </table>
            
        </div>

        <div class="row justify-content-left  menu-row" style="margin-top: 20px">
            <div class="col"># Ordenamento</div>    
        </div>  

        <div class="row justify-content-left">
            <div class="col">
                <p>Nas requisições GET, para ordenar o resultado que é retornado, adicione a cláusula <strong>order=</strong> na url, seguida do campo de ordenamento (id, nome, local, preco, categoria ou created_at) e, opcionalmente, a setença <strong>desc</strong> para ordernar os resultados de forma decrescente (por padrão eles são ordenados de forma crescente).</p> 
                <p>Campos disponíveis para ordenamento: <strong> id, nome, local, preco, categoria, created_at </strong>  (data de cadastro do produto).</p>
                <p>Alguns exemplos: </p>
            </div>
        </div>

        <table class="table table-sm table-striped table-bordered table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Rota</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>https://web-service-pdm.herokuapp.com/api/v1/products?order=local</td>
                    <td>Ordena pelo local do produto</td>
                </tr>
                <tr>
                    <td>https://web-service-pdm.herokuapp.com/api/v1/products?order=categoria</td>
                    <td>Ordena pela categoria do produto</td>
                </tr>
                <tr>
                    <td>https://web-service-pdm.herokuapp.com/api/v1/products?order=id,desc</td>
                    <td>Ordena pelo id do produto, mas de forma decrescente</td>
                </tr>               
                </tbody>
        </table>

        <div class="row justify-content-left  menu-row" style="margin-top: 20px">
            <div class="col"># Filtrando Resultados</div>   
        </div>  

        <div class="col">
            <p>Nas requisições GET, para filtrar resultados adicione a cláusula <strong>where[campo]=valor</strong> na url, onde <strong>campo</strong>  indica por qual campo vai ser feito o filtro e <strong>valor</strong> indica o valor a ser pesquisado. O filtro com a cláusula where só irá retornar resultados se o valor pesquisado for exatamente igual ao valor armazenado na api.</p> 
            <p>Campos disponíveis para filtro: <strong> id, nome, local, preco, categoria</strong>.</p>
            <p>Alguns exemplos: </p>
        </div>

        <table class="table table-sm table-striped table-bordered table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Rota</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>https://web-service-pdm.herokuapp.com/api/v1/products?where[categoria]=frutas</td>
                    <td>Retorna todos os produtos que tiverem a categoria frutas</td>
                    
                </tr>
                <tr>
                    <td>https://web-service-pdm.herokuapp.com/api/v1/products?where[nome]=feijao</td>
                    <td>Retorna todos os produtos que tiverem <strong>exatamente e apenas</strong> o nome feijao (ou variações com acentos e maiúsculas)</td>
                </tr>
                <tr>
                    <td>https://web-service-pdm.herokuapp.com/api/v1/products?where[preco]=2.5</td>
                    <td>Retorna todos os produtos que tiverem <strong>exatamente e apenas</strong> o preço igual a 2.5 (2,50 em formato moeda)</td>
                </tr>               
                </tbody>
        </table>

        <div class="col">
            <p>Você também pode filtrar resultados utilizando a cláusula <strong>like</strong> que vai retornar todos os registros onde houver o valor informando no parâmetro <strong>valor</strong> (Funcionalidade ainda em desenvolvimento) </p> 
        </div>



    </div> <!-- container -->

    <footer class="footer">
        <hr>
        <p class="text-center"> Api Feira PDM</p>
    </footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
</html>