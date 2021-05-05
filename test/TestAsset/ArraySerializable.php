<?php

/**
 * @see       https://github.com/laminas-api-tools/api-tools-rest for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/api-tools-rest/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/api-tools-rest/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\ApiTools\Rest\TestAsset;

class ArraySerializable
{
    /**
     * @return string
     */
    public function getHijinx()
    {
        return 'should not get this';
    }

    /**
     * @return string[]
     */
    public function getArrayCopy()
    {
        return ['foo' => 'bar'];
    }
}
