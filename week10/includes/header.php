<header>
    <div class="wrapper">
        <h1>
            Title
        </h1>
        <nav>
            <ul>
                <li>
                    <a href="index.php">Homepage</a>
                </li>
                <?php if(!isset($_SESSION['user_id'])): ?>
                    <li>
                        <a href="sign_in.php">Sign in</a>
                    </li>
                <?php else: ?>
                    <li><a href="add_user.php">New user</a></li>
                    <li><a href="logout.php">Logout</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>