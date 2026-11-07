<?php

namespace Dcp\Data\FormBuilder;

use Spatie\LaravelData\Data;

class FormValue extends Data
{
    public function __construct(
        public string $key,
        public mixed $value,
    ) {
    }
}
