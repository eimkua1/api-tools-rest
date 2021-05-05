<?php

/**
 * @see       https://github.com/laminas-api-tools/api-tools-rest for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/api-tools-rest/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/api-tools-rest/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\ApiTools\Rest\TestAsset;

use Laminas\ApiTools\ApiProblem\ApiProblem;
use Laminas\ApiTools\Rest\AbstractResourceListener;

use function func_get_args;

class TestResourceListener extends AbstractResourceListener
{
    /** @var TestResourceListener */
    public $testCase;

    /**
     * @param TestResourceListener $testCase
     */
    public function __construct($testCase)
    {
        $this->testCase = $testCase;
    }

    /**
     * @param mixed $data
     * @return ApiProblem|mixed|void
     */
    public function create($data)
    {
        $this->testCase->methodInvokedInListener = __METHOD__;
        $this->testCase->paramsPassedToListener  = func_get_args();
    }

    /**
     * @param mixed $id
     * @param mixed $data
     * @return ApiProblem|mixed|void
     */
    public function update($id, $data)
    {
        $this->testCase->methodInvokedInListener = __METHOD__;
        $this->testCase->paramsPassedToListener  = func_get_args();
    }

    /**
     * @param mixed $data
     * @return ApiProblem|mixed|void
     */
    public function replaceList($data)
    {
        $this->testCase->methodInvokedInListener = __METHOD__;
        $this->testCase->paramsPassedToListener  = func_get_args();
    }

    /**
     * @param mixed $id
     * @param mixed $data
     * @return ApiProblem|mixed|void
     */
    public function patch($id, $data)
    {
        $this->testCase->methodInvokedInListener = __METHOD__;
        $this->testCase->paramsPassedToListener  = func_get_args();
    }

    /**
     * @param mixed $data
     * @return ApiProblem|mixed|void
     */
    public function patchList($data)
    {
        $this->testCase->methodInvokedInListener = __METHOD__;
        $this->testCase->paramsPassedToListener  = func_get_args();
    }

    /**
     * @param mixed $id
     * @return ApiProblem|mixed|void
     */
    public function delete($id)
    {
        $this->testCase->methodInvokedInListener = __METHOD__;
        $this->testCase->paramsPassedToListener  = func_get_args();
    }

    /**
     * @param mixed $data
     * @return ApiProblem|mixed|void
     */
    public function deleteList($data)
    {
        $this->testCase->methodInvokedInListener = __METHOD__;
        $this->testCase->paramsPassedToListener  = func_get_args();
    }

    /**
     * @param mixed $id
     * @return ApiProblem|mixed|void
     */
    public function fetch($id)
    {
        $this->testCase->methodInvokedInListener = __METHOD__;
        $this->testCase->paramsPassedToListener  = func_get_args();
    }

    /**
     * @param array $params
     * @return ApiProblem|mixed|void
     */
    public function fetchAll($params = [])
    {
        $this->testCase->methodInvokedInListener = __METHOD__;
        $this->testCase->paramsPassedToListener  = $params;
    }
}
