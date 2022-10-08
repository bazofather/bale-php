<?php

namespace Bazofather\Bale;

interface BaleInterface
{
    public function setWebhook(string $url);

    public function deleteWebhook(string $url);

    public function getMe();

    public function getFile(string $url);

    public function getChat();

    public function getChatAdministrators();

    public function getChatMembersCount();

    public function getChatNumber();

    public function sendInvoice(string $chat_id);

}