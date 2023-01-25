@extends('layout.app')

@section('content')

<section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Generer un profil plus facilement</h1>
          <h2>Generer des profils en fournissant quelques informations sur vous</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#genForm" class="btn-get-started scrollto">Commencer</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>

  <section id="genForm" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Generer un profil</h2>
        <p>Génerer votre profil automatiquement en renseignant vos informations</p>
      </div>

      <div class="row">

        <div class="col">
          <form action="{{route('generate-profile')}}" method="post" role="form" class="php-email-form">
            @csrf
            <div class="form-group">
              <label for="name"></label>
              <textarea class="form-control" name="profil" rows="3" required>{{request()->profil}}</textarea>
            </div>

            <div class="text-center"><button type="submit">Generer</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

  @isset($resultat)
    <section id="" class="contact">
        <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Resultat </h2>
            <p>Votre profil est le suivant :</p>
        </div>

        <div class="row">

            <div class="col">
            <form action="" method="post" role="form" class="php-email-form">
                <div class="form-group">
                <label for="name">Profil</label>
                <textarea class="form-control" name="profil" id="textarea-copy" rows="3" >{{$resultat}}</textarea>
                </div>

            </form>
            </div>

        </div>

        </div>
    </section>

  @endisset




@endsection
