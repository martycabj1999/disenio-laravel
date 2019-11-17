<!DOCTYPE html>
<html lang="en">

 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DISEÑO DE SISTEMAS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/scrolling-nav.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{ url('/')}}"><b>DISEÑO DE SISTEMAS</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#inicio">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#norma">Norma</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#herramienta">Herramienta</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#trabajo">Trabajos</a>
            </li>

             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#staff">Staff</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('login')}}"><b>Ingresar</b></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="bg-success text-white">
      <div class="container text-center">
        <h1><img src="image/logo44.png" height="110"></h1>
        <!-- <p class="lead">A landing page template freshly redesigned for Bootstrap 4</p>-->
      </div>
    </header>

    <section id="inicio">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <h2>Introducción</h2>El consumo de energía creciente por parte de la humanidad, en pos de mejores condiciones de vida y confort, hace necesario que se desarrollen mecanismos de ahorro de la energía en busca de un uso racional y sustentable de la misma en los sistemas productivos. Los sistemas de gestión de la energía buscan impactar directamente en la productividad y competitividad de las organizaciones productivas de bienes y servicios.

Para promover la implementación de sistemas de gestión energéticos en las pequeñas y medianas empresas se ha desarrollado una metodología que permite realizar el análisis energético del proceso, la evaluación de los consumos específicos de los equipos, la evaluación de las mejoras energéticas sugeridas, el ahorro energético alcanzado y la reducción de las emisiones de gases contaminantes obtenidas.

Como base del método, se utiliza la norma ISO-IRAM 50001, la cual es un instrumento que busca la eficiencia y el ahorro energético en las organizaciones, impactando en la estructura de costos de la organización. el modelo que sigue la norma es el proceso de Planificar Hacer Verificar Actuar para gestionar y mejorar las operaciones y el rendimiento de la organización.
</div>
<div class="col-md-6 mx-auto">
<h2>Actividades: Implementación Metodológica</h2>
  <p>Algunas de las Actividades desarrolladas durante la implementación de la Metodología se indican en la siguiente tabla</p>
  <table align="center" border="3px" cellpadding="1" cellspacing="1" class="misombra tablesaw tablesaw-stack" style="background:#eeeeee; width:50%" data-tablesaw-mode="stack"><tbody><tr><td class="rtecenter">
          <strong>Análisis de la Compra de Energéticos</strong>
        </td>
</tr><tr bgcolor="white"><td class="rtecenter">
          Relevamiento Inicial del Consumo &amp; Uso Energético mediante Auditorías Energéticas
        </td>
</tr><tr><td class="rtecenter">
          <strong>Determinación de la Línea Base e Indicadores Energéticos más Adecuados</strong>
        </td>
</tr><tr bgcolor="white"><td class="rtecenter">
          Desarrollo de los Planes de Mejora
        </td>
</tr><tr><td class="rtecenter">
          <strong>Capacitación del Personal en Temas de Eficiencia Energética y Auditorías Energéticas</strong>
        </td>
</tr></tbody></table>
</div>

          </div>
        </div>

    </section>

    <section id="norma" style="background-color:#bbeebb">
      <div class="container" >
        <div class="row">
          <div class="col-md-12 mx-auto">
            <h2>Norma IRAM ISO 50001</h2>
            <p>
            La <b>Norma ISO 50001</b> fue desarrollada por ISO cuando surge la necesidad de contar con un estándar internacional para responder eficazmente al cambio climático debido a los distintos estándares de gestión de la energía.
            </p>
            <p>
            Fue preparada por el Comité de Proyecto ISO PC 242, donde participaron expertos de normativas de 44 países miembros de ANSI y de la ABNT con colaboración de organizaciones como UNIDO y el Consejo Mundial de la Energía.
            </p>
            <p>
            Fue presentada como Norma ISO 50001, el 17 de junio de 2011 en el CICG.
            </p>
            <p>
            China, Dinamarca, Irlanda, Japón, Korea, Holanda, Suecia, Tailanda, USA e inclusive la CE la están empleando para implementar sus propias normas. En el mismo 2011, en Argentina la IRAM la adopta para establecer la gestión de la energía a través de las <b>BUENAS PRÁCTICAS</b> de uso eficiente de la energía.
            </p>
            <p>
            La norma, también soporta elementos comunes a otras normas de sistemas de gestión ISO para asegurar su comtabilidad con <b>ISO 9000</b> sobre la gestión de calidad adoptada por muchas organizaciones y por la <b>ISO 14001</b> sobre gestión ambiental.
            </p>
            <div class="bg-success">
              <em >
                La Norma IRAM ISO 50001:2011 especifica los requisitos para establecer, implementar. mantener y mejorar un sistema de gestión de la energía con el propósito de permitir a una organización, contar con un enfoque sistemático para alcanzar una mejora continuaen su desempeño energético, incluyendo la eficiencia energética, el uso y el consumo de energía. Especifica los requisitos aplicables al uso y consumo de la energía, incluyendo la medición, documentación e información, las prácticas para el diseño y adquisisicón de equipos, sistemas, procesos y personal que contribuyen al desempeño energético.
              </em>
            </div>
