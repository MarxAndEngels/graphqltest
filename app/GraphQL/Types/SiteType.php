<?php

namespace App\GraphQL\Types;


use App\Complex\GraphQL\Field;
use App\Complex\GraphQL\Type as GraphQLType;
use App\Constants\Attributes\AttributeName;
use App\Models\Site;
use GraphQL\Type\Definition\Type;

final class SiteType extends GraphQLType
{
    protected string $name = 'Site';

    public function fields(): array
    {
        return [
            Field::make('id')
                ->type(Type::nonNull(Type::int()))
                ->description('Идентификатор'),

            Field::make('favicon_image')
                ->type(Type::nonNull(Type::string()))
                ->description('Фавикон сайта')
        ];
    }
}
