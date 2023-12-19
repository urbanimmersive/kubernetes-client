<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\RoleCollection;

class RoleRepository extends Repository
{
	/**
	 * @var string
	 */
    protected $uri = 'roles';

    protected function createCollection(array $response): RoleCollection
    {
        return new RoleCollection($response['items']);
    }
}
