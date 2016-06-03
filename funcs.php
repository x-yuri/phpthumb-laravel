<?php

function phpthumb($params, $path_to_phpthumb = '/phpthumb') {
    return $path_to_phpthumb . '?' . http_build_query(array_merge($params, [
        'hash' => md5(http_build_query($params) . config('phpthumb.config.high_security_password')),
    ]));
}
