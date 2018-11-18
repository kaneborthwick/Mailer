<?php

namespace Towersystems\Mailer\Sender\Adapter;
use Towersystems\Mailer\Model\EmailInterface;
use Towersystems\Mailer\Renderer\RenderedEmail;

interface AdapterInterface {
	public function send(
		array $recipients,
		$senderAddress,
		$senderName,
		RenderedEmail $renderedEmail,
		EmailInterface $email,
		array $data,
		array $attachments = [],
		array $bbc = [],
		array $cc = []
	);
}