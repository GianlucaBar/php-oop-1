<?php 

class User {

    public $name;

    public $lastname;

    public $age;

    public $email;

    public $password;

    public $country_of_origin;

    // alcuni blog hanno un sistema di reputazione basata, ad esempio, sui like ricevuti ai commenti
    public $reputation;

    // contruct per popolare valori essenziali 
    public function __construct($name, $lastname, $email, $password, $reputation = 0){
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;

    }

    // per astrazione assegno a reputation un numero random
    public function getReputation(){
        $this->reputation = rand(0, 100);
    }
}
// istanza utente 
//reputazione inizializzata a 0
$user1 = new User('Gianluca', 'Ciccio', 'cicciog@gmail.com', 'cicco123');
$user1->age = 23;
$user1->country_of_origin = 'italy'; 
$user1->getReputation();

// istanza utente
$user2 = new User('Antonio', 'Antonini', 'antoanto@gmail.com', '12345');
$user2->age = 34;
$user2->country_of_origin = 'germany'; 
$user2->getReputation();

// istanza utente
$user3 = new User('Bilbo', 'Cartone', 'cartonebi@gmail.com', 'cartone678');
$user3->age = 65;
$user3->country_of_origin = 'italy'; 
$user3->getReputation();

// istanza utente
$user4 = new User('Camillo', 'Ciano', 'cianone@gmail.com', 'uvapassa001');
$user4->age = 49;
$user4->country_of_origin = 'france'; 
$user4->getReputation();

$users = array($user1, $user2, $user3, $user4);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Users</title>
</head>
<body>
    <h1>Lista utenti</h1>

    <ul>
        <?php foreach($users as $user) {?>
                <li>
                    Nome: <?php echo $user->name; ?> <br>
                    Cognome: <?php echo $user->lastname; ?> <br>
                    Eta': <?php echo $user->age; ?> <br>
                    Email: <?php echo $user->email; ?> <br>
                    Nazionalita': <?php echo $user->country_of_origin; ?> <br>
                    Reputazione: <?php echo $user->reputation; ?> <br>
                </li>
                <br>
        <?php } ?>            
    </ul>
</body>
</html>