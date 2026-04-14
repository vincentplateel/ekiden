<# 

The entire logic and markup of the default template is located inside the "page" component
that is simply included here.

#>
<@ components/page.php @>

<@~ snippet main ~@>
	  <!-- Widget-slide -->
    <div class="tf-slider-widget swiper mySwiper">
        <div class="tf-slider swiper-wrapper">
            <div class="tf-banner swiper-slide">
                <div class="image-slider">
                    <img src="/shared/img-8044.jpg" alt="image" />
                    <div class="overlay"></div>
                </div>
                <div class="themeflat-container">
                    <div class="slide-item">
                        <div class="silde-content">
                            <span class="flat-sub-slider"></span>
                            <h1 class="flat-title-slider">Réservez vos dossards
                            </h1>
                            <p class="flat-description-slider">Les inscriptions pour l'édition 2026 sont ouvertes
                            </p>
                            <div class="button">
                                <a href="/inscriptions" class="flat-button">S'inscrire</a>
                            </div>
                        </div>
                        <div class="box-events-slide">
                            <span class="new-event">8ème édition </span>
                            <img src="/shared/photo-2026-02-09-15-40-57-2.jpg" alt="image event" class="new-event">
                            <div class="content-event">
                                <h2 class="title-event text-center"><a href="#" class="">EKIDEN DE MARSEILLE 2026</a>
                                </h2>
                               
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="tf-banner swiper-slide">
                <div class="image-slider">
                    <img src="/shared/img-8703.jpg" alt="image" />
                    <div class="overlay"></div>
                </div>
                <div class="themeflat-container">
                    <div class="slide-item">
                        <div class="silde-content">
                            <h1 class="flat-title-slider">Une course unique
                            </h1>
                            <p class="flat-description-slider">Découvrez un parcours exceptionnel en plein coeur de Marseille
                            </p>
                            <div class="button">
                                <a href="/la-course/parcours" class="flat-button">Découvrir</a>
                            </div>
                        </div>
                           <div class="box-events-slide">
                            <span class="new-event">8ème édition </span>
                            <img src="/shared/photo-2026-02-09-15-40-57-2.jpg" alt="image event" class="new-event">
                            <div class="content-event">
                                <h2 class="title-event text-center"><a href="#" class="">EKIDEN DE MARSEILLE 2026</a>
                                </h2>
                               
                            </div>

                
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div><!-- Widget-slide -->
    <!-- Widget-clock -->
    <div class="tf-wiget-counter background-black main-content-medium">
        <div class="themeflat-container">
            <div class="tf-counter">
                <div class="title-box-v2 center-title-box title-large">
                    <h2 class="title-section wow fadeInUp animated animated">Prochaine édition dans...</h2>
                </div>
                <div class="row clock"></div>
            </div>
        </div>
    </div><!-- Widget-clock -->
    <div class="tf-widget-partner ">
        <div class="themeflat-container">
            <div class="title-box title-medium center-title-box">
                <span class="sub-title wow fadeInUp animated animated">Partenaires</span>
                <h2 class="title-section wow fadeInUp animated animated">En collaboration avec</h2>
            </div>
            <div class="tf-partner">
                <div class="sologan-logo">
                    <a href="https://athle.fr">
                        <img class="image-logo" src="/shared/ffa.png" alt="image logo">
                    </a>
                    <a href="https://www.maregionsud.fr">
                        <img class="image-logo" src="/shared/logo-marque-region-sud.png" alt="image logo">
                    </a>
                    <a href="https://www.departement13.fr">
                        <img class="image-logo" src="/shared/bouches-du-rhone-logo.png" alt="image logo">
                    </a>
                    <a href="https://www.marseille.fr">
                        <img class="image-logo" src="/shared/ville-de-marseille-logo.png" alt="image logo">
                    </a>
                    <a href="https://baam-marseille.com">
                        <img class="image-logo" src="/shared/logo-baam-36490569-e5d8-4c9c-8f41-dd551279e915.png.webp" alt="image logo">
                    </a>
                    <a href="https://www.brasseriezoumai.fr">
                        <img class="image-logo" src="/shared/zoumai.jpg" alt="image logo">
                    </a>
                    <a href="https://www.hotelvillam-marseille.com">
                        <img class="image-logo" src="/shared/villa-massilia.png" alt="image logo">
                    </a>
                    <a href="https://athle.fr">
                        <img class="image-logo" src="/shared/ffa.png" alt="image logo">
                    </a>
                    <a href="https://www.maregionsud.fr">
                        <img class="image-logo" src="/shared/logo-marque-region-sud.png" alt="image logo">
                    </a>
                    <a href="https://www.departement13.fr">
                        <img class="image-logo" src="/shared/bouches-du-rhone-logo.png" alt="image logo">
                    </a>
                    <a href="https://www.marseille.fr">
                        <img class="image-logo" src="/shared/ville-de-marseille-logo.png" alt="image logo">
                    </a>
                    <a href="https://baam-marseille.com">
                        <img class="image-logo" src="/shared/logo-baam-36490569-e5d8-4c9c-8f41-dd551279e915.png.webp" alt="image logo">
                    </a>
                    <a href="https://www.brasseriezoumai.fr">
                        <img class="image-logo" src="/shared/zoumai.jpg" alt="image logo">
                    </a>
                    <a href="https://www.hotelvillam-marseille.com">
                        <img class="image-logo" src="/shared/villa-massilia.png" alt="image logo">
                    </a>
                </div>
            </div>
        </div>
    </div><!-- Logo partner -->

   <div class="tf-widget-banner">
        <div class="themeflat-container">
            <div class="tf-banne-paralax">
               <div class="title-box-v2 center-title-box title-large">
                    <span class="sub-title wow fadeInUp animated animated animated">Ekiden de Marseille</span>
                    <h2 class="title-section wow fadeInUp animated animated"> La course par équipe 100% fun</h2>
                                 <br>
                                 <br>
                    <a href="/la-course" class="flat-button wow fadeInUp animated animated">Découvrir</a>
                </div>
          
               
 
                
            </div>
        </div>
    </div>
	
<@~ end ~@>