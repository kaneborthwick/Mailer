<?php

namespace Towersystems\Mailer\Renderer;

class RenderedEmail {
	/**
	 * @var string
	 */
	protected $subject;

	/**
	 * @var string
	 */
	protected $body;

	/**
	 * @param string $subject
	 * @param string $body
	 */
	public function __construct($subject, $body) {
		$this->subject = $subject;
		$this->body = $body;
	}

	/**
	 * [getSubject description]
	 * @return [type] [description]
	 */
	public function getSubject() {
		return $this->subject;
	}

	/**
	 * [setSubject description]
	 * @param [type] $subject [description]
	 */
	public function setSubject($subject) {
		$this->subject = $subject;
	}

	/**
	 * [getBody description]
	 * @return [type] [description]
	 */
	public function getBody() {
		return $this->body;
	}

	/**
	 * [setBody description]
	 * @param [type] $body [description]
	 */
	public function setBody($body) {
		$this->body = $body;
	}
}