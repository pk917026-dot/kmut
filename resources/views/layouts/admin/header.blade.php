<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
body {
    background:#f5f5f5;
    color:#000;
}

/* GREEN TOP BAR */
.admin-navbar {
    background:#0f7a3a;
    border-bottom:2px solid #0b5d2c;
    padding:4px 10px;
}

/* MENU TEXT SMALL & CLOSE */
.admin-navbar .nav-link {
    color:#fff !important;
    font-size:14px;
    padding:6px 10px;
    font-weight:500;
}

/* BRAND */
.admin-navbar .navbar-brand {
    font-size:15px;
}

/* DROPDOWN STYLE */
.dropdown-menu {
    background:#ffffff;
    border-radius:6px;
    padding:6px 0;
    box-shadow:0 4px 12px rgba(0,0,0,0.2);
    animation: fadeDown 0.2s ease;
}

@keyframes fadeDown {
    from { opacity:0; transform:translateY(-5px); }
    to { opacity:1; transform:translateY(0); }
}

/* DROPDOWN ITEMS */
.dropdown-item {
    font-size:14px;
    padding:8px 14px;
    color:#333;
    transition:0.3s;
}

.dropdown-item::before {
    content:"➤ ";
    color:#0f7a3a;
}

.dropdown-item:hover {
    background:#0f7a3a;
    color:#fff;
}

/* COMING SOON BOX */
.coming-box {
    background:#fff;
    padding:50px;
    border-radius:8px;
    text-align:center;
}
</style>
