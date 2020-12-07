<?php

    namespace App\PaymentGateway;

    class PaymentFacade{
        protected static function getFacade(){
            return 'Payment';
        }
    }

?>