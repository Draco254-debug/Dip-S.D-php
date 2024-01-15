<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testing app</title>
    <style>
        nav {
            background-color: darkkhaki;
            padding: 14px 0;
            border-radius: 10px;
        }

        ul li {
            display: inline;
            padding: 14px 28px;
        }

        ul li a {
            text-decoration: none;
            color: white;
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
            font-size: large;
        }

        
    </style>
</head>

<body>
    <div>

        <!-- Navigation -->
        <nav>
            <ul>
                
                    <li><a href="dashboard.php?id=users">Manage Users</a></li>
                    <li><a href="dashboard.php?id=roles">Manage Roles and Permissions</a></li>
                    <li><a href="dashboard.php?id=products">Manage Products</a></li>
                    <li><a href="dashboard.php?id=logout">Logout</a></li>
                
            </ul>
        </nav>

        <!-- Main Section -->
        <main>
            <?php
            if (isset($_GET['id'])) {
                $selected_options =  $_GET['id'];
                switch ($selected_options) {
                    case 'users':
                        // 1. include 2. require
                        include_once 'users.php';
                        break;
                    case 'roles':
                        echo "Roles and Permissions";
                        break;
                    case 'products':
                        // 1. include 2. require
                        include_once 'products.php';
                        break;
                    case 'logout':
                        echo "Logout";
                        break;
                    default:
                        echo "404 - Page not found";
                        break;
                }
            }
            ?>
        </main>
    </div>
</body>

</html>