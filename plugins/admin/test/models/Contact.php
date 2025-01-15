<?php namespace Admin\Test\Models;

use Model;

/**
 * Contact Model
 */
class Contact extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'admin_test_contacts';

    public $belongsTo = ['city'=>'Admin\Test\Models\City'];
}
