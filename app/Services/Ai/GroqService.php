<?php

namespace App\Services\Ai;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Config;

class GroqService
{
    protected Client $client;
    protected string $apiKey;
    protected string $baseUrl;
    protected int $timeout;

    public function __construct()
    {
        $this->apiKey = Config::get('groq.api_key');
        $this->baseUrl = Config::get('groq.base_url');
        $this->timeout = Config::get('groq.request_timeout', 30);
        
        $this->client = new Client([
            'base_uri' => $this->baseUrl,
            'timeout' => $this->timeout,
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    /**
     * Send a chat completion request to Groq API
     *
     * @param array $messages The messages to send
     * @param string $model The model to use (e.g., 'mixtral-8x7b-32768')
     * @param array $options Additional options for the request
     * @return array
     * @throws GuzzleException
     */
    public function chatCompletion(array $messages, string $model = 'mixtral-8x7b-32768', array $options = []): array
    {
        $defaultOptions = [
            'model' => $model,
            'messages' => $messages,
            'temperature' => 0.7,
            'max_tokens' => 1000,
        ];

        $requestOptions = array_merge($defaultOptions, $options);

        try {
            $response = $this->client->post('/chat/completions', [
                'json' => $requestOptions,
            ]);

            return json_decode($response->getBody()->getContents(), true);
        } catch (ClientException $e) {
            $errorResponse = $e->getResponse();
            $errorBody = $errorResponse->getBody()->getContents();
            $errorData = json_decode($errorBody, true);

            return [
                'status' => 'error',
                'message' => $errorData['error']['message'] ?? 'Groq API error',
            ];
        }
    }

    /**
     * Get available models from Groq API
     *
     * @return array
     * @throws GuzzleException
     */
    public function listModels(): array
    {
        try {
            $response = $this->client->get('/models');
            return json_decode($response->getBody()->getContents(), true);
        } catch (ClientException $e) {
            $errorResponse = $e->getResponse();
            $errorBody = $errorResponse->getBody()->getContents();
            $errorData = json_decode($errorBody, true);

            return [
                'status' => 'error',
                'message' => $errorData['error']['message'] ?? 'Failed to fetch models',
            ];
        }
    }
} 