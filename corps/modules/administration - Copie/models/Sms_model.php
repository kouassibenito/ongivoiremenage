<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


 require_once ("assets/infobip/vendor/autoload.php");

 use infobip\api\client\SendSingleTextualSms;
 use infobip\api\client\SendMultipleTextualSmsAdvanced;
 use infobip\api\configuration\BasicAuthConfiguration;
 use infobip\api\model\Destination;
 use infobip\api\model\sms\mt\send\Message;
 use infobip\api\model\sms\mt\send\textual\SMSAdvancedTextualRequest;
 use infobip\api\model\sms\mt\send\textual\SMSTextualRequest;



class Sms_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    function envoie_unitaire($to,$message){


            $username="maxshopci";
            $password="Maxshop123#@!";
            $from="Maxshop CI";
            //$to="22507592827";

            
            // Initializing SendSingleTextualSms client with appropriate configuration
            $client = new SendSingleTextualSms(new BasicAuthConfiguration($username, $password));

            // Creating request body
            $requestBody = new SMSTextualRequest();
            $requestBody->setFrom($from);
            $requestBody->setTo([$to]);
            $requestBody->setText($message);

            // Executing request
            try {
                $response = $client->execute($requestBody);
                $sentMessageInfo = $response->getMessages()[0];
                echo "Message ID: " . $sentMessageInfo->getMessageId() . "\n";
                echo "Receiver: " . $sentMessageInfo->getTo() . "\n";
                echo "Message status: " . $sentMessageInfo->getStatus()->getName();
            } catch (Exception $exception) {
                echo "HTTP status code: " . $exception->getCode() . "\n";
                echo "Error message: " . $exception->getMessage();
            }

                    


    }

    function envoie_multiple($phoneNumbers,$message_to_send){


            $username="maxshopci";
            $password="Maxshop123#@!";
            $from="Maxshop CI";
            $to="22507592827";

            
           // Initializing SendMultipleTextualSmsAdvanced client with appropriate configuration
            $client = new SendMultipleTextualSmsAdvanced(new BasicAuthConfiguration($username, $password));

            // Array of phone numbers:
            

            // A destination object is created for each phone number:
            $destinations = array();
            foreach ($phoneNumbers as $phoneNumber) {
                $destination = new Destination();
                $destination->setTo($phoneNumber);

                $destinations[] = $destination;
            }

            // Message that uses $destinations array
            $message = new Message();
            $message->setFrom($from);
            $message->setDestinations($destinations);
            $message->setText($message_to_send);

            $requestBody = new SMSAdvancedTextualRequest();
            $requestBody->setMessages([$message]);

            // Executing response
            $response = $client->execute($requestBody);

            foreach ($response->getMessages() as $index => $sentMessageInfo) {
                echo "Message Info: #" . $index . "\n";
                echo "Message ID: " . $sentMessageInfo->getMessageId() . "\n";
                echo "Receiver: " . $sentMessageInfo->getTo() . "\n";
                echo "Message status: " . $sentMessageInfo->getStatus()->getName() . "\n\n";
            }

                    


    }
    
    

			  
  
}