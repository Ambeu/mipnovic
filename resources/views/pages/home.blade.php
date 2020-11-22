@extends('corps.content')

@section('content')

	  <section class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight" style="background-image:url(frontend/images/free.jpg);">
            <div class="overlay"></div>
              <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate mt-5">
                    <div class="text">
                        <div class="subheading">
                            <span>MISSION PROPHETIQUE POUR LA NOUVELLE VIE EN CHRIST</span>
                        </div>
                      <h1 class="mb-4">Libère toi de la captivité au nom de <span>Jesus</span></h1>
                      <p>Renaître pour mieux redemarer avec le seigneur Jesus Christ</p>
                      {{-- <p><a href="#" class="btn btn-primary py-2 px-4">Be part of us</a> <a href="#" class="btn btn-primary btn-outline-primary py-2 px-4">Read more</a></p> --}}
                  </div>
                </div>
              </div>
          </div>
        </div>
  
        <div class="slider-item js-fullheight" style="background-image:url(frontend/images/prier.jpg);">
            <div class="overlay"></div>
              <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate mt-5">
                    <div class="text">
                        <div class="subheading">
                            <span>MISSION PROPHETIQUE POUR LA NOUVELLE VIE EN CHRIST</span>
                        </div>
                      <h1 class="mb-4"> Prie sans cèsse et tu entrera dans ta destiné au nom de  <span>Jesus</span></h1>
                      <p>Renaître pour mieux redemarer avec le seigneur Jesus Christ</p>
                      {{-- <p><a href="#" class="btn btn-primary py-2 px-4">Be part of us</a> <a href="#" class="btn btn-primary btn-outline-primary py-2 px-4">Read more</a></p> --}}
                  </div>
                </div>
              </div>
          </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image:url(frontend/images/chemin.jpg);">
            <div class="overlay"></div>
              <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate mt-5">
                    <div class="text">
                        <div class="subheading">
                            <span>MISSION PROPHETIQUE POUR LA NOUVELLE VIE EN CHRIST</span>
                        </div>
                      <h1 class="mb-4">le seigneur <span>Jesus</span> est le chemin, la verité et la vie. Ne craint rien !</h1>
                      <p>Renaître pour mieux redemarer avec le seigneur Jesus Christ</p>
                      {{-- <p><a href="#" class="btn btn-primary py-2 px-4">Be part of us</a> <a href="#" class="btn btn-primary btn-outline-primary py-2 px-4">Read more</a></p> --}}
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>



      <div class="container">



      <section class="ftco-section ftco-no-pt ftco-no-pb ftco-about-section" id="about-section">
          
          <div class="container-fluid px-0">
              <div class="row d-md-flex text-wrapper">
                      <div class="one-half img" style="background-image: url('frontend/images/leader.jpg');"></div>
                      <div class="one-half half-text d-flex justify-content-end align-items-center ftco-animate">
                        <div class="text-inner pl-md-5">
              <h3 class="heading"> <span>BIOGRAPHIE DU LEADER</span> </h3>
              <p>A l'etat civil il repond au nom de <strong>Kouakou Louis-Marius.</strong></p>
              <p>Il a fait les etudes universitaires, avec une matrise en lettres modernes. Avec ce niveau d'etude les parents souhaitaient que vous obteniez un bon boulot pour prendre soin d'eux socialement.
              
              </p><a class="btn btn-primary" href="{{URL::to('/apropos')}}">Lire Plus</a>
              
              {{-- <ul class="my-4">
                  <li><span class="ion-ios-checkmark-circle mr-2"></span> Even the all-powerful Pointing</li>
                  <li><span class="ion-ios-checkmark-circle mr-2"></span> Behind the word mountains</li>
                  <li><span class="ion-ios-checkmark-circle mr-2"></span> Separated they live in Bookmarksgrove</li>
              </ul> --}}
            </div>
                    </div>
              </div>
          </div>
      </section>
  
      <section class="ftco-counter" id="section-counter">
          <div class="container-fluid px-0">
              <div class="row no-gutters">
            <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center py-5">
                <div class="text">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-users"></span>
                    </div>
                  <strong class="number" data-number="98087">0</strong>
                  <span>Membres</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center py-5">
                <div class="text">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-user"></span>
                    </div>
                  <strong class="number" data-number="309">0</strong>
                  <span>Pasteurs</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center py-5">
                <div class="text">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-people"></span>
                    </div>
                  <strong class="number" data-number="15">0</strong>
                  <span>Associations</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center py-5">
                <div class="text">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-home"></span>
                    </div>
                  <strong class="number" data-number="206">0</strong>
                  <span>Eglises</span>
                </div>
              </div>
            </div>
          </div>
          </div>
      </section>
      </div>
          
          {{-- <section class="ftco-section ftco-services-2" id="services-section">
              <div class="container">
                  <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Services</span>
              <h2 class="mb-4">Christian Church Services</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
          </div>
          <div class="row">
              <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services text-center d-block">
                <div class="icon"><span class="flaticon-praying"></span></div>
                <div class="media-body">
                  <h3 class="heading mb-3">Daily Prayers</h3>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>      
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services text-center d-block">
                <div class="icon"><span class="flaticon-bible"></span></div>
                <div class="media-body">
                  <h3 class="heading mb-3">Continous Teaching</h3>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>      
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services text-center d-block">
                <div class="icon"><span class="flaticon-church"></span></div>
                <div class="media-body">
                  <h3 class="heading mb-3">Set of Sermons</h3>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>      
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services text-center d-block">
                <div class="icon"><span class="flaticon-rings"></span></div>
                <div class="media-body">
                  <h3 class="heading mb-3">Wedding</h3>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>      
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services text-center d-block">
                <div class="icon"><span class="flaticon-social-care"></span></div>
                <div class="media-body">
                  <h3 class="heading mb-3">Community Helpers</h3>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>      
            </div>
          </div>
              </div>
          </section> --}}
  
          <section class="ftco-section bg-light" id="sermons-section">
              <div class="container">
                  <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Enseignement</span>
              <h2 class="mb-4">Parole De Vie</h2>
              {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> --}}
            </div>
          </div>
                  <div class="row">
              <div class="col-md-4">
                  <div class="sermon-wrap ftco-animate">
                          <div class="img d-flex align-items-center justify-content-center" style="background-image: url(frontend/images/sermon-1.jpg);">
                              <div class="text-content p-4 text-center">
                                  <span>by pastor:</span>
                                  <h3>Jerry Simon</h3>
                                  <p class="">
                                          <a href="https://www.youtube.com/watch?v=Mff6r6VSU4A" class="btn-custom mb-2 p-2 text-center popup-vimeo"><span class="icon-play"></span> Watch</a>
                                          {{-- <a href="#" class="btn-custom p-2 text-center"><span class="icon-download"></span> Download</a> --}}
                                      </p>
                              </div>
                          </div>
                          <div class="text pt-3 text-center">
                              <h2 class="mb-0"><a href="sermon.html">Let the Sunset Inspire You</a></h2>
                              <div class="meta">
                                    <p class="mb-0">
                                        <span>July 01, 2019</span>
                                    </p>
                                </div>
                          </div>
                        </div>
              </div>
              <div class="col-md-4">
                  <div class="sermon-wrap ftco-animate">
                          <div class="img d-flex align-items-center justify-content-center" style="background-image: url(frontend/images/sermon-2.jpg);">
                              <div class="text-content p-4 text-center">
                                  <span>by pastor:</span>
                                  <h3>Jerry Simon</h3>
                                  <p class="">
                                          <a href="https://www.youtube.com/watch?v=0AqFUejH3bY" class="btn-custom mb-2 p-2 text-center popup-vimeo"><span class="icon-play"></span> Watch</a>
                                          {{-- <a href="#" class="btn-custom p-2 text-center"><span class="icon-download"></span> Download</a> --}}
                                      </p>
                              </div>
                          </div>
                          <div class="text pt-3 text-center">
                              <h2 class="mb-0"><a href="sermon.html">Developing Spiritual Mentality</a></h2>
                              <div class="meta">
                                    <p class="mb-0">
                                        <span>July 01, 2019</span>
                                    </p>
                                </div>
                          </div>
                        </div>
              </div>
              <div class="col-md-4">
                  <div class="sermon-wrap ftco-animate">
                          <div class="img d-flex align-items-center justify-content-center" style="background-image: url(frontend/images/sermon-3.jpg);">
                              <div class="text-content p-4 text-center">
                                  <span>by pastor:</span>
                                  <h3>Jerry Simon</h3>
                                  <p class="">
                                          <a href="https://www.youtube.com/watch?v=XCijgPN_GyE" class="btn-custom mb-2 p-2 text-center popup-vimeo"><span class="icon-play"></span> Watch</a>
                                          {{-- <a href="#" class="btn-custom p-2 text-center"><span class="icon-download"></span> Download</a> --}}
                                      </p>
                              </div>
                          </div>
                          <div class="text pt-3 text-center">
                              <h2 class="mb-0"><a href="sermon.html">Let the Bible Motivate You</a></h2>
                              <div class="meta">
                                    <p class="mb-0">
                                        <span>July 01, 2019</span>
                                    </p>
                                </div>
                          </div>
                        </div>
              </div>
  
              {{-- <div class="col-md-4">
                  <div class="sermon-wrap ftco-animate">
                          <div class="img d-flex align-items-center justify-content-center" style="background-image: url(frontend/images/sermon-4.jpg);">
                              <div class="text-content p-4 text-center">
                                  <span>by pastor:</span>
                                  <h3>Jerry Simon</h3>
                                  <p class="">
                                          <a href="https://vimeo.com/45830194" class="btn-custom mb-2 p-2 text-center popup-vimeo"><span class="icon-play"></span> Watch</a>
                                          <a href="#" class="btn-custom p-2 text-center"><span class="icon-download"></span> Download</a>
                                      </p>
                              </div>
                          </div>
                          <div class="text pt-3 text-center">
                              <h2 class="mb-0"><a href="sermon.html">Let the Sunset Inspire You</a></h2>
                              <div class="meta">
                                    <p class="mb-0">
                                        <span>July 01, 2019</span>
                                    </p>
                                </div>
                          </div>
                        </div>
              </div> --}}
              {{-- <div class="col-md-4">
                  <div class="sermon-wrap ftco-animate">
                          <div class="img d-flex align-items-center justify-content-center" style="background-image: url(frontend/images/sermon-5.jpg);">
                              <div class="text-content p-4 text-center">
                                  <span>by pastor:</span>
                                  <h3>Jerry Simon</h3>
                                  <p class="">
                                          <a href="https://vimeo.com/45830194" class="btn-custom mb-2 p-2 text-center popup-vimeo"><span class="icon-play"></span> Watch</a>
                                          <a href="#" class="btn-custom p-2 text-center"><span class="icon-download"></span> Download</a>
                                      </p>
                              </div>
                          </div>
                          <div class="text pt-3 text-center">
                              <h2 class="mb-0"><a href="sermon.html">Developing Spiritual Mentality</a></h2>
                              <div class="meta">
                                    <p class="mb-0">
                                        <span>July 01, 2019</span>
                                    </p>
                                </div>
                          </div>
                        </div>
              </div> --}}
              {{-- <div class="col-md-4">
                  <div class="sermon-wrap ftco-animate">
                          <div class="img d-flex align-items-center justify-content-center" style="background-image: url(frontend/images/sermon-6.jpg);">
                              <div class="text-content p-4 text-center">
                                  <span>by pastor:</span>
                                  <h3>Jerry Simon</h3>
                                  <p class="">
                                          <a href="https://vimeo.com/45830194" class="btn-custom mb-2 p-2 text-center popup-vimeo"><span class="icon-play"></span> Watch</a>
                                          <a href="#" class="btn-custom p-2 text-center"><span class="icon-download"></span> Download</a>
                                      </p>
                              </div>
                          </div>
                          <div class="text pt-3 text-center">
                              <h2 class="mb-0"><a href="sermon.html">Let the Bible Motivate You</a></h2>
                              <div class="meta">
                                    <p class="mb-0">
                                        <span>July 01, 2019</span>
                                    </p>
                                </div>
                          </div>
                        </div>
              </div> --}}
          </div>
              </div>
          </section>
  
          <section class="ftco-intro img" id="events-section" style="background-image: url(frontend/images/bg_3.jpg);">
              <div class="overlay"></div>
              <div class="container">
                  <div class="row">
                  </div>
              </div>
          </section>
  
          <section class="ftco-section bg-light ftco-event" id="events-section">
              <div class="container-fluid px-4 ftco-to-top">
                  <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Evenements</span>
              <h2 class="mb-5">Tous les programmes</h2>
            </div>
          </div>
                  <div class="row">
                      <div class="col-md-12 col-lg-6 col-xl-4">
                  <div class="event-wrap d-flex ftco-animate">
                      <div class="img" style="background-image: url(frontend/images/event-1.jpg);"></div>
                      <div class="text p-4 d-flex align-items-center">
                          <div>
                              <span class="time">8:30am - 11:30am</span>
                              <h3><a href="#">Sharing Our Faith &amp; Gospel</a></h3>
                              <div class="meta">
                                  <p><span class="icon-user mr-1"></span> by pastor: <a href="#">Jerry Simon</a></p>
                                  <p><span class="icon-location"></span> 203 Fake St. Mountain View, San Francisco, California, USA</p>
                                  <p class="mb-0"><a href="#" class="btn btn-primary">Join Us</a></p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-lg-6 col-xl-4">
                  <div class="event-wrap d-flex ftco-animate">
                      <div class="img" style="background-image: url(frontend/images/event-2.jpg);"></div>
                      <div class="text p-4 d-flex align-items-center">
                          <div>
                              <span class="time">8:30am - 11:30am</span>
                              <h3><a href="#">Sharing Our Faith &amp; Gospel</a></h3>
                              <div class="meta">
                                  <p><span class="icon-user mr-1"></span> by pastor: <a href="#">Jerry Simon</a></p>
                                  <p><span class="icon-location"></span> 203 Fake St. Mountain View, San Francisco, California, USA</p>
                                  <p class="mb-0"><a href="#" class="btn btn-primary">Join Us</a></p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-lg-6 col-xl-4">
                  <div class="event-wrap d-flex ftco-animate">
                      <div class="img" style="background-image: url(frontend/images/event-3.jpg);"></div>
                      <div class="text p-4 d-flex align-items-center">
                          <div>
                              <span class="time">8:30am - 11:30am</span>
                              <h3><a href="#">Sharing Our Faith &amp; Gospel</a></h3>
                              <div class="meta">
                                  <p><span class="icon-user mr-1"></span> by pastor: <a href="#">Jerry Simon</a></p>
                                  <p><span class="icon-location"></span> 203 Fake St. Mountain View, San Francisco, California, USA</p>
                                  <p class="mb-0"><a href="#" class="btn btn-primary">Join Us</a></p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
  
              <div class="col-md-12 col-lg-6 col-xl-4">
                  <div class="event-wrap d-flex ftco-animate">
                      <div class="img" style="background-image: url(frontend/images/event-4.jpg);"></div>
                      <div class="text p-4 d-flex align-items-center">
                          <div>
                              <span class="time">8:30am - 11:30am</span>
                              <h3><a href="#">Sharing Our Faith &amp; Gospel</a></h3>
                              <div class="meta">
                                  <p><span class="icon-user mr-1"></span> by pastor: <a href="#">Jerry Simon</a></p>
                                  <p><span class="icon-location"></span> 203 Fake St. Mountain View, San Francisco, California, USA</p>
                                  <p class="mb-0"><a href="#" class="btn btn-primary">Join Us</a></p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-lg-6 col-xl-4">
                  <div class="event-wrap d-flex ftco-animate">
                      <div class="img" style="background-image: url(frontend/images/event-5.jpg);"></div>
                      <div class="text p-4 d-flex align-items-center">
                          <div>
                              <span class="time">8:30am - 11:30am</span>
                              <h3><a href="#">Sharing Our Faith &amp; Gospel</a></h3>
                              <div class="meta">
                                  <p><span class="icon-user mr-1"></span> by pastor: <a href="#">Jerry Simon</a></p>
                                  <p><span class="icon-location"></span> 203 Fake St. Mountain View, San Francisco, California, USA</p>
                                  <p class="mb-0"><a href="#" class="btn btn-primary">Join Us</a></p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-lg-6 col-xl-4">
                  <div class="event-wrap d-flex ftco-animate">
                      <div class="img" style="background-image: url(frontend/images/event-6.jpg);"></div>
                      <div class="text p-4 d-flex align-items-center">
                          <div>
                              <span class="time">8:30am - 11:30am</span>
                              <h3><a href="#">Sharing Our Faith &amp; Gospel</a></h3>
                              <div class="meta">
                                  <p><span class="icon-user mr-1"></span> by pastor: <a href="#">Jerry Simon</a></p>
                                  <p><span class="icon-location"></span> 203 Fake St. Mountain View, San Francisco, California, USA</p>
                                  <p class="mb-0"><a href="#" class="btn btn-primary">Join Us</a></p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
                  </div>
              </div>
          </section>
          
