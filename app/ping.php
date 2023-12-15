<?php 
$webhook = file_get_contents("../cfg/id.txt");
// print_r($_POST);

$name=htmlspecialchars($_POST['name']);
$phone=htmlspecialchars($_POST['phone']);
$email=htmlspecialchars($_POST['email']);
$pingtype = htmlspecialchars($_POST['pingtype']);

$msg = " a ping was sent from shop4web regarding a $pingtype using the name: $name phone: $phone and e-mail: $email".PHP_EOL ;
$username = "shop4web-bot";
$msg = [ 'username'=>$username, 
        'content' => "a ping was sent from shop4web regarding a $pingtype \n 
                      using the name: $name \n 
                      and the e-mail: $email \n
                      and the phone: $phone \n",

];

$msg = json_decode(json_encode($msg),true);
echo discordmsg($msg, $webhook); // SENDS MESSAGE TO DISCORD 

echo "<span class=\"text-center text-xs text-green-600 \">Thank you for submitting the contact request</span>";

function discordmsg($msg, $webhook) {
    if($webhook != "")
    {
      $ch = curl_init($webhook);
      $msg = "payload_json=" . urlencode(json_encode($msg))."";
  
      if(isset($ch)) {
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $msg);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
      }
    }
}