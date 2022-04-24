var navbar =`
<link  href="../styles/navbar.css" rel="stylesheet">
<nav>
    <div>
        <a href="/">
            <img src="../tests/mylogo.png"></img>
        </a>
    </div>
<<<<<<< HEAD
    <div style="float:right" >
        <ul>
            <li> <a href="/views/homepage.html">Homepage</a> </li>
            <li> <a href="/views/login.html">Login</a> </li>
            <li> <a href="/views/signup.html">Signup</a> </li>

            <!-- (middleware) need to be authenticated 
            using jQuery selectors?
            $("h1#id").method -->

            <li> <a href="/views/user_view.html">Update</a> </li>
            <li> <a href="/views/library.html">Library</a> </li>
            <!-- (middleware) need to be authorized -->
            <li> <a href="/views/members.html">Members</a> </li>
        </ul>
    </div>
</nav>`;
document.body.insertAdjacentHTML("afterbegin",navbar)