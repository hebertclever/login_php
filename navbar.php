<?php if(isset($_SESSION['username'])): ?>
    <div class="navbar">
        <div class="logo">LOGO</div>
        <div class="menu">
            <button id="myBtn">Menu</button>
        </div>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <a href="personal_info.php">My Profile</a>
            <button>Group Chat</button>
            <a href="logout.php">Logout</a>
        </div>
    </div>
<?php endif; ?>
