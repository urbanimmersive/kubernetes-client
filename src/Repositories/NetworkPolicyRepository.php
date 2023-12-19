<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\NetworkPolicyCollection;

class NetworkPolicyRepository extends Repository
{
	/**
	 * @var string
	 */
	protected $uri = 'networkpolicies';


	protected function createCollection($response): NetworkPolicyCollection
	{
		return new NetworkPolicyCollection($response['items']);
	}
}
