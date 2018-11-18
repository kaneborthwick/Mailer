<?php
namespace Towersystems\Mailer\Factory;

use Towersystems\Mailer\Model\Email;
use Towersystems\Resource\Factory\FactoryInterface;

/**
 *
 */
class EmailFactory implements FactoryInterface {
	/**
	 * [createNew description]
	 * @return [type] [description]
	 */
	public function createNew() {
		return new Email();
	}
}