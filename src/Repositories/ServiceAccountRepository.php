<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\ServiceAccountCollection;

class ServiceAccountRepository extends Repository
{
	/**
	 * @var string
	 */
    protected $uri = 'serviceaccounts';

    protected function createCollection(array $response): ServiceAccountCollection
    {
        return new ServiceAccountCollection($response['items']);
    }
}
