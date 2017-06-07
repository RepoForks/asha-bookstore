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

            <div class="cart-quantidade text-center uk-padding-small">3 itens</div>

            <div class="cart">
                <div class="item-max">
                  <table style="width: 100%; height: 100%;">
                    <tr>
                      <td class="text-center item-titulo">Beggining Regular Expressions</td>
                      <td class="text-center item-quantidade">1</td>
                      <td class="text-center item-preco">31.99</td>
                      <td class="text-center item-total">31.99</td>
                      <td class="text-center item-botoes">
                        <i class="glyphicon glyphicon-plus"></i>
                        <i class="glyphicon glyphicon-remove"></i>
                      </td>
                    </tr>
                  </table>
                </div>
                <div class="item-max"></div>
                <div class="item-max"></div>
            </div>
            <br/><br/>
            <div>
                <div style="position: absolute; right: 0px; margin-right: 45px">
                  <div><span class="uk-label">Sub-Total:</span> 121.14</div>
                  <div><span class="uk-label">Frete:</span> 20.00</div>
                  <div><span class="uk-label">Total:</span> 141.14</div>
                </div>
                <br/><br/><br/><br/><br/>
                <div class="text-center">
                  <button class="uk-button uk-button-primary">Continuar Comprando</button>
                  <button class="uk-button uk-button-success">Finalizar Compra</button>
                  <div>
                    * O frete é R$6,50 para o primeiro livro e mais R$0,75 para cada livro adicional.
                  </div>
                </div>
            </div>

          </div>
        </div>

        <hr/>

        <footer class="row">
            <div class="text-center uk-padding-small">Todas as regras e promoções são válidas apenas para produtos vendidos e entregues pela ashaBookStore.com. O preço válido será o da finalização da compra. Havendo divergência, prevalecerá o menor preço ofertado.</div>
            <div class="text-center uk-padding-small"><a href="#">we.are.asha@gmail.com</a></div>
            <div class="text-center uk-padding-small"><a href="https://github.com/tiagohm/asha-bookstore"><img src="img/github.png" style="width:32px"></img></a></div>
        </footer>
      </div>
  </body>
</html>
