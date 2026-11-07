<?php

namespace Dcp\Data\FormBuilder;

use Dcp\Enums\FormBuilder\FieldConditionOperator;
use Spatie\LaravelData\Data;

class FieldCondition extends Data
{
    public function __construct(
        public string $dependOn,
        public FieldConditionOperator $operator = FieldConditionOperator::EQUAL,

        /** @var string[] */
        public array $values,
    ) {
    }

    public function toArray(): array
    {
        return [
            'dependOn' => $this->dependOn,
            'operator' => $this->operator->value,
            'values'   => $this->values,
        ];
    }
}
