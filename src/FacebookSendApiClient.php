<?php

namespace Cryonighter\Facebook\Messenger\Send;

use Cryonighter\Facebook\Messenger\Send\Exception\FacebookError\FacebookErrorException;
use Cryonighter\Facebook\Messenger\Send\Request\AttachmentRequest;
use Cryonighter\Facebook\Messenger\Send\Request\MessageRequest;
use Cryonighter\Facebook\Messenger\Send\Request\Request;
use Cryonighter\Facebook\Messenger\Send\Request\SenderActionRequest;
use Cryonighter\Facebook\Messenger\Send\Response\AttachmentResponse;
use Cryonighter\Facebook\Messenger\Send\Response\RecipientMessageResponse;
use Cryonighter\Facebook\Messenger\Send\Response\MessageResponse;
use Cryonighter\Facebook\Messenger\Send\Response\RecipientResponse;
use Cryonighter\Facebook\Messenger\Send\VO\AttachmentId;
use Cryonighter\Facebook\Messenger\Send\VO\MessageId;
use Cryonighter\Facebook\Messenger\Send\VO\Recipient\RecipientId;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use function \GuzzleHttp\json_decode;

class FacebookSendApiClient
{
    private const METHODS = [
        AttachmentRequest::class => 'message_attachments',
        MessageRequest::class => 'messages',
        SenderActionRequest::class => 'messages',
    ];

    /**
     * @var Client
     */
    private $httpClient;

    /**
     * @var string
     */
    private $pageAccessToken;

    /**
     * @param string $pageAccessToken
     */
    public function __construct(string $pageAccessToken)
    {
        $this->httpClient = new Client(
            [
                'base_uri' => 'https://graph.facebook.com',
                'timeout' => 5.5,
            ]
        );
        $this->pageAccessToken = $pageAccessToken;
    }

    /**
     * @param AttachmentRequest $attachmentRequest
     *
     * @return AttachmentResponse
     *
     * @throws FacebookErrorException
     */
    public function createAttachment(AttachmentRequest $attachmentRequest): AttachmentResponse
    {
        return new AttachmentResponse(
            new AttachmentId($this->request($attachmentRequest)['attachment_id'])
        );
    }

    /**
     * @param MessageRequest $messageRequest
     *
     * @return MessageResponse
     *
     * @throws FacebookErrorException
     */
    public function sendMessage(MessageRequest $messageRequest): MessageResponse
    {
        $result = $this->request($messageRequest);

        if ($result['recipient_id']) {
            return new RecipientMessageResponse(
                new MessageId($result['message_id']),
                new RecipientId($result['recipient_id'])
            );
        }

        return new MessageResponse(
            new MessageId($result['message_id'])
        );
    }

    public function sendSenderAction(SenderActionRequest $senderActionRequest): RecipientResponse
    {
        return new RecipientResponse(
            new RecipientId($this->request($senderActionRequest)['recipient_id'])
        );
    }

    /**
     * @param Request $request
     *
     * @return array
     *
     * @throws FacebookErrorException
     */
    protected function request(Request $request): array
    {
        $method = static::METHODS[get_class($request)];

        try {
            $response = $this->httpClient->post(
                "/v2.11/me/$method?access_token=$this->pageAccessToken",
                [
                    'json' => $request,
                ]
            );

            $content = $response->getBody()
                ->getContents();

            // TODO: убрать отладочное говно
            var_dump($content);
            echo "\n";

            return json_decode($content, true);
        } catch (ClientException $clientException) {
            $errorContent = $clientException->getResponse()
                ->getBody()
                ->getContents();

            $error = json_decode($errorContent, true)['error'];

            $message = $error['message'];
            $type = $error['type'];
            $fbtraceId = $error['fbtrace_id'];
            $code = $error['code'];
            $subcode = $error['error_subcode'] ?? null;

            $exceptionClass = __NAMESPACE__ . "\\Exception\\FacebookError\\$type";

            if (class_exists($exceptionClass)) {
                throw new $exceptionClass($message, $code, $clientException, $fbtraceId, $subcode, $type);
            } else {
                throw new FacebookErrorException($message, $code, $clientException, $fbtraceId, $subcode, $type);
            }
        }
    }
}
