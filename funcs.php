<?php

function phpthumb($parameter_str, $path_to_phpthumb = '/phpthumb') {
    return $path_to_phpthumb . '?' . $parameter_str
        . config('phpthumb.config.high_security_url_separator')
        . http_build_query([
            'hash' => md5($parameter_str . config('phpthumb.config.high_security_password')),
        ]);
}
