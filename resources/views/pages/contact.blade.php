@extends('corps.content')

@section('content')
    
       <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
              {{-- <span class="subheading">Contact</span> --}}
              <h2 class="mb-4">Contactez-nous</h2>
              <p>Ecrivez votre Message et nous vous contacterons en fonction de votre besoin , <strong> Dieu vous benisse!</strong></p>
            </div>
          </div>
  
          <div class="row block-9">
            <div class="col-md-7 order-md-last d-flex">
              <form action="sendmessage" method="POST" class="bg-light p-4 p-md-5 contact-form">
                @csrf
                <div class="form-group">
                  <input type="text" name="Nom_complet" class="form-control" placeholder="Votre nom complet">
                </div>
                <div class="form-group">
                  <input type="text" name="email" class="form-control" placeholder="Votre email">
                </div>
                <div class="form-group">
                    <input type="text" name="tel" class="form-control" placeholder="Telephone">
                  </div>
                <div class="form-group">
                  <input type="text" name="objet" class="form-control" placeholder="l'objet de votre message">
                </div>
                <div class="form-group">
                  <textarea name="" id="" name="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Envoyez" class="btn btn-primary py-3 px-5">
                </div>
              </form>
            
            </div>
  
            <div class="col-md-5 d-flex">
                <div class="row d-flex contact-info mb-5">
                    <div class="col-md-12 ftco-animate">
                        <div class="box p-2 px-3 bg-light d-flex">
                            <div class="icon mr-3">
                                <span class="icon-map-signs"></span>
                            </div>
                            <div>
                                <h3 class="mb-3">Adresse</h3>
                              <p>Yopougon niangon, carrefour <strong>Amondji</strong> en face de la clinique SAINTE RITA</p>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-12 ftco-animate">
                        <div class="box p-2 px-3 bg-light d-flex">
                            <div class="icon mr-3">
                                <span class="icon-phone2"></span>
                            </div>
                            <div>
                                <h3 class="mb-3">Numéro</h3>
                              <p><a href="tel://1234567920">+225 41 07 92 36</a></p>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-12 ftco-animate">
                        <div class="box p-2 px-3 bg-light d-flex">
                            <div class="icon mr-3">
                                <span class="icon-paper-plane"></span>
                            </div>
                            <div>
                                <h3 class="mb-3">Email </h3>
                              <p><a href="mailto:info@yoursite.com">andersonambeu@gmail.com</a></p>
                          </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-12 ftco-animate">
                        <div class="box p-2 px-3 bg-light d-flex">
                            <div class="icon mr-3">
                                <span class="icon-globe"></span>
                            </div>
                            <div>
                                <h3 class="mb-3">Website</h3>
                              <p><a href="#">yoursite.com</a></p>
                          </div>
                        </div>
                    </div> --}}
                  </div>
            </div>
          </div>
        </div>
      </section> 
@endsection