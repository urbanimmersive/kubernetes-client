<?php namespace Maclof\Kubernetes\Models;

class Role extends Model
{
	/**
	 * The api version.
	 * @var string
	 */
    protected $apiVersion = 'rbac.authorization.k8s.io/v1';
}
