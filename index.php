<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manter Aluno e Professor</title>
    <link href="./arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="./arquivos/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include("./menu.php") ?>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Desenvolvimento Web 2</h1>
        <p class="lead">Objetivo: Desenvolver aplicações WEB utilizando servidor apache, linguagem PHP, biblioteca
            jQuery, acesso a banco de dados e técnicas de orientação a objetos seguindo o padrão MVC para desenvolver
            aplicações completas.</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="./arquivos/imagens/ifms1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="./arquivos/imagens/ifms2.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./arquivos/imagens/ifms3.jpeg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <a href="https://www.ifms.edu.br/campi/campus-corumba" class="btn btn-primary"><img src="https://sistemas.na.ifms.edu.br/static/image/logo_ifms_v.jpeg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">IFMS</h5>
                        <p class="card-text">O Instituto Federal de Educação, Ciência e Tecnologia de Mato Grosso do Sul (IFMS)
                             é uma instituição pública federal que oferece educação profissional, científica e tecnológica em diferentes modalidades de ensino.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Cursos IFMS Corumbá
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Acesse aqui para saber mais <a href="https://selecao.ifms.edu.br/" class="btn btn-primary">Clique aqui</a></p></div>
    </div>
  </div>       

    
</body>

</html>