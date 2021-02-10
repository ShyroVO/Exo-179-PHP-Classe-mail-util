<?php
class Email {

    private string $to;
    private string $subject;
    private string $message;

    public function __construct(string $to, string $subject, string $message){

        $this->setTo($to);
        $this->setSubject($subject);
        $this->setMessage($message);

    }

    public function sendMail(){
        mail($this->getTo(),$this->getSubject(),$this->getMessage());
    }

    // From : get & set
    public function getFrom(): string
    {
        return $this->from;
    }

    public function setFrom(string $from): void
    {
        $this->from = $from;
    }

    // To : get & set
    public function getTo(): string
    {
        return $this->to;
    }

    public function setTo(string $to): void
    {
        $this->to = $to;
    }

    // Subject : get & set
    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    // Message : get & set
    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

}