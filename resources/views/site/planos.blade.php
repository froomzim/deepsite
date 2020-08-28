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
                                <h1 data-animation="bounceIn" data-delay="0.2s">Planos</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Price Plan Area Start -->
    <section class="hami-price-plan-area mt-50">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Nossos Planos!</h2>
                        <p>Escolha seu plano, sem cobranças escondidas!</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <!-- Single Price Plan -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan mb-100">
                        <!-- Title -->
                        <div class="price-plan-title">
                            <h4>Plano Inicial</h4>
                            <p>20,00 Reais</p>
                        </div>
                        <!-- Value -->
                        <div class="price-plan-value">
                            <h2>1000</h2>
                            <p>Streams</p>
                        </div>
                        <!-- Button -->
                        <a href="https://www.mercadopago.com.br/checkout/v1/redirect?pref_id=15736318-e818030f-ae8f-4e83-ac98-3d57614f82a5" class="btn hami-btn w-100 mb-30">Contratar Agora!</a>
                        <!-- Description -->
                        <div class="price-plan-desc">
                            <p><i class="fa fa-check"></i> Início Imediato</p>
                            <p><i class="fa fa-check"></i> Direto na sua música, playlist ou álbum</p>
                            <p><i class="fa fa-check"></i> Streams Reais</p>
                            <p><i class="fa fa-check"></i> 100% Monetizavéis</p>
                        </div>
                    </div>
                </div>

                <!-- Single Price Plan -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan active mb-100">
                        <!-- Popular Tag -->
                        <div class="popular-tag">
                            <i class="icon_star"></i>FAVORITO<i class="icon_star"></i>
                        </div>
                        <!-- Title -->
                        <div class="price-plan-title">
                            <h4>Plano Hype</h4>
                            <p>150 Reais</p>
                        </div>
                        <!-- Value -->
                        <div class="price-plan-value">
                            <h2>10.000</h2>
                            <p>Streams</p>
                        </div>
                        <!-- Button -->
                        <a href="https://www.mercadopago.com.br/checkout/v1/redirect?pref_id=15736318-5bce4077-f937-4340-b0c1-49249b693b9b" class="btn hami-btn w-100 mb-30">Contratar Agora!</a>
                        <!-- Description -->
                        <div class="price-plan-desc">
                            <p><i class="fa fa-check"></i> Início Imediato</p>
                            <p><i class="fa fa-check"></i> Direto na sua música, playlist ou álbum</p>
                            <p><i class="fa fa-check"></i> Até 15% de bônus</p>
                            <p><i class="fa fa-check"></i> 100% Monetizavéis</p>
                        </div>
                    </div>
                </div>

                <!-- Single Price Plan -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan mb-100">
                        <!-- Title -->
                        <div class="price-plan-title">
                            <h4>Plano Sucesso</h4>
                            <p>85,00 Reais</p>
                        </div>
                        <!-- Value -->
                        <div class="price-plan-value">
                            <h2>5000</h2>
                            <p>Streams</p>
                        </div>
                        <!-- Button -->
                        <a href="https://www.mercadopago.com.br/checkout/v1/redirect?pref_id=15736318-b77aa768-cb69-4f3b-a204-a49f5dfb7fad" class="btn hami-btn w-100 mb-30">Contratar Agora!</a>
                        <!-- Description -->
                        <div class="price-plan-desc">
                            <p><i class="fa fa-check"></i> Início Imediato</p>
                            <p><i class="fa fa-check"></i> Direto na sua música, playlist ou álbum</p>
                            <p><i class="fa fa-check"></i> Até 10% de bônus</p>
                            <p><i class="fa fa-check"></i> 100% Monetizavéis</p>
                        </div>
                    </div>
                </div>

                <p>Precisa de uma maior quantidade? fale com a gente no Whatsapp <a style="color: red" href="https://api.whatsapp.com/send?phone=5511948256155&text=Oi%2C%20venho%20do%20deepsite%20e%20tenho%20interesse%20em%20streams!">Clicando Aqui!</a></p>

            </div>
        </div>
    </section>
    <!-- Price Plan Area End -->


@endsection
