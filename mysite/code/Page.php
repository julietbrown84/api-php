<?php
class Page extends SiteTree {

	private static $db = array(
		'PageSummary' => 'HTMLText',
		'IsNavigationBasePage' => 'Boolean',
		'NavIcon' => 'Varchar(255)',
		'FeatureBox' => 'HTMLText'
	);

	private static $has_one = array(
		'Author' => 'Member',
		'FeatureBoxImage' => 'Image'
	);

	
	private static $belongs_many_many = array(
        'Pages' => 'Page'
    );

    private static $many_many = array(
        'Quicklinks' => 'Page'
    );

}
class Page_Controller extends ContentController {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	private static $allowed_actions = array (

	);

	public function init() {
		parent::init();
	}

	public function randomUser() {
			//Create a new restful service with APi webservice link - aggregate data
			$service = new RestfulService('https://randomuser.me/api/');
			//sending request
			$response = $service->request('');

			// 200 OK -The request has succeeded
			if($response && $response ->getStatusCode() == 200) {
				// json_decode returns a PHP array of objects,
				$data = json_decode($response->getBody());
				
				// Array data structure consisting of a collection of elements 
				// put data into array data ready for template
				$randomUser = new ArrayData($data->results[0]->user);
			}
			//return the data - put in template - template to show in front end
			return $randomUser;
	}

}
