<?php

namespace App\GraphQL\Schemas;

use App\GraphQL\Queries;
use App\GraphQL\Types;
use Rebing\GraphQL\Support\Contracts\ConfigConvertible;

class main implements ConfigConvertible
{
    public function toConfig(): array
    {
        return [
            'query' => [
                App\GraphQL\Queries\FeedQuery::class,
                // ExampleQuery::class,
            ],

            'mutation' => [
                // ExampleMutation::class,
            ],

            'types' => [
                App\GraphQL\Types\FeedType::class,
                // ExampleType::class,
            ],
        ];
    }
}
