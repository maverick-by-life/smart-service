<?php get_header(); ?>
<main>
    <section class="info" style="background-image: url(<?php the_post_thumbnail_url() ?>)">
        <div class="container">
            <?php the_content(); ?>
            <a href="#feedback" class="button">Связаться с нами</a>
        </div>
        <a href="#logistics" class="info__arrow">
            <svg class="info__point" width="32" height="32" viewBox="0 0 32 32" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <circle cx="16" cy="16" r="16" fill="#4AA0DE"/>
                <path d="M10 13L16 19L22 13" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <svg class="info__circles" width="188" height="188" viewBox="0 0 188 188" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <circle opacity="0.7" cx="94" cy="94" r="39.25" stroke="#F8F7FF" stroke-width="1.5"/>
                <circle opacity="0.6" cx="94" cy="94" r="65.5" stroke="#F8F7FF"/>
                <circle opacity="0.4" cx="94" cy="94" r="93.5" stroke="#F8F7FF"/>
            </svg>
        </a>
    </section>
    <section id="logistics" class="logistics">
        <div class="container">
            <div class="logistics__text">
                <p class="logistics__title">
                    <?php the_field('logistics_title'); ?></p>
                <p class="logistics__description">
                    <?php the_field('logistics_description'); ?></p>
            </div>
            <div class="logistics__image">
                <img src="<?php the_field('logistics_image'); ?>" alt="">
            </div>
        </div>
    </section>
    <section id="services" class="services">
        <div class="container">
            <h2>Услуги <br>и решения</h2>
            <ul class="services__list">
                <?php while (have_rows('services_list')) : the_row(); ?>
                    <li class="services__item">
                        <div class="services__images">
                            <img class="services__img" src="<?php the_sub_field('services_image'); ?>" alt="">
                            <img class="services__icon" src="<?php the_sub_field('services_icon'); ?>" alt="">
                        </div>
                        <h3><?php the_sub_field('services_title'); ?></h3>
                        <p><?php the_sub_field('services_description'); ?></p>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>
    <section id="about" class="about">
        <div class="container">
            <div class="about__description">
                <h2><?php the_field('about_title'); ?></h2>
                <p>
                    <strong><?php the_field('about_bold'); ?> </strong>
                    <?php the_field('about_description'); ?>
                </p>
                <a href="#feedback" class="button">Связаться с нами</a>
            </div>
            <div class="about__image">
                <img src="<?php the_field('about_image'); ?>" alt="">
            </div>
        </div>
    </section>
    <section id="advantages" class="advantages">
        <div class="container">
            <h2>Наши <br>преимущества</h2>
            <ul class="advantages__list">
                <?php while (have_rows('advantages_list')) :
                    the_row(); ?>
                    <li class="advantages__item">
                        <img src="<?php the_sub_field('advantages_icon'); ?>" alt="">
                        <p><?php the_sub_field('advantages_description'); ?></p>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>
</main>
<?php get_footer(); ?>
