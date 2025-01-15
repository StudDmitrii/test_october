<?php namespace Admin\Test\Components;

use Cms\Classes\ComponentBase;
use Admin\Test\Models\Contact;
use Admin\Test\Components\Contact as Cntct;
use Admin\Test\Models\Feedback as Fb;
use Illuminate\Support\Facades\Mail;

class Feedback extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Feedback Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onSend(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $text = $_POST['text'];
        $contact_id = Cntct::getMail() ?? '0';

        $feedback = new Fb();
        $feedback->contact_id = (int)$contact_id;
        $feedback->name = $name;
        $feedback->email = $email;
        $feedback->text = $text;
        $feedback->save();

        $this->page['feedback_result'] = 'Данные отправлены';

        Mail::sendTo('stud0000240796@gmail.com', 'admin.test::mail.mail', [
            'name'=>$name,
            'email'=>$email,
            'text'=>$text,
        ]);
    }
}
