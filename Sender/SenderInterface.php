<?php

namespace Towersystems\Mailer\Sender;

interface SenderInterface {
	/**
	 * [send description]
	 * @param  [type] $code        [description]
	 * @param  array  $recipients  [description]
	 * @param  array  $data        [description]
	 * @param  array  $attachments [description]
	 * @return [type]              [description]
	 */
	public function send($code, array $recipients, array $data = [], array $attachments = []);

}