<?php require 'header.php'?>

<!-- Form -->
<body>
    
    <div class="login-page">
        <div class="form">
            <form id="login-form" class="login-form" method="POST">
                <input name="name" required placeholder="username"/>
                <input name="email" required placeholder="email address"/>
                <input name="link" required placeholder="link to the social network"/>
                <button>submit</button>
            </form>
        </div>
    </div>
</body>

<script>
const form = document.getElementById('login-form');
form.addEventListener('submit', formSend);

async function formSend(e) {
    e.preventDefault();

    let response = await fetch('/../www/handlerInputData.php', {
    method: 'POST',
    body: new FormData(form)
    });
    if (response.ok) { 
        alert('Ваши данные добавлены');
        let json = await response.json();
    } else {
        alert('Ошибка HTTP: ' + response.status);
        //alert("Ошибка HTTP: " + response.status);
    }   
};
</script>

<?php require 'footer.php'?>
