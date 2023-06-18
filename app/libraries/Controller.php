<?php

  class Controller {
    // Load model
    public function model($model){
      // Require model file
<<<<<<< HEAD
      require_once '../app/models/' . $model . '.php';
=======
      require_once '/app/models/' . $model . '.php';
>>>>>>> 5c478878593497950341253fefe4a78259999247

      // Instatiate model
      return new $model();
    }

    // Load view
    public function view($view, $data = []){
      // Check for view file
<<<<<<< HEAD
      if(file_exists('../app/views/' . $view . '.php')){
        require_once '../app/views/' . $view . '.php';
=======
      if(file_exists('/app/views/' . $view . '.php')){
        require_once '/app/views/' . $view . '.php';
>>>>>>> 5c478878593497950341253fefe4a78259999247
      } else {
        // View does not exist
        die('View does not exist');
      }
    }
<<<<<<< HEAD
  }
=======
  }
>>>>>>> 5c478878593497950341253fefe4a78259999247
