<?php

declare(strict_types=1);

namespace Termwind\Exceptions;

use InvalidArgumentException;

/**
 * @internal
 */
final class StyleNotFound extends InvalidArgumentException
{
    /**
     * Creates a new style not found instance.
     *
     * @param string $message
     */
    private function __construct(string $message)
    {
        parent::__construct($message, 0, $this->getPrevious());
    }

    /**
     * Creates a new style not found instance from the given style.
     *
     * @param string $style
     *
     * @return static
     */
    public static function fromStyle(string $style): self
    {
        return new self(sprintf('Style [%s] not found.', $style));
    }
}
