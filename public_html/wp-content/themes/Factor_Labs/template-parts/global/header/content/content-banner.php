<?php 
/**
 * @package v1
 * Content for header with banner image (featured image)
 */ ?>

<div class="container">
    <?php 
    if (is_front_page()) { ?>
        <div class="row">
            <div class="col-12 col-lg-8 main-title">
                <h1 class="site-title text-color-white"><?php the_title(); ?></h1>
                <h3 class="subheader text-color-white"><?php the_field('subheader'); ?></h3>
                <?php if(get_field('header_button_text')) {?>
                    <div class="btn-group">
                        <a role="button" class="btn btn-md btn-width-std-md btn-center-h btn-margin-v btn-secondary" href="<?php the_field('header_button_link') ?>"><?php the_field('header_button_text') ?></a>
                    </div> 
                <?php } ?>
            </div>
        </div>
    <?php 
    
    } else if(is_page()) { ?>
        <div class="row">
        <div class="col-12 col-lg-8 main-title">
            <h1 class="site-title text-color-gray-primary"><?php the_title(); ?></h1>
            <h3 class="subheader text-color-gray-90"><?php the_field('subheader'); ?></h3>
            <?php if(get_field('header_paragraph')) {?>
                <p class="header-p"><?php the_field('header_paragraph'); ?></p>
            <?php } ?>
            <?php if(get_field('header_button_text')) {?>
                <div class="btn-group">
                    <a role="button" class="btn btn-md btn-width-std-md btn-center-h btn-margin-v btn-secondary" href="<?php the_field('header_button_link') ?>"><?php the_field('header_button_text') ?></a>
                </div> 
            <?php } ?>
        </div>
    </div>
<?php 
    } else { ?>
        <?php 
        if (!get_post_meta( $post->ID, 'sm_subheader', true )) { ?>
        <div class="page-title-banner">
            <h1 class="site-title text-color-white text-shadow-full text-align-center spacing-md-top"><?php the_title(); ?></h1>
            <h3 class="subheader text-color-white text-shadow-full text-align-center"><?php the_field('subheader'); ?></h3>
        </div>    
        <?php 
        } else { ?>
        <div class="page-title-banner">
            <h1 class="site-title text-color-white text-shadow-full text-align-center has-subheader"><?php the_title(); ?></h1>
            <p class="subheader text-color-white text-shadow-full text-align-center"><?php echo esc_html(get_post_meta( $post->ID, 'sm_subheader', true )); ?></p>
        </div>    
        <?php 
        } ?>
    <?php 
    } ?>
</div>