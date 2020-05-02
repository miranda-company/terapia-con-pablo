<?php
    require_once("../private/initialize.php"); 
    include(SHARED_PATH . "/header.php");
?>

<?php 
    if( is_post_request() ) {
        $optionSelected = $_POST["option-selected"];
        $message = $_POST["message"];
        $name = $_POST["name"];
        $email = $_POST["email"];

        $to = "rodolfo.mcompany@gmail.com";
        $subject = "Nuevo contacto Terapia con Pablo";
        $emailBody = "Hola Pablo, te han contactado a través de tu página. \r\nSu nombre es " . $name . " y quiere hacer una terapia individual del tipo ' " . $optionSelected . " '. \r\nTiene el siguiente comentario: ' " . $message . " '. \r\nSu correo es: " . $email;
        
        echo "<div class='form-sent-wrapper'><div class='form-sent-message'><h2>Gracias</h2><p>Mensaje enviado, " . $name . ". Pronto me pondré en contacto contigo.</p></div></div>";

        // Send email
        mail($to, $subject, $emailBody);
    } 
?>

<!-- Section: Terapias individuales -->
<section id="terapias-individuales-home" class="normal-section">

    <div class="section-wrapp main-content">
        
        <div class="text-left">

            <div class="bread-crumbs">
                <ul class="bread-crumbs-menu">
                    <li class="nav-button"><a href="index.php#terapias">Terapias<span class="nav-indicator"></span></a></li>
                    <li> > </li>
                    <li class="nav-button button-selected"><a>Individuales</a></li>
                </ul>
            </div>

            <p>
                <h2>Terapias individuales</h2>
                En muchas ocasiones afrontamos situaciones difíciles que nos generan malestar. Ansiedad, depresión, fobias, procesos de duelo, crisis existenciales o adaptación a una nueva situación son algunos de los malestares más comunes. 
                <br>
                <br> 
                El propósito de estas terapias es mejorar la calidad de vida de las personas a partir del desarrollo del autoconocimiento. A través de un acompañamiento personalizado, conocerás modos diferentes de pensar, sentir y actuar para lograr un buen equilibrio emocional. 
                <br>
                <br>
                Sea cual sea tu problema, te ofrezco un espacio de respeto, apoyo y confianza en el que podrás expresarte libremente.
            </p>

        </div>

        <div id="terapias-individuales-key-image" class="key-image">
            <img src="_media/img-terapias-individuales.jpg" alt="Terapias individuales con Pablo Rodríguez" title="Terapias individuales con Pablo">
        </div>
    </div>
</section>
<!-- Section: Terapias individuales ends -->

<!-- Section: Terapia individual 1 -->
<section id="terapia-individual-1" class="special-section">

    <div class="section-wrapp main-content">

        <div class="img-special img-special-right">
            <img src="_media/img-terapia-individual-1.jpg">
        </div>

        <div class="text-special text-special-left">    
            <h2>Terapia online</h2>
            <p>
                El propósito principal de esta modalidad es ofrecerte un acompañamiento psicológico profesional allá donde estés. Respecto a la terapia presencial, la terapia online no presenta ninguna diferencia. Es igual de efectiva y en algunos casos ayuda a reforzar el compromiso con el tratamiento. Esta modalidad es ideal para ti si tienes la movilidad reducida, no puedes trasladarte a mi consulta en Ibiza o si tienes dificultades para seguir con tu terapia.
            </p>
        </div>
    
    </div>

</section>
<!-- Section: Terapia individual 1 ends -->

<!-- Section: Terapia individual 2 -->
<section id="terapia-individual-2" class="special-section">

    <div class="section-wrapp main-content">

        <div class="img-special img-special-left">
            <img src="_media/img-terapia-individual-2.jpg">
        </div>

        <div class="text-special text-special-right">    
            <h2>Trastornos del ánimo</h2>
            <p>
                La depresión, la ansiedad, la tristeza o el desánimo son emociones que cuando se apoderan de nosotros nos bloquean, convirtiendo nuestra vida en una tarea árdua. Los trastornos del ánimo son alteraciones de nuestro estado anímico que afectan nuestra vida diaria. Para estos casos, propongo una terapia personalizada enfocada en mejorar tu salud emocional para que puedas recuperar la seguridad y la autoconfianza.
            </p>
        </div>
    
    </div>

</section>
<!-- Section: Terapia individual 2 ends -->

<!-- Section: Terapia individual 3 -->
<section id="terapia-individual-3" class="special-section">

    <div class="section-wrapp main-content">

        <div class="img-special img-special-right">
            <img src="_media/img-terapia-individual-3.jpg">
        </div>

        <div class="text-special text-special-left">    
            <h2>Procesos de duelo</h2>
            <p>
            Una pérdida sea del tipo que sea, es una de las experiencias más duras que afronta el ser humano. En ocasiones el duelo asociado a la pérdida se prolonga más de lo habitual en el tiempo impidiendonos seguir con nuestra vida. El acompañamiento psicológico en procesos de duelo es mi especialidad. Sea cual sea tu pérdida, en esta terapia voy a estar a tu lado para que logres sobreponerte al sufrimiento. Aprender a sentir la pérdida con menos dolor te ayudará a aceptar la situación y a seguir con tu día a día.
            </p>
        </div>
    
    </div>

