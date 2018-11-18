<?php

namespace Towersystems\Mailer\Provider;

use Towersystems\Mailer\Factory\EmailFactory;
use Webmozart\Assert\Assert;

class EmailProvider implements EmailProviderInterface {

	/**
	 * [$emailFactory description]
	 * @var [type]
	 */
	protected $emailFactory;

	/**
	 * [$configuration description]
	 * @var [type]
	 */
	protected $configuration;

	/**
	 * [__construct description]
	 * @param EmailFactory $emailFactory [description]
	 */
	public function __construct(
		EmailFactory $emailFactory,
		array $configuration
	) {
		$this->emailFactory = $emailFactory;
		$this->configuration = $configuration;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getEmail($code) {
		return $this->getEmailFromConfiguration($code);
	}

	/**
	 * [getEmailFromConfiguration description]
	 * @param  [type] $code [description]
	 * @return [type]       [description]
	 */
	private function getEmailFromConfiguration($code) {
		Assert::keyExists($this->configuration, $code, sprintf('Email with code "%s" does not exist!', $code));

		$email = $this->emailFactory->createNew();
		$configuration = $this->configuration[$code];

		$email->setCode($code);
		$email->setSubject($configuration['subject']);
		$email->setTemplate($configuration['template']);

		if (isset($configuration['enabled']) && false === $configuration['enabled']) {
			$email->setEnabled(false);
		}

		if (isset($configuration['sender']['name'])) {
			$email->setSenderName($configuration['sender']['name']);
		}

		if (isset($configuration['sender']['address'])) {
			$email->setSenderAddress($configuration['sender']['address']);
		}

		if (isset($configuration['bcc'])) {
			$email->setBcc($configuration['bcc']);
		}

		if (isset($configuration['cc'])) {
			$email->setCc($configuration['cc']);
		}

		return $email;
	}
}