<?php

namespace App\Http\Controllers\Frontend\Shop;

use App\Http\Controllers\Controller;

/**
 * Class ShopController.
 */
class ShopController extends Controller
{
   
    

    public function itemmall(){

        if (!empty($this->request->data)) {
            $buy = $this->request->data['Shop']['id'];
            $type = $this->request->data['Shop']['type']; //1-Items  2-...
            $date = date('Y-m-d H:i:s'); // current date

            $this->loadModel('User');
            $this->User->id = $this->Auth->user('id');
            $userinfo = $this->User->read();
            $userid = $userinfo['User']['id'];
            $user = $this->User->find('first', array(
                
                'conditions' => array(
                    'id' => $userid
                )
    
    
            )); 
            $usersn = $user['User']['usersn'];

            $this->loadModel('Auditionlogin');
            $this->Auditionlogin->setSource('member');
            $user = $this->Auditionlogin->find('first', array(
    
                'conditions' => array(
                    'id' => $usersn
                )
    
    
            )); 

            $usernick = $user['Auditionlogin']['usernick'];
            $sex = $user['Auditionlogin']['sex'];

        //item price, id and text
            
        
        if($type == 1){
                switch ($buy){
                    case "1":
                    $money = 1000;         
                    $itemID = 4574;
                    $PowerName= __("Event Room Pass");
                    
                    break;
                    case "2":              
                    $money = 1000;  
                    $itemID =5329;
                    $PowerName= __("Hide Level Item");
                    break;
                    case "3":
                    $money = 1000;               
                    $itemID = 10310; 
                    $PowerName= "Peach Emoticon";
                    break;
                    case "4": 
                    $money = 1000;              
                    $itemID = 9677; 
                    $PowerName= "Platform Rename";
                    break;
                    case "5": 
                    $money = 1000;              
                    $itemID = 5326; 
                    $PowerName= __("Nick Colour Change");
                    break;
                    case "6": 
                    $money = 0;
                    $itemID = 10878;
                    $PowerName= "VIP Channel Card";
                    break;
                    case "7": 
                    $money = 1000;
                    $itemID = 21111;
                    $PowerName= "License Ticket";
                    break;
                    case "8": 
                    $money = 1000;
                    $itemID = 16098;
                    $PowerName= "X2 Couple Point Item";
                    break;
                    case "9": 
                    $money = 1000;
                    $itemID = 27797;
                    $PowerName= __("Self Title");
                    break;
                    case "10": 
                    $money = 1000;
                    $itemID = 4909;
                    $PowerName= __("Premium Messenger Plus");
                    break;
                    case "11": 
                    $money = 1000;
                    $itemID = 12795;
                    $PowerName= __("Talking Pet Item");
                    break;
                    case "12": 
                    $money = 1000;
                    $itemID = 26515;
                    $PowerName= "Sheep Emoticon";
                    break;
                    case "13": 
                    $money = 1000;
                    $itemID = 27321;
                    $PowerName= "Panda Emoticon";
                    break;
                    case "14": 
                    $money = 1000;
                    $itemID = 21225;
                    $PowerName= "Bearmelli Emoticon";
                    break;
                    case "15":
                    $money = 1000;
                    $itemID = 23754;
                    $PowerName= "Girl Emoticon";
                    break;
                    case "16":
                    $money = 1000;
                    $itemID = 12324;
                    $PowerName= "It`s Me";
                    break;
                    case "17":
                    $money = 1000;
                    $itemID = 9130;
                    $PowerName= "Metronome";
                    break;
    
                    case "17":
                    $money = 1000;
                    $itemID = 9130;
                    $PowerName= "Metronome";

                    case "18":
                    $money = 1000;
                    $itemID = 9130;
                    $PowerName= "Metronome";
                    
                    break;
    
                    default: 
                    $this->Session->setFlash(__("Illegal submission of parameters"), 'error');
                    break;
                }

                

                $this->loadModel('Itemdb');
                $this->Itemdb->setSource('avatar_inventory_items');
                $checkitem = $this->Itemdb->find('first', array(
        
                    'conditions' => array(
                        'UserSN' => $usersn,
                        'ItemID' => $itemID
                    )
        
        
                )); 
    
    
                if(!empty($checkitem)){//item already exist
    
                    $this->Session->setFlash(__("the item already exist in your inventory!!! $PowerName"), 'error');
                    $this->redirect($this->referer());
    
                }

                $this->loadModel('Itemdb'); // load itemdb database

                $this->Itemdb->setSource('usercash'); //set table

                $cash = $this->Itemdb->find('first', array(
        
                    'conditions' => array(
                        'UserSN' => $usersn
                    )
        
        
                )); 

                $usercash = $cash['Itemdb']['Cash'];

                if($usercash < $money){ //check money cash

                    $this->Session->setFlash(__('you do not have enough Cash'), 'notif');
                    $this->redirect($this->referer());
    
                }

                $this->Itemdb->setSource('present_list');
    
                $itemdb = $this->Itemdb->find('first', array(
                    
                    'conditions' => array(
                        'RecvSN' => $usersn,
                        'ItemID' => $itemID,
                        'RecvDate' => '0000-00-00 00:00:00'
                    )
        
                    
                )); 


                    


                if($itemdb){
                        $this->Session->setFlash(__("You already have this item in your present box! $PowerName"), 'error');
                        $this->redirect($this->referer());

                }

                $this->Itemdb->setSource('present_list');
    
    
                                
                $this->Itemdb->create(array(
                    'OrderID' => '1',
                    'SendSN' => '0',
                    'SendNick' => $usernick,
                    'RecvSN' => $usersn,
                    'RecvNick' => $usernick,
                    'ItemID' => $itemID,
                    'Period' => '30',
                    'UseCount' => '1',
                    'Msg' => 'Thank you for buying from our website audition nexus &vvv&',
                    'SendDate' => $date,
                    'RecvDate' => '0000-00-00 00:00:00'

                ));
                $this->Itemdb->save();

                

                

                $newusercash = $usercash - $money;
                
                
                $this->Itemdb->setSource('usercash');

                $this->Itemdb->updateAll(array('Cash' =>$newusercash), array('UserSN' => $usersn),true);
 


                $this->Session->setFlash(__("Thank you for purchasing! $PowerName"), 'notif');
    

        }
        

            if($type == 2){

                switch ($buy){
                    case "1":
                    $money = 10000;	   
                    $itemID= 1418;
                    $PowerName= __("Pen colour change");
                    break; 
                    case "2": 
                    $money = 3000;
                    $itemID= 1809;
                    $PowerName= __("Love Potion");
                    break;
                    case "3":
                    $money = 5000;	   
                    $itemID= 1764;
                    $PowerName= __("Messenger");
                    break;
                    case "4": 
                    $money = 10000;
                    $itemID= 2396;
                    $PowerName= "Æ¤ï¿½ï¿½È¾É«ï¿½ï¿½";
                    break;
                    case "5": 
                    $money = 1000;
                    $itemID= 2001;
                    $PowerName= __("Lyric Note");
                    break;
                    case "6": 
                    $money = 10000;
                    $itemID= 1999;
                    $PowerName= "ï¿½ï¿½ï¿½é·­ï¿½ï¿½ï¿½ï¿½";
                    break;
                    case "7": 
                    $money = 30000;
                    $itemID= 2000;
                    $PowerName= "Gï¿½ï¿½ Ë«ï¿½ï¿½ï¿½ï¿½";
                    break;  
                    
                    case "8": 
                    $money = 30000;
                    $itemID= 4406;
                    $PowerName= "ï¿½ï¿½ï¿½ï¿½ä»»ï¿½ï¿½";
                    break;  
                    case "9": 
                    $money = 5000;
                    $itemID= 2721;
                    $PowerName= __("Wedding Ticket");
                    if ($sex=='1'){
                        $this->Session->setFlash(__("You need to be boy for buying $PowerName"), 'error');
                    };	
                    break;  
                    case "10": 
                    $money = 5000;
                    $itemID= 4696;
                    $PowerName= __("Love Party Card");
                    if ($sex=='1'){
                        $this->Session->setFlash(__("You need to be boy for buying $PowerName"), 'error');
                    };	
                    break; 
                    case "11": 
                    $money = 5000;
                    $itemID= 13261;
                    $PowerName= __("Family tree");
                    break; 

                    default: 
                    $this->Session->setFlash(__("Illegal submission of parameters"), 'error');
                    break; 
                    };


                    $this->loadModel('Itemdb'); // load itemdb database

                    $this->Itemdb->setSource('usercash'); //set table
    
                    $cash = $this->Itemdb->find('first', array(
            
                        'conditions' => array(
                            'UserSN' => $usersn
                        )
            
            
                    )); 
    
                    $usercash = $cash['Itemdb']['Cash'];
    
                    if($usercash < $money){ //check money cash
    
                        $this->Session->setFlash('you do not have enough Cash', 'notif');
                        $this->redirect($this->referer());
        
                    }else{
                    
                        $this->Itemdb->setSource('avatar_inventory_items');
    
                        $itemdb = $this->Itemdb->find('first', array(
                            
                            'conditions' => array(
                                'UserSN' => $usersn,
                                'ItemID' => $itemID
                            )
                
                            
                        )); 
    
                        if($itemdb){
                            $this->Session->setFlash(__("You already have this item! $PowerName"), 'error');
                        }else{
    
                            $this->Itemdb->setSource('present_list');
    
                        $itemdb = $this->Itemdb->find('first', array(
                            
                            'conditions' => array(
                                'RecvSN' => $usersn,
                                'ItemID' => $itemID,
                                'RecvDate' => '0000-00-00 00:00:00'
                            )
                
                            
                        )); 
    
    
                            
    
    
                            if($itemdb){
                                $this->Session->setFlash(__("You already have this item in your present box! $PowerName"), 'error');
    
                        }else{ //add item to present list
    
                            if($buy == 6 || $buy == 7){
    
                                $this->Itemdb->setSource('present_list');
    
    
                                
                                $this->Itemdb->create(array(
                                    'OrderID' => '1',
                                    'SendSN' => '0',
                                    'SendNick' => $usernick,
                                    'RecvSN' => $usersn,
                                    'RecvNick' => $usernick,
                                    'ItemID' => $itemID,
                                    'Period' => '30',
                                    'UseCount' => '60',
                                    'Msg' => 'Thank you for buying from our website audition nexus &vvv&',
                                    'SendDate' => $date,
                                    'RecvDate' => '0000-00-00 00:00:00'
    
                                ));
                                $this->Itemdb->save();
    
                                
    
                                
    
                                $newusercash = $usercash - $money;
                                
                                
                                $this->Itemdb->setSource('usercash');
    
                                $this->Itemdb->updateAll(array('Cash' =>$newusercash), array('UserSN' => $usersn),true);
                                $this->Session->setFlash(__("Thank you for purchasing! $PowerName"), 'notif');
    
                            }elseif($buy == 9 || $buy == 10){
    
                                $this->Itemdb->setSource('present_list');
    
    
                                
                                $this->Itemdb->create(array(
                                    'OrderID' => '1',
                                    'SendSN' => '0',
                                    'SendNick' => $usernick,
                                    'RecvSN' => $usersn,
                                    'RecvNick' => $usernick,
                                    'ItemID' => $itemID,
                                    'Period' => '365',
                                    'UseCount' => '3',
                                    'Msg' => 'Thank you for buying from our website audition nexus &vvv&',
                                    'SendDate' => $date,
                                    'RecvDate' => '0000-00-00 00:00:00'
    
                                ));
                                $this->Itemdb->save();
    
                                
    
                                
    
                                $newusercash = $usercash - $money;
                                
                                
                                $this->Itemdb->setSource('usercash');
    
                                $this->Itemdb->updateAll(array('Cash' =>$newusercash), array('UserSN' => $usersn),true);
                                $this->Session->setFlash(__("Thank you for purchasing! $PowerName"), 'notif');
    
                            }
                            
                            
                            
                            else{
    
                                $this->Itemdb->setSource('present_list');
    
    
                                
                                $this->Itemdb->create(array(
                                    'OrderID' => '1',
                                    'SendSN' => '0',
                                    'SendNick' => $usernick,
                                    'RecvSN' => $usersn,
                                    'RecvNick' => $usernick,
                                    'ItemID' => $itemID,
                                    'Period' => '30',
                                    'UseCount' => '1',
                                    'Msg' => 'Thank you for buying from our website audition nexus &vvv&',
                                    'SendDate' => $date,
                                    'RecvDate' => '0000-00-00 00:00:00'
    
                                ));
                                $this->Itemdb->save();
    
                                
    
                                
    
                                $newusercash = $usercash - $money;
                                
                                
                                $this->Itemdb->setSource('usercash');
    
                                $this->Itemdb->updateAll(array('Cash' =>$newusercash), array('UserSN' => $usersn),true);
                                $this->Session->setFlash(__("Thank you for purchasing! $PowerName"), 'notif'); 
    
                            }
    
    
                           
                        }
    
    
    
                    }
                }


            }


        }

    }

}