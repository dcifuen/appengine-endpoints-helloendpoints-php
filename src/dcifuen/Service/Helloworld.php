<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for Helloworld (v1).
 *
 * <p>
 * Helloworld API v1.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class dcifuen_Service_Helloworld extends Google_Service
{
  /** View your email address. */
  const USERINFO_EMAIL =
      "https://www.googleapis.com/auth/userinfo.email";

  public $greetings;
  

  /**
   * Constructs the internal representation of the Helloworld service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://your-app-id.appspot.com/_ah/api/';
    $this->servicePath = 'helloworld/v1/';
    $this->version = 'v1';
    $this->serviceName = 'helloworld';

    $this->greetings = new dcifuen_Service_Helloworld_Greetings_Resource(
        $this,
        $this->serviceName,
        'greetings',
        array(
          'methods' => array(
            'authed' => array(
              'path' => 'hellogreeting/authed',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'getGreeting' => array(
              'path' => 'hellogreeting/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'listGreeting' => array(
              'path' => 'hellogreeting',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),'multiply' => array(
              'path' => 'hellogreeting/{times}',
              'httpMethod' => 'POST',
              'parameters' => array(
                'times' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "greetings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $helloworldService = new dcifuen_Service_Helloworld(...);
 *   $greetings = $helloworldService->greetings;
 *  </code>
 */
class dcifuen_Service_Helloworld_Greetings_Resource extends Google_Service_Resource
{

  /**
   * (greetings.authed)
   *
   * @param array $optParams Optional parameters.
   * @return dcifuen_Service_Helloworld_HelloGreeting
   */
  public function authed($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('authed', array($params), "dcifuen_Service_Helloworld_HelloGreeting");
  }

  /**
   * (greetings.getGreeting)
   *
   * @param int $id
   * @param array $optParams Optional parameters.
   * @return dcifuen_Service_Helloworld_HelloGreeting
   */
  public function getGreeting($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('getGreeting', array($params), "dcifuen_Service_Helloworld_HelloGreeting");
  }

  /**
   * (greetings.listGreeting)
   *
   * @param array $optParams Optional parameters.
   * @return dcifuen_Service_Helloworld_HelloGreetingCollection
   */
  public function listGreeting($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('listGreeting', array($params), "dcifuen_Service_Helloworld_HelloGreetingCollection");
  }

  /**
   * (greetings.multiply)
   *
   * @param int $times
   * @param dcifuen_HelloGreeting $postBody
   * @param array $optParams Optional parameters.
   * @return dcifuen_Service_Helloworld_HelloGreeting
   */
  public function multiply($times, dcifuen_Service_Helloworld_HelloGreeting $postBody, $optParams = array())
  {
    $params = array('times' => $times, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('multiply', array($params), "dcifuen_Service_Helloworld_HelloGreeting");
  }
}




class dcifuen_Service_Helloworld_HelloGreeting extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $message;


  public function setMessage($message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
}

class dcifuen_Service_Helloworld_HelloGreetingCollection extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Dcifuen_Service_Helloworld_HelloGreeting';
  protected $itemsDataType = 'array';


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
}
