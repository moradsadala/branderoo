<?php get_header(); ?>
<?php 
    global $post;
    $pages = get_pages('child_of=' . $post->ID);
    if (count($pages)){
    ?>
        <div class='row brands'>
            <?php foreach ($pages as $page) {?>
                <a class='col-2 child' href="<?php echo get_permalink($page) ?>">  
                    <?php echo $page->post_title ?>
                </a>
            <?php
                }
            }
            ?>
        </div>
        <div <?php body_class('page-container container');?> >
            <div class='row'>
                <?php 
                while(have_posts()){
                    the_post(); ?>
                    <div class="col-9">
                        <h2><?php the_title()?></h2>
                        <p><?php the_content()?></p>
                    </div>
                <?php    
                }?>
                <?php
                $parentID = wp_get_post_parent_id( $post->ID ); 
                if($parentID){?>
                    <div class="col-3 card panel-primary">
                        <div class="card-header"><?php echo get_the_title($parentID)?></div>
                        <div class="card-body">
                            <?php wp_list_pages(array(
                                'title_li'=>NULL,
                                'child_of'=>$parentID
                            )) ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

<?php get_footer(); ?>
<!-- if(wp_get_post_parent_id( $post_ID )) -->