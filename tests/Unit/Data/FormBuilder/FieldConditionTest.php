<?php

declare(strict_types=1);

namespace Dcp\Tests\Unit\Data\FormBuilder;

use Dcp\Data\FormBuilder\FieldCondition;
use Dcp\Enums\FormBuilder\FieldConditionOperator;
use Dcp\Tests\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(FieldCondition::class)]
final class FieldConditionTest extends TestCase
{
    public function testToArrayUsesEnumValueAndKeepsDependOnAndValues(): void
    {
        $dto = new FieldCondition(
            dependOn: 'some_field',
            operator: FieldConditionOperator::EQUAL,
            values: ['a', 'b'],
        );

        self::assertSame('some_field', $dto->dependOn);
        self::assertSame(FieldConditionOperator::EQUAL, $dto->operator);
        self::assertSame(['a', 'b'], $dto->values);

        self::assertSame(
            [
                'dependOn' => 'some_field',
                'operator' => 'eq',
                'values'   => ['a', 'b'],
            ],
            $dto->toArray(),
        );
    }
}
