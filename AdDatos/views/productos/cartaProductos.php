<link rel="stylesheet" href="assets/css/productos/carta.css">
<header id="site-header">
    <div class="container">
      <h1>Carrito</h1>
    </div>
  </header>
    <?php foreach ($this->modelo->ListarCarrito($_SESSION['name']) as $p):?>
        <div class="container">
          <section id="cart"> 
            <article class="product">
              <header>
                <a class="remove">
                  <img src="http://www.astudio.si/preview/blockedwp/wp-content/uploads/2012/08/3.jpg" alt="">
                  <h3><a href="?c=tienda&a=EliminarProducto&id=<?=$p->idProdCarrito ?>">Eliminar</a></h3>
                </a>
              </header>
              <div class="content">
                <h1><?= $p->nombreProd ?></h1>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, numquam quis perspiciatis ea ad omnis provident laborum dolore in atque.
                </div>
              <footer class="content">
                <span class="qt-minus">-</span>
                <span class="qt">1</span>
                <span class="qt-plus">+</span>
                <h2 class="full-price">
                  <?= $p->precio.' €' ?>
                </h2>
                <h2 class="price">
                  <?= $p->precio.' €' ?>
                </h2>
              </footer>
            </article>
          </section>
        </div>
    <?php endforeach; ?>

  <footer id="site-footer">
    <div class="container clearfix">

      <div class="left">
        <h2 class="subtotal">Subtotal: <span>163.96</span>€</h2>
        <h3 class="tax">Taxes (5%): <span>8.2</span>€</h3>
        <h3 class="shipping">Shipping: <span>5.00</span>€</h3>
      </div>

      <div class="right">
        <h1 class="total">Total: <span>177.16</span>€</h1>
        <a href="?c=tienda&a=EliminarTodoCarrito" class="btn">Checkout</a>
      </div>

    </div>
  </footer>
  <script src="assets/js/carta.js"></script>