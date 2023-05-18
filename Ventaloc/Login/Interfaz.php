<?php
session_start();
if (!isset($_SESSION['usuario'])){
    echo'
    <script>
    alert("por favor debes iniciar sesion");
    window.location= "index.php";
    </script>

    ';
    //header("location: index.php");
    session_destroy();
    die();
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
    <script src="./proyecto.js"></script>
    <title>Document</title>
</head>
<body>
    <header class="main-header">
        <div class="container container--flex">
          <div class="main-header__container">
            <h1 class="main-header__title">VentaLoc</h1>
            <span class="icon-menu" id="btn-menu"><i class="fas fa-bars"></i></span>
            <nav class="main-nav" id="main-nav">
              <ul class="menu">
                <li class="menu__item"><a href="" class="menu__link">Inicio</a></li>
                <li class="menu__item"><a href="Categoría.html" class="menu__link">Categorias</a></li>
                <li class="menu__item"><a href="" class="menu__link">Acerca de</a></li>
                <li class="menu__item"><a href="" class="menu__link">Caracteristicas</a></li>
                <li class="menu__item"><a href="" class="menu__link"><Table>Tienda</Table></a></li>
                <li class="menu__item"><a href="" class="menu__link">Contacto</a></li>
              
              </ul>
            </nav>
          </div>
          <div class="main-header__container">
            <span class="main-header__txt">Algun problema o duda</span>
            <p class="main-header__txt"><i class="fas fa-phone"></i>  Llama al 12345678</p>
          </div>
          <div class="main-header__container">
            <a href="" class="main-header__link"><i class="fas fa-user"></i></a>
<a href="php/cerrar_sesion.php" class="main-header__btn">   Cerrar Sesion<i class="fas fa-shopping-cart"></i></a>
            <a href="" class="main-header__btn">Mi carrito<i class="fas fa-shopping-cart"></i></a>
            <input type="search" class="main-header__input" placeholder="Buscar productos"><i class="fas fa-search"></i>
          </div>
        </div>
      </header>
      <div class="container-slider">
        <div class="slider" id="slider">
          <div class="slider__section">
            <img src="https://www.marketingdirecto.com/wp-content/uploads/2019/07/retail-carrito-compra.jpg" alt="" class="slider__img">
            <div class="slider__content">
              <h2 class="slider__title">Mira todos los productos que tenemos</h2>
              <p class="slider__txt">Encuentra ofertas</p>
              <a href="" class="btn-shop">Comprar Ahora</a>
            </div>
          </div>
          <div class="slider__section">
            <img src="https://www.marketingdirecto.com/wp-content/uploads/2019/07/retail-carrito-compra.jpg" alt="" class="slider__img">
            <div class="slider__content">
              <h2 class="slider__title">Ofertas para la Casa</h2>
              <p class="slider__txt">Hasta un 30%</p>
              <a href="" class="btn-shop">Comprar ahora</a>
            </div>
          </div>
          <div class="slider__section">
            <img src="https://images.pexels.com/photos/2846815/pexels-photo-2846815.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="slider__img">
            <div class="slider__content">
              <h2 class="slider__title">Productos de Mujer</h2>
              <p class="slider__txt">Un 50% en productos seleccionados</p>
              <a href="" class="btn-shop">SHOP NOW</a>
            </div>
          </div>
          <div class="slider__section">
            <img src="data:image/jpeg;base64,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" alt="" class="slider__img">
            <div class="slider__content">
              <h2 class="slider__title">Pructos ideales para el hombre</h2>
              <p class="slider__txt">Ropa, Accesorios, Perfumes y más</p>
              <a href="" class="btn-shop">Comprar Ahora</a>
            </div>
          </div>
        </div>
        <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
        <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
      </div>
      <main class="main">
        <div class="container">
          <h2 class="main-title">Articulos para ti</h2>
          <section class="container-products">
            <div class="product">
              <img src="https://m.media-amazon.com/images/I/61Zo-9sbJrL._AC_SL1500_.jpg " alt="" class="product__img">
              <div class="product__description">
                <h3 class="product__title">Bolsa Crossbody Muje</h3>
                <span class="product__price">$400.00</span>
              </div>
              <i class="product__icon fas fa-cart-plus"></i>
            </div>
            <div class="product">
              <img src="https://i0.wp.com/buytiti.com/wp-content/uploads/2022/09/Audifonos-Bluetooth-dediadema.jpg?fit=1320%2C1440&ssl=1" alt="" class="product__img">
              <div class="product__description">
                <h3 class="product__title">Audifonos Bluetooth</h3>
                <span class="product__price">$350.00</span>
              </div>
              <i class="product__icon fas fa-cart-plus"></i>
            </div>
            <div class="product">
              <img src="https://cdn.opstatics.com/store/20170907/assets/images/events/instant-noodle/19821/kv/kv.webp" alt="" class="product__img">
              <div class="product__description">
                <h3 class="product__title">Celular One Plus 8</h3>
                <span class="product__price">$2600.00</span>
              </div>
              <i class="product__icon fas fa-cart-plus"></i>
            </div>
            <div class="product">
              <img src="https://upload.wikimedia.org/wikipedia/commons/b/b6/Gafas_de_sol_Rayban_Aviador.jpg" alt="" class="product__img">
              <div class="product__description">
                <h3 class="product__title">Farenheit Oval</h3>
                <span class="product__price">$325.00</span>
              </div>
              <i class="product__icon fas fa-cart-plus"></i>
            </div>
          </section>
          <section class="container__testimonials">
            <h2 class="section__title">VentaLoc</h2>
            <h3 class="testimonial__title">Pagina Web de Ventas en linea local </h3>
            <p class="testimonial__txt">Explora una gran variedad de producto y sobre todo, de forma local</p>
          </section>
        
          <div class="container-editor">
            <div class="editor__item">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAWIXw4hbnV3BcWTXD--3rUEDmcYA4XcrzFg&usqp=CAU" alt="" class="editor__img">
              <p class="editor__circle">EXPRESS YOUR STYLE NOW</p>
            </div>
            <div class="editor__item">
              <img src="https://images.pexels.com/photos/261856/pexels-photo-261856.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="editor__img">
              <p class="editor__circle">EXPRESS YOUR STYLE NOW</p>
            </div>
          </div>
          <section class="container-tips">
            <div class="tip">
              <i class="far fa-hand-paper"></i> 
              <h2 class="tip__title">Satisfaccion Garantizada</h2>
              <p class="tip__txt">Te prometemos una buena satisfacción en cada compra que realices</p>
              <a href="" class="btn-shop">Comprar Ahora</a>
            </div>
            <div class="tip">
             <i class="fas fa-rocket"></i>
              <h2 class="tip__title">Compras Rapidas</h2>
              <p class="tip__txt">Realiza tus compras con pocos clicks de manera eficaz y rapida</p>
              <a href="" class="btn-shop">Comprar Ahora</a>
            </div>
            <div class="tip">
              <i class="fas fa-cog"></i>
              <h2 class="tip__title">Seguridad en tus Compras</h2>
              <p class="tip__txt">Todas tus compras realizadas estan protegidas, si en dado caso de que llegue defectuoso o en mal estado, se te devuelve el dinero.</p>
              <a href="" class="btn-shop">Comprar Ahora</a>
            </div>
          </section>
        </div>
      </main>
      <footer class="main-footer">
        <div class="footer__section">
          <h2 class="footer__title">Sobre nosotros</h2>
          <p class="footer__txt">Esta es una pagina vez sobre ventas locales,esto con el proposito de hacer ventas de forma local</p>
        </div>
        <div class="footer__section">
          <h2 class="footer__title">Contactanos</h2>
          <p class="footer__txt">Phone : 123456789</p>
          <p class="footer__txt">Email : ProyectoIngenieria@hotmail.com</p>
        </div>
        <div class="footer__section">
          <h2 class="footer__title">Enlaces Directos  </h2>
          <a href="" class="footer__link">Inicio</a>
          <a href="" class="footer__link">Acerca de</a>
          <a href="" class="footer__link">Problemas</a>
          <a href="" class="footer__link">Tienda</a>
          <a href="" class="footer__link">Soporte</a>
        </div>
        <div class="footer__section">
          <h2 class="footer__title">Suscribete para recibir ofertas</h2>
          <p class="footer__txt">Suscribete con tu correo para recibir descuentos, ofertas y muchas cosas más.</p>
          <input type="email" class="footer__input" placeholder="Ingresa un correo electronico  ">
        </div>
        <p class="copy">2023 Reservado todos los Derechos </p>
      </footer>
</body>
</html>