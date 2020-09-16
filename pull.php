<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.

if ($_POST['payload']) {
    shell_exec('cd && cd www/chaweip.sgedu.site/public_html/a2-staging/ && git reset --hard HEAD && git fetch  && git pull');
}

?>hi
