<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\EndpointCollection;

class EndpointRepository extends Repository
{
	/**
	 * @var string
	 */
	protected $uri = 'endpoints';

	protected function createCollection($response): EndpointCollection
	{
		return new EndpointCollection($response['items']);
	}
}
