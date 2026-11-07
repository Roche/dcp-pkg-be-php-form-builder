<?php

namespace Dcp\Data\FormBuilder;

use Spatie\LaravelData\Data;

class Form extends Data
{
    public function __construct(
        public ?int $recordId,

        /** @var FormValue[] */
        public array $fields,
    ) {
    }
}
