<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\ReplicaSetCollection;

class ReplicaSetRepository extends Repository
{
	/**
	 * @var string
	 */
	protected $uri = 'replicasets';

	protected function createCollection($response): ReplicaSetCollection
	{
		return new ReplicaSetCollection($response['items']);
	}
}
