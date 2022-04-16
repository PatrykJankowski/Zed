<?php get_header(); ?>

<section class="slider">
    <div class="slideshow-container">
        <?php if (get_field('slider_img_1')): ?>
            <div class="slide fade">
                <img class="slider__img" height="900" src="<?php echo get_field('slider_img_1') ?>" alt="<?php echo get_field('slider_header_1') ?>">
                <img class="slider__img-mobile" src="<?php echo get_field('slider_img_mobile_1') ?>" alt="<?php echo get_field('slider_header_1') ?>">
                <div class="container container-slider">
                    <div class="text">
                        <h1 class="slider__header"><?php echo get_field('slider_header_1') ?></h1>
                        <div class="slider__dsc"><?php echo get_field('slider_dsc_1') ?></div>
                        <?php if (get_field('slider_button_1')): ?>
                            <a class="button button--slider" href="<?php echo get_field('slider_button_1') ?>"><?php echo get_field('slider_button_dsc_1') ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if (get_field('slider_img_2')): ?>
            <div class="slide fade">
                <img class="slider__img" height="900" src="<?php echo get_field('slider_img_2') ?>" alt="<?php echo get_field('slider_header_2') ?>">
                <img class="slider__img-mobile" src="<?php echo get_field('slider_img_mobile_2') ?>" alt="<?php echo get_field('slider_header_2') ?>">
                <div class="container container-slider">
                    <div class="text">
                        <h1 class="slider__header"><?php echo get_field('slider_header_2') ?></h1>
                        <span class="slider__dsc"><?php echo get_field('slider_dsc_2') ?></span>
                        <?php if (get_field('slider_button_2')): ?>
                            <a class="button button--slider" href="<?php echo get_field('slider_button_2') ?>"><?php echo get_field('slider_button_dsc_2') ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if (get_field('slider_img_3')): ?>
            <div class="slide fade">
                <img class="slider__img" height="900" src="<?php echo get_field('slider_img_3') ?>" alt="<?php echo get_field('slider_header_3') ?>">
                <img class="slider__img-mobile" src="<?php echo get_field('slider_img_mobile_2') ?>" alt="<?php echo get_field('slider_header_3') ?>">
                <h1 class="slider__header"><?php echo get_field('slider_header_3') ?></h1>
                <span class="slider__dsc"><?php echo get_field('slider_dsc_3') ?></span>
                <div class="container container-slider">
                    <div class="text">
                        <span><?php echo get_field('slider_dsc_3') ?></span>
                        <?php if (get_field('slider_button_3')): ?>
                            <a class="button button--slider" href="<?php echo get_field('slider_button_3') ?>"><?php echo get_field('slider_button_dsc_3') ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <!-- The dots/circles -->
    <div class="dots">
        <?php if (get_field('slider_img_2')): ?>
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
        <?php endif; ?>

        <?php if (get_field('slider_img_3')): ?>
            <span class="dot" onclick="currentSlide(3)"></span>
        <?php endif; ?>
    </div>
</section>


