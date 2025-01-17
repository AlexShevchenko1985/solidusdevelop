<?php


class MenuAitech
{
    public static function getMainMenu($menu_locations = 'menu-1'): array
    {
        if(isset(get_nav_menu_locations()[$menu_locations])){
            $locations = !empty(get_nav_menu_locations()) ? get_nav_menu_locations()[$menu_locations] : 'menu-1';
        }

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

    public static function isCurrentPage(string $link): string
    {

        $current_url = home_url($_SERVER['REQUEST_URI']);
        $normalized_link = trim(parse_url($link, PHP_URL_PATH), '/');
        $normalized_current_url = trim(parse_url($current_url, PHP_URL_PATH), '/');

        if ($normalized_link === $normalized_current_url) {
            return 'active';
        }

        return '';
    }

}