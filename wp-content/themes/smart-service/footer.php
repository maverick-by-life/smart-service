<?php wp_footer(); ?>
<footer>
    <div id="feedback">
        <div class="container">
            <div class="form">
                <h2>Напишите нам</h2>
                <p>Заполните форму ниже и мы свяжемся с вами в ближайшее время</p>
                <?= do_shortcode('[contact-form-7 id="8a147c6" title="feedback_form"]') ?>
            </div>
            <div class="contacts">
                <img src="<?= get_template_directory_uri() . "/assets/images/logo-black.svg" ?>" alt="VK Smart service">
                <div>
                    <img src="<?= get_template_directory_uri() . "/assets/images/geo-point.svg" ?>" alt="Адрес">
                    <address><?php the_field('address'); ?></address>
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . "/assets/images/phone.svg" ?>" alt="Номер телефона">
                    <p><?php the_field('phone_front'); ?></p>
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . "/assets/images/mail.svg" ?>" alt="e-mail">
                    <a href="mailto:<?php the_field('email'); ?>">
                        <?php the_field('email'); ?>
                    </a>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; <?= date("Y") ?> VK Smart Service</p>
                <a href="<?php the_permalink(3); ?>">Политика конфиденциальности</a>
                <p>Разработка сайта:
                    <img src="<?= get_template_directory_uri() . "/assets/images/cat.svg" ?>" alt="Двоичный кот"></p>
            </div>
        </div>
    </div>
</footer>

</body>

</html>