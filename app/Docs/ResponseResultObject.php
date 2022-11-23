<?php

namespace App\Docs;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema()
 */
abstract class ResponseResultObject
{
    /**
     * @OA\Property()
     */
    public int $id;

    /**
     * @OA\Property()
     */
    public string $name;
}
