<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\IssuerCollection;
use Maclof\Kubernetes\Repositories\Strategy\PatchMergeTrait;

class IssuerRepository extends Repository
{
    use PatchMergeTrait;

	/**
	 * @var string
	 */
    protected $uri = 'issuers';

    protected function createCollection($response): IssuerCollection
    {
        return new IssuerCollection($response['items']);
    }

}
