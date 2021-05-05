<?php

/**
 * @see       https://github.com/laminas-api-tools/api-tools-rest for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/api-tools-rest/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/api-tools-rest/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\ApiTools\Rest\TestAsset;

use JsonSerializable as JsonSerializableInterface;

class JsonSerializable implements JsonSerializableInterface
{
    /**
     * @return string[]
     */
    public function jsonSerialize()
    {
        return ['foo' => 'bar'];
    }
}
