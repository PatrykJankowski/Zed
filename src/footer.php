</main>

<footer class="footer">
    <div class="container relative">
        <div class="row">
            <div class="col-xl-4 d-flex flex-column">
                <svg width="197" height="72" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 71.303V57.966L30.04 16.49H.588V0h52.655v12.487l-30.53 42.328h32.225v16.489H0ZM161.131 0h-20.415v17.427h21.017c10.145 0 17.515 7.562 17.515 18.232 0 10.67-7.37 18.277-17.473 18.277h-21.059v17.382h20.527c19.938 0 35.757-15.33 35.757-35.674C197 15.301 181.083 0 161.131 0ZM125.248 0H70.365v16.269h54.883V0ZM125.248 27.526H70.365v16.268h54.883V27.526ZM125.248 55.035H70.365v16.269h54.883V55.035Z" fill="#fff"/></svg>
                <div class="footer__contact mt-70 mb-20">
                    <strong>Zadzwoń lub napisz do nas.</strong><br>
                    Lubimy rozmawiać!
                </div>
                <a class="font-size-24 color-primary mb-20" href="tel:+48666666666">+48 666 666 666</a>
                <a class="font-size-24 color-primary mb-70" href="mailto:kontakt@zed.pl">kontakt@zed.pl</a>
                <div class="footer__copyright hide-max-lg">© Copyright 2021 Zed</div>
            </div>
            <div class="col-xl-5">
                <?php echo do_shortcode('[contact-form-7 id="21" title="Formularz kontaktowy"]'); ?>
            </div>
            <div class="col-xl-1"></div>
            <div class="col-xl-2">
                <?php wp_nav_menu(array('theme_location' => 'nav-menu-footer', 'container' => false)); ?>
                <span class="footer__copyright hide-lg">© Copyright 2021 Zed</span>
            </div>
        </div>
    </div>
</footer>

<script>
    /*window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'XXX');*/

    let navOpened = false;
    let initHeight = 312;

    function slideToggle() {
        let navMobile = document.getElementById('navbar__nav-mobile');

        if (navOpened) {
            navOpened = false;
            navMobile.style.height = '0';
            document.getElementById('navbar__toggle').classList.remove('navbar__toggle--open');
        } else {
            navOpened = true;
            navMobile.style.height = initHeight + 'px';
            document.getElementById('navbar__toggle').classList.add('navbar__toggle--open');
        }
    }

    let acc = document.getElementsByClassName("accordion");
    let i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>

<?php wp_footer(); ?>

</body>
</html>
