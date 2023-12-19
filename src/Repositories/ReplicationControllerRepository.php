<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\ReplicationControllerCollection;

class ReplicationControllerRepository extends Repository
{
	/**
	 * @var string
	 */
	protected $uri = 'replicationcontrollers';

	protected function createCollection($response): ReplicationControllerCollection
	{
		return new ReplicationControllerCollection($response['items']);
	}
}
