// Custom Title for Homepage
add_filter('pre_get_document_title', function($title) {
    if (is_front_page()) {
        $title = 'Website Custome Meta Title';
    }
    return $title;
});

add_filter('wpseo_metadesc', function($description) {
    if (is_front_page()) {
        return 'Website Custome Meta Description.';
    }
    return $description;
});
