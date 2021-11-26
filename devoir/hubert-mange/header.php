<div>
    <ul>
        <?php if (isset($_SESSION['user'])): ?>
            <li><a href="deleteData.php">Suppresion des données</a></li>
            <li><a href="logout.php">Déconnexion</a></li>
            <li><a href="orders.php">Commandes</a></li>
        <?php else: ?>
            <li><a href="login.php">Se connecter</a></li>
        <?php endif; ?>
        <li><a href="index.php">Passer une commande</a></li>
    </ul>
</div>