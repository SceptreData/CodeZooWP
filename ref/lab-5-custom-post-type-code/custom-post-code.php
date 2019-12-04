// add this code to your functions php file if your going to 
// build a custom post type for your movies. Without this
// code you will not see you movies category show up.

function add_custom_post_types_to_archives($query)
{
    // We do not want unintended consequences.
    if (is_admin() || !$query->is_main_query()) {
        return;
    }

    if (is_category() || is_tag() && empty($query->query_vars['suppress_filters'])) {
        $cptui_post_types = cptui_get_post_type_slugs();

        $query->set(
            'post_type',
            array_merge(
                array('post'),
                $cptui_post_types
            )
        );
    }
}
add_filter('pre_get_posts', 'add_custom_post_types_to_archives');