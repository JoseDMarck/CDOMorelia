    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contactanos</h2>
            <h3 class="section-subheading text-muted" style="color: #FFF !important;">Tel. (443) 3 14 00 01</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" class="contacto_form" name="sentMessage" novalidate action="<?php echo get_template_directory_uri(); ?>/contactoServices/ContactoService.php">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Nombre *" required data-validation-required-message="Nombre">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Correo *" required data-validation-required-message="Dirección de correo">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Teléfono *" required data-validation-required-message="Número de teléfono">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Tu mensaje *" required data-validation-required-message="Tu mensaje"></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar mensaje</button>
                </div>
              </div>
            </form>
          </div>


        </div>
      </div>
    </section>


<div class="contenedorMensajeCorreo">
    <div class="msj">El correo se ha enviado correctamente</div>
</div>