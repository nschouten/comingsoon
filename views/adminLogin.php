<div class="login primary">
    <div class="hero"><h2>Admin</h2></div>
    <form method="post" action="index.php" id="liform">
        <div class="subhandle">
            <h2>Login</h2>
            <input type="hidden" name="controller" value="public">
            <input type="hidden" name="action" value="processLogin">

            <input type="text" name="strUsername" placeholder="Username"/><br/>
            <input type="password" name="strPassword" placeholder="Password"/><br/>

            <input type="submit" id="liBtn" value="Sign In">
        </div>
    </form>
</div>
