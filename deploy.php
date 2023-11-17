<?php
/**
 * GIT DEPLOYMENT SCRIPT
 *
 * Used for automatically deploying websites via GitHub
 */

// Set the working directory where Git commands will be executed
$workingDirectory = '../../../../../var/www/html/tihio_pricing_b2b';

// array of commands
$commands = array(
    'cd ' . $workingDirectory,
    'echo $PWD',
    'whoami',
    'git pull origin --rebase',
    'git pull',
    'git status',
    'git submodule sync',
    'git submodule update',
    'git submodule status',
);

// exec commands
$output = '';
foreach ($commands as $command) {
    echo "Executing command: $command<br>";
    $tmp = shell_exec($command);
    $output .= "<span style=\"color: #6BE234;\">\$</span><span style=\"color: #729FCF;\">{$command}\n</span><br />";
    $output .= htmlentities(trim($tmp)) . "\n<br /><br />";
    echo "Command output: $tmp<br>";
}

// Display the output in an HTML page
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>GIT DEPLOYMENT SCRIPT</title>
</head>
<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
<div style="width:700px">
    <div style="float:left;width:350px;">
        <p style="color:white;">Git Deployment Script</p>
        <?php echo $output; ?>
    </div>
</div>
</body>
</html>
