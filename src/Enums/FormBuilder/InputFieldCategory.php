<?php

namespace Dcp\Enums\FormBuilder;

enum InputFieldCategory: string
{
    case VALUE = 'Value';
    case IDENTIFIER = 'Identifier';
    case TEST = 'Test';
}
