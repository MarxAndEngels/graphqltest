<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use App\Models\Feed;
use Rebing\GraphQL\Support\Type as GraphQLType;
use App\Complex\GraphQL\Field;
use App\Constants\Attributes\AttributeName;
use GraphQL\Type\Definition\Type;

class feedType extends GraphQLType
{
    protected $attributes = [
        'name' => 'feed',
        'description' => 'A type',
        'model' => Feed::class
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
