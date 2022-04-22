var navbar =`
<nav>
    <div>
        <a href="/">LOGO</a>
    </div>
    <div>
        <a href="homepage.html">Homepage</a>
        <a href="login.html">Login</a>
        <a href="signup.html"></a>
        
        <!-- (middleware) need to be authenticated 
        using jQuery selectors?
        $("h1#id").method -->
        
        <a href="user_view.html">Update</a>
        <a href="library.html">Library</a>
        <!-- (middleware) need to be authorized -->
        <a href="members.html">Members</a>
    </div>
    <hr>
</nav>`;
document.body.insertAdjacentHTML("afterbegin",navbar)