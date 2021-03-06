<div class="page-wrapper" id="tuition-page">

    <?php

    /* Template Name: Tuition */

    get_header(); ?>

    <section class="container-fluid bg-transparent mt-2">
        <div class="container bg-transparent ">



            <?php if (have_rows('content')): ?>

                <?php while (have_rows('content')): the_row(); ?>

                    <?php if (get_row_layout() == 'top_text'): ?>

                        <?php get_template_part('template-parts/modules/module', 'bold_text_central');?>

                    <?php endif; ?>

                    <?php if (get_row_layout() == 'bullet_list'): ?>
                        <div class="container" id="list-heading">
                            <h3>Are you interested in:</h3>
                        </div>
                        <?php get_template_part('template-parts/modules/module', 'bullet_list');?>

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
