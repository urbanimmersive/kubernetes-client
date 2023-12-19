<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\CronJobCollection;

class CronJobRepository extends Repository
{
	/**
	 * @var string
	 */
	protected $uri = 'cronjobs';

	protected function createCollection($response): CronJobCollection
	{
		return new CronJobCollection($response['items']);
	}
}
