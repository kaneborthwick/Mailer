<?php

namespace Towersystems\Mailer\Model;

interface EmailInterface {

	/**
	 * [setCode description]
	 * @param [type] $code [description]
	 */
	public function getCode();

	/**
	 * [setCode description]
	 * @param [type] $code [description]
	 */
	public function setCode($code);

	/**
	 * [setCode description]
	 * @param [type] $code [description]
	 */
	public function getSubject();

	/**
	 * [setCode description]
	 * @param [type] $code [description]
	 */
	public function setSubject($subject);

	/**
	 * [setCode description]
	 * @param [type] $code [description]
	 */
	public function getSenderName();

	/**
	 * [setCode description]
	 * @param [type] $code [description]
	 */
	public function setSenderName($senderName);

	/**
	 * [setCode description]
	 * @param [type] $code [description]
	 */
	public function getSenderAddress();

	/**
	 * [setSenderAddress description]
	 * @param [type] $senderAddress [description]
	 */
	public function setSenderAddress($senderAddress);

	/**
	 * [getTemplate description]
	 * @return [type] [description]
	 */
	public function getTemplate();

	/**
	 * [setTemplate description]
	 * @param [type] $template [description]
	 */
	public function setTemplate($template);

	/**
	 * {@inheritdoc}
	 */
	public function isEnabled();

	/**
	 * @param bool $enabled
	 */
	public function setEnabled($enabled);

	public function enable();

	public function disable();

	public function getBcc();
	public function setBcc($bcc);
	public function getCc();
	public function setCc($cc);
}
