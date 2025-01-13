<!-- navigation.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace</title>
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Header -->
<header>
    <nav class="nav-extended">
        <div class="nav-background grey darken-4">
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo">SMOHOT</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li>
                        <form class="search-bar">
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                            <input id="search" type="search" placeholder="Search product" class="no-outline">
                        </form>
                    </li>
                    <li>
                        <a href="#" class="dropdown-trigger" data-target="marketplace-submenu">
                            Marketplace
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                        <ul id="marketplace-submenu" class="submenu dropdown-content marketplace-submenu">
                            <li><a href="index.php"><i class="material-icons left">store</i>Marketplace</a></li>
                            <li><a href="messages.php"><i class="material-icons left">message</i>Messages</a></li>
                            <li><a href="saved.php"><i class="material-icons left">bookmark</i>Saved</a></li>
                            <li><a href="following.php"><i class="material-icons left">group</i>Following</a></li>
                            <li><a href="calls_marketplace.php"><i class="material-icons left">call</i>Calls</a></li>
                            <li><a href="seller_profile.php"><i class="material-icons left">shopping_cart</i>Selling</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-trigger" data-target="chat-submenu">
                            Chat
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                        <ul id="chat-submenu" class="submenu dropdown-content">
                            <li><a href="chat.php"><i class="material-icons left">chat_bubble</i>Chats</a></li>
                            <li><a href="calls_chat.php"><i class="material-icons left">call</i>Calls</a></li>
                        </ul>
                    </li>
                    <li><a href="notifications.php"><i class="material-icons">notifications</i></a></li>
                    <li><a href="about_us.php">About us</a></li>
                    <li>
                        <a class="dropdown-trigger btn-floating waves-effect waves-light blue" href="#!" data-target="profile-dropdown">
                            <i class="material-icons">person</i>
                        </a>
                        <ul id="profile-dropdown" class="submenu dropdown-content">
                            <li><a href="profile.php"><i class="material-icons left">account_circle</i>Profile</a></li>
                            <li><a href="#settings-modal" class="modal-trigger"><i class="material-icons left">settings</i>Settings</a></li>
                            <li><a href="login.php"><i class="material-icons left">logout</i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <ul class="sidenav collapsible" id="mobile-nav">
        <li>
            <form class="search-bar">
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <input id="search" type="search" placeholder="Search product" class="no-outline">
            </form>
        </li>
        <li>
            <a href="#!" class="collapsible-header">
                <i class="material-icons left">store</i>Marketplace
                <i class="material-icons right">arrow_drop_down</i>
            </a>
            <div class="collapsible-body">
                <ul>
                    <li><a href="index.php"><i class="material-icons left">store</i>Marketplace</a></li>
                    <li><a href="messages.php"><i class="material-icons left">message</i>Messages</a></li>
                    <li><a href="saved.php"><i class="material-icons left">bookmark</i>Saved</a></li>
                    <li><a href="following.php"><i class="material-icons left">group</i>Following</a></li>
                    <li><a href="calls_marketplace.php"><i class="material-icons left">call</i>Calls</a></li>
                    <li><a href="seller_profile.php"><i class="material-icons left">shopping_cart</i>Selling</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#!" class="collapsible-header">
                <i class="material-icons left">chat_bubble</i>Chat
                <i class="material-icons right">arrow_drop_down</i>
            </a>
            <div class="collapsible-body">
                <ul>
                    <li><a href="chat.php"><i class="material-icons left">chat_bubble</i>Chats</a></li>
                    <li><a href="calls_chat.php"><i class="material-icons left">call</i>Calls</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="notifications.php" class="collapsible-header">
                <i class="material-icons left">notifications</i>Notifications
            </a>
        </li>
        <li>
            <a href="about_us.php" class="collapsible-header">
                <i class="material-icons left">info</i>About us
            </a>
        </li>
        <li>
            <a href="profile.php" class="collapsible-header">
                <i class="material-icons left">account_circle</i>Profile
            </a>
        </li>
        <li>
            <a href="#settings-modal" class="collapsible-header modal-trigger">
                <i class="material-icons left">settings</i>Settings
            </a>
        </li>
        <li>
            <a href="login.php" class="collapsible-header">
                <i class="material-icons left">logout</i>Logout
            </a>
        </li>
    </ul>
</header>

