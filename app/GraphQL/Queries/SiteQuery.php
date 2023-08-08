<?php

namespace App\GraphQL\Queries;

use App\Constants\Attributes\AttributeName;
use App\Constants\TableConstants;
use App\GraphQL\Types\SiteType;
use App\Helpers\CacheTags;
use App\Models\Site;
use App\QueryBuilders\OfferQueryBuilder;
use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\Cache;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

final class SiteQuery extends Query
{

    protected $attributes = [
        'name' => 'sites',
        'description' => 'Список сайтов',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type(SiteType::class));
    }

    public function args(): array
    {
        return [
            'site_id' => ['name' => 'site_id', 'type' => Type::int(), 'rules' => ['required']]
        ];
    }

    public function resolve($root, array $args, $context, ResolveInfo $info, Closure $getSelectFields)
    {
        if (!isset($args['site_id'])) {
            return null;
        }
        $fields = $getSelectFields();
        $select = $fields->getSelect();
        return $select;
//        $siteId = $args['site_id'];
//        $currentSiteQuery = Site::query()->select('id', AttributeName::FILTER, AttributeName::CATEGORY_ASSOCIATION);
//        $currentSiteModel = $currentSiteQuery->whereId($siteId)->first()->toArray();
//        $siteModel = $currentSiteQuery->getParentId($siteId)->first();
//
//        $cacheKey = CacheTags::getCacheKey($this->attributes['name'], $args);
//        return Cache::tags([$siteModel->id, 'filters', 'marks'])->rememberForever($cacheKey, fn() => $this->getMarks($args, $select, $currentSiteModel, $siteModel));
    }

    protected function getSites(array $args, array $select ): ?array
    {
        $markQuery = Site::query();
        return $markQuery->get()->toArray();
    }

}
