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
          <div class="col-md-6 col-md-offset-3">
              <div class="text-center"><h4>Confirme seus dados:</h4></div>
              <div style="border:1px solid #cec818; border-radius:5px; background: rgba(255,255,255,0.15); padding: 40px">
                <input class="uk-search-input barra-pesquisa" style="margin:2px" type="text" placeholder="E-mail"></input>
                <input class="uk-search-input barra-pesquisa" style="margin:2px" type="text" placeholder="Nome"></input>
                <input class="uk-search-input barra-pesquisa" style="margin:2px" type="text" placeholder="Sobrenome"></input>
                <input class="uk-search-input barra-pesquisa" style="margin:2px" type="text" placeholder="Endereço"></input>
                <input class="uk-search-input barra-pesquisa" style="margin:2px" type="text" placeholder="Cidade"></input>
                <input class="uk-search-input barra-pesquisa" style="margin:2px" type="text" placeholder="Estado"></input>
                <input class="uk-search-input barra-pesquisa" style="margin:2px" type="text" placeholder="CEP"></input>
                <div class="text-center">
                  <button class="uk-button uk-button-success" style="margin-top: 10px">Finalizar Pedido</button>
                </div>
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
