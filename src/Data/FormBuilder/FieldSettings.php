<?php

namespace Dcp\Data\FormBuilder;

use Spatie\LaravelData\Data;

class FieldSettings extends Data
{
    public function __construct(
        public mixed $defaultValue,
        public ?float $stepSize,
        public ?string $dataUrl,
        public bool $isRepeatable = false,
        public bool $isReadOnly = false,
    ) {
    }
}
