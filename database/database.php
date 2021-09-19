<?php
   require '../vendor/autoload.php';
     
    class Database  
    {
        private static $instance = null;
        private static $connect = null;

        private static $dev = [
            'host'	=> 'localhost:27017',
            'db'		=>	'shooters',
            'user'	=>	'shooter_admin',
            'pass'	=>	'shooetrs1231qwa'
													
        ];

        function __construct()
        {
            self::$connect = self::$dev;
        }

        public function collection($collectionName){
            $db = self::$connect['db'];

            if ( ! empty( self::$instance ) )
            {
                return self::$instance->$db->$collectionName;
            }
        else
            {
                try
                    {
                        self::$instance = new MongoDB\Client('mongodb://' . self::$connect['user'] . ':' . self::$connect['pass'] . '@' . self::$connect['host'] );
                        return self::$instance->$db->$collectionName;
                    }
                catch ( Exception $e )
                    {
                        die ( 'Could Not Establish Connection!' );
                    }
            }
        }

        public function insertData($collectionName,$data){
                    return $this->collection($collectionName)->insertOne($data);
        }
        
    }
    // db.createUser(
    //     {
    //     user: "shooter_admin",
    //     pwd:  "shooetrs1231qwa",
    //     roles:[{role: "dbAdmin" , db:"shooters"}]})
    //  )
    
    
    // var_dump($res);
?>