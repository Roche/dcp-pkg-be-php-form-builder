<?php

namespace Dcp\Data\FormBuilder;

use Spatie\LaravelData\Data;

class InputFieldOption extends Data
{
    public function __construct(
        public string $label,
        public ?string $category = null,
        public mixed $value,
    ) {
    }
}
