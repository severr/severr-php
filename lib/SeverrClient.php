<?php
/**
 * SeverrClientsAPI
 * PHP version 5
 *
 * @category Class
 * @package  severr
 * @author   dev@severr.io
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/severr/severr-php
 */

/**
 * Severr Client API
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace severrclient;

use \severr\Configuration;
use \severr\ApiClient;
use \severr\ApiException;
use \severr\ObjectSerializer;

/**
 * EventsApi Class Doc Comment
 *
 * @category Class
 * @package  severr
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SeverrClient
{

    /**
     * API Client
     *
     * @var \severr\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \severr\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\severr\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://www.severr.io/api/v1');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \severr\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \severr\ApiClient $apiClient set the API client
     *
     * @return EventsApi
     */
    public function setApiClient(\severr\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation eventsPost
     *
     * Submit an application event or error to Severr
     *
     * @param \io\severr\model\AppEvent $data Event to submit (required)
     * @return void
     * @throws \severr\ApiException on non-2xx response
     */
    public function eventsPost($data)
    {
        list($response) = $this->eventsPostWithHttpInfo($data);
        return $response;
    }

    /**
     * Operation eventsPostWithHttpInfo
     *
     * Submit an application event or error to Severr
     *
     * @param \io\severr\model\AppEvent $data Event to submit (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \severr\ApiException on non-2xx response
     */
    public function eventsPostWithHttpInfo($data)
    {
        // verify the required parameter 'data' is set
        if ($data === null) {
            throw new \InvalidArgumentException('Missing the required parameter $data when calling eventsPost');
        }
        // parse inputs
        $resourcePath = "/events";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($data)) {
            $_tempBody = $data;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/events'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\io\severr\model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
