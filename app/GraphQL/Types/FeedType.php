<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use App\Complex\GraphQL\Field;
use Rebing\GraphQL\Support\Type as GraphQLType;
use App\Constants\Attributes\AttributeName;
use GraphQL\Type\Definition\Type;
use App\Models\Feed;

class FeedType extends GraphQLType
{
   protected $attributes = [
       'name' => 'Feed',
       'description' => 'A type',
  ];
    // protected $name = 'Feed';
    // protected $model = Feed::class;

    public function fields(): array
    {
//        return [
//            Field::make('id')
//                ->type(Type::nonNull(Type::int()))
//                ->description('Идентификатор'),
//
//            Field::make('link')
//                ->type(Type::nonNull(Type::string()))
//                ->description('Н'),
//
//            Field::make('name')
//                ->type(Type::string())
//                ->description('Н'),
//
//            Field::make('date')
//                ->type(Type::nonNull(Type::string()))
//                ->description('А')
//        ];

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
                'description' => 'The primary point of contact for a company'
            ],
            'date' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The primary point of contact for a company'
            ],
        ];
    }
}
