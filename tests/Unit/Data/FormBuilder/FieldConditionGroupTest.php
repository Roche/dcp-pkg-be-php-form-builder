<?php

declare(strict_types=1);

namespace Dcp\Tests\Unit\Data\FormBuilder;

use Dcp\Data\FormBuilder\FieldCondition;
use Dcp\Data\FormBuilder\FieldConditionGroup;
use Dcp\Enums\FormBuilder\FieldConditionAction;
use Dcp\Enums\FormBuilder\FieldConditionOperator;
use Dcp\Enums\FormBuilder\LogicalOperator;
use Dcp\Tests\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(FieldConditionGroup::class)]
final class FieldConditionGroupTest extends TestCase
{
    public function testToArrayUsesEnumValuesAndKeepsNestedConditions(): void
    {
        $condition = new FieldCondition(
            dependOn: 'status',
            operator: FieldConditionOperator::EQUAL,
            values: ['open'],
        );

        $dto = new FieldConditionGroup(
            operator: LogicalOperator::AND,
            conditions: [$condition],
            action: FieldConditionAction::SHOW,
            loadUrl: null,
            loadOnce: true,
        );

        $array = $dto->toArray();

        self::assertSame(1, $array['operator']);
        self::assertSame(1, $array['action']);
        self::assertNull($array['loadUrl']);
        self::assertTrue($array['loadOnce']);

        self::assertCount(1, $array['conditions']);
        self::assertSame($condition, $array['conditions'][0]);
    }
}
