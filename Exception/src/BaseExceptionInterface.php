<?php

declare(strict_types=1);

namespace Exception;

use Exception\DTO\ErrorResponse;

/**
 * Interface BaseExceptionInterface
 * @package Exception
 */
interface BaseExceptionInterface
{
    /**
     * @return array
     */
    public function createCustomError(): array;

    /**
     * @param $messageError
     * @return ErrorResponse
     */
    public function errorResponse($messageError): ErrorResponse;
}