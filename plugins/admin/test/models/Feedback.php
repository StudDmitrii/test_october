<?php namespace Admin\Test\Models;

use Model;

/**
 * Feedback Model
 */
class Feedback extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'admin_test_feedback';
    /**
     * @var array Relations
     */
    public $belongsTo = ['contact'=>'Admin\Test\Models\Contact'];
}
