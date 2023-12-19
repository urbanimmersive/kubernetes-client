<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\IngressCollection;

class IngressRepository extends Repository
{
	/**
	 * @var string
	 */
	protected $uri = 'ingresses';

	protected function createCollection($response): IngressCollection
	{
		return new IngressCollection($response['items']);
	}
}
