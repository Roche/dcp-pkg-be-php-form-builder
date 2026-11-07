<?php

namespace Dcp\Data\FormBuilder;

class FieldValidation
{
    public function __construct(
        public string $type,
        public mixed $value,
    ) {
    }
}
