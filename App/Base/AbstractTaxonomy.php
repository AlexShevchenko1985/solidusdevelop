<?php

namespace App\Base;

abstract class AbstractTaxonomy
{
    private $slug;
    private $cpts;
    private $labels;
    private $args;

    public function __construct()
    {
        $this->slug     = $this->getSlug();
        $this->cpts     = $this->getPostTypes();
        $this->labels   = $this->getLabels();
        $this->args     = $this->getArgs();

        add_action('init', [$this, 'register']);
    }

    /**
     * Return slug for post type
     *
     * @return string
     */
    abstract public function getSlug(): string;

    /**
     * Return name for singular label
     *
     * @return string
     */
    abstract public function getSingular(): string;

    /**
     * Return name for plural label
     *
     * @return string
     */
    abstract public function getPlural(): string;

    /**
     * Is post type hierarchical
     *
     * @return bool
     */
    abstract public function isHierarchical(): bool;

    /**
     * List of post types slugs to associate with this taxonomy
     *
     * @return string[]
     */
    abstract public function getPostTypes(): array;

    public function getLabels(): array
    {
        return [
            "name"                       => __($this->getPlural(), 'aitech'),
            "singular_name"              => __($this->getSingular(), 'aitech'),
            "menu_name"                  => __($this->getMenuName(), 'aitech'),
            "all_items"                  => __("All {$this->getPlural()}", 'aitech'),
            "edit_item"                  => __("Edit {$this->getSingular()}", 'aitech'),
            "view_item"                  => __("View {$this->getSingular()}", 'aitech'),
            "update_item"                => __("Update {$this->getSingular()} name", 'aitech'),
            "add_new_item"               => __("Add new {$this->getSingular()}", 'aitech'),
            "new_item_name"              => __("New {$this->getSingular()} name", 'aitech'),
            "parent_item"                => __("Parent {$this->getSingular()}", 'aitech'),
            "parent_item_colon"          => __("Parent {$this->getSingular()}:", 'aitech'),
            "search_items"               => __("Search {$this->getPlural()}", 'aitech'),
            "popular_items"              => __("Popular {$this->getPlural()}", 'aitech'),
            "separate_items_with_commas" => __("Separate {$this->getPlural()} with commas", 'aitech'),
            "add_or_remove_items"        => __("Add or remove {$this->getPlural()}", 'aitech'),
            "choose_from_most_used"      => __("Choose from the most used {$this->getPlural()}", 'aitech'),
            "not_found"                  => __("No {$this->getPlural()} found", 'aitech'),
            "no_terms"                   => __("No {$this->getPlural()}", 'aitech'),
            "items_list_navigation"      => __("{$this->getPlural()} list navigation", 'aitech'),
            "items_list"                 => __("{$this->getPlural()} list", 'aitech'),
        ];
    }

    public function getArgs(): array
    {
        return [
            "label"                 => __($this->getSingular(), 'aitech'),
            "labels"                => $this->labels,
            "public"                => $this->isPublic(),
            "publicly_queryable"    => $this->isPublicQueryable(),
            "hierarchical"          => $this->isHierarchical(),
            "show_ui"               => $this->shouldShowUi(),
            "show_in_menu"          => $this->shouldShowInMenu(),
            "show_in_nav_menus"     => $this->shouldShowInNavMenus(),
            "query_var"             => $this->hasQueryVar(),
            "rewrite"               => $this->hasRewriteRules() ? $this->getRewriteRules() : false,
            "show_admin_column"     => false,
            "show_in_rest"          => $this->shouldShowInRest(),
            "rest_base"             => $this->getRestBase(),
            "show_in_quick_edit"    => $this->shouldShowInQuickEdit(),
        ];
    }

    public function register(): void
    {
        register_taxonomy($this->slug, $this->cpts, $this->args);
    }

    public function isPublic(): bool
    {
        return true;
    }

    public function isPublicQueryable(): bool
    {
        return true;
    }

    public function shouldShowUi(): bool
    {
        return true;
    }

    public function shouldShowInMenu(): bool
    {
        return true;
    }

    public function shouldShowInNavMenus(): bool
    {
        return true;
    }

    public function hasQueryVar(): bool
    {
        return true;
    }

    public function hasRewriteRules(): bool
    {
        return true;
    }

    public function getRewriteRules(): array
    {
        return [
            'slug'          => $this->getRewriteSlug(),
            'with_front'    => $this->shouldRewriteWithFront(),
        ];
    }

    public function getRewriteSlug(): string
    {
        return $this->slug;
    }

    public function shouldRewriteWithFront(): bool
    {
        return true;
    }

    public function shouldShowInRest(): bool
    {
        return $this->isPublic();
    }

    public function getRestBase(): string
    {
        return $this->hasRewriteRules() ? $this->getRewriteSlug() : $this->slug;
    }

    public function shouldShowInQuickEdit(): bool
    {
        return false;
    }

    public function getMenuName(): string
    {
        return $this->getPlural();
    }
}
