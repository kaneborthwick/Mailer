<?php

namespace Towersystems\Mailer\Provider;

interface EmailProviderInterface {

	/**
	 * [getEmail description]
	 * @param  [type] $code [description]
	 * @return [type]       [description]
	 */
	public function getEmail($code);

}