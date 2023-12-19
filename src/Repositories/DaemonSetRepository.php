<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\DaemonSetCollection;

class DaemonSetRepository extends Repository
{
	/**
	 * @var string
	 */
	protected $uri = 'daemonsets';

	protected function createCollection($response): DaemonSetCollection
	{
		return new DaemonSetCollection($response['items']);
	}
}
