<?php

namespace Dcp\Data\FormBuilder;

use Dcp\Enums\FormBuilder\FieldConditionAction;
use Dcp\Enums\FormBuilder\LogicalOperator;
use Spatie\LaravelData\Data;

class FieldConditionGroup extends Data
{
    public function __construct(
        public LogicalOperator $operator = LogicalOperator::AND,

        /** @var FieldCondition[] */
        public array $conditions,

        public FieldConditionAction $action,
        public ?string $loadUrl = null,
        public bool $loadOnce,
    ) {
    }

    public function toArray(): array
    {
        return [
            'operator'   => $this->operator->value,
            'conditions' => $this->conditions,
            'action'     => $this->action->value,
            'loadUrl'    => $this->loadUrl,
            'loadOnce'   => $this->loadOnce,
        ];
    }
}
