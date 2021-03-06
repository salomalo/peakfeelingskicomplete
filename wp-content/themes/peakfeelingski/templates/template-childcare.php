<div class="page-wrapper" id="childcare-page">

    <?php

    /* Template Name: Child Care */

    get_header(); ?>

    <section class="container-fluid bg-transparent mt-2">
        <div class="container bg-transparent ">


            <?php if (have_rows('content')): ?>

                <?php while (have_rows('content')): the_row(); ?>

                    <?php if (get_row_layout() == 'bold_text'): ?>

                        <?php get_template_part('template-parts/modules/module', 'bold_text');?>

                    <?php endif; ?>

                    <?php if (get_row_layout() == 'paragraph_text'):?>

                        <?php get_template_part('template-parts/modules/module', 'paragraph_text');?>

                    <?php endif; ?>

                    <?php if (get_row_layout() == 'call_to_action'):?>

                        <?php get_template_part('template-parts/modules/module', 'calltoaction');?>

                    <?php endif; ?>

                <?php endwhile; ?>

            <?php endif; ?>



        </div>
    </section>

    <?php get_footer(); ?>
</div>

