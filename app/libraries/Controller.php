<?php
	/*
	 * Base controller
	 * Loads the modules and views
	 */

	class Controller {

		//Load module
		public function model($model) {
			// require model file
			require_once '../app/models/' . $model . '.php';

			//Instantiate model
			return new $model();
		}

		// Load view
		public function view($view, $data = []) {
			// Check for the view file
			if (file_exists('../app/views/' . $view . '.php')) {
				require_once '../app/views/' . $view . '.php';
			} else {
				// view does not exist
				die('View does not exist');
			}
		}
	}

