<footer>
    <ul class="nav justify-content-center">
        <?php foreach ($links as $link): ?>
        <li class="nav-item">
            <a class="nav-link active" href="<?php echo $link['link']; ?>"><?php echo $link['name']; ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</footer>
</main>
</body>
</html>