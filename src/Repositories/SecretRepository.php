<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\SecretCollection;

class SecretRepository extends Repository
{
	/**
	 * @var string
	 */
	protected $uri = 'secrets';

	protected function createCollection($response): SecretCollection
	{
		return new SecretCollection($response['items']);
	}
}
