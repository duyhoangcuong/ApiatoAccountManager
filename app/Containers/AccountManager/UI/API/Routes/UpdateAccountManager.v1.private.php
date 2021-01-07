<?php

/**
 * @apiGroup           AccountManager
 * @apiName            updateAccountManager
 *
 * @api                {PATCH} /v1/accountmanagers/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->patch('accountmanagers/{id}', [
    'as' => 'api_accountmanager_update_account_manager',
    'uses'  => 'Controller@updateAccountManager',
    'middleware' => [
      'auth:api',
    ],
]);