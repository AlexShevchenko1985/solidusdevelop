<?php

use App\Base\AbstractPostType;

final class DataCenter extends AbstractPostType
{
    public function getSlug(): string
    {
        return 'data-center';
    }

    public function getSingular(): string
    {
        return 'Data Center';
    }

    public function getPlural(): string
    {
        return 'Data Center';
    }

    public function getMenuName(): string
    {
        return 'Data Center';
    }

    public function isHierarchical(): bool
    {
        return true;
    }

    public function hasArchive(): bool
    {
        return false;
    }

    public function getRewriteSlug(): string
    {
        return 'data-center';
    }
    public function getSupports(): array
    {
        return [
            self::TITLE,
        ];
    }

    public function getTaxonomies(): array
    {
        return [];
    }

    public function isPublic(): bool
    {
        return false;
    }

    public function isPublicQueryable(): bool
    {
        return false;
    }

    public function isExcludedFromSearch(): bool
    {
        return false;
    }

    public function getMenuIcon(): string
    {
        return 'dashicons-embed-photo';
    }

    public function isDisableGutenberg(): bool
    {
        return true;
    }
}
