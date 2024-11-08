<?php
global $msbr_dir;

// including options panel
include_once $msbr_dir . 'inc/admin/options-panel/options-panel.php';

// include plugin files
include_once $msbr_dir . 'inc/functions/review-product-page.php';
include_once $msbr_dir . 'inc/functions/review-form.php';
include_once $msbr_dir . 'inc/functions/hooks-actions.php';

// including emails
include_once $msbr_dir . 'inc/emails/completed.php';

// including template loader
include_once $msbr_dir . 'inc/classes/class-msbr-template-loader.php';