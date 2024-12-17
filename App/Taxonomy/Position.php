<?php

use App\Base\AbstractTaxonomy;

final class Position extends AbstractTaxonomy
{
    public function getSlug(): string
    {
        return 'position-category';
    }

    public function getSingular(): string
    {
        return 'Position category';
    }

    public function getPlural(): string
    {
        return 'Position categories';
    }

    public function getMenuName(): string
    {
        return 'Position category';
    }

    public function isHierarchical(): bool
    {
        return true;
    }

    public function getPostTypes(): array
    {
        return [
            'member'
        ];
    }

    public function getRewriteSlug(): string
    {
        return 'position-category';
    }


    public function isPublic(): bool
    {
        return false;
    }

    public function isPublicQueryable(): bool
    {
        return false;
    }

}