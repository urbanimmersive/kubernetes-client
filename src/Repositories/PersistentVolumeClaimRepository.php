<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\PersistentVolumeClaimCollection;

class PersistentVolumeClaimRepository extends Repository
{
	/**
	 * @var string
	 */
	protected $uri = 'persistentvolumeclaims';

	protected function createCollection($response): PersistentVolumeClaimCollection
	{
		return new PersistentVolumeClaimCollection($response['items']);
	}
}
