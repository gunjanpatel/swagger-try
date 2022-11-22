<?php

namespace App\Http;

use OpenApi\Annotations as OA;

/**
 * @OA\Get(
 *     path="/v1/apple-top-charts/countries/{countryCode}",
 *     summary="Some summary",
 *     description="Some Description",
 *     @OA\Parameter (
 *         in="path",
 *         name="countryCode",
 *         description="iso 2 digit country code",
 *         required=true,
 *         @OA\Schema(
 *           type="string"
 *         ),
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Success",
 *         @OA\JsonContent(
 *              @OA\Property(
 *                  property="data",
 *                  type="array",
 *                  @OA\Items(ref="#/components/schemas/AppleTopChartsResultObject")
 *              )
 *          )
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Could Not Find Resource"
 *     )
 * )
 */
class Sample
{
}
