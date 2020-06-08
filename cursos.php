<?php
    $pageType = "inner";
    $page = "cursos";
    require_once("_shared/initialize.php"); 
    include("_shared/header.php");
?>

<?php 
    if( is_post_request() ) {
        $optionSelected = $_POST["option-selected"];
        $message = $_POST["message"];
        $name = $_POST["name"];
        $email = $_POST["email"];

        $to = "info@terapiaconpablo.com";
        $subject = "Nuevo contacto Terapia con Pablo";
        $emailBody = "Hola Pablo, te han contactado a través de tu página. \r\nSu nombre es " . $name . " y quiere hacer un Curso del tipo ' " . $optionSelected . " '. \r\nTiene el siguiente comentario: ' " . $message . " '. \r\nSu correo es: " . $email;
        
        echo "<div id='success-message' class='form-sent-wrapper'><div class='form-success-message'><h2>Mensaje enviado</h2><p> " . $name . " pronto me pondré en contacto contigo.</p></div></div>";

        // Send email
        mail($to, $subject, $emailBody);
    } 
?>

<!-- Section: Cursos -->
<section id="terapias-individuales-home" class="normal-section">

    <div class="section-wrapp main-content">
        
        <div class="text-left">

            <div class="bread-crumbs">
                <ul class="bread-crumbs-menu">
                    <li class="nav-button"><a href="https://www.terapiaconpablo.com/#formacion">Formación<span class="page-indicator"></span></a></li>
                    <li> > </li>
                    <li class="nav-button button-selected"><a>Cursos</a></li>
                </ul>
            </div>

            <p>
                <h2>Cursos</h2>
                La psicoterapia me ha llevado a trabajar en hospitales, centros de família y asociaciones de varios tipos. Paralelamente, mi perfil más académico me ha llevado a dar conferencias dentro y fuera del país acumulando un conocimiento que estoy más que dispuesto a compartir.
                <br>
                <br> 
                Estos cursos son parte de la oferta formativa que ido construyendo con los años. Son cursos que me han funcionado muy bien y que se pueden adaptar a diferentes públicos.
            </p>

        </div>

        <div id="cursos-key-image" class="special-key-image"></div>
    </div>
</section>
<!-- Section: Cursos ends -->

<!-- Section: Cursos 1 -->
<section id="cursos-1" class="special-section">

    <div class="section-wrapp main-content">

        <div class="img-special img-special-right">
            <img src="_media/img-cursos-1.jpg">
        </div>

        <div class="text-special text-special-left">    
            <h2>Comunicación de malas noticias</h2>
            <p>
                Uno de las cuestiones sensibles que afronta a diario el personal sanitario es la comunicación de malas noticias, especialmente en la relación de ayuda a pacientes. El propósito de este curso es aprender a comunicarnos de forma eficaz para aliviar el impacto emocional de la mala noticia sobre pacientes ayudándoles a integrar la nueva situación. A partir de una metodología teórico-práctica veremos los recursos más eficaces para comunicar la adversidad.
            </p>
        </div>
    
    </div>

</section>
<!-- Section: Cursos 1 ends -->

<!-- Section: Cursos 2 -->
<section id="cursos-2" class="special-section">

    <div class="section-wrapp main-content">

        <div class="img-special img-special-left">
            <img src="_media/img-cursos-2.jpg">
        </div>

        <div class="text-special text-special-right">    
            <h2>Comunicación en la relación de ayuda</h2>
            <p>
                Este curso se dirige a profesionales implicados en la relación de ayuda: personal del ámbito social, sanitario o de la psicología. Debido a nuestra labor profesional nos relacionamos constantemente con personas que se encuentran en situación de vulnerabilidad. El objetivo de este curso es aprender a promover cambios en las personas con las que trabajamos. A partir de un enfoque teórico-práctico, veremos algunas estrategias de comunicación para establecer el vínculo, como la entrevista motivacional.
            </p>
        </div>
    
    </div>

</section>
<!-- Section: Cursos 2 ends -->

<!-- Section: Cursos 3 -->
<section id="cursos-3" class="special-section">

    <div class="section-wrapp main-content">

        <div class="img-special img-special-right">
            <img src="_media/img-cursos-3.jpg">
        </div>

        <div class="text-special text-special-left">    
            <h2>Cohesión y dinámicas de equipo</h2>
            <p>
                Un equipo es un grupo de personas que trabajan en conjunto para lograr objetivos comunes. La cohesión, la asertividad y la motivación son piezas clave para su buen funcionamiento. Este es un curso práctico tanto para líderes como para equipos. Por un lado veremos las pautas para un liderazgo sano, basado en la asertividad y la motivación; y por otro, llevaremos a cabo diferentes dinámicas de equipo para trabajar la cohesión, la asertividad y la resolución de conflictos a nivel de equipo.
            </p>
        </div>
    
    </div>

</section>
<!-- Section: Cursos 3 ends -->

