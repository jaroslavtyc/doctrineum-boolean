<?php
namespace Doctrineum\Tests\Boolean;

use Doctrineum\Boolean\BooleanEnum;
use Doctrineum\Scalar\ScalarEnum;
use Granam\Tests\Exceptions\Tools\AbstractExceptionsHierarchyTest;

class ExceptionsHierarchyTest extends AbstractExceptionsHierarchyTest
{
    protected function getTestedNamespace()
    {
        $reflection = new \ReflectionClass(BooleanEnum::class);

        return $reflection->getNamespaceName();
    }

    protected function getRootNamespace()
    {
        return $this->getTestedNamespace();
    }

    protected function getExternalRootNamespaces()
    {
        $externalRootReflection = new \ReflectionClass(ScalarEnum::class);

        return $externalRootReflection->getNamespaceName();
    }

}
