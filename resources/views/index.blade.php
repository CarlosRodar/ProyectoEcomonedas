<!DOCTYPE html>

@extends('layouts.master')
@section('titulo', '')
@section('contenido')



  <!-- CSFR token for ajax call KENDOUI-->
  <meta name="_token" content="{{ csrf_token() }}"/>






  <div class="banner">
      <div class="bg-color">
        <div class="container">
          <div class="row">
            <div class="banner-text text-center">
              <br>
              <div class="text-border">
                <h2 class="text-dec">Eco-Monedas</h2>
              </div>
              <div class="intro-para text-center quote">
                <p class="big-text">!Por un mundo en equilibrio, amo conservo y reciclo!</p>
                <p class="small-text">Reciclar es más que una acción, es el valor de la responsabilidad por preservar los recursos naturales.</p>
              <!--  <a href="#footer" class="btn get-quote">GET A QUOTE</a> -->
              </div>
              <a href="#feature" class="mouse-hover">
                <div class="mouse"></div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!--/ Banner-->

  <!--Feature-->
  <section id="feature" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Las 3R</h2>
            <p>Es una regla para cuidar el medio ambiente, específicamente para reducir el volumen
              de residuos o basura generada. <br>En pocas palabras, las 3R te ayudan a tirar menos basura, ahorrar dinero y ser un consumidor más responsable.</p>
            <hr class="bottom-line">
          </div>
          <div class="feature-info">
            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <h4>Reducir</h4>
                  <p>Se debe tratar de reducir o simplificar el consumo de los productos directos, o sea,
                    todo aquello que se compra y se consume, ya que esto tiene una
                    relación directa con los desperdicios, a la vez que también la tiene con nuestro bolsillo. </p>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-css3"></i>
                </div>
              </div>
            </div>
            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <h4>Reutilizar</h4>
                  <p>Nos anima a tratar de alargar la vida útil de un producto, esto es, antes de tirarlo y sustituirlo
                     por uno nuevo, debemos buscar el modo de repararlo o, de no ser posible, darle otro uso antes del final de su vida.</p>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-drupal"></i>
                </div>
              </div>
            </div>
            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <h4>Reciclar</h4>
                  <p>Consiste en el proceso de someter los materiales a un proceso en el cual se puedan volver a utilizar, reduciendo de
                    forma verdaderamente significativa la utilización de nuevos materiales, y con ello, mas basura en un futuro.</p>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-trophy"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!--/ feature-->

  <!--Organisations-->
  <section id="organisations" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>65%</h3>
              <p>Say NO!!</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>20%</h3>
              <p>Says Yes!!</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>15%</h3>
              <p>Can't Say!!</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-info">
            <hgroup>
              <h3 class="det-txt"> Is inclusive quality education affordable?</h3>
              <h4 class="sm-txt">(Revised and Updated for 2016)</h4>
            </hgroup>
            <p class="det-p">Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Organisations-->
  <!--Cta-->
  <section id="cta-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="text-center">Subscribe Now</h2>
          <p class="cta-2-txt">Sign up for our free weekly software design courses, we’ll send them right to your inbox.</p>
          <div class="cta-2-form text-center">
            <form action="#" method="post" id="workshop-newsletter-form">
              <input name="" placeholder="Enter Your Email Address" type="email">
              <input class="cta-2-form-submit-btn" value="Subscribe" type="submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Cta-->
  <!--work-shop-->
  <section id="work-shop" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Upcoming Workshop</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
          <hr class="bottom-line">
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-html5 color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Mentor HTML5 Workshop</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-css3 color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Mentor CSS3 Workshop</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-joomla color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Mentor Joomla Workshop</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ work-shop-->
  <!--Faculity member-->
  <section id="faculity-member" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Meet Our Faculty Member</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
          <hr class="bottom-line">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Bryan Johnson</p>
              <p class="pm-staff-profile-title">Lead Software Engineer</p>

              <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Bryan Johnson</p>
              <p class="pm-staff-profile-title">Lead Software Engineer</p>

              <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Bryan Johnson</p>
              <p class="pm-staff-profile-title">Lead Software Engineer</p>

              <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Faculity member-->
  <!--Testimonial-->
  <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2 class="white">See What Our Customer Are Saying?</h2>
          <p class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
          <hr class="bottom-line bg-white">
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="text-comment">
            <p class="text-par">"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis sem"</p>
            <p class="text-name">Abraham Doe - Creative Dırector</p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="text-comment">
            <p class="text-par">"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis sem"</p>
            <p class="text-name">Abraham Doe - Creative Dırector</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Testimonial-->


  <!--Courses-->
  <section id="courses" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Conocé cuánto tardan en degradarse los materiales</h2>
          <p>No todos los materiales tardan la misma cantidad de tiempo en degradarse en la naturaleza.<br> Algunos incluso no lo van a lograr nunca del todo.</p>
          <hr class="bottom-line">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/colillas.jpg" class="img-responsive">
            <figcaption>
              <h3>Colillas de cigarrillo</h3>
              <p>Tiempo: 1 a 2 años. <br> El filtro de las colillas de cigarrillo es de acetato de celulosa, lo que demora su degradación.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/chicles.jpg" class="img-responsive">
            <figcaption>
              <h3>Chicles</h3>
              <p>Tiempo: 5 años. <br>Son una mezcla de gomas de resinas naturales, sintéticas, azúcar, aromatizantes y colorantes artificiales que,
                 por efecto del oxígeno se van endureciendo hasta resquebrajarse y desaparecer.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/latas.jpg" class="img-responsive">
            <figcaption>
              <h3>Latas de gaseosa o cerveza</h3>
              <p>Tiempo: 10 años. <br>Es el tiempo que necesitan para convertirse en óxido de hierro.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/latasaerosol.jpg" class="img-responsive">
            <figcaption>
              <h3>Latas de aerosol</h3>
              <p>Tiempo: 30 años. <br> Latas de aerosol, tapitas de botellas (parte metálica) y envases tetra-brik.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/bolsas.jpg" class="img-responsive">
            <figcaption>
              <h3>Bolsas de plástico</h3>
              <p>Tiempo: 150 años. <br>Se degradan más rápido que las botellas, porque son más finas.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/botellas.jpg" class="img-responsive">
            <figcaption>
              <h3>Botellas de plástico</h3>
              <p>Tiempo: 100 a 1.000 años. Botellas de plástico de PVC o PET.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
      </div>
    </div>
  </section>
  <!--/ Courses-->



  <!--Pricing-->
  <section id="pricing" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Our Pricing</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
          <hr class="bottom-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              <h4>Monthly Plan</h4>
              <span class="fa fa-usd curency"></span> <span class="amount">200</span>
            </div>

            <!-- Plean Detail -->
            <div class="price-in mart-15">
              <a href="#" class="btn btn-bg green btn-block">PURCHACE</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              <h4>Quarterly Plan</h4>
              <span class="fa fa-usd curency"></span> <span class="amount">800</span>
            </div>

            <!-- Plean Detail -->
            <div class="price-in mart-15">
              <a href="#" class="btn btn-bg yellow btn-block">PURCHACE</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              <h4>Year Plan</h4>
              <span class="fa fa-usd curency"></span> <span class="amount">1200</span>
            </div>

            <!-- Plean Detail -->
            <div class="price-in mart-15">
              <a href="#" class="btn btn-bg red btn-block">PURCHACE</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Pricing-->



  <!--Contact-->
  <section id="contact" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="header-section text-center">
        <h2>Contáctanos</h2>
        <p>En caso de que usted tenga una duda, puedes consultar para mayor información, <br> nuestro equipo ofrecera una rápida respuesta.</p>
        <hr class="bottom-line">
      </div>
      <div id="sendmessage">Your message has been sent. Thank you!</div>
      <div id="errormessage"></div>
      <form action="" method="post" role="form" class="contactForm">
        <div class="col-md-6 col-sm-6 col-xs-12 left">
          <div class="form-group">
            <input type="text" name="name" class="form-control form" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Dirreción de Correo" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Motivo" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validation"></div>
          </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12 right">
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
            <div class="validation"></div>
          </div>
        </div>

        <div class="col-xs-12">
          <!-- Button -->
          <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">Envíar Correo</button>
        </div>
      </form>
    </div>
  </div>
