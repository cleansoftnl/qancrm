<?php
/**
 * TODO: add a link here to the docs for config/config.php.
 */
return [
    'table-prefix' => 'core_',
    'date-format' => 'd-m-Y h:i:s',
    'pxcms-index' => '\Modules\Core\Http\Controllers\Frontend\PagesController@getHomepage',
    'pxcms-admincp' => '\Modules\Core\Http\Controllers\Frontend\PagesController@getAdminCP',
    'pxcms-systemcp' => '\Modules\Core\Http\Controllers\Frontend\PagesController@getSystemCP',
];
