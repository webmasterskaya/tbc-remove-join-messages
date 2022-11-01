<?php

namespace Webmasterskaya\TelegramBotCommands\Commands\SystemCommands;

use Longman\TelegramBot\Commands\SystemCommand;
use Longman\TelegramBot\Entities\ServerResponse;
use Longman\TelegramBot\Request;

class RemoveJoinMessagesCommand extends SystemCommand
{
	/**
	 * @var string
	 */
	protected $name = 'removejoinmessages';

	/**
	 * @var string
	 */
	protected $description = 'Handles and remove all join/leave messages';

	/**
	 * @var string
	 */
	protected $version = '1.0.0';

	public function execute(): ServerResponse
	{
		$message = $this->getMessage();
		ob_start();
		echo "<pre>";
		var_dump($message);
		echo "</pre>";
		$data = ob_get_clean();
		return Request::sendMessage([
			'text' => $data,
			'parse_mode' => 'HTML'
		]);
	}
}