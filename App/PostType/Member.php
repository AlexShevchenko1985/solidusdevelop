<?php

use App\Base\AbstractPostType;

final class Member extends AbstractPostType
{
    public function getSlug(): string
    {
        return 'member';
    }

    public function getSingular(): string
    {
        return 'Member';
    }

    public function getPlural(): string
    {
        return 'Members';
    }

    public function getMenuName(): string
    {
        return 'Members';
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
        return 'member';
    }
    public function getSupports(): array
    {
        return [
            self::TITLE,
            self::EDITOR,
            self::THUMBNAIL,
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
        return 'dashicons-groups';
    }

    public function isDisableGutenberg(): bool
    {
        return true;
    }
}
