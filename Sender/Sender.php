<?php

namespace Towersystems\Mailer\Sender;

use Towersystems\Mailer\Provider\EmailProviderInterface;
use Towersystems\Mailer\Renderer\Adapter\AdapterInterface as RendererAdapterInterface;
use Towersystems\Mailer\Sender\Adapter\AdapterInterface as SenderAdpaterInterface;

class Sender implements SenderInterface {

	/**
	 * [$rendererAdapter description]
	 * @var [type]
	 */
	protected $rendererAdapter;

	/**
	 * [$senderAdapter description]
	 * @var [type]
	 */
	protected $senderAdapter;

	/**
	 * [$emailProvider description]
	 * @var [type]
	 */
	protected $emailProvider;

	/**
	 * [__construct description]
	 * @param RendererAdapterInterface $rendererAdapter [description]
	 * @param SenderAdpaterInterface   $senderAdapter   [description]
	 */
	public function __construct(
		RendererAdapterInterface $rendererAdapter,
		SenderAdpaterInterface $senderAdapter,
		EmailProviderInterface $emailProvider
	) {
		$this->rendererAdapter = $rendererAdapter;
		$this->senderAdapter = $senderAdapter;
		$this->emailProvider = $emailProvider;
	}

	/**
	 * {@inheritdoc}
	 */
	public function send($code, array $recipients, array $data = [], array $attachments = []) {

		$email = $this->emailProvider->getEmail($code);

		if (!$email->isEnabled()) {
			return;
		}

		$senderName = $email->getSenderName();
		$senderAddress = $email->getSenderAddress();
		$renderedEmail = $this->rendererAdapter->render($email, $data);

		$this->senderAdapter->send(
			$recipients,
			$senderAddress,
			$senderName,
			$renderedEmail,
			$email,
			$data,
			$attachments,
			$email->getBcc(),
			$email->getCc()
		);

	}

}