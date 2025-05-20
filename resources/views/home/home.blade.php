@extends('layout')
@section('content')
    <main class="main">

        <section id="hero" class="hero text-center section dark-background">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h2>Bem vindo(a) à clínica Natália Piller</h2>
                <p><span class="typed"
                         data-typed-items="Dentistica Estética, Períodontia, Harmonização facial, Ortodontia, Tratamento de canal, Implante, Invisiling"></span>
                </p>
            </div>
            <img src="assets/img/natalia-bg-alternativa3.png" alt="" data-aos="fade-in">
        </section>
        <!-- Portfolio Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>DENTISTICA</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="assets/img/portfolio/coroa.PNG" class="img-fluid" alt="">
                            <div class="portfolio-info" id="portfolio_clareamento">
                                <h4>Coroa</h4>
                                <p>A coroa é uma capa protética que recobre e protege um dente danificado. Ela restaura a forma, função e aparência do dente. Pode ser feita de cerâmica, metal ou resina.</p>
                                <a title="More Details" class="details-link" onclick="fecharPopUp(this)"><i
                                        class="bi bi-x"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div id="comparison">
                                <figure style="background-image: url({{ asset('/assets/img/portfolio/lentes_porcelana_antes.png') }})">
                                    <div id="divisor" style="background-image: url({{ asset('/assets/img/portfolio/lentes_procelana_depois.png') }})"></div>
                                </figure>
                                <input type="range" min="0" max="100" value="50" id="slider" oninput="moveDivisor()">
                            </div>

                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="assets/img/portfolio/resinas_estéticas.PNG" class="img-fluid" alt="">
                            <div class="portfolio-info" id="portfolio_clareamento">
                                <h4>Resinas Estéticas</h4>
                                <p>As resinas estéticas são materiais restauradores que possibilitam a reabilitação dental com alta fidelidade anatômica e cromática, preservando a estrutura natural e promovendo excelência estética com mínima intervenção.</p>
                                <a title="More Details" class="details-link" onclick="fecharPopUp(this)"><i
                                        class="bi bi-x"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->
                    </div>



                </div>
            </div>

        </section><!-- /Portfolio Section -->
        <section id="portfolio" class="portfolio section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>ESTÉTICA FACIAL</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="assets/img/portfolio/preenchimento_labial.PNG" class="img-fluid" alt="">
                            <div class="portfolio-info" id="portfolio_clareamento">
                                <h4>Preenchimento Labial</h4>
                                <p>O preenchimento labial é um procedimento estético minimamente invasivo que visa restaurar volume, contorno e simetria aos lábios, promovendo harmonização facial com naturalidade e sofisticação.</p>
                                <a title="More Details" class="details-link" onclick="fecharPopUp(this)"><i
                                        class="bi bi-x"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="assets/img/portfolio/microagulhamento.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info" id="portfolio_clareamento">
                                <h4>Microagulhamento</h4>
                                <p>O microagulhamento é um procedimento minimamente invasivo que utiliza microagulhas para induzir a formação de colágeno e elastina na pele. Indicada para rejuvenescimento, tratamento de cicatrizes, estrias e manchas, a técnica promove a renovação tecidual de forma segura e eficaz.</p>
                                <a title="More Details" class="details-link" onclick="fecharPopUp(this)"><i
                                        class="bi bi-x"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="assets/img/portfolio/botox.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info" id="portfolio_clareamento">
                                <h4>Botox</h4>
                                <p> O botox, nome comercial da toxina botulínica, é um agente neuromodulador utilizado para suavizar linhas de expressão e prevenir a formação de rugas dinâmicas. Sua aplicação promove harmonização facial, mantendo a naturalidade e a leveza da expressão.</p>
                                <a title="More Details" class="details-link" onclick="fecharPopUp(this)"><i
                                        class="bi bi-x"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->
                    </div>
                </div>
            </div>

        </section><!-- /Portfolio Section -->

        <section id="portfolio" class="portfolio section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>PERIODONTIA</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="assets/img/portfolio/enxerto_gengival.png" class="img-fluid" alt="">
                            <div class="portfolio-info" id="portfolio_clareamento">
                                <h4>Enxerto Gengival</h4>
                                <p>O enxerto gengival é um procedimento cirúrgico indicado para reconstruir tecidos periodontais, corrigindo retrações e aumentando a espessura da gengiva. Visa restabelecer a harmonia estética e proteger as raízes dentárias expostas, promovendo saúde e funcionalidade periodontal.</p>
                                <a title="More Details" class="details-link" onclick="fecharPopUp(this)"><i
                                        class="bi bi-x"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="assets/img/portfolio/gengivectomia.JPG" class="img-fluid" alt="">
                            <div class="portfolio-info" id="portfolio_clareamento">
                                <h4>Gengivectomia</h4>
                                <p>A gengivectomia é um procedimento cirúrgico destinado à remoção do excesso de tecido gengival, visando melhorar a estética do sorriso e facilitar o controle da saúde periodontal. Proporciona contornos gengivais mais harmônicos e favorece a higienização.</p>
                                <a title="More Details" class="details-link" onclick="fecharPopUp(this)"><i
                                        class="bi bi-x"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                    </div>
                </div>
            </div>

        </section><!-- /Portfolio Section -->


        <!-- Services Section -->
        <section id="services" class="services section">

            <div class="container">

                <div class="section-header text-center mb-5">
                    <h2>Nossos Serviços</h2>
                    <p>Oferecemos atendimento completo e especializado para cuidar da sua saúde bucal e estética facial com excelência e dedicação.</p>
                </div>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative text-center">
                            <a class="stretched-link">
                                <h3>Dentística Estética</h3>
                            </a>
                            <p>Restaurações, clareamento dental e reabilitação do sorriso com foco em naturalidade e harmonia.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative text-center">
                            <a class="stretched-link">
                                <h3>Periodontia</h3>
                            </a>
                            <p>Prevenção e tratamento das doenças gengivais, preservando a saúde dos tecidos de suporte dos dentes.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative text-center">
                            <a class="stretched-link">
                                <h3>Harmonização Facial</h3>
                            </a>
                            <p>Procedimentos estéticos para realçar a beleza natural, corrigir assimetrias e promover rejuvenescimento.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative text-center">
                            <a class="stretched-link">
                                <h3>Ortodontia</h3>
                            </a>
                            <p>Correção do alinhamento dentário e das estruturas faciais, promovendo estética e funcionalidade.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative text-center">
                            <a class="stretched-link">
                                <h3>Tratamento de Canal</h3>
                            </a>
                            <p>Procedimentos endodônticos para salvar dentes comprometidos, aliviando a dor e preservando a função dental.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative text-center">
                            <a class="stretched-link">
                                <h3>Implantes Dentários</h3>
                            </a>
                            <p>Reposição de dentes ausentes com implantes de alta tecnologia, devolvendo estética e mastigação eficiente.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="service-item position-relative text-center">
                            <a class="stretched-link">
                                <h3>Invisalign</h3>
                            </a>
                            <p>Alinhadores transparentes e removíveis para corrigir os dentes de forma discreta, confortável e eficaz.</p>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Services Section -->


        <section id="about" class="about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-md-6">

                        <div class="row justify-content-between gy-4">
                            <div class="col-lg-5">
                                <img src="assets/img/foto-natalia.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-7 about-info">
                                <p><strong>Nome: </strong> <span>Natalia Piller</span></p>
                                <p><strong>Especialidades: </strong>
                                    <span>Dentística, Cirurgia Plástica Periodontal</span></p>
                                <p><strong>Email: </strong> <span>clinicadranataliapiller@gmail.com</span></p>
                                <p><strong>Telefone: </strong> <span>+55 11 96314-0057</span></p>
                            </div>
                        </div>

                        <div class="skills-content skills-animation">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="about-me">
                            <h4>Sobre</h4>
                            <p>
                                Oi! Sou a Dra. Natalia Piller, e estou aqui para cuidar do seu sorriso com todo carinho!
                            </p>
                            <p>
                                Como Especialista em Dentística e Cirurgia Plástica Periodontal, minha paixão é unir
                                arte e ciência para criar sorrisos saudáveis e esteticamente deslumbrantes. Se você
                                busca um sorriso que reflete sua personalidade única, estou aqui para ajudar.
                            </p>
                            <p>
                                Vamos marcar uma avaliação? Estou pronta para entender suas necessidades e criar um
                                plano de tratamento personalizado.
                            </p>
                            <p>
                                Juntos vamos conquistar o sorriso dos seus sonhos!

                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->


        <!-- Faq Section -->
        <section id="faq" class="faq section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="content px-xl-5">
                            <h3><span>Perguntas Frequentes </span><strong>Odontologia</strong></h3>
                            <p>
                                Tire suas dúvidas sobre os tratamentos oferecidos em nossa clínica. Ao lado estão
                                algumas
                                das perguntas mais comuns que recebemos sobre cuidados bucais e especialidades
                                odontológicas.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                        <div class="faq-container">
                            <div class="faq-item faq-active">
                                <h3><span class="num">1.</span> <span>Com que frequência devo ir ao dentista?</span>
                                </h3>
                                <div class="faq-content">
                                    <p>O ideal é visitar o dentista a cada 6 meses para avaliação e prevenção, mesmo que
                                        você não esteja sentindo dor ou incômodo.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item">
                                <h3><span class="num">2.</span>
                                    <span>O que é periodontite e como ela pode ser tratada?</span></h3>
                                <div class="faq-content">
                                    <p>Periodontite é uma inflamação grave da gengiva que pode levar à perda óssea. O
                                        tratamento envolve raspagem e alisamento radicular, além de cuidados rigorosos
                                        com a higiene bucal.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item">
                                <h3><span class="num">3.</span> <span>Clareamento dental enfraquece os dentes?</span>
                                </h3>
                                <div class="faq-content">
                                    <p>Quando feito corretamente por um profissional, o clareamento dental não
                                        enfraquece os dentes, mas pode causar sensibilidade temporária.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item">
                                <h3><span class="num">4.</span>
                                    <span>Canal dói? Como é feito o tratamento endodôntico?</span></h3>
                                <div class="faq-content">
                                    <p>O tratamento de canal é feito sob anestesia local e geralmente não dói. Ele
                                        remove a polpa inflamada ou infectada do dente, eliminando a dor e preservando o
                                        dente.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item">
                                <h3><span class="num">5.</span>
                                    <span>Quais são os cuidados após uma extração dentária?</span></h3>
                                <div class="faq-content">
                                    <p>É importante evitar esforço físico, não bochechar nas primeiras 24h, manter uma
                                        dieta líquida ou pastosa e seguir corretamente as orientações do dentista para
                                        uma boa cicatrização.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </section><!-- /Faq Section -->


        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section accent-background">

            <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                        {
                          "loop": true,
                          "speed": 600,
                          "autoplay": {
                            "delay": 5000
                          },
                          "slidesPerView": "auto",
                          "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                          }
                        }
                    </script>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/img/testimonials/deborah.png') }}" class="testimonial-img"
                                     alt="">
                                <h3>Deborah Freitas de Macêdo</h3>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Dra Natalia é incrível! Uma profissional extremamente capacitada e maravilhosa! Extremamente cuidadosa, atenciosa e com uma mão leveeeee rs
              Explica todos os procedimentos nos mínimos detalhes, é muito clara em todas as etapas do tratamento e está sempre disponível para dúvidas e suporte. Você se sente extremamente confortável e confiante pois ela te explica e te mostra o que fará, porque fará e os resultados seja estéticos ou funcionais, são vistos desde o início do tratamento. Ela demonstra muito conhecimento técnico e sempre indica os melhores e mais indicados tratamentos pra todas as queixas.
              Meu sorriso é outro, minha pele também!!
              Indico de olhos fechados!!
              </span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/karla.png" class="testimonial-img" alt="">
                                <h3>Karla Maia</h3>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Experiência maravilhosa desde o início, mto atenciosa, prestativa!. A cada consulta com a dra Natália saio renovada, muito atenciosa, receptiva, logo que cheguei
              recebi um enorme acolhimento me auxiliou antes, durante e depois do procedimento, um amor de pessoa! . Estou amando os meus resultados com a dra, profissional nota 10!</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/giovanna.png" class="testimonial-img" alt="">
                                <h3>Giovanna Franchi</h3>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Dr. Natália é uma ótima profissional, seu trabalho é excelente e muito atenciosa!</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/danielle.png" class="testimonial-img" alt="">
                                <h3>Danielle Monay</h3>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>A Dra Natalia Piller é maravilhosa. Além de super cuidadosa, é uma excelente profissional!</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/yasmin.png" class="testimonial-img" alt="">
                                <h3>Yasmin Granger Sabugari</h3>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Ótima profissional, atenciosa e detalhista. Super indico!</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contato</h2>
                <p>Entre em contato conosco e agende uma avaliação!</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="info-wrap" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-5">

                        <div class="col-lg-4">
                            <div class="info-item d-flex align-items-center">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Endereço</h3>
                                    <p>Rua Itapura 239 sala 1306 - Tatuapé</p>
                                </div>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-lg-4">
                            <div class="info-item d-flex align-items-center">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Telefone</h3>
                                    <p>+55 11 96314-0057</p>
                                </div>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-lg-4">
                            <div class="info-item d-flex align-items-center">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Nosso E-mail</h3>
                                    <p>clinicadranataliapiller@gmail.com</p>
                                </div>
                            </div>
                        </div><!-- End Info Item -->

                    </div>
                </div>

                <form action="{{ route('email.enviaremail') }}" method="post" class="php-email-form">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <input type="text" name="nome" class="form-control" placeholder="Nome" required="">
                        </div>
                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="E-mail" required="">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="assunto" placeholder="Assunto" required="">
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" name="mensagem" rows="6" placeholder="Mensagem"
                                      required=""></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="error-message"></div>
                            @if(session()->has('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            <button type="submit">Enviar</button>
                        </div>
                    </div>
                </form><!-- End Contact Form -->
            </div>
        </section><!-- /Contact Section -->
    </main>
@endsection
