<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>.::Emprender Juntos::.</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="{{ asset('css/agency.min.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        label{
            color:#ffff;
        }
    </style>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Emprender Juntos</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Concurso</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Premios</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Bases</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">CATEGOR??AS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">PARTICIPA</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Concurso de <h2>Innovaci??n</h2></div>
                @include('flash::message')
                @if(isset($message))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{$message}}
                    </div>
                @endif
                <a href="#services" class="page-scroll btn btn-xl">Conoce M??s</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="intro-lead-in">Concurso de Innovaci??n</h2>
                    <h3 class="section-subheading text-muted">Emprender Juntos y El Ministerio del Poder Popular de Econom??a Finanzas y Comercio Exterior, organiza cada a??o el Concurso de Emprendedores con el objetivo de apoyar con mentoring y formaci??n, a trav??s de las Becas Emprende, a todo tipo de emprendedores con talento y proyectos e ideas innovadoras que quieran ponerlas en marcha y desarrollarlas en el mundo empresarial.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-tasks fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">INSCRIPCI??N</h4>
                    <p class="text-muted">??Inscr??bete para la edici??n 2022!.</p>
                    <a href="#contact" class="page-scroll btn btn-xl">??INSCR??BETE!</a>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-gift fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">PREMIOS</h4>
                    <p class="text-muted">Consigue una beca del 100% en el Master que elijas.</p>
                    <a href="#portfolio" class="page-scroll btn btn-xl">CONOCE LOS PREMIOS</a>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-newspaper-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">BASES</h4>
                    <p class="text-muted">Un jurado formado por profesionales del sector que elegir??n las mejores candidaturas.</p>
                    <a href="#about" class="page-scroll btn btn-xl">CONSULTA LAS BASES</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Premios</h2>
                    <h3 class="section-subheading text-muted">
                        Los ganadores podr??n cursar un Master o Postgrado y recibir??n apoyo y mentoring para la puesta en marcha de su idea o proyecto, pudiendo incluso ser incubados en las instalaciones de El Ministerio del Poder Popular de Econom??a Finanzas y Comercio Exterior.
                        <br><br>
                        Los premios consisten en:
                    </h3>
                </div>
            </div>
            <div class="row">
                <ul>
                    <li><strong>Ganador global del concurso:</strong>  Beca Total para cursar un M??ster o MBA de forma gratuita, recibir?? apoyo y mentoring para acelerar el proyecto y tendr?? acceso a los foros de inversi??n de El Ministerio del Poder Popular de Econom??a Finanzas y Comercio Exterior.</li>
                    <li><strong>Ganadores por categor??as:</strong> todos los que superen el proceso de selecci??n inicial tendr??n derecho a una beca del 50% y los ganadores de cada categor??a recibir??n una beca del 100% y los segundos clasificados una beca del 70%.</li>
                    <li><strong>Ganador del p??blico transversal:</strong> Beca del 70% para cursar un M??ster o Postgrado y la posibilidad de ser incubado en El Ministerio del Poder Popular de Econom??a Finanzas y Comercio Exterior.</li>
                </ul>
            </div>
            <div class="row text-center">
                <p>* Los ganadores podr??n optar por otros programas equivalentes sujetos a disponiblidad de plazas.</p>
            </div>
            <div class="row text-center">
                <div class="alert alert-warning alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                    <div class="text-center"><h1><strong>??Comp??rtelo con tus amigos!</strong></h1> </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">BASES DEL CONCURSO</h2>
                </div>
            </div>
            <div class="row text-justify">
                <h4>Objetivos del concurso</h4>
                <ul>
                    <li>Apoyar a emprendedores con proyectos propios que contribuyan al desarrollo social y econ??mico del territorio.</li>
                    <li>Fomentar el esp??ritu emprendedor y las iniciativas innovadoras como elementos de progreso.</li>
                    <li>Poner de manifiesto el importante papel de la formaci??n en la creaci??n de nuevas empresas y start-ups.</li>
                </ul>
            </div>
            <div class="row text-justify">
                <h4>Participantes</h4><br>
                <p>Podr??n participar todas aquellas personas que posean un proyecto emprendedor en fase embrionaria o de aceleraci??n, preferentemente en fase Seed o pre-seed. Los participantes podr??n presentar el n??mero de proyectos que deseen, tanto de forma individual como en grupo.</p>
            </div>
            <div class="row text-justify">
                <h4>Premios</h4><br>
                <p>El ganador podr?? cursar un M??ster o MBA de forma gratuita y recibir?? apoyo y mentoring para acelerar el proyecto y tendr?? acceso a los foros de inversi??n de El Ministerio del Poder Popular de Econom??a Finanzas y Comercio Exterior. Adem??s todos los que superen el proceso de selecci??n inicial tendr??n derecho a una beca del 50% y los ganadores de cada categor??a recibir??n una beca del 100% y los segundos clasificados una beca del 70%. Asimismo, el p??blico podr?? elegir su proyecto favorito, que recibir?? una beca del 70% y la posibilidad de ser incubado en El Ministerio del Poder Popular de Econom??a Finanzas y Comercio Exterior.</p>
            </div>
            <div class="row text-center">
                <a href="#portfolio" class="page-scroll btn btn-xl">Ver premios</a>
            </div>
            <div class="row text-justify">
                <h4>Plazos e Inscripci??n</h4><br>
                <p>El plazo m??ximo para presentar los proyectos es el 31 de agosto. </p>
                <ul>
                    <li>Inicio de plazo para enviar las propuestas: <strong>3 de agosto.</strong> </li>
                    <li>Cierre de plazo para enviar las propuestas: <strong>hasta el 30 de Septiembre.</strong> </li>
                    <li>Publicaci??n de los finalistas: <strong>29 de Noviembre.</strong> </li>
                    <li>Cierre de votaciones: <strong>16 de Noviembre.</strong> </li>
                    <li>Publicaci??n de los ganadores: <strong>19 de Diciembre.</strong> </li>
                </ul>
            </div>
            <div class="row text-justify">
                <h4>Proceso de Selecci??n</h4>
                <ol>
                    <li>Los participantes tienen que <strong>enviar su propuesta</strong>  a trav??s de la p??gina de inscripci??n del Concurso de Emprendedores antes del 31 de agosto. Los interesados deber??n enviar un documento con su proyecto desarrollado y completar un formulario electr??nico con sus datos y direcci??n de correo electr??nico, a trav??s del que se podr??n comunicar con la escuela. (Es necesario que los participantes expliquen brevemente en qu?? consiste su proyecto y las motivaciones y argumentos por los que creen que deben ganar el premio. Es muy importante que todos los asistentes destaquen el valor diferencial de su propuesta y qu?? valor aporta al mercado.)</li>
                    <li> <strong>Primera ronda de Valoraci??n.</strong>  El jurado, formado por El Ministerio del Poder Popular de Econom??a Finanzas y Comercio Exterior y las empresas colaboradoras del concurso, decidir?? los proyectos <strong>finalistas</strong> . Estos ser??n publicados en la web el d??a <strong>29 de Noviembre</strong>  para que sean sometidos a valoraci??n social. </li>
                    <li>Los finalistas deber??n hacer promoci??n de sus proyectos a trav??s de las redes sociales para conseguir el m??ximo de votos posibles hasta el <strong>16 de Noviembre.</strong>  </li>
                    <li> <strong>Segunda Ronda de Valoraci??n.</strong>  El Jurado har?? un recuento de las votaciones sociales de los proyectos y escoger?? a los ganadores entre los m??s votados, teniendo tambi??n en cuenta criterios como <strong>la creatividad, la innovaci??n, el uso de las nuevas tecnolog??as, la viabilidad, el valor social y las oportunidades de mercado y crecimiento del proyecto.  </strong> </li>
                    <li>El Jurado har?? p??blicos los ganadores el d??a 19 de Diciembre en la p??gina del <a href="#services">Concurso de Emprendedores</a>  y a trav??s de la p??gina de Facebook y Twitter de El Ministerio del Poder Popular de Econom??a Finanzas y Comercio Exterior . </li>
                </ol>
            </div>
            <div class="row text-justify">
                <h4>Requisitos</h4>
                <ol>
                    <li>Los proyectos presentados han de <strong>ser viables</strong>  t??cnica, econ??mica y financieramente y tener un marcado <strong>car??cter innovador</strong> . La idea podr?? abarcar cualquier ??mbito empresarial, si bien se dar?? mayor relevancia a aquellos proyectos emprendedores con base tecnol??gica. </li>
                    <li> Se valorar??n aspectos como la sostenibilidad, el respeto al medio ambiente, el uso de las nuevas tecnolog??as, la creaci??n de empleo y el impacto en la comunidad en la que se desarrolle el proyecto. </li>
                    <li>S??lo se admitir??n ideas de negocio o proyectos en <strong>fase embrionaria.</strong>  </li>
                    <li>Para el acceso al concurso los participantes deber??n: 
                        <ul>
                            <li>Cubrir el formulario con sus datos personales.</li>
                            <li>Exponer brevemente en qu?? consiste su proyecto.</li>
                            <li>Redactar las motivaciones que les llevan a presentar su iniciativa, as?? como los m??ritos por los que creen que debe ser premiados.</li>
                        </ul> 
                    </li>
                    
                </ol>
            </div>
            <div class="row text-justify">
                <h4>Jurado y Criterios de Valoraci??n</h4><br>
                <p>Los proyectos ser??n valorados por un Jurado formado por El Ministerio del Poder Popular de Econom??a Finanzas y Comercio Exterior y las empresas colaboradoras del concurso. Los aspectos que m??s contar??n a la hora de evaluar los proyectos son:</p>
                <ul>
                    <li>Las votaciones Sociales.</li>
                    <li>La innovaci??n y la creatividad en procesos y productos.</li>
                    <li>El uso de las nuevas tecnolog??as.</li>
                    <li>Un modelo de negocio sostenible y con potencial de crecimiento.</li>
                    <li>Un valor social de la propuesta.</li>
                    <li>La viabilidad del proyecto.</li>
                    <li>Las oportunidades de mercado.</li>
                    <li>La capacidad de comunicaci??n del candidato para comunicar la idea.</li>
                    <li>El manejo de las redes sociales a trav??s de la promoci??n de su proyecto.</li>
                    <li>La trayectoria en el ??mbito sobre el que versa su proyecto.</li> 
                </ul>
            </div>
            <div class="row text-justify">
                <h4>Confidencialidad y Difusi??n</h4><br>
                <p>La escuela de negocios El Ministerio del Poder Popular de Econom??a Finanzas y Comercio Exterior se compromete a mantener la confidencialidad sobre aquellos proyectos que no resulten premiados. Asimismo la escuela de negocios El Ministerio del Poder Popular de Econom??a Finanzas y Comercio Exterior podr?? difundir libremente el concurso e informar sobre sus participantes, pudiendo citar a los autores de dichos proyectos.</p>
                
            </div>
            <div class="row text-justify">
                <h4>Aceptaci??n de las Bases</h4><br>
                <p>La participaci??n en el Concurso de Emprendedores implica la <strong>??ntegra aceptaci??n de las presentes bases y el fallo del jurado</strong> , cuya interpretaci??n corresponde a los integrantes del mismo. </p>
                <br>
                <p>Cualquier incumplimiento de los plazos o procedimientos reflejados en estas bases privar?? al participante del disfrute de los premios.</p>
                
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">CATEGOR??AS</h2>
                </div>
            </div>
            <div class="row text-justify">
                <p>Este concurso nace con la voluntad de apoyar a emprendedores con proyectos propios, ayud??ndoles en su desarrollo con mentoring y formaci??n especializada. Esta es una oportunidad para dar visibilidad a tu proyecto, impulsar nuevos negocios y formarte en un entorno innovador y vanguardista.  </p>
            </div>
            <div class="row">
                <ul>
                    <li>AGRICULTURA, GANADER??A Y PESCA</li>
                    <li>MANUFACTURA</li>
                    <li>SERVICIOS DE DISTRIBUCI??N DE AGUA, GESTI??N DE DESECHOS Y ACTIVIDADES DE SANEAMIENTO</li>
                    <li>TRANSPORTE Y ALMACENAMIENTO</li>
                    <li>ACTIVIDADES DE ALOJAMIENTO, POSADAS, HOTELES</li>
                    <li>SERVICIOS DE ALIMENTOS Y BEBIDAS, RESTAURANTES Y PUESTOS DE COMIDA</li>
                    <li>COMUNICACIONES, INFORMACI??N, AUDIOVISUALES, MEDIOS DIGITALES</li>
                    <li>ACTIVIDADES FINANCIERAS (CONSULTOR??A, TRADING, CRIPTOMONEDAS)</li>
                    <li>SERVICIOS PROFESIONALES</li>
                    <li>SERVICIOS DE SOPORTE (ADMINISTRATIVO, SEGURIDAD Y OTROS)</li>
                    <li>SERVICIOS DE ENSE??ANZA, FORMACI??N, CAPACITACI??N</li>
                    <li>SERVICIOS DE ATENCI??N DE LA SALUD</li>
                    <li>ENTRETENIMIENTO, RECREACI??N Y ARTE</li>
                    <li>OTROS SERVICIOS PROFESIONALES (OFICIOS ESPECIALIZADOS Y T??CNICOS)</li>
                    <li>ACTIVIDADES Y SERVICIOS A LAS FAMILIAS Y MASCOTAS</li>
                    <li>COMERCIO (ESTABLECIMIENTOS, DISTRIBUIDORAS Y OTROS)</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Clients Aside 
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>
    -->    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">ELIGE TU CATEGOR??A Y PARTICIPA</h2>
                    <h3 class="section-subheading text-muted" style="color:#ffff">Las descripciones proporcionadas sobre el proyecto ser??n publicadas literalmente en el caso de ser seleccionados como finalistas. Una vez recibidos no se admiten cambios. Los proyectos que no est??n presentados con la ortograf??a y redacci??n adecuada no ser??n evaluados. Recomendamos revisar la informaci??n antes de enviar.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    {{Form::open(['route'=>'inscripcionConcurso.store','method'=>'POST','id'=>'contactFormConcurso', 'enctype' => 'multipart/form-data']) }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nombre</label>
                                    <input name="name" type="text" class="form-control" placeholder="Tu Nombre *" id="name" required data-validation-required-message="Por favor ingresa tu nombre.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input name="email" type="email" class="form-control" placeholder="Tu Email *" id="email" required data-validation-required-message="Por favor ingresa tu email.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="">C??dula</label>
                                    <input name="cedula" type="text" class="form-control" placeholder="C??dula *" id="cedula" required data-validation-required-message="Por favor ingresa tu C??dula.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                <label for="">Selecciona una categor??a</label>
                                    {!! Form::select('entrepreneurship_economicactivity_id',$category,null,['class'=>'form-control', 'id'=>'entrepreneurship_economicactivity_id','placeholder'=>'Selecciona una categor??a', 'required'=>'true', 'data-validation-required-message' => 'Por favor Selecciona una categor??a.']) !!}
                                    
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="">Sobre ti y tu equipo:</label>
                                    <textarea name="sobre_equipo" class="form-control" placeholder="Sobre ti y tu equipo" id="sobre_equipo" required data-validation-required-message="Por favor ingresa Sobre ti y tu equipo."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="">Necesidades que cubre:</label>
                                    <textarea name="necesidades_cubre" class="form-control" placeholder="Necesidades que cubre" id="necesidades_cubre" required data-validation-required-message="Por favor ingresa las Necesidades que cubre."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="">Propuesta de valor:</label>
                                    <textarea name="propuesta_valor" class="form-control" placeholder="Propuesta de valor" id="propuesta_valor" required data-validation-required-message="Por favor ingresa Propuesta de valor."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="">Cantidad de Clientes</label>
                                    <input name="cant_clientes" type="number" class="form-control" placeholder="Cantidad de Clientes *" id="cant_clientes" required data-validation-required-message="Por favor ingresa Cantidad de Clientes.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Apellido</label>
                                    <input name="last_name" type="text" class="form-control" placeholder="Tu Apellido *" id="last_name" required data-validation-required-message="Por favor ingresa tu apellido.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="">Tel??fono</label>
                                    <input name="tlf" type="tel" class="form-control" placeholder="Tel??fono *" id="tlf" required data-validation-required-message="Por favor ingresa tu Tel??fono.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="">Nombre de tu startup o Emprendimiento</label>
                                    <input name="nombre_empre" type="text" class="form-control" placeholder="Nombre de tu startup *" id="nombre_empre" required data-validation-required-message="Por favor ingresa el Nombre de tu startup.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="">Define tu startup o Emprendimiento:</label>
                                    <textarea name="define_empre" class="form-control" placeholder="Define tu startup o Emprendimiento" id="define_empre" required data-validation-required-message="Por favor ingresa Define tu startup."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="">Diferencias de tu startup o Emprendimiento respecto a la competencia:</label>
                                    <textarea name="deferencia_empre" class="form-control" placeholder="Diferencias de tu startup o Emprendimiento respecto a la competencia" id="deferencia_empre" required data-validation-required-message="Por favor ingresa Diferencias de tu startup o Emprendimiento respecto a la competencia."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="">Modelo de negocio:</label>
                                    <textarea name="modelo_negocio" class="form-control" placeholder="Modelo de negocio" id="modelo_negocio" required data-validation-required-message="Por favor ingresa Modelo de negocio."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="">Cantidad de Empleados</label>
                                    <input name="cant_empleados" type="number" class="form-control" placeholder="Cantidad de Empleados *" id="cant_empleados" required data-validation-required-message="Por favor ingresa Cantidad de Empleados.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="">Mercado</label>
                                    <input name="mercado" type="text" class="form-control" placeholder="mercado *" id="mercado" required data-validation-required-message="Por favor ingresa mercado.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Facil??tanos una imagen de presentaci??n del producto de tu Startup o Emprendimiento:</label>
                                    <input name="img_prod" type="file" class="form-control" placeholder="imagen de tu producto" id="img_prod" required data-validation-required-message="Por favor ingresa imagen de tu producto.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">INSCR??BETE</button>
                            </div>
                        </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span >2022. Emprender Juntos, Ministerio del Poder Popular de Econom??a Finanzas y Comercio Exterior</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/JuntosEmprender" target='_blank'><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://emprenderjuntos.gob.ve/contactanos#" target='_blank'><i class="fa fa-facebook"></i></a>
                    </ul>
                </div>
                <div class="col-md-4">
                    <!--ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul-->
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <p>
                                    <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                                <ul class="list-inline">
                                    <li>Date: July 2014</li>
                                    <li>Client: Round Icons</li>
                                    <li>Category: Graphic Design</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Heading</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
                                <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                                <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                                <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">
                                <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">
                                <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
                                <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It???s a beautiful template that???s designed with the Bootstrap framework in mind.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('js/contact_me.js') }}"></script>

    <!-- Theme JavaScript -->
    <script src="{{ asset('js/agency.min.js') }}"></script>

</body>

</html>
