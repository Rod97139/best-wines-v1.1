<?php

namespace Core\Partials;

// Démarrage de la session si elle ne l'est pas
class StartSession
{
   public static function start(): void
   {
      if (session_status() !== PHP_SESSION_ACTIVE) {
         session_start();
      }
   }
}