<section class="section bg-white">
    <div class="container">
        <h2 class="font-size-24 font-size-36-lg mb-120 text-align-center-lg">Chcesz zwiększyć ruch na stronie internetowej i konwersje, ale nie wiesz od czego zacząć?</h2>
        <div class="row">
            <div class="col-xl-3">
                <div class="d-flex flex-column align-items-center-lg text-align-center-lg h-100">
                    <svg width="94" height="80" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m73 25 15 15-15 15" stroke="#E7B222" stroke-width="8"/><path d="m73 25 15 15-15 15" stroke="#E7B222" stroke-width="8"/><g><path d="M22.222 28.398 11.13 35.917.363 20.349 27.442.265h16.74v79.47h-21.96V28.398Z" stroke="#E7B222"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h44.444v80H0z"/></clipPath></defs></svg>
                    <h4 class="font-size-20 font-size-24-lg mt-35 mb-20">Poznajmy się!</h4>
                    <p class="font-size-18 font-weight-300 flex-grow">Skonsultujemy i przeanalizujemy Twoje potrzeby</p>
                </div>
            </div>
            <div class="col-xl-3 mt-70 mt-0-xl">
                <div class="d-flex flex-column align-items-center-lg text-align-center-lg h-100">
                    <svg width="103" height="80" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m82 25 15 15-15 15" stroke="#E7B222" stroke-width="8"/><path d="m82 25 15 15-15 15" stroke="#E7B222" stroke-width="8"/><g><path d="M.257 66.068 24.6 39.048c2.056-2.33 9.252-10.284 9.252-15.472 0-2.969-1.974-5.299-4.889-5.299-3.644 0-6.034 3.283-6.034 8.053L1.192 24.32C1.192 9.8 12.115.261 28.45.261c16.335 0 27.062 8.69 27.062 21.617 0 9.325-5.31 17.168-16.648 29.037l-10.83 11.23 28.295-.424v18.016H.257v-13.67Z" stroke="#E7B222"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h56.585v80H0z"/></clipPath></defs></svg>
                    <h4 class="font-size-20 font-size-24-lg mt-35 mb-20">Ustalmy cele</h4>
                    <p class="font-size-18 font-weight-300 flex-grow">Zarekomendujemy strategię i nawiążemy współpracę</p>
                </div>
            </div>
            <div class="col-xl-3 mt-70 mt-0-xl">
                <div class="d-flex flex-column align-items-center-lg text-align-center-lg h-100">
                    <svg width="105" height="80" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m84 25 15 15-15 15" stroke="#E7B222" stroke-width="8"/><path d="m84 25 15 15-15 15" stroke="#E7B222" stroke-width="8"/><g><path d="M58.273 53.136c0 16-12.295 26.602-32.601 26.602-9.728 0-19.778-2.759-25.35-6.806l8.244-15.864c3.422 2.618 9.089 4.654 14.671 4.654 7.922 0 12.4-3.392 12.4-8.377 0-5.083-4.172-8.162-10.689-8.162a18.572 18.572 0 0 0-9.432 2.46L9.638 36.713l15.39-18.44H4.61V.262h48.318v13.455l-14.65 15.471c12.194 2.016 19.995 11.236 19.995 23.948Z" stroke="#E7B222"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h58.537v80H0z"/></clipPath></defs></svg>
                    <h4 class="font-size-20 font-size-24-lg mt-35 mb-20">Osiągajmy wyniki!</h4>
                    <p class="font-size-18 font-weight-300 flex-grow">Wypoozycjonujemy stronę, spełnimy cele stale monitorując efekty</p>
                </div>
            </div>
            <div class="col-xl-3 mt-70 mt-0-xl">
                <div class="d-flex flex-column align-items-center-lg text-align-center-lg h-100">
                    <h4 class="font-size-20 font-size-24-lg mt-35 mb-20"><span class="color-primary">Skontaktuj się z nami</span><br>Twój biznes musi być widoczny</h4>
                    <a href="#" class="button">Skontaktuj się!</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section bg-marketing">
    <div class="container relative">
        <h2 class="font-size-24 font-size-36-lg color-primary text-align-center mb-120">Specjalizujemy się w działaniach marketingu internetowego</h2>
        <div class="row">
            <div class="col-xl-4">
                <div class="d-flex flex-column h-100 align-items-center-lg text-align-center-lg">
                    <svg width="152" height="150" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M109.1 15.17A64.75 64.75 0 0 0 18 106.38c1 1.17 2 2.31 3 3.4l17.6-17.56a35.36 35.36 0 0 1-2.86-3.49 39.84 39.84 0 0 1 55.37-55.84 38.522 38.522 0 0 1 5.62 4.87h30a64.927 64.927 0 0 0-17.63-22.59Zm13 86.07.27-.42H122V79.49l-43.64 43.58-17.69-17.69-19 19a64.93 64.93 0 0 0 62.45-5.16l28.28 28.28 17.91-18-28.21-28.26Z" stroke="#E7B222" stroke-miterlimit="10"/><path d="M146.85 37.76v63.06h-24.9V79.49l-43.59 43.58-17.69-17.69-42.35 42.35L.71 130.12l20.33-20.34L38.6 92.22l22.07-22.08 17.61 17.62.08.06 25.17-25.16H83.79v-24.9h63.06Z" stroke="#E7B222" stroke-miterlimit="10"/></svg>
                    <h4 class="font-size-20 font-size-24-lg mt-35 mb-35 color-primary">Doświadczenie</h4>
                    <p class="font-size-18 flex-grow">Pomagamy firmom rozwijać obecność w Internecie od 2006 roku. Nasze doświadczenie to praca z setkami klientów różnych branż i promocja ich marki oraz procesów sprzedaży w sieć.</p>
                </div>
            </div>
            <div class="col-xl-4 mt-70 mt-0-xl">
                <div class="d-flex flex-column h-100 align-items-center-lg text-align-center-lg">
                    <svg width="149" height="150" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M26.147 1v40.38l-3.714 3.714L1.152 66.36V1h24.995ZM18.69 84.201l7.457-7.457v71.241H1.152V66.664L18.689 84.2ZM87.384 74.5v.167l-.167-.167h.167ZM62.389 85.05l24.995 24.995v37.94H62.39V85.05ZM148.151 123.778h-24.995V148h24.995v-24.222Z" stroke="#E7B222" stroke-miterlimit="10"/><path d="M123.126 99.525V78.941l-33.271 33.271-.152-.151-.151.151-49.43-49.429-13.975 13.96-7.458 7.458L1.152 66.663v-.303l21.281-21.266 3.714-3.714 13.96-13.975 17.69 17.689L87.216 74.5l2.486 2.486 15.749-15.75-20.6.016V36.227h63.254l.031.03V53.93l.015 45.594h-25.026ZM1.152 66.36v.304L1 66.512l.152-.151Z" stroke="#E7B222" stroke-miterlimit="10"/></svg>
                    <h4 class="font-size-20 font-size-24-lg mt-35 mb-35 color-primary">Skuteczność</h4>
                    <p class="font-size-18 flex-grow">Umożliwiamy zaistnienie w pierwszej dziesiątce Google pod najmocniej konwertujące frazy, nie boimy się trudnych słów kluczowych. Umożliwimy Ci wyprzedzenie pozycji Twojej konkurencji.</p>
                </div>
            </div>
            <div class="col-xl-4 mt-70 mt-0-xl">
                <div class="d-flex flex-column h-100 align-items-center-lg text-align-center-lg">
                    <svg width="97" height="150" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M95.39 130.348c-.06.355-.14.71-.22 1.014l.63-.608-.41-.406ZM27 96.778l24.65 24.975a22.66 22.66 0 0 1 6.122-11.668 22.17 22.17 0 0 1 11.518-6.192L44.65 78.918a22.7 22.7 0 0 1-6.131 11.665A22.207 22.207 0 0 1 27 96.778ZM51.66 27.438 27.01 52.423a22.188 22.188 0 0 1 11.518 6.199 22.681 22.681 0 0 1 6.122 11.67l24.69-25.025a22.186 22.186 0 0 1-11.532-6.172 22.68 22.68 0 0 1-6.148-11.657Z" stroke="#E7B222" stroke-miterlimit="10"/><path d="M51.24 23.09c-.003 1.46.138 2.916.42 4.348 1.07 5.503 4.12 10.405 8.56 13.753a22.064 22.064 0 0 0 15.455 4.36 22.175 22.175 0 0 0 14.339-7.295A22.756 22.756 0 0 0 95.8 23.09a21.886 21.886 0 0 0-.4-4.237c-.06-.345-.13-.69-.21-1.014a22.677 22.677 0 0 0-5.906-10.704 22.213 22.213 0 0 0-10.554-6 9.295 9.295 0 0 0-.92-.202 21.39 21.39 0 0 0-4.3-.426C67.603.51 61.938 2.89 57.762 7.125S51.24 17.102 51.24 23.09ZM51.24 126.05c0 5.988 2.346 11.731 6.522 15.965 4.176 4.235 9.84 6.616 15.748 6.618a21.64 21.64 0 0 0 4.24-.415c.35-.061.7-.142 1-.223a22.226 22.226 0 0 0 10.505-5.963 22.687 22.687 0 0 0 6.545-15.941 22.836 22.836 0 0 0-1.686-8.655 22.6 22.6 0 0 0-4.83-7.34 22.266 22.266 0 0 0-7.236-4.902 22 22 0 0 0-12.768-1.301 22.17 22.17 0 0 0-11.518 6.192 22.659 22.659 0 0 0-6.522 15.965ZM.51 74.6c0 1.44.134 2.875.4 4.288a22.651 22.651 0 0 0 7.712 13.1 22.107 22.107 0 0 0 18.388 4.74 22.236 22.236 0 0 0 12.945-7.808 22.781 22.781 0 0 0 5.09-14.37c0-5.244-1.8-10.324-5.09-14.37a22.236 22.236 0 0 0-12.945-7.807 22.099 22.099 0 0 0-18.43 4.78A22.645 22.645 0 0 0 .9 70.323a23.22 23.22 0 0 0-.39 4.278Z" stroke="#E7B222" stroke-miterlimit="10"/></svg>
                    <h4 class="font-size-20 font-size-24-lg mt-35 mb-35 color-primary">Wielokanałowość</h4>
                    <p class="font-size-18 flex-grow">Wybieramy do tego najlepsze kanały, by zwiększyć Twoją sprzedaż. Optymalizujemy pod kątem wyszukiwarek internetowych (SEO), pozycjonoujemy w Google, tworzymy reklamy sponsorowane (PPC) i reklamy w mediach społecznościowych.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="d-flex flex-column align-items-center text-align-center h-100">
                    <div class="relative">
                        <svg style="position: absolute; height: 100%; left: 50%; top: 50%; transform: translate(-50%,-50%);" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 421 421"><path d="M54.97 55.016a184.73 184.73 0 0 0 233.381 284.092l80.498 80.455L420 368.324l-80.542-80.498a184.728 184.728 0 0 0-36.961-245.057A184.734 184.734 0 0 0 54.971 55.016Zm232.503 180.65a113.574 113.574 0 0 1-51.15 51.37 113.444 113.444 0 1 1 50.975-51.37h.175Z" stroke="#E7B222" stroke-miterlimit="10"/></svg>
                        <img src="/wp-content/themes/zed/img/person-1.webp" class="h-435 relative">
                    </div>
                    <h3 class="font-size-24 font-size-36-lg text-align-center mt-35 mb-35">Produkty marketingowe</h3>
                    <p class="font-size-18 font-weight-300 flex-grow">Bez względu na to, jakich efektów potrzebujesz - poprawa rankingu strony internetowej w Google, zwiększenie ruchu na stronie, widoczność w social mediach - posiadamy narzędzia i umiejętności niezbędne do zapewnienia pozytywnych rezultatów działań.</p>
                    <a href="" class="button button--dark mt-35">Zobacz ofertę</a>
                </div>
            </div>
            <div class="col-xl-6 mt-70 mt-0-xl">
                <div class="d-flex flex-column align-items-center text-align-center h-100">
                    <div class="relative">
                        <svg style="position: absolute; height: 100%; left: 50%; top: 50%; transform: translate(-50%,-50%);" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 420 420"><path d="M418.569 245.665h-122.46l86.581 86.581-50.444 50.444-86.581-86.581v122.46h-71.359V296.137L87.754 382.69l-50.472-50.444 86.581-86.581H1.431v-71.359h122.403L37.282 87.754l50.472-50.472 86.552 86.552V1.431h71.359v122.432l86.581-86.581 50.444 50.472-86.553 86.552h122.432v71.359Z" stroke="#E7B222" stroke-miterlimit="10"/></svg>
                        <img src="/wp-content/themes/zed/img/person-2.webp" class="h-435 relative">
                    </div>
                    <h3 class="font-size-24 font-size-36-lg text-align-center mt-35 mb-35">Produkty kreatywne</h3>
                    <p class="font-size-18 font-weight-300 flex-grow">Potrzebujesz stronę internetową, sklep internetowy, bannery reklamowe, logo? Tutaj znajdziesz odpowiedź na swoje oczekiwania.</p>
                    <a href="" class="button button--dark mt-35">Zobacz ofertę</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 4
);
$posts = new WP_Query($args);
//$posts->set('posts_per_page', 4);
$posts->query($posts->query_vars);
?>

