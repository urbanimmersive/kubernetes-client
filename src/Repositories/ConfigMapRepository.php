<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\ConfigMapCollection;

class ConfigMapRepository extends Repository
{
	/**
	 * @var string
	 */
	protected $uri = 'configmaps';

	protected function createCollection($response): ConfigMapCollection
	{
		return new ConfigMapCollection($response['items']);
	}
}