<br>

            <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><b>Objetivos</b></a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><b>Beneficio</b></a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><b>Implementación</b></a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active bg-light" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" ><br>
    <div class="row">
      <div class="col-md-1">
        <img src="{{ url('image/fin.svg') }}">
      </div>
      <div class="col-md-11">
          <h4 class="page-title">Objetivo General</h4>
<p>Ser una herramienta de soporte funcional para organizaciones del sector público y privado, con el fin de aumentar su eficiencia energética, orientada a reducir los costos y consumos de la energía a través de buenas prácticas en la gestión de la energía.

Esto es posible de implementar en cualquier organización que emplee el método de la mejora continua en su gestión energética.
</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-1">
        <img src="{{ url('image/objetivos.svg') }}">
      </div>
      <div class="col-md-11">
        <h4 class="page-title">Objetivo Específicos</h4>
        <ul>
            <li>Ayudar a las organizaciones a mejorar el consumo energético.
        </li>
        <li>Facilitar la gestión de los recursos energéticos.
        </li>
        <li>Promover las buenas prácticas de gestión energética y reforzar el buen uso de la energía siguiendo las pautas de gestión de la organización.
        </li>
        <li>Ayudar a las organizaciones a evaluar y priorizar la implementación de nuevas tecnologías de eficiencia energética.
        </li>
        <li>Promover proyectos de reducción de emisiones de gases de efecto invernadero.
        </li>
        <li>Permitir la integeación con otros sistemas de gestión, como medio ambiente, Salud y Seguridad.
        </li>

        </ul>
      </div>
    </div>
  
  </div>
  <div class="tab-pane fade bg-light" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <h4 class="page-title">Beneficios</h4>
<p>Análogamente como ocurre con todas las normativas ISO, el standard IRAM ISO 50001 aplica para cualquier tipo de organización, no importa su tamaño, actividad o localización.

Además, no se fijan objetivos de la eficiencia energética, sino que establece un Método de gestión de la energía que propone una base para luego generar un sistema de mejora continua con el propósito de que se implemente de acorde al ritmo, capacidad y contexto de cada organización y por consecuencia, reducir la emisión de gases del efecto invernadero.</p>
  <tbody><tr><td class="rtecenter">
                <img alt="" height="80" src="{{ url('image/eficiencia3.svg') }}" width="80" /><strong>Mayor Eficiencia Energética</strong>
</td>
<td class="rtecenter">
                <img alt="" height="80" src="{{ url('image/ahorro.svg') }}" width="80" /><strong>Ahorro de Costos</strong>
</td>
<td class="rtecenter">
                <img alt="" height="80" src="{{ url('image/certificar.svg') }}" width="80" /><strong>Garantía Medioambiental</strong>
</td>
</tr><tr><td>
<ul><li>
                        Menos es Más</li>
<li>
                        Más Competitividad.</li>
</ul></td>
<td>
<ul><li>
                        Reducción Costos</li>
<li>
                        Inversión Inteligente</li>
</ul></td>
<td>
<ul><li>
                        Certificar Acredita</li>