</section>

  <!--/ Contact-->


  <!--Footer-->
  <footer id="footer" class="footer">
    <div class="container text-center">

      <h3>Start Your Free Trial Now!</h3>

      <form class="mc-trial row">
        <div class="form-group col-md-3 col-md-offset-2 col-sm-4">
          <div class=" controls">
            <input name="name" placeholder="Enter Your Name" class="form-control" type="text">
          </div>
        </div>
        <!-- End email input -->
        <div class="form-group col-md-3 col-sm-4">
          <div class=" controls">
            <input name="EMAIL" placeholder="Enter Your email" class="form-control" type="email">
          </div>
        </div>
        <!-- End email input -->
        <div class="col-md-2 col-sm-4">
          <p>
            <button name="submit" type="submit" class="btn btn-block btn-submit">
            Submit <i class="fa fa-arrow-right"></i></button>
          </p>
        </div>
      </form>
      <!-- End newsletter-form -->
      <ul class="social-links">
        <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-dribbble fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
      </ul>
      ©2016 Mentor Theme. All rights reserved
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Mentor
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade.com</a>
      </div>
    </div>
  </footer>
  <!--/ Footer-->

  <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

  <!-- Bootstrap JavaScript -->
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.1/js/bootstrap.min.js"></script>

  <!-- toastr notifications -->
  {{-- <script type="text/javascript" src="{{ asset('toastr/toastr.min.js') }}"></script> --}}
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <!-- icheck checkboxes -->
  <script type="text/javascript" src="{{ asset('icheck/icheck.min.js') }}"></script>


  <!-- AJAX CRUD operations -->
  <script type="text/javascript">
      // add a new post
      $(document).on('click', '.sesion', function() {
          $('#login').modal('show');
      });
      $('.modal-footer').on('click', '.ingresar', function() {
          $.ajax({
              type: 'POST',
              url: 'inicio',
              data: {
                  '_token': $('input[name=_token]').val(),
                  'email': $('#email').val(),
                  'password': $('#password').val()
              },
              success: function(data) {
                  $('.errorEmail').addClass('hidden');
                  $('.errorPass').addClass('hidden');
                  if (data.errors) {
                      setTimeout(function () {
                          $('#login').modal('show');
                          toastr.error('Error en la Validación!', 'Alerta de Error', {timeOut: 5000});
                      }, 500);

                      if (data.errors.email) {
                          $('.errorEmail').removeClass('hidden');
                          $('.errorEmail').text(data.errors.email);
                      }
                      if (data.errors.password) {
                          $('.errorPass').removeClass('hidden');
                          $('.errorPass').text(data.errors.password);
                      }

                  }else{
                    if (data.errores) {
                          setTimeout(function () {
                              $('#login').modal('show');
                              toastr.error('Error en la Validación!', 'Alerta de Error', {timeOut: 5000});
                          }, 500);
                          $('.error').removeClass('hidden');
                          $('.error').text(data.errores);
                      }else{
                        location.reload();
                        toastr.success('Ha ingresado exitosamente!', 'Éxito!', {timeOut: 7000});
                      }
                  }



              },
          });
      });

      </script>
@endsection
