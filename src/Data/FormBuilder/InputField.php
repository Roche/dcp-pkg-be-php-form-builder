<?php

namespace Dcp\Data\FormBuilder;

use Dcp\Enums\FormBuilder\InputFieldType;
use Spatie\LaravelData\Data;

class InputField extends Data
{
    public function __construct(
        public string $label,
        public string $name,
        public ?string $description = null,
        public InputFieldType $fieldType,

        /** @var FieldValidation[] */
        public array $fieldValidations = [],

        /** @var InputFieldOption[] */
        public array $fieldOptions = [],

        public FieldSettings $fieldSettings,

        /** @var InputField[] */
        public array $children = [],

        /** @var FieldConditionGroup[] */
        public array $conditionGroups = [],
    ) {
    }

    public function toArray(): array
    {
        return [
            'label'            => $this->label,
            'name'             => $this->name,
            'description'      => $this->description,
            'fieldType'        => $this->fieldType->value,
            'fieldValidations' => $this->fieldValidations,
            'fieldOptions'     => $this->fieldOptions,
            'fieldSettings'    => $this->fieldSettings->toArray(),
            'children'         => $this->children,
            'conditionGroups'  => $this->conditionGroups,
        ];
    }
}
