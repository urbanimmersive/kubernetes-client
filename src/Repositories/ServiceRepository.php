<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\ServiceCollection;

class ServiceRepository extends Repository
{
	/**
	 * @var string
	 */
	protected $uri = 'services';

	protected function createCollection($response): ServiceCollection
	{
		return new ServiceCollection($response['items']);
	}
}
