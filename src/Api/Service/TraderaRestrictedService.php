<?php

namespace Hsoderlind\Tradera\Api\Service;

use SoapClient;
use SoapHeader;

class TraderaRestrictedService
{
	use ServiceTrait;

	/**
	 * Undocumented function
	 *
	 * @param string $appId
	 * @param string $appKey
	 * @param string $userId
	 * @param string $token
	 * @param integer|null $sandbox
	 * @param bool $debug
	 * @param callable|string|null $logger
	 */
	public function __construct(string $appId, string $appKey, string $userId, string $token, ?int $sandbox = null, bool $debug = false, $logger = null)
	{
		$url = 'https://api.tradera.com/v3/RestrictedService.asmx';
		$params = [
			'appId' => $appId,
			'appKey' => $appKey,
			'userId' => $userId,
			'token' => $token
		];

		if ($sandbox) {
			$params['sandbox'] = $sandbox;
		}
		
		$this->debug = $debug;
		
		$this->logger = $logger;
		
		$this->client = new SoapClient(
			$url . '?WSDL',
			[
				'location' => $url . '?' . http_build_query($params),
				'trace' => true
			]
		);
	}
}
