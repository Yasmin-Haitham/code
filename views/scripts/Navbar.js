var navbar =`
<nav>
    <div>
        <a href="/">LOGO</a>
    </div>
    <div>
        <a href="/views/homepage.html">Homepage</a>
        <a href="/views/login.html">Login</a>
        <a href="/views/signup.html"></a>
        
        <!-- (middleware) need to be authenticated 
        using jQuery selectors?
        $("h1#id").method -->
        
        <a href="/views/user_view.html">Update</a>
        <a href="/views/library.html">Library</a>
        <!-- (middleware) need to be authorized -->
        <a href="/views/members.html">Members</a>
    </div>
    <hr>
</nav>`;
document.body.insertAdjacentHTML("afterbegin",navbar)