<?php

namespace App\Mail;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class UserRegisterEmail extends Mailable
{
    use Queueable, SerializesModels;
    private $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        
        $this->user=$user;
        //\dd($this->user['_token']);
        
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        
       $this->subject("Bem-vindo a Yetoafrica ".$this->user['name']);
        return $this->view('admin.mail.registarEmail',[
            'user' => $this->user
            
        ]); 
    }

}
