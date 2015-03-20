<?php
require_once 'config.php';
require_once 'core.php';

$FindRetros = new FindRetros();

if($FindRetros->hasClientVoted()) {

    echo 'You have voted!';

}else{

    // echo 'You have yet to vote!';

    $FindRetros->redirectClientToVote();

}
?>