# ci-hook
hook for codeigniter


How to use hook?

1. Open config.php on folder config, then set $config['enable_hooks'] = true
2. Open hooks.php on config folder then add script below:
$hook['post_controller_constructor'][] = array(
        'class'    => '',
        'function' => 'load_config',
        'filename' => 'Load_config.php',
        'filepath' => 'hooks',
);
then save.

3. then create file 'Load_config.php' on hook folder

for more information check : http://codeigniter.com/user_guide/general/hooks.html
