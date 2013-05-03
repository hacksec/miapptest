<?php

      define('_CONSUMER_KEY','479949192075665');
      define('_CONSUMER_SECRET','34eb4c4240f2494510c59a1b30276561');

      require 'src/facebook.php';

      $facebook = new Facebook(array(

        'appId'  => _CONSUMER_KEY,
        'secret' => _CONSUMER_SECRET,
        'cookie' => false

      ));
?>