@extends('layouts.plantilla')

@section('styles')
  <link rel="stylesheet" href="/css/faq.css">
@endsection
 
@section('titulo')
   FAQ
@endsection

@section('principal')
<main>

  <div class="container">

    <div class="row">

      <div class="col-10 mx-auto pt-5">
        <h2 class="text-center">Below are frequently asked questions, you may find the answer for yourself</h2>
        <p class="pt-3">Below are frequently asked questions, you may find the answer for yourself
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id erat sagittis, faucibus metus malesuada, eleifend turpis. Mauris semper augue id nisl aliquet, a porta lectus mattis. Nulla at tortor augue. In eget enim diam. Donec
          gravida tortor sem, ac fermentum nibh rutrum sit amet. Nulla convallis mauris vitae congue consequat. Donec interdum nunc purus, vitae vulputate arcu fringilla quis. Vivamus iaculis euismod dui.
        </p>
      </div>

      <!-- CategoriasFAQ-->
      <div class="col-lg-4">
        <div class="list-group pt-5" id="list-tab" role="tablist">
          <a href="#tab1" class="list-group-item list-group-item-action active" id="list-cat1-list" data-toggle="list" href="#list-home" role="tab" aria-controls="categoria 1">Categoria 1</a>
          <a href="#tab2" class="list-group-item list-group-item-action" id="list-cat2-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="categoria 2">Categoria 2</a>
          <a href="#tab3" class="list-group-item list-group-item-action" id="list-listcat3-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="categoria 3">Categoria 3</a>
          <a href="#tab4" class="list-group-item list-group-item-action" id="list-listcat4-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="categoria 4">Categoria 4</a>
          <a href="#tab5" class="list-group-item list-group-item-action" id="list-listcat5-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="categoria 5">Categoria 5</a>
        </div>
      </div>
      <!-- EndCategoriasFAQ-->

      <!-- Preguntas Frecuentes -->
      <div class="col-lg-8 pt-5 pb-5">
        <div class="tab-content" id="faq-tab-content">

          <!-- Preguntas Frecuentes Cat 1 -->
          <div class="tab-pane active show" id="tab1" role="tabpanel" aria-labelledby="tab1">

            <div class="accordion" id="accordion-tab-1">
              <div class="card __card-faq">
                <div class="card-header __cabecera-tarjeta" id="accordion-tab-1-heading-1">
                  <h5>
                    <button class="btn btn-link __question-card-faq text-decoration-none" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi.?
                    </button>
                  </h5>
                </div>
                <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                  <div class="card-body __cuerpo-card-faq">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex veniam delectus, aliquid architecto voluptatibus accusantium alias distinctio neque quasi fugiat impedit modi facilis maxime, id, incidunt velit reprehenderit
                      tenetur adipisci? Blanditiis, veritatis, aperiam. In qui vero laboriosam perspiciatis accusantium unde veniam illum excepturi nam laborum delectus, maxime dolorum, ad error.</p>
                    <p><strong>Example: </strong>Shut up and get to the point!</p>
                  </div>
                </div>
              </div>

              <div class="card __card-faq">
                <div class="card-header __cabecera-tarjeta" id="accordion-tab-1-heading-2">
                  <h5>
                    <button class="btn btn-link __question-card-faq text-decoration-none collapsed" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing.?
                    </button>
                  </h5>
                </div>
                <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                  <div class="card-body __cuerpo-card-faq">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, quisquam, voluptatem. Vero sint alias, odit nesciunt quos. Incidunt temporibus assumenda, magnam ratione, quaerat accusantium? Voluptatem.</p>
                    <p><strong>Example: </strong>Okay, I like a challenge. Is that a cooking show? No argument here.</p>
                  </div>
                </div>
              </div>

              <div class="card __card-faq">
                <div class="card-header __cabecera-tarjeta" id="accordion-tab-1-heading-3">
                  <h5>
                    <button class="btn btn-link __question-card-faq text-decoration-none collapsed" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">
                      Lorem ipsum dolor.?
                    </button>
                  </h5>
                </div>
                <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                  <div class="card-body __cuerpo-card-faq">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quibusdam, saepe!</p>
                    <p><strong>Example: </strong>Actually, that's still true. Well, let's just dump it in the sewer and say we delivered it.</p>
                  </div>
                </div>
              </div>

              <div class="card __card-faq">
                <div class="card-header __cabecera-tarjeta" id="accordion-tab-1-heading-4">
                  <h5>
                    <button class="btn btn-link __question-card-faq text-decoration-none collapsed" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis!?
                    </button>
                  </h5>
                </div>
                <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                  <div class="card-body __cuerpo-card-faq">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, assumenda quam. Rerum voluptatum praesentium officia amet necessitatibus maxime voluptas cupiditate deserunt inventore, similique ab unde magni, rem quisquam.
                    </p>
                    <p><strong>Example: </strong>Cruel though they may be...</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- End Preguntas Frecuentes Cat 1 -->

          <!-- Preguntas Frecuentes Cat 2 -->
          <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2">
            <div class="accordion" id="accordion-tab-2">

              <div class="card __card-faq">
                <div class="card-header __cabecera-tarjeta" id="accordion-tab-2-heading-1">
                  <h5>
                    <button class="btn btn-link __question-card-faq text-decoration-none" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-1" aria-expanded="false" aria-controls="accordion-tab-2-content-1">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem.?
                    </button>
                  </h5>
                </div>
                <div class="collapse show" id="accordion-tab-2-content-1" aria-labelledby="accordion-tab-2-heading-1" data-parent="#accordion-tab-2">
                  <div class="card-body __cuerpo-card-faq">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste.</p>
                    <p><strong>Example: </strong>There's no part of that sentence I didn't like! You, a bobsleder!? That I'd like to see!</p>
                  </div>
                </div>
              </div>

              <div class="card __card-faq">
                <div class="card-header __cabecera-tarjeta" id="accordion-tab-2-heading-2">
                  <h5>
                    <button class="btn btn-link __question-card-faq text-decoration-none collapsed" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-2" aria-expanded="false" aria-controls="accordion-tab-2-content-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing.?
                    </button>
                  </h5>
                </div>
                <div class="collapse" id="accordion-tab-2-content-2" aria-labelledby="accordion-tab-2-heading-2" data-parent="#accordion-tab-2">
                  <div class="card-body __cuerpo-card-faq">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui tempora doloribus itaque, assumenda ad.</p>
                    <p><strong>Example: </strong>Of all the friends I've had… you're the first. But I know you in the future. I cleaned your poop. Then we'll go with that data file!</p>
                  </div>
                </div>
              </div>

              <div class="card __card-faq">
                <div class="card-header __cabecera-tarjeta" id="accordion-tab-2-heading-3">
                  <h5>
                    <button class="btn btn-link __question-card-faq text-decoration-none collapsed" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-3" aria-expanded="false" aria-controls="accordion-tab-2-content-3">
                      Lorem ipsum dolor sit amet, consectetur.?!
                    </button>
                  </h5>
                </div>
                <div class="collapse" id="accordion-tab-2-content-3" aria-labelledby="accordion-tab-2-heading-3" data-parent="#accordion-tab-2">
                  <div class="card-body __cuerpo-card-faq">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem sequi odit atque placeat quod deleniti. Ipsa.</p>
                    <p><strong>Example: </strong> We're rescuing ya. Robot 1-X, save my friends! And Zoidberg! <em>Then we'll go with that data file!</em> Okay, I like a challenge.</p>
                  </div>
                </div>
              </div>

              <div class="card __card-faq">
                <div class="card-header __cabecera-tarjeta" id="accordion-tab-2-heading-4">
                  <h5>
                    <button class="btn btn-link __question-card-faq text-decoration-none collapsed" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-4" aria-expanded="false" aria-controls="accordion-tab-2-content-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos veniam beatae, velit veritatis porro.?
                    </button>
                  </h5>
                </div>
                <div class="collapse" id="accordion-tab-2-content-4" aria-labelledby="accordion-tab-2-heading-4" data-parent="#accordion-tab-2">
                  <div class="card-body __cuerpo-card-faq">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi pariatur saepe repudiandae deleniti esse magnam dolor.</p>
                    <p><strong>Example: </strong> Isn't it true that you have been paid for your testimony? Quite possible.</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- End Preguntas Frecuentes Cat 2 -->

          <!-- End Preguntas Frecuentes Cat 3 -->
          <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3">
            <div class="accordion" id="accordion-tab-3">

              <div class="card __card-faq">
                <div class="card-header __cabecera-tarjeta" id="accordion-tab-3-heading-1">
                  <h5>
                    <button class="btn btn-link __question-card-faq text-decoration-none" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-1" aria-expanded="false" aria-controls="accordion-tab-3-content-1">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, beatae, natus.?
                    </button>
                  </h5>
                </div>
                <div class="collapse show" id="accordion-tab-3-content-1" aria-labelledby="accordion-tab-3-heading-1" data-parent="#accordion-tab-3">
                  <div class="card-body __cuerpo-card-faq">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut error, sint. Aliquam expedita veniam quae illo, natus asperiores quia quod. Nobis magnam voluptate rem. Totam accusantium vitae nam recusandae veniam.</p>
                    <p><strong>Example: </strong>I'm Santa Claus! Pansy. That's a popular name today. Little "e", big "B"?</p>
                  </div>
                </div>
              </div>

              <div class="card __card-faq">
                <div class="card-header __cabecera-tarjeta" id="accordion-tab-3-heading-2">
                  <h5>
                    <button class="btn btn-link __question-card-faq text-decoration-none collapsed" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-2" aria-expanded="false" aria-controls="accordion-tab-3-content-2">
                      Why Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, unde ducimus??
                    </button>
                  </h5>
                </div>
                <div class="collapse" id="accordion-tab-3-content-2" aria-labelledby="accordion-tab-3-heading-2" data-parent="#accordion-tab-3">
                  <div class="card-body __cuerpo-card-faq">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, recusandae. Impedit facilis iusto blanditiis aliquam tenetur inventore quod, nobis, quaerat ratione esse id adipisci quibusdam officia odit explicabo repudiandae
                      fugiat? Sequi architecto omnis saepe minima vel culpa nobis dolore illo voluptates!</p>
                    <p><strong>Example: </strong>I usually try to keep my sadness pent up inside where it can fester quietly as a mental illness.</p>
                  </div>
                </div>
              </div>

              <div class="card __card-faq">
                <div class="card-header __cabecera-tarjeta" id="accordion-tab-3-heading-3">
                  <h5>
                    <button class="btn btn-link __question-card-faq text-decoration-none collapsed" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-3" aria-expanded="false" aria-controls="accordion-tab-3-content-3">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit?
                    </button>
                  </h5>
                </div>
                <div class="collapse" id="accordion-tab-3-content-3" aria-labelledby="accordion-tab-3-heading-3" data-parent="#accordion-tab-3">
                  <div class="card-body __cuerpo-card-faq">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis porro asperiores a reprehenderit. Quae voluptas accusamus sapiente perspiciatis, illum odio nemo voluptates eum est, dignissimos commodi sint magnam doloremque
                      similique.</p>
                    <p><strong>Example: </strong>Man, I'm sore all over. I feel like I just went ten rounds with mighty Thor.</p>
                  </div>
                </div>
              </div>

              <div class="card __card-faq">
                <div class="card-header __cabecera-tarjeta" id="accordion-tab-3-heading-4">
                  <h5>
                    <button class="btn btn-link __question-card-faq text-decoration-none collapsed" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-4" aria-expanded="false" aria-controls="accordion-tab-3-content-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia laboriosam voluptatibus dolor id non, mollitia libero.
                    </button>
                  </h5>
                </div>
                <div class="collapse" id="accordion-tab-3-content-4" aria-labelledby="accordion-tab-3-heading-4" data-parent="#accordion-tab-3">
                  <div class="card-body __cuerpo-card-faq">
                    <p>Lorem??.</p>
                    <p><strong>Example: </strong>Tell them I hate them.</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- End Preguntas Frecuentes Cat 3 -->

          <!-- Preguntas Frecuentes Cat 4 -->
          <div class="tab-pane" id="tab4" role="tabpanel" aria-labelledby="tab4">
            <div class="accordion" id="accordion-tab-4">

              <div class="card __card-faq">
                <div class="card-header __cabecera-tarjeta" id="accordion-tab-4-heading-1">
                  <h5>
                    <button class="btn btn-link __question-card-faq text-decoration-none" type="button" data-toggle="collapse" data-target="#accordion-tab-4-content-1" aria-expanded="false" aria-controls="accordion-tab-4-content-1">
                      Lorem ipsum dolor sit amet.?
                    </button>
                  </h5>
                </div>
                <div class="collapse show" id="accordion-tab-4-content-1" aria-labelledby="accordion-tab-4-heading-1" data-parent="#accordion-tab-4">
                  <div class="card-body __cuerpo-card-faq">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae eaque, fugiat sed rem nihil debitis ex veritatis eos modi temporibus, numquam blanditiis adipisci consectetur aspernatur! Quos nihil animi dicta, dolore.
                    </p>
                    <p><strong>Example: </strong>I feel like I was mauled by Jesus. Hello, little man. I will destroy you!</p>
                  </div>
                </div>
              </div>

              <div class="card __card-faq">
                <div class="card-header __cabecera-tarjeta" id="accordion-tab-4-heading-2">
                  <h5>
                    <button class="btn btn-link __question-card-faq text-decoration-none collapsed" type="button" data-toggle="collapse" data-target="#accordion-tab-4-content-2" aria-expanded="false" aria-controls="accordion-tab-4-content-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing.?
                    </button>
                  </h5>
                </div>
                <div class="collapse" id="accordion-tab-4-content-2" aria-labelledby="accordion-tab-4-heading-2" data-parent="#accordion-tab-4">
                  <div class="card-body __cuerpo-card-faq">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, architecto, voluptas.</p>
                    <p><strong>Example: </strong>Nay, I respect and admire Harold Zoid too much to beat him to death with his own Oscar.</p>
                  </div>
                </div>
              </div>

              <div class="card __card-faq">
                <div class="card-header __header-card-faq" id="accordion-tab-4-heading-3">
                  <h5>
                    <button class="btn btn-link __question-card-faq text-decoration-none collapsed" type="button" data-toggle="collapse" data-target="#accordion-tab-4-content-3" aria-expanded="false" aria-controls="accordion-tab-4-content-3">
                      Lorem ipsum dolor sit amet, consectetur.?
                    </button>
                  </h5>
                </div>
                <div class="collapse" id="accordion-tab-4-content-3" aria-labelledby="accordion-tab-4-heading-3" data-parent="#accordion-tab-4">
                  <div class="card-body __cuerpo-card-faq">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p><strong>Example: </strong>Oh Leela! You're the only person I could turn to; you're the only person who ever loved me.</p>
                  </div>
                </div>
              </div>

              <div class="card __card-faq">
                <div class="card-header __cabecera-tarjeta" id="accordion-tab-4-heading-4">
                  <h5>
                    <button class="btn btn-link __question-card-faq text-decoration-none collapsed" type="button" data-toggle="collapse" data-target="#accordion-tab-4-content-4" aria-expanded="false" aria-controls="accordion-tab-4-content-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.?
                    </button>
                  </h5>
                </div>
                <div class="collapse" id="accordion-tab-4-content-4" aria-labelledby="accordion-tab-4-heading-4" data-parent="#accordion-tab-4">
                  <div class="card-body __cuerpo-card-faq">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, doloribus, iste adipisci ea enim a dolorum sequi consectetur mollitia aspernatur alias reiciendis tempore dolorem aliquam repellat nisi veniam quod numquam
                      itaque error sint, libero distinctio blanditiis facilis. Magnam odit cum ex ipsa consectetur ipsam accusamus aspernatur ipsum nostrum illum, optio consequuntur ab, reiciendis qui laboriosam id perspiciatis, dolorum, dolore
                      ratione..</p>
                    <p><strong>Example: </strong>If rubbin' frozen dirt in your crotch is wrong, hey I don't wanna be right.</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- End Preguntas Frecuentes Cat 4 -->

          <!-- End Preguntas Frecuentes Cat 5 -->
          <div class="tab-pane" id="tab5" role="tabpanel" aria-labelledby="tab6">
            <div class="accordion" id="accordion-tab-6">

              <div class="card __card-faq">
                <div class="card-header __cabecera-tarjeta" id="accordion-tab-6-heading-1">
                  <h5>
                    <button class="btn btn-link __question-card-faq text-decoration-none" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-1" aria-expanded="false" aria-controls="accordion-tab-6-content-1">
                      Lorem ipsum dolor sit amet, consectetur.??
                    </button>
                  </h5>
                </div>
                <div class="collapse show" id="accordion-tab-6-content-1" aria-labelledby="accordion-tab-6-heading-1" data-parent="#accordion-tab-6">
                  <div class="card-body __cuerpo-card-faq">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo magni optio explicabo ipsa ducimus officia, voluptatem voluptate veniam ad, vel quae eligendi quos alias totam ea reprehenderit, minima asperiores maxime
                      repudiandae.</p>
                    <p><strong>Example: </strong>So I really am important? How I feel when I'm drunk is correct?</p>
                  </div>
                </div>
              </div>

              <div class="card __card-faq">
                <div class="card-header __cabecera-tarjeta" id="accordion-tab-6-heading-2">
                  <h5>
                    <button class="btn btn-link __question-card-faq text-decoration-none collapsed" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-2" aria-expanded="false" aria-controls="accordion-tab-6-content-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing.?
                    </button>
                  </h5>
                </div>
                <div class="collapse" id="accordion-tab-6-content-2" aria-labelledby="accordion-tab-6-heading-2" data-parent="#accordion-tab-6">
                  <div class="card-body __cuerpo-card-faq">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, soluta, mollitia!</p>
                    <p><strong>Example: </strong>What's with you kids? Every other day it's food, food, food.</p>
                  </div>
                </div>
              </div>

              <div class="card __card-faq">
                <div class="card-header __cabecera-tarjeta" id="accordion-tab-6-heading-3">
                  <h5>
                    <button class="btn btn-link __question-card-faq text-decoration-none collapsed" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-3" aria-expanded="false" aria-controls="accordion-tab-6-content-3">
                      Lorem ipsum dolor sit amet.?
                    </button>
                  </h5>
                </div>
                <div class="collapse" id="accordion-tab-6-content-3" aria-labelledby="accordion-tab-6-heading-3" data-parent="#accordion-tab-6">
                  <div class="card-body __cuerpo-card-faq">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea hic animi nam pariatur fugit?</p>
                    <p><strong>Example: </strong>Is that a cooking show? It doesn't look so shiny to me. And why did 'I' have to take a cab?</p>
                  </div>
                </div>
              </div>

              <div class="card __card-faq">
                <div class="card-header __cabecera-tarjeta" id="accordion-tab-6-heading-4">
                  <h5>
                    <button class="btn btn-link __question-card-faq text-decoration-none collapsed" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-4" aria-expanded="false" aria-controls="accordion-tab-6-content-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error odit suscipit fuga fugiat praesentium??
                    </button>
                  </h5>
                </div>
                <div class="collapse" id="accordion-tab-6-content-4" aria-labelledby="accordion-tab-6-heading-4" data-parent="#accordion-tab-6">
                  <div class="card-body __cuerpo-card-faq">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda recusandae tempora enim sequi, explicabo eum culpa veritatis possimus nobis excepturi vero vitae.</p>
                    <p><strong>Example: </strong>Guess again. Yeah, I do that with my stupidness. And when we woke up, we had these bodies.</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- End Preguntas Frecuentes Cat 5 -->
        </div>
      </div>
      <!-- EndPreguntasFrecuentes -->

    </div>
  </div>
</main>
<!-- EndMain -->
@endsection
