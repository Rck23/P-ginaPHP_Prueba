<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Página prueba</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" href="{!! asset('css/stilo.css') !!}">
   
    </head>

    <body>

        
    <div id="header-container">
        <header>
            <div class="flex container">
                <a id="logo" href="#">INGE DOT COM</a>
                <nav>
                    <button id="nav-toggle" class="hamburger-menu">
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                    </button>

                    <ul id="nav-menu">
                        <li><a href="#" class="active">Inicio</a></li>
                        <li><a href="#" >Servicios</a></li>
                        <li><a href="#">Dulces</a></li>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Testimonios</a></li>
                        <li><a href="#">Contacto</a></li>
                        <li id="close-flyout"><span class="fas fa-times"></span></li>
                    </ul>
                </nav>
            </div>
        </header>
        
        <section id="principal">
            <div class="fade"></div>
            <div class="principal-text">
                <h1>Dulcerias La FLDSMDFR</h1>
                <p>“Preocúpate por la calidad de tus productos, mucha gente no está preparada para la excelencia y sorprenderás”.</p>
            </div>
        </section>
    </div>

    <section id="trabajamos">
        <div class="container">
            <h2>¿Cómo trabajamos?</h2>
            <div class="flex">
                <div>
                    <span  class="fas fa-candy-cane fa-spin fa-pulse "></span>
                    <h4>Encuentra tus dulces.</h4>
                    <p>Contamos con gran variedad de dulces, encuentra tus dulces favoritos con nosotros.</p>
                </div>

                <div>
                    <span class="fas fa-cart-plus fa-spin fa-pulse "></span>
                    <h4>Agrega al carrito.</h4>
                    <p>Haz tu selección preferida de dulces agregandolos al carrito.</p>
                </div>

                <div>
                    <span class="fas fa-store fa-spin fa-pulse "></span>
                    <h4>Visitanos.</h4>
                    <p>Encuentra la tienda mas cercana para realizar la compra.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="dulces">
        <div class="container">
            <h2>Dulces</h2>
            <div id="dulces-slider" class="slick">
                <div>
                    <img src="http://cdn.shopify.com/s/files/1/0415/6696/1824/products/WhatsApp-Image-2021-08-02-at-08.17.26-15.jpg?v=1638651588" alt="Property 1" />
                    <div class="dulces-detalles">
                        <p class="price">$1.50</p>
                        <span class="beds">Picafresa</span>
       
                    </div>
                </div>

                <div>
                    <img src="https://www.costco.com.mx/medias/sys_master/products/h13/h05/70367362285598.jpg" alt="Property 1" />
                    <div class="dulces-detalles">
                        <p class="price">$3.50</p>
                        <span class="beds">Mazapan</span>
       
                    </div>
                </div>

                <div>
                    <img src="https://chedrauimx.vtexassets.com/arquivos/ids/10609112/07432354_00.jpg?v=638085780965670000" alt="Property 1" />
                    <div class="dulces-detalles">
                        <p class="price">$8.00</p>
                        <span class="beds">Bubulubu</span>
           
                    </div>
                </div>

                <div>
                    <img src="https://masbodegaonline.com.mx/media/catalog/product/i/m/image_7_5655.jpeg?optimize=low&bg-color=255,255,255&fit=bounds&height=700&width=700&canvas=700:700" alt="Property 1" />
                    <div class="dulces-detalles">
                        <p class="price">$7.00</p>
                        <span class="beds">Rockaleta</span>
            
                    </div>
                </div>

                <div>
                    <img src="https://cdn.shopify.com/s/files/1/0372/4450/2149/products/PanditasRojos_1200x1200.jpg?v=1587138372" alt="Property 1" />
                    <div class="dulces-detalles">
                        <p class="price">$12.50</p>
                        <span class="beds">Panditas Rojos</span>
    
                    </div>
                </div>
            </div>

            <button class="rounded">Ver todos los dulces disponibles</button>
        </div>
    </section>

    <section id="empleados">
        <div class="container">
            <h2>Nosotros</h2>
            <p class="parrafo">Contamos con las mejores personas, con el gusto y placer de trabajar diariamente.</p>

            <div class="flex">
                <div class="card">
                    <img src="{{ asset('img/Yo.jpg') }}" alt="mi foto">
                    <h3>Ulises Martínez</h3>
                    <p>Desarrollador de La FLDSMDFR</p>
                </div>

                <div class="card">
                    <img src="/img/Yo.jpg" alt="Realtor 1" />
                    <h3>Ulises Martínez</h3>
                    <p>Analista de La FLDSMDFR</p>
                </div>

                <div class="card">
                    <img src="/img/Yo.jpg" alt="Realtor 1" />
                    <h3>Ulises Martínez</h3>
                    <p>Hacker de La FLDSMDFR</p>
                </div>

                <div class="card">
                    <img src="/img/Yo.jpg" alt="Realtor 1" />
                    <h3>Ulises Martínez</h3>
                    <p>Contador de La FLDSMDFR</p>
                </div>

                <div class="card">
                    <img src="/img/Yo.jpg" alt="Realtor 1" />
                    <h3>Ulises Martínez</h3>
                    <p>Administrador y mercadologo de La FLDSMDFR</p>
                </div>

                <div class="card">
                    <img src="/img/Yo.jpg" alt="Realtor 1" />
                    <h3>Ulises Martínez</h3>
                    <p>Inversionista #1 de La FLDSMDFR</p>
                </div>
            </div>
        </div>
    </section>


    <section id="estrella">
        <div class="flex container">
            <img src="http://cdn.shopify.com/s/files/1/0415/6696/1824/products/WhatsApp-Image-2021-08-02-at-08.17.26-15.jpg?v=1638651588" alt="Property 1" />
            <div>
                <h2>Nuestro producto estrella</h2>
                <p class="large-paragraph">El impacto de la picafresa vuelve loco a todo el mundo.</p>
                <p>Los exámenes, tareas y proyectos universitarios dejan a los estudiantes agotados y estresados, es por ello
                    que la picafresa se vende a montones para los jovenes universitarios, pues este producto es el producto que 
                    regenera la energia y mantiene activamente a los estudiantes a continuar con sus actividades del día a día.</p>
                    <h2>Beneficios</h2>
                <ul>    
                    <li>Poderoso antioxidante.</li>
                    <li>Fortalece el sistema inmunológico.</li>
                    <li>Recomendado en tareas de alto rendimiento.</li>
                    <li>Recomendado para deportistas.</li>
                </ul>
            </div>
        </div>
    </section>


    <section id="testimonios">
        <div class="container">
            <h2>Lo que nuestros clientes cuentan</h2>
            <div id="testimonios-slider">
                <div>
                    <blockquote>
                        <p>"Una tienda en linea muy juvenil, excelente para estudiantes con unos precios muy accesibles."</p>
                    </blockquote>
                    <div class="testimonios-caption">
                        <img src="https://yt3.googleusercontent.com/ytc/AMLnZu9SnsWqXQBm-KEFTnwZBss4oLYmJQBKGOkWr6qqOQ=s900-c-k-c0x00ffffff-no-rj" alt="Client 7" />
                        <p>Marión Neta</p>
                    </div>
                </div>

                <div>
                    <blockquote>
                        <p>"Desde que conozco esta tienda, he subido 8 kg comiendo puros dulces, es una adicción que me hace feliz como una lombriz."</p>
                    </blockquote>
                    <div class="testimonios-caption">
                        <img src="https://www.elsoldemexico.com.mx/gossip/p1bisk-facundo.jpg/ALTERNATES/LANDSCAPE_1140/facundo.jpg" alt="Client 7" />
                        <p>Elber González</p>
                    </div>
                </div>

                <div>
                    <blockquote>
                        <p>"Me gusta que tengan Rockaleta entre los productos es mi dulce favorito y no lo cambiaria por nada ni por un duvalin."</p>
                    </blockquote>
                    <div class="testimonios-caption">
                        <img src="https://cdn-3.expansion.mx/dims4/default/92a0dd7/2147483647/strip/true/crop/1200x869+0+0/resize/1200x869!/format/webp/quality/90/?url=https%3A%2F%2Fcdn-3.expansion.mx%2Fc7%2F8c%2Fee53fcee44c4bf85673edd1f8cf0%2F272140185-231259359153917-9039025978953150748-n.jpg" alt="Client 7" />
                        <p>Paty Chapoy</p>
                    </div>
                </div>

                <div>
                    <blockquote>
                        <p>"Me encanta, me fascina, me vuelvo loco."</p>
                    </blockquote>
                    <div class="testimonios-caption">
                        <img src="https://www.forosperu.net/adjuntos/daa6fafb699b2e012404eeca999aabdd-jpg.117163/" alt="Client 7" />
                        <p>Pedrito solo</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contacto">
        <div class="container">
            <h2>Contactanos</h2>

            <div class="flex">
                <div id="form-container">
                    <h3>Formulario de contacto</h3>
                    <form>
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" />

                        <label for="email">Correo electrónico</label>
                        <input type="text" id="email" />

                        <label for="asunto">Asunto</label>
                        <input type="text" id="asunto" />

                        <label for="mensaje">Mensaje</label>
                        <textarea id="mensaje" placeholder="Deposita tus palabras bonitas aquí.."></textarea>

                        <button class="rounded">Enviar</button>
                    </form>
                </div>

                <div id="direccion-container">
                    <label>Dirección</label>
                    <address>
                        Blvd. Juan Pablo II No. 1302 Ex hacienda la Cantera, 20200 Aguascalientes, Ags.
                    </address>

                    <label>Teléfono</label>
                    <a href="#"> 449 910 5000</a>

                    <label>Correo electrónico</label>
                    <a href="#">Matricula@utags.edu.mx</a>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="flex container">
            <div class="footer-acerca">
                <h5>Acerca de Dulcerias La FLDSMDFR</h5>
                <p>Esto es solo una tarea para la universidad de la materia Desarrollo Web Profisional, todo esto es con fines educativos
                    y de aprendizaje. los productos seleccionados vistos en este página es mero gusto del creador de esta misma
                    es un gordo dulcero pero feliz.</p>
            </div>

            <div class="footer-links">
                <h5>Links rapidos</h5>
                <ul>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Testimonios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>

            <div class="footer-suscribete">
                <h5 class="sigueme">Sigueme</h5>
                <ul>
                    <li><a href="https://twitter.com/m07636150" target="_blank"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="https://www.instagram.com/ulises_fc/" target="_blank"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="https://github.com/Rck23" target="_blank"><span class="fab fa-github"></span></a></li>
                    <li><a href="https://www.linkedin.com/in/ulises-mart%C3%ADnez-olivares-09276b258/" target="_blank"><span class="fab fa-linkedin-in"></span></a></li>
                </ul>
            </div>
        </div>

        <small>
            Copyright &copy; 2022 Desarrollo Web Profesional | Universidad Tecnológica de Aguascalientes <span class="fa fa-heart"></span> hecho por <a href="https://github.com/Rck23">Ulises Martínez</a>
        </small>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    <script type="text/javascript" src="{!! asset('js/animacion.js') !!}" async></script>
    </body>

</html>
