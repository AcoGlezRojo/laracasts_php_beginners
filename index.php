<?php

require("helpers/functions.php");
require("database/db.php");
require("router.php");


?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const userMenuButton = document.getElementById('user-menu-button');
        const userMenu = userMenuButton && userMenuButton.parentElement.nextElementSibling;
        if (userMenuButton && userMenu) {
            userMenuButton.addEventListener('click', function(e) {
                e.preventDefault();
                const isHidden = userMenu.hasAttribute('hidden');
                if (isHidden) {
                    userMenu.removeAttribute('hidden');
                } else {
                    userMenu.setAttribute('hidden', '');
                }
            });
            // Opcional: cerrar el menú al hacer clic fuera
            document.addEventListener('click', function(e) {
                if (!userMenu.contains(e.target) && !userMenuButton.contains(e.target)) {
                    userMenu.setAttribute('hidden', '');
                }
            });
        }
    });
</script>