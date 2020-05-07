<?PHP

class Prihlasovani extends Nette\Application\UI\Form {
    public function __construct($parent, $name) {
        parent::__construct();

        $this->setAction($parent->link('Prihlasovani:ZapomenuteHeslo'));
        
        $this->setMethod("formSubmitted");
        
        $this->addEmail('email', 'Email')
                ->setRequired('Email je nutný')
                ->addRule(\Nette\Forms\Form::EMAIL, 'email není platný');
        
        $this->addSubmit('send', 'Odeslano');
        
   
        
    }
}