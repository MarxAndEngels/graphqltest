<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\GraphQL\Types\SiteType;
use App\GraphQL\Types\TestType;
use App\GraphQL\Types\FeedType;
use Closure;
use App\Models\Feed;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\SelectFields;

class FeedQuery extends Query
{
    protected $attributes = [
        'name' => 'feed',
        'description' => 'A query',
    ];

    public function type(): Type
    {
//        return GraphQL::type(FeedType::class);
     return Type::listOf(GraphQL::type(FeedType::class));
    }

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        return Feed::all();
    }
}
