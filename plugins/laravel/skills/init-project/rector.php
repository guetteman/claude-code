<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use RectorLaravel\Rector\Class_\AddExtendsAnnotationToModelFactoriesRector;
use RectorLaravel\Rector\Class_\ModelCastsPropertyToCastsMethodRector;
use RectorLaravel\Rector\ClassMethod\AddGenericReturnTypeToRelationsRector;
use RectorLaravel\Rector\ClassMethod\MakeModelAttributesAndScopesProtectedRector;
use RectorLaravel\Rector\FuncCall\RemoveDumpDataDeadCodeRector;
use RectorLaravel\Rector\If_\AbortIfRector;
use RectorLaravel\Rector\MethodCall\AssertStatusToAssertMethodRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/app',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ])
    ->withRules([
        AbortIfRector::class,
        AddExtendsAnnotationToModelFactoriesRector::class,
        AddGenericReturnTypeToRelationsRector::class,
        AssertStatusToAssertMethodRector::class,
        MakeModelAttributesAndScopesProtectedRector::class,
        ModelCastsPropertyToCastsMethodRector::class,
        RemoveDumpDataDeadCodeRector::class,
    ])
    ->withPhpSets(php84: true)
    ->withTypeCoverageLevel(0)
    ->withDeadCodeLevel(0)
    ->withCodeQualityLevel(0);
