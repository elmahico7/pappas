<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
class Swift_Events_TransportExceptionEvent extends Swift_Events_EventObject
{
 private $exception;
 public function __construct(Swift_Transport $transport, Swift_TransportException $ex)
 {
 parent::__construct($transport);
 $this->exception = $ex;
 }
 public function getException()
 {
 return $this->exception;
 }
}
