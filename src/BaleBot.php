<?php

namespace Bazofather\Bale;

use Bazofather\Interface\BazofatherBase;
use Bazofather\Interface\BazofatherCommonInterface;

class BaleBot extends BazofatherBase implements BaleInterface, BazofatherCommonInterface
{

    /**
     * Bale bot file api url
     * for download - upload files
     *
     * @var string
     */
    protected string $base_file_url;

    public function __construct()
    {
        parent::__construct();

        // https://tapi.bale.ai/bot{token}/sendMessage
        $this->setBaseUrl("https://tapi.bale.ai/");
    }

    public function setWebhook(string $url)
    {
        // TODO: Implement setWebhook() method.
    }

    public function deleteWebhook(string $url)
    {
        // TODO: Implement deleteWebhook() method.
    }

    public function getMe()
    {
        // TODO: Implement getMe() method.
    }

    public function getFile(string $url)
    {
        // TODO: Implement getFile() method.
    }

    public function getChat()
    {
        // TODO: Implement getChat() method.
    }

    public function getChatAdministrators()
    {
        // TODO: Implement getChatAdministrators() method.
    }

    public function getChatMembersCount()
    {
        // TODO: Implement getChatMembersCount() method.
    }

    public function getChatNumber()
    {
        // TODO: Implement getChatNumber() method.
    }

    public function sendInvoice(string $chat_id)
    {
        // TODO: Implement sendInvoice() method.
    }

    public function sendText(int|string $chat_id, string $message)
    {
        // TODO: Implement sendText() method.
    }

    public function sendMessages(int|string $chat_id, array $messages, string $type = 'text')
    {
        // TODO: Implement sendMessages() method.
    }

    public function sendImage(int|string $chat_id, $image, ?string $caption)
    {
        // TODO: Implement sendImage() method.
    }

    public function sendVideo(int|string $chat_id, $video, ?string $caption)
    {
        // TODO: Implement sendVideo() method.
    }

    public function sendAudio(int|string $chat_id, $audio, ?string $caption)
    {
        // TODO: Implement sendAudio() method.
    }

    public function sendFile(int|string $chat_id, $file, ?string $caption)
    {
        // TODO: Implement sendFile() method.
    }

    public function sendVoice(int|string $chat_id, $voice, ?string $caption)
    {
        // TODO: Implement sendVoice() method.
    }

    public function sendLocation(int|string $chat_id, int|string $lat, int|string $long, ?string $caption)
    {
        // TODO: Implement sendLocation() method.
    }

    public function sendContact(int|string $chat_id, string $phone, string $name)
    {
        // TODO: Implement sendContact() method.
    }

    public function editTextMessage(int|string $chat_id, int $message_id, string $new_text)
    {
        // TODO: Implement editTextMessage() method.
    }

    public function deleteMessage(int|string $chat_id, int $message_id)
    {
        // TODO: Implement deleteMessage() method.
    }

    public function deleteMessages(int|string $chat_id, array $message_ids)
    {
        // TODO: Implement deleteMessages() method.
    }
}
