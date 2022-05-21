<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class ArticleFilter extends AbstractFilter
{
    public const TITLE = 'title';
    public const CODE = 'code';
    public const TAG_TITLE = 'tag_title';

    protected function getCallbacks(): array
    {
        return [
            self::TITLE =>[$this,'title'],
            self::CODE =>[$this,'code'],
            self::TAG_TITLE =>[$this,'tagTitle']
        ];
    }

    public function title(Builder $builder, $value)
    {
        $builder->where('title', 'like', "%{$value}%");
    }

    public function code(Builder $builder, $value)
    {
        $builder->where('code', 'like', "%{$value}%");
    }

    public function tagTitle(Builder $builder, $value)
    {
        $builder->whereHas('tags', function ($query) use ($value) {
            $query->where('title', 'like', "%{$value}%");
        });
    }
}
