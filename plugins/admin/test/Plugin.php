<?php namespace Admin\Test;

use Backend;
use System\Classes\PluginBase;

/**
 * test Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'test',
            'description' => 'No description provided yet...',
            'author'      => 'Admin',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Admin\Test\Components\Contact' => 'contact',
            'Admin\Test\Components\Feedback' => 'feedback',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'admin.test.some_permission' => [
                'tab' => 'test',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'test' => [
                'label'       => 'Данные',
                'url'         => Backend::url('admin/test/contacts'),
                'icon'        => 'icon-leaf',
                'permissions' => ['admin.test.*'],
                'order'       => 500,
                'sideMenu' => [
                    'contacts' => [
                        'label'       => 'Контакты',
                        'url'         => Backend::url('admin/test/contacts'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['admin.test.*'],
                        'order'       => 500,
                    ],
                    'cities' => [
                        'label'       => 'Города',
                        'url'         => Backend::url('admin/test/cities'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['admin.test.*'],
                        'order'       => 500,
                    ],
                    'feedback' => [
                        'label' => 'Обратная связь',
                        'url' => Backend::url('admin/test/feedback'),
                        'icon' => 'icon-leaf',
                        'permissions' => ['admin.test.*'],
                        'order' => 500,
                    ]
                ]
            ],
        ];
    }
}
