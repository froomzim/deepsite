@extends('site.site-menu')
@section('title')
    Início
@endsection

@section('content')
     <!--? slider Area Start-->
     <section class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption text-center">
                                <h1 data-animation="bounceIn" data-delay="0.2s">Streams 100% monetizáveis!</h1>
                                <p data-animation="fadeInUp" data-delay="0.4s">Nossos Streams são feitos por contas reais! Isso garante total segurança pra gente e principalmente para você</p>
                                <a href="{{ route('planos') }}" class="btn hero-btn" data-animation="fadeInUp" data-delay="0.9s">Ver Planos!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption text-center">
                                <h1 data-animation="bounceIn" data-delay="0.2s">Mais números pra sua conta!</h1>
                                <p data-animation="fadeInUp" data-delay="0.4s">Os streams são todos monetizaveis, fique com 100% dos seus royalities.</p>
                                <a href="{{ route('planos') }}" class="btn hero-btn" data-animation="fadeInUp" data-delay="0.9s">Ver Planos!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider Area End-->
    <div class="project-screen">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="screen-img">
                        <img src="/assets/img/gallery/screen.png" alt="" class=" w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Area End -->
    <!--? Our Services Start -->
    <section class="our-services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <h2>Chega de anúncios pagos sem o retorno desejado!</h2>
                        <p>Invista diretamente nas visualizações, seja reconhecido por números reais.</p>
                        <p>Facilite o processo de crescimento, obtenha mais parcerias e collabs!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Services End -->
    <!--? About Area  -->
    <section class="about-area2 pb-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-5 col-md-9">
                    <!-- about-img -->
                    <div class="about-img ">
                        <img src="/assets/img/gallery/about1.png" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                        <div class="about-icon">
                            <img src="/assets/img/icon/about.svg" alt="">
                        </div>
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-25">
                            <h2>Recupere seu investimento!</h2>
                        </div>
                        <p class="mb-20">
                            Imagine um investimento, onde você ja começasse com a chance de recuperar quase seu investimento todo? <br>
                            Aqui é o lugar certo! <br>
                            Streams feitos por contas reais, 100% monetizaveis e com início imediato! <br>

                        </p>
                        <a href="/planos" class="all-btn">Ver Planos!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->
    <!--? video_start -->
    <div class="video-area section-bg2 d-flex align-items-center"  data-background="assets/img/gallery/video-bg.png">
        <div class="container">
            <div class="video-wrap position-relative" ><!--  data-background="img/video_bg/video-img.png" -->
                <!-- <div class="vidoe-img"><img class="img" src="/assets/img/gallery/video-bg.svg" alt=""></div> -->
                <!-- Video icon -->
                <div class="video-icon" >
                    <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=eXxEXeoCk9E"><i class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- video_end -->
    <!--? Want To work 01-->
    <section class="wantToWork-area " >
        <div class="container">
            <div class="wants-wrapper w-padding2 section-bg2" data-background="assets/img/gallery/section_bg02.png">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-7 col-lg-9 col-md-8">
                        <div class="wantToWork-caption text-center">
                            <h2>Comece a contabilizar seus Streams agora!</h2>
                            <p>O processo é iniciado automaticamente, acompanhe ao vivo seus espectadores e diariamente seus streams crescendo!</p>
                            <a href="{{ route('planos') }}" class="btn3 wantToWork-btn">Contratar agora!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Want To work End -->

@endsection
