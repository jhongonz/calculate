<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-09 21:43:32
 */

namespace Core\Cards\Application\UseCases;

interface UseCaseServiceInterface
{
    public function execute(RequestServiceInterface $requestService): mixed;
}
