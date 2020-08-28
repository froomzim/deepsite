@extends('site.site-menu')
@section('title')
    Início
@endsection

@section('content')
     <!--? slider Area Start-->
     <section class="slider-area slider-area2">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2 text-center">
                                <h1 data-animation="bounceIn" data-delay="0.2s">Perguntas Frequentes</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="faq-section section-padding40" >
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle">
                        <h2>Algumas perguntas!</h2>
                    </div>
                    <div class="collapse-wrapper">
                        <div class="accordion" id="accordionExample">
                            <!-- single-one -->
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <a href="#" class="btn-link collapsed"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Como Funciona?</a>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Assim que seu pedido for processado, vamos analisar sua música / álbum e começar o processo para colher seus streams. Não se preocupe, você será notificado assim que começarmos!
                                    </div>
                                </div>
                            </div>
                            <!-- single-two -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Os Streams são do meu País?</a>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse collapsed" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Até o momento estamos trabalhando por região! Você pode escolher seus streams da américa latina, por exemplo.
                                    </div>
                                </div>
                            </div>
                            <!-- single-three -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <a href="#" class="btn-link collapsed"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Vocês trabalham com pacotes mensais?</a>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Sim! Trabalhamos! <br>
                                        Contate-nos via Whatsapp e vamos negociar um valor acessivel para você!
                                    </div>
                                </div>
                            </div>
                            <!-- single-four -->
                            <div class="card">
                                <div class="card-header" id="headingfouree">
                                    <h2 class="mb-0">
                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFoure" aria-expanded="false" aria-controls="collapseFoure">Quanto tempo demora pra eu receber meus streams?</a>
                                    </h2>
                                </div>
                                <div id="collapseFoure" class="collapse" aria-labelledby="headingfouree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Isto depende do pacote adquirido e da nossa demanda! <br>
                                        Os Streams são balanceados pra que assim nao fiquem desbalanceados com seu histórico. Mas de qualquer forma, você pode sempre nos contactar via Whatsapp.
                                    </div>
                                </div>
                            </div>
                            <!-- single-five -->
                            <div class="card">
                                <div class="card-header" id="headingfive">
                                    <h2 class="mb-0">
                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFoure">Os streams são monetizaveis? Vou ganhar dinheiro com eles?</a>
                                    </h2>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Sim, todos os streams contabilizados podem ser 100% monetizados.
                                    </div>
                                </div>
                            </div>
                            <!-- single-six -->
                            <div class="card">
                                <div class="card-header" id="headingsix">
                                    <h2 class="mb-0">
                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseFoure">Tenho mais dúvidas, posso falar com vocês?</a>
                                    </h2>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Sim, fale com a gente via Whatsapp <a style="color: red" href="https://api.whatsapp.com/send?phone=5511948256155&text=Oi%2C%20venho%20do%20deepsite%20e%20tenho%20interesse%20em%20streams!">Clicando Aqui</a>.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
