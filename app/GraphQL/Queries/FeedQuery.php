<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\Models\Feed;
use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;

class FeedQuery extends Query
{
    protected $attributes = [
        'name' => 'feed',
        'description' => 'A query',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Feed'));
    }

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        return Feed::all();
    }
}
