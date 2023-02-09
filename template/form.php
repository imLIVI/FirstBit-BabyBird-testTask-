<?php require 'header.php'?>

<!-- Form -->
<body>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="../www/handlerSending.php"  method="POST">
                <input name="name" required placeholder="username"/>
                <input name="email" required placeholder="email address"/>
                <input name="link" required placeholder="link to the social network"/>
                <button>submit</button>
            </form>
        </div>
    </div>
</body>

<?php require 'footer.php'?>
