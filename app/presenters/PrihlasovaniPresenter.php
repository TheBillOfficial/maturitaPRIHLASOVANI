<?PHP

namespace App\Presenters;

/**
 * Description of SignNguyenPresenter
 *
 * @author Dancing Rain
 */
class PrihlasovaniPresenter extends \Nette\Application\UI\Presenter {

    public function createComponentPrihlasovani($name) {
        return new \Prihlasovani($this, $name);
    }

    public function actionZapomenuteHeslo($email) {
        $emails = ['andrejs@volny.cz'];
        foreach ($emails as $emails2) {
            $mail = new \Nette\Mail\Message();
            $mail->setFrom($email);
            $mail->addTo($emails2);
            $mail->setSubject('Nové heslo!');
            $mail->setBody('Vaše nové heslo je &nbsp;' . $password = rand(1133557799,9977553311));

            $mailer = new \Nette\Mail\SmtpMailer([ 'smtp' => true,'host' => 'smtp.volny.cz',
                'username' => 'andrejs',
                'password' => 'phABpy3mwY',
                'secure' => 'ssl']);
                $mailer->send($mail);
               } 
            $this->flashMessage('Zpráva odeslána');
            $this->getPresenter()->redirect("Prihlasovani:Success");
        
    }

    public function actionSuccess() {
        
    }

}