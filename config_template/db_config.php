<?php
  
    /*CARICO TUTTI I MODELS*/
    foreach (glob($settings['fisical_path'] . '/models/*') as $filename) {
        require $filename;
    }
  
    use Illuminate\Database\Capsule\Manager as Capsule;
    use Illuminate\Events\Dispatcher;
    use Illuminate\Container\Container;
    
    $capsule = new Capsule;
    $capsule->addConnection(array(
        'driver'    => 'mysql',
        'host'      => 'host',
        'database'  => 'dabname',
        'username'  => 'user',
        'password'  => 'password!',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => ''
    ));
    
    $capsule->setEventDispatcher(new Dispatcher(new Container));
    //Rendiamo la nostra capsule disponibile ovunque
    $capsule->setAsGlobal();
    //Avviamo Eloquent, il nostro ORM -> per saperne di più http://it.wikipedia.org/wiki/Object-relational_mapping
    $capsule->bootEloquent();