<section class="section bg-grey">
    <div class="container">
        <h3 class="text-align-center mb-120 font-size-24 font-size-36-lg">Blog</h3>
        <div class="row">
            <?php while ($posts->have_posts()) : $posts->the_post(); ?>
                <div class="col-sm-12 col-lg-3 <?php if( $posts->current_post !== 0) : ?>mt-70 mt-0-lg<?php endif; ?>">
                    <article class="article">
                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($posts->ID), 'thumbnail'); ?>" class="article__img" alt="<?php echo apply_filters('the_title', $posts->post->post_title); ?>">
                        <div class="article__date"><?php echo apply_filters('the_date', mysql2date('d.m.Y', $posts->post->post_date)); ?></div>
                        <h3 class="article__header"><?php echo apply_filters('the_title', $posts->post->post_title); ?></h3>
                        <div class="article__content"><?php echo wp_trim_words(wp_strip_all_tags(apply_filters( 'the_content', $posts->post->post_content)), 30, '...'); ?></div>
                        <a href="<?php echo the_permalink(); ?>" class="article__more">Czytaj więcej...</a>
                    </article>
                </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</section>


<section class="section bg-white">
    <div class="container">
        <h3 class="text-align-center mb-120 relative smile-after font-size-24 font-size-36-lg">Co mówią nasi klienci</h3>
        <div class="row">
            <div class="col-xl-4">
                <img src="/wp-content/themes/zed/img/client_1.webp" class="d-block img-195 margin-auto">
                <div class="font-size-18 text-align-center mt-35 mb-35"><b>Arek.</b> Windblock</div>
                <svg class="d-block mb-20" width="55" height="30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.472 26.744v.96H19.68L27.36.344H15.552l-10.08 26.4Zm21.408 0v.96h14.208l7.68-27.36H36.96l-10.08 26.4Z" fill="#E5E5E5"/></svg>
                <p class="font-style-italic font-size-18 font-weight-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <svg class="d-block mt-20 margin-left-auto" width="55" height="30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.472 26.744v.96H19.68L27.36.344H15.552l-10.08 26.4Zm21.408 0v.96h14.208l7.68-27.36H36.96l-10.08 26.4Z" fill="#E5E5E5"/></svg>
            </div>
            <div class="col-xl-4 mt-70 mt-0-xl">
                <img src="/wp-content/themes/zed/img/client_1.webp" class="d-block img-195 margin-auto">
                <div class="font-size-18 text-align-center mt-35 mb-35"><b>Ania.</b> Kółko i krzyżyk</div>
                <svg class="d-block mb-20" width="55" height="30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.472 26.744v.96H19.68L27.36.344H15.552l-10.08 26.4Zm21.408 0v.96h14.208l7.68-27.36H36.96l-10.08 26.4Z" fill="#E5E5E5"/></svg>
                <p class="font-style-italic font-size-18 font-weight-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <svg class="d-block mt-20 margin-left-auto" width="55" height="30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.472 26.744v.96H19.68L27.36.344H15.552l-10.08 26.4Zm21.408 0v.96h14.208l7.68-27.36H36.96l-10.08 26.4Z" fill="#E5E5E5"/></svg>
            </div>
            <div class="col-xl-4 mt-70 mt-0-xl">
                <img src="/wp-content/themes/zed/img/client_1.webp" class="d-block img-195 margin-auto">
                <div class="font-size-18 text-align-center mt-35 mb-35"><b>Tomasz.</b> Rurociągi</div>
                <svg class="d-block mb-20" width="55" height="30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.472 26.744v.96H19.68L27.36.344H15.552l-10.08 26.4Zm21.408 0v.96h14.208l7.68-27.36H36.96l-10.08 26.4Z" fill="#E5E5E5"/></svg>
                <p class="font-style-italic font-size-18 font-weight-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <svg class="d-block mt-20 margin-left-auto" width="55" height="30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.472 26.744v.96H19.68L27.36.344H15.552l-10.08 26.4Zm21.408 0v.96h14.208l7.68-27.36H36.96l-10.08 26.4Z" fill="#E5E5E5"/></svg>
            </div>
        </div>
    </div>
</section>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("slide");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "flex";
        dots[slideIndex-1].className += " active";
    }
</script>

<?php get_footer(); ?>
