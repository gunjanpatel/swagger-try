<?php

namespace App\Docs;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema()
 */
abstract class AppleTopChartsResultObject
{
    /**
     * @OA\Property()
     */
    public int $id;
}
