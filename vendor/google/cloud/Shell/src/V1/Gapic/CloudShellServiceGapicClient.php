<?php
/*
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/shell/v1/cloudshell.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Shell\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Shell\V1\AddPublicKeyRequest;
use Google\Cloud\Shell\V1\AuthorizeEnvironmentRequest;
use Google\Cloud\Shell\V1\Environment;
use Google\Cloud\Shell\V1\GetEnvironmentRequest;
use Google\Cloud\Shell\V1\RemovePublicKeyRequest;
use Google\Cloud\Shell\V1\StartEnvironmentMetadata;
use Google\Cloud\Shell\V1\StartEnvironmentRequest;
use Google\Cloud\Shell\V1\StartEnvironmentResponse;
use Google\LongRunning\Operation;
use Google\Protobuf\Timestamp;

/**
 * Service Description: API for interacting with Google Cloud Shell. Each user of Cloud Shell has at
 * least one environment, which has the ID "default". Environment consists of a
 * Docker image defining what is installed on the environment and a home
 * directory containing the user's data that will remain across sessions.
 * Clients use this API to start and fetch information about their environment,
 * which can then be used to connect to that environment via a separate SSH
 * client.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $cloudShellServiceClient = new CloudShellServiceClient();
 * try {
 *     $operationResponse = $cloudShellServiceClient->addPublicKey();
 *     $operationResponse->pollUntilComplete();
 *     if ($operationResponse->operationSucceeded()) {
 *         $result = $operationResponse->getResult();
 *     // doSomethingWith($result)
 *     } else {
 *         $error = $operationResponse->getError();
 *         // handleError($error)
 *     }
 *     // Alternatively:
 *     // start the operation, keep the operation name, and resume later
 *     $operationResponse = $cloudShellServiceClient->addPublicKey();
 *     $operationName = $operationResponse->getName();
 *     // ... do other work
 *     $newOperationResponse = $cloudShellServiceClient->resumeOperation($operationName, 'addPublicKey');
 *     while (!$newOperationResponse->isDone()) {
 *         // ... do other work
 *         $newOperationResponse->reload();
 *     }
 *     if ($newOperationResponse->operationSucceeded()) {
 *         $result = $newOperationResponse->getResult();
 *     // doSomethingWith($result)
 *     } else {
 *         $error = $newOperationResponse->getError();
 *         // handleError($error)
 *     }
 * } finally {
 *     $cloudShellServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 */
class CloudShellServiceGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.shell.v1.CloudShellService';

    /** The default address of the service. */
    const SERVICE_ADDRESS = 'cloudshell.googleapis.com';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static $environmentNameTemplate;

    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/cloud_shell_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/cloud_shell_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/cloud_shell_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/cloud_shell_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getEnvironmentNameTemplate()
    {
        if (self::$environmentNameTemplate == null) {
            self::$environmentNameTemplate = new PathTemplate('users/{user}/environments/{environment}');
        }

        return self::$environmentNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'environment' => self::getEnvironmentNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a environment
     * resource.
     *
     * @param string $user
     * @param string $environment
     *
     * @return string The formatted environment resource.
     */
    public static function environmentName($user, $environment)
    {
        return self::getEnvironmentNameTemplate()->render([
            'user' => $user,
            'environment' => $environment,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - environment: users/{user}/environments/{environment}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'cloudshell.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /**
     * Adds a public SSH key to an environment, allowing clients with the
     * corresponding private key to connect to that environment via SSH. If a key
     * with the same content already exists, this will error with ALREADY_EXISTS.
     *
     * Sample code:
     * ```
     * $cloudShellServiceClient = new CloudShellServiceClient();
     * try {
     *     $operationResponse = $cloudShellServiceClient->addPublicKey();
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $cloudShellServiceClient->addPublicKey();
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $cloudShellServiceClient->resumeOperation($operationName, 'addPublicKey');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $cloudShellServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $environment
     *           Environment this key should be added to, e.g.
     *           `users/me/environments/default`.
     *     @type string $key
     *           Key that should be added to the environment. Supported formats are
     *           `ssh-dss` (see RFC4253), `ssh-rsa` (see RFC4253), `ecdsa-sha2-nistp256`
     *           (see RFC5656), `ecdsa-sha2-nistp384` (see RFC5656) and
     *           `ecdsa-sha2-nistp521` (see RFC5656). It should be structured as
     *           &lt;format&gt; &lt;content&gt;, where &lt;content&gt; part is encoded with
     *           Base64.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function addPublicKey(array $optionalArgs = [])
    {
        $request = new AddPublicKeyRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['environment'])) {
            $request->setEnvironment($optionalArgs['environment']);
            $requestParamHeaders['environment'] = $optionalArgs['environment'];
        }

        if (isset($optionalArgs['key'])) {
            $request->setKey($optionalArgs['key']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('AddPublicKey', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Sends OAuth credentials to a running environment on behalf of a user. When
     * this completes, the environment will be authorized to run various Google
     * Cloud command line tools without requiring the user to manually
     * authenticate.
     *
     * Sample code:
     * ```
     * $cloudShellServiceClient = new CloudShellServiceClient();
     * try {
     *     $operationResponse = $cloudShellServiceClient->authorizeEnvironment();
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $cloudShellServiceClient->authorizeEnvironment();
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $cloudShellServiceClient->resumeOperation($operationName, 'authorizeEnvironment');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $cloudShellServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           Name of the resource that should receive the credentials, for example
     *           `users/me/environments/default` or
     *           `users/someone&#64;example.com/environments/default`.
     *     @type string $accessToken
     *           The OAuth access token that should be sent to the environment.
     *     @type string $idToken
     *           The OAuth ID token that should be sent to the environment.
     *     @type Timestamp $expireTime
     *           The time when the credentials expire. If not set, defaults to one hour from
     *           when the server received the request.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function authorizeEnvironment(array $optionalArgs = [])
    {
        $request = new AuthorizeEnvironmentRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        if (isset($optionalArgs['accessToken'])) {
            $request->setAccessToken($optionalArgs['accessToken']);
        }

        if (isset($optionalArgs['idToken'])) {
            $request->setIdToken($optionalArgs['idToken']);
        }

        if (isset($optionalArgs['expireTime'])) {
            $request->setExpireTime($optionalArgs['expireTime']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('AuthorizeEnvironment', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Gets an environment. Returns NOT_FOUND if the environment does not exist.
     *
     * Sample code:
     * ```
     * $cloudShellServiceClient = new CloudShellServiceClient();
     * try {
     *     $formattedName = $cloudShellServiceClient->environmentName('[USER]', '[ENVIRONMENT]');
     *     $response = $cloudShellServiceClient->getEnvironment($formattedName);
     * } finally {
     *     $cloudShellServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the requested resource, for example `users/me/environments/default`
     *                             or `users/someone&#64;example.com/environments/default`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Shell\V1\Environment
     *
     * @throws ApiException if the remote call fails
     */
    public function getEnvironment($name, array $optionalArgs = [])
    {
        $request = new GetEnvironmentRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetEnvironment', Environment::class, $optionalArgs, $request)->wait();
    }

    /**
     * Removes a public SSH key from an environment. Clients will no longer be
     * able to connect to the environment using the corresponding private key.
     * If a key with the same content is not present, this will error with
     * NOT_FOUND.
     *
     * Sample code:
     * ```
     * $cloudShellServiceClient = new CloudShellServiceClient();
     * try {
     *     $operationResponse = $cloudShellServiceClient->removePublicKey();
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $cloudShellServiceClient->removePublicKey();
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $cloudShellServiceClient->resumeOperation($operationName, 'removePublicKey');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $cloudShellServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $environment
     *           Environment this key should be removed from, e.g.
     *           `users/me/environments/default`.
     *     @type string $key
     *           Key that should be removed from the environment.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function removePublicKey(array $optionalArgs = [])
    {
        $request = new RemovePublicKeyRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['environment'])) {
            $request->setEnvironment($optionalArgs['environment']);
            $requestParamHeaders['environment'] = $optionalArgs['environment'];
        }

        if (isset($optionalArgs['key'])) {
            $request->setKey($optionalArgs['key']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('RemovePublicKey', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }

    /**
     * Starts an existing environment, allowing clients to connect to it. The
     * returned operation will contain an instance of StartEnvironmentMetadata in
     * its metadata field. Users can wait for the environment to start by polling
     * this operation via GetOperation. Once the environment has finished starting
     * and is ready to accept connections, the operation will contain a
     * StartEnvironmentResponse in its response field.
     *
     * Sample code:
     * ```
     * $cloudShellServiceClient = new CloudShellServiceClient();
     * try {
     *     $operationResponse = $cloudShellServiceClient->startEnvironment();
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $cloudShellServiceClient->startEnvironment();
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $cloudShellServiceClient->resumeOperation($operationName, 'startEnvironment');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $cloudShellServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           Name of the resource that should be started, for example
     *           `users/me/environments/default` or
     *           `users/someone&#64;example.com/environments/default`.
     *     @type string $accessToken
     *           The initial access token passed to the environment. If this is present and
     *           valid, the environment will be pre-authenticated with gcloud so that the
     *           user can run gcloud commands in Cloud Shell without having to log in. This
     *           code can be updated later by calling AuthorizeEnvironment.
     *     @type string[] $publicKeys
     *           Public keys that should be added to the environment before it is started.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function startEnvironment(array $optionalArgs = [])
    {
        $request = new StartEnvironmentRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        if (isset($optionalArgs['accessToken'])) {
            $request->setAccessToken($optionalArgs['accessToken']);
        }

        if (isset($optionalArgs['publicKeys'])) {
            $request->setPublicKeys($optionalArgs['publicKeys']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('StartEnvironment', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }
}
