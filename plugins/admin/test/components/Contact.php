<?php namespace Admin\Test\Components;

use Cms\Classes\ComponentBase;
use Admin\Test\Models\City;
use Admin\Test\Models\Contact as ContactModel;

class Contact extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Contact Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun(){
        $domain = explode('.',$_SERVER['HTTP_HOST'])[0];

        $city = City::where('domain','=',$domain)->first();
        empty($city) ? $city = City::get()->first() : true;
        $contact = @ContactModel::where('city_id','=',$city->id)->first();

        $this->page['city']=$city->name ?? 'Пока нет адресса';
        $this->page['phone']=$contact->phone ?? 'Пока нет телефона';
        $this->page['address']=$contact->address ?? '';
        $this->page['mail']=$contact->mail ?? 'Пока нет почты';
    }

    public static function getMail(){
        $domain = explode('.',$_SERVER['HTTP_HOST'])[0];

        $city = City::where('domain','=',$domain)->first();
        empty($city) ? $city = City::get()->first() : true;
        $contact = @ContactModel::where('city_id','=',$city->id)->first();
        return $contact->id;
    }
}
