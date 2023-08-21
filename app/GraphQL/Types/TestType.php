<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class TestType extends GraphQLType
{
    protected $attributes = [
        'name' => 'feed',
        'description' => 'A type',
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::id(),
                'description' => 'The auto incremented ID of a company'
            ],
            'link' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of a company'
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of a company'
            ],
            'date' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of a company'
            ],

        ];
    }
}
