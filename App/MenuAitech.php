<?php


class MenuAitech
{
    public static function getMainMenu($menu_locations = 'menu-1'): array
    {
        $locations = !empty(get_nav_menu_locations()) ? get_nav_menu_locations()[$menu_locations] : null;
        $header_menu = wp_get_nav_menu_items($locations);

        if (empty($header_menu)) {
            return [];
        }

        $menu_tree  = [];
        $menu_by_id = [];
        foreach ($header_menu as $item) {
            $menu_by_id[$item->ID] = (array)$item;
            $menu_by_id[$item->ID]['children'] = [];
        }

        foreach ($menu_by_id as &$item) {
            if ($item['menu_item_parent'] == 0) {
                $menu_tree[$item['ID']] = &$item;
            } else {
                $menu_by_id[$item['menu_item_parent']]['children'][$item['ID']] = &$item;
            }
        }

        return $menu_tree;
    }

    public static function getHeaderSecondaryMenu(): string
    {
       $menu =  wp_nav_menu(
            [
                'theme_location'  => 'header_secondary',
                'container'       => 'div',
                'container_class' => 'secondary-menu',
            ]
        );

       if(null === $menu){
           return 'asasa';
       }

       return $menu;
    }

    public static function getHeaderRelatedPost($id)
    {
        $header_related_post_id = get_field('header_related_post', $id);
        if(!empty($header_related_post_id)){
            return $header_related_post_id;
        }

        $args = [
            'post_type' => 'news_article',
            'posts_per_page' => 1,
            'tax_query' => [
                [
                    'taxonomy' => 'news',
                    'field'    => 'slug',
                    'terms'    => ['press-releases', 'blog'],
                ],
            ],
            'orderby' => 'date',
            'order' => 'DESC',
        ];

        $query = new WP_Query($args);
        if (empty($query->posts)) {
            return null;
        }

        return $query->posts[0];
    }

    public static function checkMenuLink(string $link): string
    {
        if('#' === $link){
            return 'javascript:void(0)';
        }
        return $link;
    }

    public static function getMenuClass(string $link): string
    {
        if('#' === $link){
            return 'no-link';
        }
        return '';
    }

    public static function hasChildrenMenu($children): bool
    {
        if(empty($children)){
            return false;
        }
        return true;
    }

}