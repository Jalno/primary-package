<?php
namespace Jalno\Package;

use Jalno\Lumen\Packages\PackageAbstract;

class Package extends PackageAbstract
{
    public function getDependencies(): array
    {
        return [];
    }
    public function getProviders(): array
    {
        return [
            Providers\AppServiceProvider::class,
            Providers\EventServiceProvider::class,
        ];
    }
    public function basePath(): string
    {
        return __DIR__;
    }
    public function getNamespace(): string
    {
        return __NAMESPACE__;
    }
}
