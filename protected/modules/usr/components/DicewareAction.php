<?php

/**
 * Returns a JSON string containing a randomly generated passphrase build from easy to remember words and digits.
 */
class DicewareAction extends CAction
{
	/**
	 * @var integer Number of words in password generated using the diceware component.
	 */
	public $length;
	/**
	 * @var boolean Should an extra digit be added in password generated using the diceware component.
	 */
	public $extraDigit;
	/**
	 * @var integer Should an extra random character be added in password generated using the diceware component.
	 */
	public $extraChar;

	public function run() {
		require dirname(__FILE__) . '/../extensions/diceware/Diceware.php';
		$diceware = new \nineinchnick\diceware\Diceware(Yii::app()->language);
		$password = $diceware->get_phrase($this->length, $this->extraDigit, $this->extraChar);
		echo json_encode($password);
	}
}
