<?php
function getSiteSettings()
{

    return [
        'api_version' => 2,
        'config_dir' => 'novum.repository',
        'namespace' => 'ApiNovumRepository',
	    'protocol' => isset($_SERVER['IS_DEVEL']) ? 'http' : 'https',
        'live_domain' => 'api.api.repository.demo.novum.nu',
        'dev_domain' => 'api.api.repository.innovatieapp.nl',
        'test_domain' => 'api.api.repository.test.demo.novum.nu',
    ];
}


