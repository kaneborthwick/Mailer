<?php

namespace Towersystems\Mailer\Renderer\Adapter;

use Towersystems\Mailer\Model\EmailInterface;

interface AdapterInterface {
	/**
	 * [render description]
	 *
	 * @param  EmailInterface $email [description]
	 * @param  array          $data  [description]
	 * @return [type]                [description]
	 */
	public function render(EmailInterface $email, array $data = []);

}