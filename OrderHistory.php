<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ashaBookStore</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/uikit.min.css">
    <link rel="stylesheet" href="css/theme.css">
    <script defer src="js/uikit.min.js"></script>
    <script defer src="js/uikit-icons.min.js"></script>
  </head>
  <body class="fundo-amarelo">
      <div class="container">

        <header class="row">
          <div class="pull-left">
            <img class="logo" src="img/logo.png" />
          </div>
        <div class="pull-right">
          <a href="#" class="uk-button uk-button-default">
            <span class="glyphicon glyphicon-shopping-cart"></span>
          </a>
          <a href="#" class="uk-button uk-button-default">
            <span class="glyphicon glyphicon-user"></span>
          </a>
        </div>
        </header>

        <div class="body row">
          <div class="col-md-3">
            <div class="navegacao">

            </div>
          </div>

          <div class="col-md-9">
            <div class="busca">
              <form class="uk-search">
                <input class="uk-search-input barra-pesquisa" type="search" placeholder="Buscar...">
            </form>
            </div>

            <div class="resultados-quantidade text-center uk-padding-small">Você já comprou 7 livros</div>

            <div class="resultados">
                <div class="item"> </div>
                <div class="item"> </div>
                <div class="item"> </div>
                <div class="item"> </div>
            </div>
          </div>
        </div>

        <hr/>

        <footer>
            <div class="text-center uk-padding-small">Todas as regras e promoções são válidas apenas para produtos vendidos e entregues pela ashaBookStore.com. O preço válido será o da finalização da compra. Havendo divergência, prevalecerá o menor preço ofertado.</div>
            <div class="text-center uk-padding-small"><a href="#">we.are.asha@gmail.com</a></div>
            <div class="text-center uk-padding-small"><a href="https://github.com/tiagohm/asha-bookstore"><img src="img/github.png" style="width:32px"></img></a></div>
        </footer>
      </div>
  </body>
</html>
