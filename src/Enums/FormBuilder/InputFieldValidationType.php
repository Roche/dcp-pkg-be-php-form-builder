<?php

namespace Dcp\Enums\FormBuilder;

enum InputFieldValidationType: int
{
    case MIN = 1;
    case MAX = 2;
    case REMAINDER = 3;
    case STRING_LENGTH = 4;
    case REQUIRED = 5;
    case PRECISION_MIN = 6;
    case PRECISION_MAX = 7;
    case TRIMMED = 8;
}
