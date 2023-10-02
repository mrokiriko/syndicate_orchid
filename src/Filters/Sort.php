<?php

namespace Orchid\Filters;

use Illuminate\Database\Eloquent\Builder;

abstract class Sort
{

    public function __construct(protected string $column, protected string $direction = 'asc')
    {
    }

    public function sort(Builder $builder): Builder
    {
        return $builder->when($this->isApply(), fn (Builder $builder) => $this->run($builder));
    }

    protected function isApply(): bool
    {
        return true;
    }

    abstract function run(Builder $builder);
}
