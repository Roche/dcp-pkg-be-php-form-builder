<?php

declare(strict_types=1);

namespace Dcp\Tests\Unit\Data\FormBuilder;

use Dcp\Data\FormBuilder\FieldCondition;
use Dcp\Data\FormBuilder\FieldConditionGroup;
use Dcp\Data\FormBuilder\FieldSettings;
use Dcp\Data\FormBuilder\FieldValidation;
use Dcp\Data\FormBuilder\InputField;
use Dcp\Data\FormBuilder\InputFieldOption;
use Dcp\Enums\FormBuilder\FieldConditionAction;
use Dcp\Enums\FormBuilder\FieldConditionOperator;
use Dcp\Enums\FormBuilder\InputFieldType;
use Dcp\Enums\FormBuilder\LogicalOperator;
use Dcp\Tests\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(InputField::class)]
final class InputFieldTest extends TestCase
{
    public function testToArraySerializesEnumsAndNestedSettings(): void
    {
        $settings = new FieldSettings(
            defaultValue: 'x',
            stepSize: null,
            dataUrl: null,
            isRepeatable: false,
            isReadOnly: true,
        );

        $validation = new FieldValidation(type: 'required', value: true);
        $option = new InputFieldOption(label: 'One', category: null, value: 1);

        $condition = new FieldCondition(
            dependOn: 'other',
            operator: FieldConditionOperator::EQUAL,
            values: ['y'],
        );
        $group = new FieldConditionGroup(
            operator: LogicalOperator::AND,
            conditions: [$condition],
            action: FieldConditionAction::SHOW,
            loadUrl: 'https://example.test/data',
            loadOnce: false,
        );

        $dto = new InputField(
            label: 'My Label',
            name: 'my_name',
            description: 'desc',
            fieldType: InputFieldType::DROPDOWN,
            fieldValidations: [$validation],
            fieldOptions: [$option],
            fieldSettings: $settings,
            children: [],
            conditionGroups: [$group],
        );

        $array = $dto->toArray();

        self::assertSame('My Label', $array['label']);
        self::assertSame('my_name', $array['name']);
        self::assertSame('desc', $array['description']);
        self::assertSame(1, $array['fieldType']);

        self::assertSame([$validation], $array['fieldValidations']);
        self::assertSame([$option], $array['fieldOptions']);

        self::assertSame(
            [
                'defaultValue' => 'x',
                'stepSize'     => null,
                'dataUrl'      => null,
                'isRepeatable' => false,
                'isReadOnly'   => true,
            ],
            $array['fieldSettings'],
        );

        self::assertSame([], $array['children']);
        self::assertSame([$group], $array['conditionGroups']);
    }
}
