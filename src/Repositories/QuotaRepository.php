<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\QuotaCollection;

class QuotaRepository extends Repository
{
	/**
	 * @var string
	 */
	protected $uri = 'resourcequotas';

	/**
	 * @var bool
	 */
	protected $namespace = false;

	protected function createCollection($response): QuotaCollection
	{
		return new QuotaCollection($response['items']);
	}
}
