<?php
/**
* Search form
*/
?>
<div class="search-container">
    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url()); ?>" >
        <input type="search" class="search-field" placeholder="Search …" value="<?php echo get_search_query(); ?>" name="s">
        <div class="search search-submit"><i class="fa fa-search" aria-hidden="true"></i></div>
    </form>
</div>