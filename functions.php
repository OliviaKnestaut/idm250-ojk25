<?php
require get_template_directory() . '/includes/scripts-styles.php';

require get_template_directory() . '/includes/custom-theme.php';

require get_template_directory() . '/includes/menu-items.php';

require get_template_directory() . '/includes/custom-post.php';

require get_template_directory() . '/includes/taxonomies.php';

@ini_set( 'upload_max_size' , '256M' );
@ini_set( 'post_max_size', '256M');
@ini_set( 'max_execution_time', '300' );