<!-- Section: Cursos 4 -->
<section id="cursos-4" class="special-section">

    <div class="section-wrapp main-content">

        <div class="img-special img-special-left">
            <img src="_media/img-cursos-4.jpg">
        </div>

        <div class="text-special text-special-right">    
            <h2>Psicoterapia existencial</h2>
            <p>
                La psicoterapia existencial es un enfoque filosófico que considera que los problemas y las dificultades de las personas son síntomas del desempeño de la vida en vez de indicadores de salud. Por lo tanto, su finalidad es aumentar la comprensión de la propia existencia a la persona que la vive. En este curso nos familiarizaremos con las técnicas y estrategias de la psicoterapia existencial de Irvin Yalom y la logoterapia de Viktor Frankl. Pondremos en práctica estas estrategias mediante juegos de rol y analizaremos casos clínicos abordados desde este enfoque. Este curso es especialmente beneficioso para profesionales de la salud mental que desarrollan su labor como psicoterapeutas.
            </p>
        </div>
    
    </div>

</section>
<!-- Section: Cursos 4 ends -->

<!-- Section: Cursos 5 -->
<section id="cursos-5" class="special-section">

    <div class="section-wrapp main-content">

        <div class="img-special img-special-right">
            <img src="_media/img-cursos-5.jpg">
        </div>

        <div class="text-special text-special-left">    
            <h2>Intervención en procesos de duelo</h2>
            <p>
                El acompañamiento en el duelo es una psicoterapia cada vez más demandada y requiere de una capacitación profesional específica. Este curso estudia los principales modelos teóricos así como los criterios diagnósticos del duelo. En este curso también aprenderemos y practicaremos estrategias de intervención en la psicoterapia de duelo para entender la complejidad de este tipo de intervención.
            </p>
        </div>
    
    </div>

</section>
<!-- Section: Cursos 5 ends -->

<!-- Section: Cursos 6 -->
<section id="cursos-6" class="special-section">

    <div class="section-wrapp main-content">

        <div class="img-special img-special-left">
            <img src="_media/img-cursos-6.jpg">
        </div>

        <div class="text-special text-special-right">    
            <h2>Psicología de emergencias y catástrofes</h2>
            <p>
                Esta rama de la psicología se viene desarrollando desde los años 90 con el fin de aliviar el sufrimiento inesperado de las víctimas y sus familiares en catástrofes, crisis, emergencias o desastres naturales. En este curso aprenderemos técnicas y estrategias dirigidas a la intervención en situaciones de emergencias. Va dirigido a profesionales de la psicología así como profesionales de distintos equipos de intervención en emergencias como: personal médico, Fuerzas y Cuerpos de Seguridad del Estado, cuerpo de bomberos o miembros de Protección Civil.
            </p>
        </div>
    
    </div>

</section>
<!-- Section: Cursos 6 ends -->

<!-- Section: Formulario de contacto -->
<section id="contact-form" class="normal-section">
    <div class="section-wrapp main-content">
        <div>
            <h2>¿Necesitas más información?</h2>
            <p>Veamos en qué puedo ayudarte.</p>

             <form action="<?php echo url_for("terapias-individuales.php") ?>" method="post">
                <label for="option-selected"><strong>¿Qué tipo de curso te interesa?</strong></label><br>
                <input type="radio" name="option-selected" id="option-selected" value="Comunicación de malas noticias" id="comunicacion-de-malas-noticias"> Comunicación de malas noticias <br>
                <input type="radio" name="option-selected" value="Comunicación en la relación de ayuda" id="comunicacion-en-la-relacion-de-ayuda"> Comunicación en la relación de ayuda<br>
                <input type="radio" name="option-selected" value="Cohesión y dinámicas de equipo" id="cohesion-y-dinamicas-de-equipo"> Cohesión y dinámicas de equipo <br>
                <input type="radio" name="option-selected" value="Psicoterapia existencial" id="psicoterapia-existencial"> Psicoterapia existencial <br>
                <input type="radio" name="option-selected" value="Intervención en procesos de duelo" id="intervencion-en-procesos-de-duelo"> Intervención en procesos de duelo <br>
                <input type="radio" name="option-selected" value="Psicología de emergencias y catástrofes" id="psicologia-de-emergencias-y-catástrofes"> Psicología de emergencias y catástrofes <br>
                <input type="radio" name="option-selected" value="Necesito un curso a medida" id="necesito-un-curso-a-medida"> Necesito un curso a medida <br>
                <br>
                <br>
                <label for="message"><strong>¿Algún comentario adicional?</strong></label><br>
                <textarea class="input-form" name="message" id="message" cols="50" rows="5" placeholder="aquí tu mensaje (opcional)"></textarea>
                <br>
                <br>
                <label for="name"><strong>Nombre</strong></label><br>
                <input class="input-form" type="text" name="name" id="name" placeholder="ingresa tu nombre" required>
                <br>
                <br>
                <label for="email"><strong>E-mail</strong></label><br>
                <input class="input-form" type="email" name="email" id="email" placeholder="ingresa un e-mail" required>
                <br>
                <br>
                <input class="cta cta-form" type="submit" value="Enviar">
             </form>
        </div>
        
        
    </div>
</section>
<!-- Section: Formulario de contacto ends -->

<?php include("_shared/footer.php"); ?>

