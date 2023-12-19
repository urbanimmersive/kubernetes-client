<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\HorizontalPodAutoscalerCollection;

class HorizontalPodAutoscalerRepository extends Repository
{
	/**
	 * @var string
	 */
	protected $uri = 'horizontalpodautoscalers';

	protected function createCollection($response): HorizontalPodAutoscalerCollection
	{
		return new HorizontalPodAutoscalerCollection($response['items']);
	}
}
