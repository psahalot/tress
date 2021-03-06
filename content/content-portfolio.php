<?php
/**
 * The template for displaying portfolio content. 
 *
 * @package Tress
 * @since Tress 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
           
		<header class="entry-header">
                   
			<?php if ( is_single() ) { ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php }
			else { ?>
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                            <?php the_post_thumbnail('post_feature_full_width'); ?> 
                                     
                                </a>
				<h1 class="entry-title">
					<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'tress' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h1>
			<?php } // is_single() ?>
			<?php if ( has_post_thumbnail() && is_single() && !is_search() ) { ?>
				<?php the_post_thumbnail( 'post-thumb' ); ?>
			<?php } ?>
		</header> <!-- /.entry-header -->
		<div class="entry-content">
				<?php the_content( wp_kses( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'tress' ), array( 'span' => array( 
					'class' => array() ) ) )
					); ?>
				<?php wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tress' ),
					'after' => '</div>',
					'link_before' => '<span class="page-numbers">',
					'link_after' => '</span>'
				) ); ?>
			</div> <!-- /.entry-content -->

		<footer class="entry-meta">
			<?php if ( is_singular() ) {
				// Only show the tags on the Single Post page
				tress_entry_meta();
			} ?>
			<?php edit_post_link( esc_html__( 'Edit', 'tress' ) . ' <i class="fa fa-angle-right"></i>', '<div class="edit-link">', '</div>' ); ?>
			
		</footer> <!-- /.entry-meta -->
          
	</article> <!-- /#post -->
