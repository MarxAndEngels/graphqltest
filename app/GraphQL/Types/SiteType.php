<?php

declare(strict_types=1);

namespace App\GraphQL\Types;
use App\Complex\GraphQL\Field;
use App\Constants\Attributes\AttributeName;
use App\Models\Site;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class SiteType extends GraphQLType
{

    protected string $name = 'Site';

    protected $attributes = [
        'name' => 'Site',
        'description' => '',
        model => Site::class
    ];

    public function fields(): array
    {

        return [
            Field::make('id')
                ->type(Type::nonNull(Type::int()))
                ->description('Идентификатор'),
//
            Field::make('favicon_image')
                ->type(Type::nonNull(Type::string()))
                ->description('Фавикон сайта')
        ];
    }
}



