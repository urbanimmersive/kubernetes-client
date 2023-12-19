<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\RoleBindingCollection;

class RoleBindingRepository extends Repository
{
	/**
	 * @var string
	 */
    protected $uri = 'rolebindings';


    protected function createCollection(array $response): RoleBindingCollection
    {
        return new RoleBindingCollection($response['items']);
    }
}
