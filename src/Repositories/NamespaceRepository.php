<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\NamespaceCollection;

class NamespaceRepository extends Repository
{
	/**
	 * @var string
	 */
	protected $uri = 'namespaces';

	/**
	 * @var bool
	 */
	protected $namespace = false;

	protected function createCollection($response): NamespaceCollection
	{
		return new NamespaceCollection($response['items']);
	}
}
