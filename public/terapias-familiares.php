<?php
    $pageType = "inner";
    $page = "terapias-familiares";
    require_once("../private/initialize.php"); 
    include(SHARED_PATH . "/header.php");
?>

<?php 
    if( is_post_request() ) {
        $optionSelected = $_POST["option-selected"];
        $message = $_POST["message"];
        $name = $_POST["name"];
        $email = $_POST["email"];

        $to = "info@terapiaconpablo.com";
        $subject = "Nuevo contacto Terapia con Pablo";
        $emailBody = "Hola Pablo, te han contactado a través de tu página. \r\nSu nombre es " . $name . " y quiere hacer una Terapia familiar del tipo ' " . $optionSelected . " '. \r\nTiene el siguiente comentario: ' " . $message . " '. \r\nSu correo es: " . $email;
        
        echo "<div id='success-message' class='form-sent-wrapper'><div class='form-success-message'><h2>Mensaje enviado</h2><p> " . $name . " pronto me pondré en contacto contigo.</p></div></div>";

        // Send email
        mail($to, $subject, $emailBody);
    } 
?>

<!-- Section: Terapias familiares -->
<section id="terapias-grupal-home" class="normal-section">

    <div class="section-wrapp main-content">
        
        <div class="text-left">

            <div class="bread-crumbs">
                <ul class="bread-crumbs-menu">
                    <li class="nav-button"><a href="index.php#terapias">Terapias<span class="page-indicator"></span></a></li>
                    <li> > </li>
                    <li class="nav-button button-selected"><a>Familiares</a></li>
                </ul>
            </div>

            <p>
                <h2>Terapias familiares</h2>
                A lo largo del ciclo vital de una familia, o de una pareja surgen problemas de convivencia, conflictos, problemas de comunicación e incluso de relación. Estas situaciones suelen dar lugar al distanciamiento y a un deterioro importante del vínculo con nuestros seres queridos.
                <br>
                <br> 
                La terapia  familiar se dirige a familias y parejas que quieren recuperar la armonía de su relación y que están dispuestas a trabajar en equipo.
                <br>
                <br>
                Aquí podréis resolver vuestros conflictos sin que escalen como en casa, mejorar la comunicación y desactivar las tensiones de la convivencia.
            </p>

        </div>

        <div id="terapias-grupales-key-image" class="special-key-image"></div>
    </div>
</section>
<!-- Section: Terapias familiares ends -->

<!-- Section: Terapia familiar 1 -->
<section id="terapia-familiar-1" class="special-section">

    <div class="section-wrapp main-content">

        <div class="img-special img-special-right">
            <img src="_media/img-terapia-familiar-1.jpg">
        </div>

        <div class="text-special text-special-left">    
            <h2>Terapia familiar</h2>
            <p>
                El bienestar de una família se puede ver alterado por múltiples motivos que pueden ser inherentes o externos a la família. Cuando esto ocurre la resolución de conflictos resulta prácticamente imposible y la convivencia se nos hace cuesta arriba. La terapia familiar ofrece un espacio seguro donde resolver conflictos de forma controlada, mejorar la comunicación y recuperar la armonía.
            </p>
        </div>
    
    </div>

</section>
<!-- Section: Terapia familiar 1 ends -->

<!-- Section: Terapia familiar 2 -->
<section id="terapia-familiar-2" class="special-section">

    <div class="section-wrapp main-content">

        <div class="img-special img-special-left">
            <img src="_media/img-terapia-familiar-2.jpg">
        </div>

        <div class="text-special text-special-right">    
            <h2>Terapia de pareja</h2>
            <p>
                Las dificultades dentro de una relación de pareja son relativamente comunes y aparecen en momentos vitales distintos. El malestar que generan se manifiesta en aspectos relativos a la comunicación, el afecto y la sexualidad. La finalidad de esta terapia es ayudar a todo tipo de parejas a mejorar su capacidad de apoyo mutuo, sanar heridas y aprender a responsabilizarse de los problemas individuales y comunes.
            </p>
        </div>
    
    </div>

</section>
<!-- Section: Terapia familiar 2 ends -->

<!-- Section: Formulario de contacto -->
<section id="contact-form" class="normal-section">
    <div class="section-wrapp main-content">
        <div>
            <h2>¿Tienes alguna duda?</h2>
            <p>Cuéntamela, veamos en qué puedo ayudarte.</p>

             <form action="<?php echo url_for("terapias-grupales.php") ?>" method="post">
                <label for="option-selected"><strong>¿Qué tipo de terapia te interesa?</strong></label><br>
                <input type="radio" name="option-selected" id="option-selected" value="Terapia familiar" id="terapia-familiar"> Terapia familiar <br>
                <input type="radio" name="option-selected" value="Terapia de pareja" id="terapia-de-pareja"> Terapia de pareja<br>
                <input type="radio" name="option-selected" value="No lo tengo claro" id="no-sabe"> No lo tengo claro <br>
                <br>
                <br>
                <label for="message"><strong>¿Por qué quieres hacer terapia?</strong></label><br>
                <textarea class="input-form" name="message" id="message" cols="50" rows="5" placeholder="cuéntame un poco de tus motivos (opcional)"></textarea>
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

