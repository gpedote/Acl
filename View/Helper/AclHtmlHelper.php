<?php
App::uses('AclRouter', 'Acl.Lib');
App::uses('HtmlHelper', 'View/Helper');

class AclHtmlHelper extends HtmlHelper {

	public $helpers = array('Session');

	public function link($title, $url = null, $options = array(), $confirmMessage = false) {
		$permissions = $this->Session->read('Alaxos.Acl.permissions');
		if (!isset($permissions)) {
			return null;
		}

		$aco_path = AclRouter::aco_path($url);

		if (isset($permissions[$aco_path]) && $permissions[$aco_path] == 1) {
			return parent::link($title, $url, $options, $confirmMessage);
		} else {
			return null;
		}
	}

}