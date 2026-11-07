<?php

namespace Dcp\Enums\FormBuilder;

/**
 * @OA\Schema(
 *     schema="InputFieldType",
 *     type="integer",
 *     title="Field Type",
 *     description="Enumeration of field types for alarm template fields.",
 *     enum={1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13},
 *     example=1,
 *     @OA\Property(
 *         property="DROPDOWN",
 *         description="Dropdown selection field",
 *         enum={1}
 *     ),
 *     @OA\Property(
 *         property="NUMBER",
 *         description="Number field",
 *         enum={2}
 *     ),
 *     @OA\Property(
 *         property="STRING",
 *         description="String field",
 *         enum={3}
 *     ),
 *     @OA\Property(
 *         property="ARRAY",
 *         description="Array field",
 *         enum={4}
 *     ),
 *     @OA\Property(
 *         property="MULTISELECT_DROPDOWN",
 *         description="Multiselect dropdown field",
 *         enum={5}
 *     ),
 *     @OA\Property(
 *         property="DATE_TIME",
 *         description="Date time field",
 *         enum={6}
 *     ),
 *     @OA\Property(
 *         property="GROUP",
 *         description="Group field",
 *         enum={7}
 *     ),
 *     @OA\Property(
 *         property="NUMBER_WITH_PRECISION",
 *         description="Number with precision field",
 *         enum={8}
 *     ),
 *     @OA\Property(
 *         property="MULTI_STRING_INPUT",
 *         description="Multi-string input field",
 *         enum={9}
 *     ),
 *     @OA\Property(
 *         property="CHECKBOX",
 *         description="Checkbox field",
 *         enum={10}
 *     ),
 *     @OA\Property(
 *         property="TEXTAREA",
 *         description="Textaerea",
 *         enum={11}
 *     ),
 *     @OA\Property(
 *         property="DATE_RANGE",
 *         description="Date range",
 *         enum={12}
 *     ),
 *     @OA\Property(
 *         property="EXTENDABLE_DROPDOWN",
 *         description="Dropdown with custom text",
 *         enum={13}
 *     )
 * )
 */
enum InputFieldType: int
{
    case DROPDOWN = 1;
    case NUMBER = 2;
    case STRING = 3;
    case ARRAY = 4;
    case MULTISELECT_DROPDOWN = 5;
    case DATE_TIME = 6;
    case GROUP = 7;
    case NUMBER_WITH_PRECISION = 8;
    case MULTI_STRING_INPUT = 9;
    case CHECKBOX = 10;
    case TEXTAREA = 11;
    case DATE_RANGE = 12;
    case EXTENDABLE_DROPDOWN = 13;
}
