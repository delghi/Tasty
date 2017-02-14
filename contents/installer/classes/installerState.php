<?php

/**
 * @access public
 */
class  InstallerState {
	
	protected $stateName, $arrayInput, $validData, $nextState, $request_config;

	/**
	 * @access public
	 */
	public function updateState(){}
	
	/**
	 * @access public
	 */
	public function updateOutput(){}
	
	/**
	 * 
	 */
	public function setInput($arrayInput){
		$this->arrayInput = $arrayInput;
	}
	
	public function getStateName(){
		return $this->stateName;
	}
}
?>