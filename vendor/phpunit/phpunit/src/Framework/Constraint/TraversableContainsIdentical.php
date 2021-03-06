<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\Constraint;

use SplObjectStorage;

/**
 * Constraint that asserts that the Traversable it is applied to contains
 * a given value (using strict comparison).
 */
final class TraversableContainsIdentical extends TraversableContains
{
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other): bool
    {
        if ($other instanceof SplObjectStorage) {
            return $other->contains($this->value());
        }

        foreach ($other as $element) {
            /* @noinspection TypeUnsafeComparisonInspection */
            if ($this->value() === $element) {
                return true;
            }
        }

        return false;
    }
}