</section>
<!-- Section: Terapia individual 3 ends -->

<!-- Section: Terapia individual 4 -->
<section id="terapia-individual-4" class="special-section">

    <div class="section-wrapp main-content">

        <div class="img-special img-special-left">
            <img src="_media/img-terapia-individual-4.jpg">
        </div>

        <div class="text-special text-special-right">    
            <h2>Psicooncología</h2>
            <p>
            Esta disciplina se ocupa de respaldar el bienestar de las personas enfermas de cáncer y de sus familias para maximizar su calidad de vida durante y después el tratamiento. Esta terapia la doy en la sede de la <a href="https://www.aecc.es/es" target="_blank" title="Asociación Española Contra el Cáncer">Asociación Española Contra el Cáncer</a> en Ibiza. La intención es facilitar una atención psicológica especializada junto con los recursos propios de la AECC para cada caso particular.
            </p>
        </div>
    
    </div>

</section>
<!-- Section: Terapia individual 4 ends -->

<!-- Section: Terapia individual 5 -->
<section id="terapia-individual-5" class="special-section">

    <div class="section-wrapp main-content">

        <div class="img-special img-special-right">
            <img src="_media/img-terapia-individual-5.jpg">
        </div>

        <div class="text-special text-special-left">    
            <h2>Dificultades sexuales</h2>
            <p>
            Los trastornos o las limitaciones sexuales se pueden manifestar en forma de: disfunción eréctil (impotencia), vaginismo, dispareunia, anorgasmia (dificultad o imposibilidad de llegar al orgasmo), falta de deseo sexual, hipersersexualidad, adicción al sexo o parafilia (hábitos inusuales). Esta terapia se basa en la educación sexual y la introspección. Es indicada para ti si te reconoces en alguno des estos malestares o si tienes conflictos de orientación o identidad sexual.
            </p>
        </div>
    
    </div>

</section>
<!-- Section: Terapia individual 5 ends -->

<!-- Section: Terapia individual 6 -->
<section id="terapia-individual-6" class="special-section">

    <div class="section-wrapp main-content">

        <div class="img-special img-special-left">
            <img src="_media/img-terapia-individual-6.jpg">
        </div>

        <div class="text-special text-special-right">    
            <h2>Terapia adolescentes</h2>
            <p>
            La adolescencia es una etapa fundamental para el desarrollo del ser humano. También puede ser una fase especialmente difícil en la surgen numerosos conflictos familiares, trastornos del estado de ánimo o problemas de relación. El propósito de esta terapia es ayudar al adolescente a consolidar su identidad, relacionarse de forma sana consigo mismo y gestionar sus emociones para evitar conflictos en casa, el colegio o con los amigos. Dependiendo de cada caso, las sesiones pueden implicar la presencia de otras personas y adaptarse a necesidades específicas.
            </p>
        </div>
    
    </div>

</section>
<!-- Section: Terapia individual 6 ends -->

<!-- Section: Formulario de contacto -->
<section id="contact-form" class="normal-section">
    <div class="section-wrapp main-content">
        <div>
            <h2>¿Tienes alguna duda?</h2>
            <p>Cuéntamela, veamos en qué puedo ayudarte.</p>

             <form action="<?php echo url_for("terapias-individuales.php") ?>" method="post">
                <label for="option-selected"><strong>¿Qué tipo de terapia te interesa?</strong></label><br>
                <input type="radio" name="option-selected" value="Terapia online" id="terapia-online"> Terapia online <br>
                <input type="radio" name="option-selected" value="Trastornos del ánimo" id="trastornos-del-animo"> Trastornos del ánimo<br>
                <input type="radio" name="option-selected" value="Procesos de duelo" id="procesos-de-duelo"> Procesos de duelo <br>
                <input type="radio" name="option-selected" value="Psicooncología" id="psicooncologia"> Psicooncología <br>
                <input type="radio" name="option-selected" value="Dificultades sexuales" id="dificultades-sexuales"> Dificultades sexuales <br>
                <input type="radio" name="option-selected" value="Terapia adolescentes" id="terapia-adolescentes"> Terapia adolescentes <br>
                <input type="radio" name="option-selected" value="No lo tengo claro" id="no-sabe"> No lo tengo claro <br>
                <br>
                <br>
                <label for="message"><strong>¿Por qué quieres hacer terapia?</strong></label><br>
                <textarea class="input-form" name="message" id="mensaje" cols="50" rows="5" placeholder="cuéntame un poco de tus motivos (opcional)"></textarea>
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

<?php include(SHARED_PATH . "/footer.php"); ?>