{{--   
          <section class="ftco-section ftco-causes ftco-no-pb" id="causes-section">
              <div class="container">
                  <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Donate Charity</span>
              <h2 class="mb-5">Causes Needs Our Help</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
          </div>
                  <div class="row">
                      <div class="col-md-6 col-lg-3">
                          <div class="cause-entry ftco-animate">
                              <a href="#" class="img" style="background-image: url(frontend/images/cause-1.jpg);"></a>
                              <div class="text p-3">
                                  <h3><a href="cause.html">Health care, Food</a></h3>
                                  <div class="progress mb-4">
                                       <div class="progress-bar color-1" role="progressbar" aria-valuenow="40"
                                        aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                      <span>40%</span>
                                        </div>
                                  </div>
                                  <p class="donate"><span class="price">$80,000</span> <span class="target-goal">Target</span> / <span class="price">$55,000</span> <span class="target-goal">Goal</span></p>
                                  <p>A small river named Duden flows by their place and supplies it with the necessary.</p>
                                  <p><a href="#" class="btn btn-primary">Donate Now!</a></p>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-3">
                          <div class="cause-entry ftco-animate">
                              <a href="#" class="img" style="background-image: url(frontend/images/cause-2.jpg);"></a>
                              <div class="text p-3">
                                  <h3><a href="cause.html">Restored the Old City Church</a></h3>
                                  <div class="progress mb-4">
                                       <div class="progress-bar color-1" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                      <span>50%</span>
                                        </div>
                                  </div>
                                  <p class="donate"><span class="price">$80,000</span> <span class="target-goal">Target</span> / <span class="price">$55,000</span> <span class="target-goal">Goal</span></p>
                                  <p>A small river named Duden flows by their place and supplies it with the necessary.</p>
                                  <p><a href="#" class="btn btn-primary">Donate Now!</a></p>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-3">
                          <div class="cause-entry ftco-animate">
                              <a href="#" class="img" style="background-image: url(frontend/images/cause-3.jpg);"></a>
                              <div class="text p-3">
                                  <h3><a href="cause.html">Save Childern For Hunger</a></h3>
                                  <div class="progress mb-4">
                                       <div class="progress-bar color-1" role="progressbar" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                      <span>80%</span>
                                        </div>
                                  </div>
                                  <p class="donate"><span class="price">$80,000</span> <span class="target-goal">Target</span> / <span class="price">$55,000</span> <span class="target-goal">Goal</span></p>
                                  <p>A small river named Duden flows by their place and supplies it with the necessary.</p>
                                  <p><a href="#" class="btn btn-primary">Donate Now!</a></p>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-3">
                          <div class="cause-entry ftco-animate">
                              <a href="#" class="img" style="background-image: url(frontend/images/cause-4.jpg);"></a>
                              <div class="text p-3">
                                  <h3><a href="cause.html">Save Childern For Hunger</a></h3>
                                  <div class="progress mb-4">
                                       <div class="progress-bar color-1" role="progressbar" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                      <span>80%</span>
                                        </div>
                                  </div>
                                  <p class="donate"><span class="price">$80,000</span> <span class="target-goal">Target</span> / <span class="price">$55,000</span> <span class="target-goal">Goal</span></p>
                                  <p>A small river named Duden flows by their place and supplies it with the necessary.</p>
                                  <p><a href="#" class="btn btn-primary">Donate Now!</a></p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row mt-4 justify-content-end">
                      <div class="col-lg-10">
                          <div class="donated-intro bg-darken p-4 p-md-5">
                              <h2>Donation so far <span>$</span><strong class="number" data-number="9891000">0</strong></h2>
                          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                          <p><a href="#" class="btn btn-black px-4 py-3">Donate now!</a></p>
                          </div>
                      </div>
                  </div>
              </div>
          </section> --}}
  
  
          <section class="ftco-daily-verse img" style="background-image: url(frontend/images/bg_4.jpg);">
              <div class="overlay"></div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-10">
                      <div class="row justify-content-center align-items-center">
                          <div class="col-md-2 ftco-animate">
                              <div class="icon">
                                  <span class="flaticon-church"></span>
                              </div>
                          </div>
                          <div class="col-md-10 daily-verse pl-md-5 ftco-animate">
                              <span class="subheading">Thème du jeûn du 01 au 07 Decembre :</span>
                              <h3>"C'est lui qui change les temps et les circonstances, qui renverse et qui établit les rois, qui donne la sagesse aux sages et à ceux qui ont de l'intelligence."</h3>
                              <h4 class="h5 mt-4 font-weight-bold"><span>Bible:</span> Daniel 2:21</h4>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  
      {{-- <section class="ftco-section bg-light" id="blog-section">
        <div class="container">
          <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
              <span class="subheading">Blog</span>
              <h2 class="mb-4">Read the Latest Blog</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
          </div>
          <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                <a href="single.html" class="block-20" style="background-image: url('frontend/images/image_1.jpg');">
                </a>
                <div class="text float-right d-block">
                    <div class="d-flex align-items-center pt-2 mb-4 topp">
                        <div class="one mr-2">
                            <span class="day">04</span>
                        </div>
                        <div class="two">
                            <span class="yr">2019</span>
                            <span class="mos">June</span>
                        </div>
                    </div>
                  <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                  <div class="d-flex align-items-center mt-4 meta">
                      <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                      <p class="ml-auto mb-0">
                          <a href="#" class="mr-2">Admin</a>
                          <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                      </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                <a href="single.html" class="block-20" style="background-image: url('frontend/images/image_2.jpg');">
                </a>
                <div class="text float-right d-block">
                    <div class="d-flex align-items-center pt-2 mb-4 topp">
                        <div class="one mr-2">
                            <span class="day">04</span>
                        </div>
                        <div class="two">
                            <span class="yr">2019</span>
                            <span class="mos">June</span>
                        </div>
                    </div>
                  <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                  <div class="d-flex align-items-center mt-4 meta">
                      <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                      <p class="ml-auto mb-0">
                          <a href="#" class="mr-2">Admin</a>
                          <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                      </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry">
                <a href="single.html" class="block-20" style="background-image: url('frontend/images/image_3.jpg');">
                </a>
                <div class="text float-right d-block">
                    <div class="d-flex align-items-center pt-2 mb-4 topp">
                        <div class="one mr-2">
                            <span class="day">04</span>
                        </div>
                        <div class="two">
                            <span class="yr">2019</span>
                            <span class="mos">June</span>
                        </div>
                    </div>
                  <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                  <div class="d-flex align-items-center mt-4 meta">
                      <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                      <p class="ml-auto mb-0">
                          <a href="#" class="mr-2">Admin</a>
                          <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                      </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> --}}
  
      <section class="ftco-section ftco-no-pb mb-5" id="pastor-section">
          <div class="container">
              <div class="row justify-content-center pb-5">
            <div class="col-md-6 heading-section text-center ftco-animate">
                <span class="subheading">Pasteur</span>
              <h2 class="mb-4">Les pasteurs de la MIPNOVIC</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
          </div>
          <div class="row">
                      {{-- <div class="col-md-6 col-lg-3 ftco-animate">
                          <div class="staff">
                              <div class="img-wrap d-flex align-items-stretch">
                                  <div class="img align-self-stretch" style="background-image: url(frontend/images/staff-1.jpg);"></div>
                              </div>
                              <div class="text d-flex align-items-center pt-3 text-center">
                                  <div>
                                      <h3 class="mb-2">Lloyd Wilson</h3>
                                      <span class="position mb-4">Lead Pastor</span>
                                      <div class="faded">
                                          <ul class="ftco-social text-center">
                              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                      </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-3 ftco-animate">
                          <div class="staff">
                              <div class="img-wrap d-flex align-items-stretch">
                                  <div class="img align-self-stretch" style="background-image: url(frontend/images/staff-2.jpg);"></div>
                              </div>
                              <div class="text d-flex align-items-center pt-3 text-center">
                                  <div>
                                      <h3 class="mb-2">Rachel Parker</h3>
                                      <span class="position mb-4">Lead Pastor</span>
                                      <div class="faded">
                                          <ul class="ftco-social text-center">
                              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                      </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-3 ftco-animate">
                          <div class="staff">
                              <div class="img-wrap d-flex align-items-stretch">
                                  <div class="img align-self-stretch" style="background-image: url(frontend/images/staff-3.jpg);"></div>
                              </div>
                              <div class="text d-flex align-items-center pt-3 text-center">
                                  <div>
                                      <h3 class="mb-2">Ian Smith</h3>
                                      <span class="position mb-4">Lead Pastor</span>
                                      <div class="faded">
                                          <ul class="ftco-social text-center">
                              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                      </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-3 ftco-animate">
                          <div class="staff">
                              <div class="img-wrap d-flex align-items-stretch">
                                  <div class="img align-self-stretch" style="background-image: url(frontend/images/staff-4.jpg);"></div>
                              </div>
                              <div class="text d-flex align-items-center pt-3 text-center">
                                  <div>
                                      <h3 class="mb-2">Alicia Henderson</h3>
                                      <span class="position mb-4">Lead Pastor</span>
                                      <div class="faded">
                                          <ul class="ftco-social text-center">
                              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                      </div>
                              </div>
                          </div>
                      </div> --}}

                      <div class="slideshow" >

                        <ul>
         
                            <li class="img-wrap align-items-stretch" style="margin-right: 10px">
                                <img src="frontend/images/staff-1.jpg" alt="pas image" width="200" height="200" />
                                <div class="text d-flex align-items-center pt-3 text-center">
                                    <div>
                                        <h3 class="mb-2">Lloyd Wilson</h3>
                                        <span class="position mb-4">Lead Pastor</span>
                                        <div class="faded">
                                
                                    <a href="#"><span class="icon-phone"></span></a>  <span>  41 07 92 36 </span>
                                        
                                    </div>
                                    </div>
                                </div>
                            </li>

                            <li class="img-wrap align-items-stretch" style="margin-right: 10px">
                                <img src="frontend/images/staff-2.jpg" alt="pas image" width="200" height="200"/>
                                <div class="text d-flex align-items-center pt-3 text-center">
                                    <div>
                                        <h3 class="mb-2">Lloyd Wilson</h3>
                                        <span class="position mb-4">Lead Pastor</span>
                                        <div class="faded">
                                
                                    <a href="#"><span class="icon-phone"></span></a>  <span>  41 07 92 36 </span>
                                        
                                    </div>
                                    </div>
                                </div>
                            </li>

                            <li class="img-wrap align-items-stretch" style="margin-right: 10px">
                                <img src="frontend/images/staff-3.jpg" alt="pas image" width="200" height="200"/>
                                <div class="text d-flex align-items-center pt-3 text-center">
                                    <div>
                                        <h3 class="mb-2">Lloyd Wilson</h3>
                                        <span class="position mb-4">Lead Pastor</span>
                                        <div class="faded">
                                
                                    <a href="#"><span class="icon-phone"></span></a>  <span>  41 07 92 36 </span>
                                        
                                    </div>
                                    </div>
                                </div>
                            </li>

                            <li class="img-wrap align-items-stretch" style="margin-right: 10px">
                                <img src="frontend/images/staff-4.jpg" alt="pas image" width="200" height="200"/>
                                <div class="text d-flex align-items-center pt-3 text-center">
                                    <div>
                                        <h3 class="mb-2">Lloyd Wilson</h3>
                                        <span class="position mb-4">Lead Pastor</span>
                                        <div class="faded">
                                
                                    <a href="#"><span class="icon-phone"></span></a>  <span>  41 07 92 36 </span>
                                        
                                    </div>
                                    </div>
                                </div>
                            </li>

                            <li class="img-wrap align-items-stretch" style="margin-right: 10px">
                                <img src="frontend/images/staff-1.jpg" alt="pas image" width="200" height="200"/>
                                <div class="text d-flex align-items-center pt-3 text-center">
                                    <div>
                                        <h3 class="mb-2">Lloyd Wilson</h3>
                                        <span class="position mb-4">Lead Pastor</span>
                                        <div class="faded">
                                
                                    <a href="#"><span class="icon-phone"></span></a>  <span>  41 07 92 36 </span>
                                        
                                    </div>
                                    </div>
                                </div>
                            </li>

                            <li class="img-wrap align-items-stretch" style="margin-right: 10px">
                                <img src="frontend/images/staff-2.jpg" alt="pas image" width="200" height="200"/>
                                <div class="text d-flex align-items-center pt-3 text-center">
                                    <div>
                                        <h3 class="mb-2">Lloyd Wilson</h3>
                                        <span class="position mb-4">Lead Pastor</span>
                                        <div class="faded">
                                
                                    <a href="#"><span class="icon-phone"></span></a>  <span>  41 07 92 36 </span>
                                        
                                    </div>
                                    </div>
                                </div>
                            </li>

                            <li class="img-wrap align-items-stretch" style="margin-right: 10px">
                                <img src="frontend/images/staff-3.jpg" alt="pas image" width="200" height="200"/>
                                <div class="text d-flex align-items-center pt-3 text-center">
                                    <div>
                                        <h3 class="mb-2">Lloyd Wilson</h3>
                                        <span class="position mb-4">Lead Pastor</span>
                                        <div class="faded">
                                
                                    <a href="#"><span class="icon-phone"></span></a>  <span>  41 07 92 36 </span>
                                        
                                    </div>
                                    </div>
                                </div>
                            </li>

                            <li class="img-wrap align-items-stretch" style="margin-right: 10px">
                                <img src="frontend/images/staff-4.jpg" alt="pas image" width="200" height="200"/>
                                <div class="text d-flex align-items-center pt-3 text-center">
                                    <div>
                                        <h3 class="mb-2">Lloyd Wilson</h3>
                                        <span class="position mb-4">Lead Pastor</span>
                                        <div class="faded">
                                
                                    <a href="#"><span class="icon-phone"></span></a>  <span>  41 07 92 36 </span>
                                        
                                    </div>
                                    </div>
                                </div>
                            </li>
                        
                      </ul>           
         
                 </div>
                   
                  </div> 
          </div>
      </section>
  
          
          {{-- <section class="ftco-section ftco-no-pt ftco-no-pb">
              <div id="map" class="bg-white"></div>
          </section> --}}
  
          {{-- <section class="ftco-gallery ftco-section ftco-no-pb mb-4">
          <div class="container-fluid px-4">
              <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
              <h3 class="subheading">Autres</h3>
              <h2 class="mb-1">Christian Church Photo Gallery</h2>
            </div>
          </div>
              <div class="row">
                      <div class="col-md-3 ftco-animate">
                          <a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(frontend/images/gallery-1.jpg);">
                              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                              <span class="icon-instagram"></span>
                          </div>
                          </a>
                      </div>
                      <div class="col-md-3 ftco-animate">
                          <a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(frontend/images/gallery-2.jpg);">
                              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                              <span class="icon-instagram"></span>
                          </div>
                          </a>
                      </div>
                      <div class="col-md-3 ftco-animate">
                          <a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(frontend/images/gallery-3.jpg);">
                              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                              <span class="icon-instagram"></span>
                          </div>
                          </a>
                      </div>
                      <div class="col-md-3 ftco-animate">
                          <a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(frontend/images/gallery-4.jpg);">
                              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                              <span class="icon-instagram"></span>
                          </div>
                          </a>
                      </div>
          </div>
          </div>
      </section>   --}}



      
    
  
@endsection

