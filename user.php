<?php

/*
	- username
	- Email 
	- Password
	- Accounts :
		- Add Account
		- Edit/Update Account
		- Remove Account
		- Display user Accounts
*/

	class User 
	{
		public $user;

		
		function __construct($userName)
		{

			$this->user =  $userName;
		}

		public function Display_userName()
		{

			echo "<h3 style='color:red'>Welcome :  ". $this->userName() ."</h3>";	
		}

		public function Display_Accounts()
		{

		}

		public function Display_Profile()
		{


		}



		private function userName()
		{
			// search through DB then give the result
			return "$this->user";
			
		}

		private function Accounts()
		{

		}

		private function Profile()
		{
			# code...
		}


	}



?>