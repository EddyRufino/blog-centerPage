@extends('layout')

@section('content')
<div class="container mt-4">
  <div class="row">
      <div class="col-12 col-lg-6 my-auto">
          <h1 class="display-4 color-tomato">Lo podemos diseñar.</h1>
          <p class="lead">En CenterPage te ayudamos a llegar a muchos nuevos clientes con un sitio web atractivo, funcional, adaptado a tus requerimientos y a los nuevos estandares de internet.</p>
          {{-- <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contáctame</a> --}}
          <a class="btn btn-lg btn-block btn-outline-secondary" href="#nosotros">Conoce más</a>
      </div>
      <div class="col-12 col-lg-6 img">
          <img class="img-fluid img-home" src="/img/home.svg" alt="Desarrollo Web">
      </div>
  </div>
</div>

<div class="sombra-block-two">
  <div class="container mt-5 pt-5 pb-5 ">
      <h1 class="display-4 text-center color-tomato">Únete a nosotros.</h1>
      <div class="row pt-4">
          {{-- <div class="col-12 col-lg-6 my-auto"> --}}

          <div class="col-12 col-lg-4 block">
              <h3 class="text-secondary">Moderno</h3>
              <p class="lead">Ponemos a tu disposición diseños recientes de acuerdo a tu estilo.</p>
          </div>
          <div class="col-12 col-lg-4 block">
              <h3 class="text-secondary">Calidad</h3>
              <p class="lead">Ofrecemos trabajos de la más alta calidad.</p>
          </div>
          <div class="col-12 col-lg-4 block">
              <h3 class="text-secondary">Atención</h3>
              <p class="lead">Atención personalizada para cada uno de nuestros clientes.</p>
          </div>
      </div>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
      <div class="col-12 col-lg-6 img-block-tres">
          <img class="img-fluid img-home" src="/img/pasos.svg" alt="Desarrollo Web">
      </div>
      <div class="col-12 col-lg-6 my-auto">
          <h1 class="display-4 color-tomato text-center">Guía de trabajo.</h1>
              <h3 class="text-secondary pt-3">1.- Estructura de la información</h3>
              <p class="lead">Identificamos y ordenamos tu información para organizarla en el sitio web.</p>
              <h3 class="text-secondary">2.- Flujo de trabajo y diseño</h3>
              <p class="lead">Armado de prototipos para el posible diseño de su sitio web.</p>
              <h3 class="text-secondary">3.- Maquetación y programación</h3>
              <p class="lead">Pasamos a código el diseño del prototipo elegido por el cliente.</p>
              <h3 class="text-secondary">4.- Puesta en producción</h3>
              <p class="lead">Subimos el código a los servidores para que  todo el mundo pueda ingresar a su sitio web.</p>
          {{-- <p class="lead text-secondary">En CenterPage te ayudamos a llegar a muchos nuevos clientes con un sitio web atractivo, funcional, adaptado a tus requerimientos y a los nuevos estandares de internet.</p> --}}
          {{-- <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contáctame</a> --}}
          {{-- <a class="btn btn-lg btn-block btn-outline-secondary" href="{{ route('portfolio.index') }}">Conoce más</a> --}}
      </div>
  </div>
</div>

<div id="nosotros" class="container mt-4">
  <div class="row">
    <div class="col-12 col-lg-6 my-auto">
      <h1 class="display-4 color-tomato">¿Quiénes somos?</h1>
      <p class="lead ">Somos un grupo totalmente enfocados en ayudarte a crecer como empresa o marca personal y que puedas aprovechar al máximo los beneficios que nos ofrece Internet. Todo esto a un precio competitivo y que sin importar el tamaño de tu negocio puedas disfrutar el tener un sitio web profesional y de calidad.</p>
      <a class="btn btn-lg btn-block btn-outline-secondary" href="{{ route('pages.home') }}">Publicaciones</a>
    </div>
  
    <div class="col-12 col-lg-6 img-about">
        <img class="img-fluid mb-4 img-about-one" src="/img/nosotros.svg" alt="Quién soy">
    </div>
  </div>
</div>

<div class="sombra-block-two">
  <div class="container mt-5 pt-5 pb-5 ">
      <h3 class="text-center color-tomato">¿Aún tienes dudas?</h3>
      <p class="col-12 lead">Si estas interesado en conocer como tu empresa o marca personal puede llegar hacer conocida más rápido que las demás, nosotros te ayudamos a posicionar tu sitio web en los mejores lugares que tienen los principales motores de búsqueda.</p>
  </div>
</div>


<div id="servicios" class="container mt-4">
  <h1 class="display-4 text-center pb-2 color-tomato">Te ofrecemos:</h1>
  <div class="row mt-4 mb-2">
    <div class="col-xs-12 col-sm-6 col-md-4 mb-4">
      <div class="card shadow">
        <header style="background-color: tomato" class="p-1 card-header-radius">
            
        </header>
        <div class="card-body pater">
          <h5 class="card-title">
            <a class="font-weight-bold color-title" href="#nosotros">
              Diseño y Desarrollo Web
            </a>
          </h5>

        <p class="card-text">Déjanos transformar tu idea en una página web hecha a la medida de tus necesidades.</p>

        <footer class="container-flex space-between">
          <div class="read-more">
            <a href="#nosotros" class="btn btn-outline-secondary c-green">Conoce más</a>
          </div>
        </footer>

        </div>
      </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-4 mb-4">
      <div class="card shadow">
        <header style="background-color: tomato" class="p-1 card-header-radius">
            
        </header>
        <div class="card-body pater">
          <h5 class="card-title">
            <a class="font-weight-bold color-title" href="#nosotros">
              Desarrollo de Aplicaciones Web
            </a>
          </h5>

        <p class="card-text">Evaluamos los requerimientos de su empresa para desarrollar la aplicación web a la medida.</p>

        <footer class="container-flex space-between">
          <div class="read-more">
            <a href="#nosotros" class="btn btn-outline-secondary c-green">Conoce más</a>
          </div>
        </footer>

        </div>
      </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-4 mb-4">
      <div class="card shadow">
        <header style="background-color: tomato" class="p-1 card-header-radius">
            
        </header>
        <div class="card-body pater">
          <h5 class="card-title">
            <a class="font-weight-bold color-title" href="#nosotros">
              SEO - Posicionamiento Web
            </a>
          </h5>

        <p class="card-text">Mejoramos el posicionamiento y visibilidad de su página web en Google.</p>

        <footer class="container-flex space-between">
          <div class="read-more">
            <a href="#nosotros" class="btn btn-outline-secondary c-green">Conoce más</a>
          </div>
        </footer>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection