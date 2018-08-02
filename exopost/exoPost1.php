<form action="/ma-page-de-traitement" method="post">
    <div>
        <label for="name">firstName :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="mail">lastName :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
        <input type="submit">
    </div>
</form>

<?php echo $_POST ['firstName'];