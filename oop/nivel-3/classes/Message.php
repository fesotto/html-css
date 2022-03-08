<?php

abstract class Message
{

    public function message($message = "", $alert) 
    {
        echo  "<div class='alert alert-${alert} alert-dismissible fade show' role='alert'>";
         echo  $message;
         echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        echo   '</div>';
    }
}