<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
  use Queueable, SerializesModels;

  private $name = '';
  private $surname = '';
  private $email = '';
  private $phone = '';
  private $address = '';
  private $contactMessage = '';

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($name, $surname, $email, $phone, $address, $contactMessage)
  {
    $this->name = $name;
    $this->surname = $surname;
    $this->email = $email;
    $this->phone = $phone;
    $this->address = $address;
    $this->contactMessage = $contactMessage;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this->from('mail@mail.com')->subject('Example Company Website Contact Message')->view('emails.contact-email')->with('name', $this->name)->with('surname', $this->surname)->with('email', $this->email)->with('phone', $this->phone)->with('address', $this->address)->with('contactMessage', $this->contactMessage);
  }
}
