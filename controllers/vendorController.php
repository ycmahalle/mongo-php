<?php

// use database\database;
 require "../database/database.php";

 

 class addVendor extends Database{
     public function createVendor($city,$location,$vendorName,$contact,$password){
         $dump=json_encode([
                "personal_details"=>[
                     "vendorname"=>$vendorName ,
                     "contact"=>$contact,
                      
                ],
                "password"=>md5($password),
                "address_details"=>[
                    'city'=>$city,
                    'location'=>$location,
                ]
         ]);
        $this->insertData("vendor_details" , $dump);

        echo "successfully added";      
     }
 }
  
 if(isset($_REQUEST['page'])){
    
     $reqType = preg_replace( '/[^a-zA-Z]/', '', $_REQUEST['page'] );
     
}else{
    $reqType="";
}

if($reqType ==="createVendor"){
    $vendor = new  addVendor();

    $vendor ->createVendor($_REQUEST['city'],$_REQUEST['location'],$_REQUEST['vendorName'],$_REQUEST['contact'],$_REQUEST['password']);


}
 
?>