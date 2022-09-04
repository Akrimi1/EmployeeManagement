<?php

namespace App\Http\Livewire\GoogleApi;

use Livewire\Component;
use Google\Client;
use Google\Service\Gmail;
//define('STDIN',fopen("php://stdin","r"));

class ApiTest extends Component
{
    public $authUrl;
    public $authCode;

    /**
     * Returns an authorized API client.
     * @return Client the authorized client object
     */
    function getClient()
    {
        $client = new Client();
        $client->setApplicationName('Gmail API PHP Quickstart');
        $client->setScopes('https://www.googleapis.com/auth/gmail.addons.current.message.readonly');
        $client->setAuthConfig(base_path('resources/api/credentials.json'));
        $client->setAccessType('offline');
        $client->setPrompt('select_account consent');

        // Load previously authorized token from a file, if it exists.
        // The file token.json stores the user's access and refresh tokens, and is
        // created automatically when the authorization flow completes for the first
        // time.
        $tokenPath = base_path('resources/api/token.json');;
        if (file_exists($tokenPath)) {
            $accessToken = json_decode(file_get_contents($tokenPath), true);
            $client->setAccessToken($accessToken);
        }
        //dd($client);
        // If there is no previous token or it's expired.
        if ($client->isAccessTokenExpired()) {
            // Refresh the token if possible, else fetch a new one.
            if ($client->getRefreshToken()) {
                $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
            } else {
                // Request authorization from the user.
                $authUrl = $client->createAuthUrl();
                printf("Open the following link in your browser:\n%s\n", $authUrl);
                print 'Enter verification code: ';
                $authCode = trim(fgets(STDIN));

                // Exchange authorization code for an access token.
                $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
                $client->setAccessToken($accessToken);

                // Check to see if there was an error.
                if (array_key_exists('error', $accessToken)) {
                    throw new Exception(join(', ', $accessToken));
                }
            }
            // Save the token to a file.
            if (!file_exists(dirname($tokenPath))) {
                mkdir(dirname($tokenPath), 0700, true);
            }
            file_put_contents($tokenPath, json_encode($client->getAccessToken()));
        }
        return $client;
    }


    
    public function render()
    {
        // Get the API client and construct the service object.
        $client = $this->getClient();
        $service = new Gmail($client);
        // Run the method list which will return the list of messages 
        $list = $gmail->users_messages->listUsersMessages('me');

        // Get the actual list 
        $messageList = $list->getMessages();

        // Create array where we will store our messages
        $messages = array();

        // iterate over all the elements retrieved by the method list
        foreach($messageList as $msg){

        // GET individual message
        $message = $gmail->users_messages->get('me',$msg->id);
        
        // Push the element into our array of messages
        array_push($messages);
        }
        dd($message);
    

        try{

            // Print the labels in the user's account.
            $user = 'me';
            $results = $service->users_labels->listUsersLabels($user);
           
        }
        catch(Exception $e) {
            // TODO(developer) - handle error appropriately
            echo 'Message: ' .$e->getMessage();
        }

        return view('livewire.google-api.api-test',[
            'results' => $results,
            'authUrl' => $this->authUrl
        ]);
    }
}
?>