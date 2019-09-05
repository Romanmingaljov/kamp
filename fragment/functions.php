<span class="noprint">
<?php
$config = [
    'name' => 'Управление имущественных и земельных отношений',
];

function siteName()
{
    global $config;
    echo ucwords(str_replace('<br>', ' ', $config['name']));
}

function pageTitle()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'home';
    echo ucwords(str_replace('-', ' ', $page));
}

function pageContent()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $path = getcwd().'/content/'.$page.'.php';
    if (file_exists($path)) {
        include $path;
    } else {
        include 'content/404.php';
    }
}

function user_exit()
{    
    unset($_SESSION['name']);
    unset($_SESSION['id_user']);
    session_destroy();

    header('Refresh: 0; url=index.php?page=author'); 
}   
?>
</span>