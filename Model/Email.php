<?php

namespace Towersystems\Mailer\Model;

class Email implements EmailInterface {

	protected $code;
	protected $enabled = true;
	protected $emailTemplate;
	protected $senderName;
	protected $senderAddress;
	protected $bcc = [];
	protected $cc = [];

	/**
	 * {@inheritdoc}
	 */
	public function getCode() {
		return $this->code;
	}

	/**
	 * {@inheritdoc}
	 */
	public function isEnabled() {
		return $this->enabled;
	}

	/**
	 * @param bool $enabled
	 */
	public function setEnabled($enabled) {
		$this->enabled = (bool) $enabled;
	}

	public function enable() {
		$this->enabled = true;
	}

	public function disable() {
		$this->enabled = false;
	}

	/**
	 * {@inheritdoc}
	 */
	public function setCode($code) {
		$this->code = $code;
	}
	/**
	 * {@inheritdoc}
	 */
	public function getTemplate() {
		return $this->template;
	}

	/**
	 * {@inheritdoc}
	 */
	public function setTemplate($template) {
		$this->template = $template;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getSubject() {
		return $this->subject;
	}

	/**
	 * {@inheritdoc}
	 */
	public function setSubject($subject) {
		$this->subject = $subject;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getSenderName() {
		return $this->senderName;
	}

	/**
	 * {@inheritdoc}
	 */
	public function setSenderName($senderName) {
		$this->senderName = $senderName;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getSenderAddress() {
		return $this->senderAddress;
	}

	/**
	 * {@inheritdoc}
	 */
	public function setSenderAddress($senderAddress) {
		$this->senderAddress = $senderAddress;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getBcc() {
		return $this->bcc;
	}

	/**
	 * {@inheritdoc}
	 */
	public function setBcc($bcc) {
		$this->bcc = $bcc;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getCc() {
		return $this->cc;
	}

	/**
	 * {@inheritdoc}
	 */
	public function setCc($cc) {
		$this->cc = $cc;
	}
}