<li>
                        Compromiso Sustentable</li>
</ul></td>
</tr>
        </tbody>




  </div>


  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div>



          </div>
        </div>
      </div>
    </section>

    <section id="herramienta">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mx-auto">
            <h2>Herramienta</h2>
            <h5>Las principales funcionalidades ofrecidas por nuestra herramienta interna quedan divididas en 3 Niveles.</h5>
            <div class="row">
                <div class="col">
                   <i  class="material-icons" >
                        people
                    </i>
                    <i  class="material-icons" >
                        account_balance
                    </i>
                    <i  class="material-icons" >
                        home
                    </i>
                    <i  class="material-icons" >
                        folder
                    </i>
                    </div>
                </div>


            <p class="lead">Nivel I: Organigrama - Política - Alcance</p>
            <p class="lead">Nivel II: Facturas - Diagramas - Consumos Específicos</p>
            <p class="lead">Nivel III: Línea Base - Indicadores - Planes Acción</p>
          </div>
        </div>
      </div>
    </section>


     <section id="trabajo" style="background-color:#bbeebb">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mx-auto">
            <h2><i  class="material-icons" >
                        folder
                    </i> Trabajos</h2>
            <h5>En la actualidad, haciendo uso de nuestra herramienta web, estamos asesorando a:</h5>
 
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 300px;">
                        <img class="card-img-top" src="image/facu4.svg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">
                            Universidad Tecnológica Nacional
                            Facultad Regional La Plata</p>
                        </div>
                    </div>
                </div>
               <!-- <div class="col">
                    <div class="card" style="width: 300px;">
                        <img class="card-img-top" src="image/pla.jpeg"  alt="Card image cap" >
                        <div class="card-body">
                            <p class="card-text">
                                Parque Industrial Plátanos
                                Etapa I: grupo de 15 organizaciones
                            </p>
                        </div>
                    </div>
                </div>
            </div>
-->

 

          </div>
        </div>
      </div>
    </section>

<section id="staff">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mx-auto">
            <h2>Staff</h2>
            <h5>Las principales funcionalidades ofrecidas por nuestra herramienta interna quedan divididas en 3 Niveles.</h5>
            <div class="row">
                <div class="col">
                   <i  class="material-icons" >
                        people
                    </i>
                    <i  class="material-icons" >
                        account_balance
                    </i>
                    <i  class="material-icons" >
                        home
                    </i>
                    <i  class="material-icons" >
                        folder
                    </i>
                    </div>
                </div>


            <p class="lead">Nivel I: Organigrama - Política - Alcance</p>
            <p class="lead">Nivel II: Facturas - Diagramas - Consumos Específicos</p>
            <p class="lead">Nivel III: Línea Base - Indicadores - Planes Acción</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer 
    <footer class="py-5 bg-light">
<<<<<<< HEAD
     <div class="row">
        <div class="col">
              <img src="image/logofooter.png " alt="" height="78" width="118">
        <p class="m-0 text-center ">Copyright &copy; <a href="http://www.lines.edu.ar">LINES</a> 2018</p>
        </div>        
     </div>
    

      <! /.container -->
    </footer>
      <div class="container">
      <div style="float:left;">

      </div>

      </div>


    </footer>
    
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col"><img src="image/logofooter.png " alt="" height="78" width="118"></div>
          <div class="col"><p class="m-0 text-center ">Desarrollado por <a href="http://www.lines.edu.ar">LINES</a> 2018</p></div>
        </div>
              
        
      </div>
    </footer>


    <!-- Custom JavaScript for this theme -->
    <script src="{{ asset('js/scrolling-nav.js') }}"></script>

    <style type="text/css">
      /* Sticky footer styles
-------------------------------------------------- */
html {
  position: relative;
  min-height: 100%;
}
body {
  margin-bottom: 78px; /* Margin bottom by footer height */
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 78px; /* Set the fixed height of the footer here */
  line-height: 60px; /* Vertically center the text there */
  background-color: #f5f5f5;
}


/* Custom page CSS
-------------------------------------------------- */
/* Not required for template or sticky footer method. */



    </style>

  </body>

</html>
