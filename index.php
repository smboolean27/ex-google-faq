<?php 
	include __DIR__ . "/partials/vars.php"; 
    include __DIR__ . '/functions.php'; 
    include __DIR__ . '/database.php'; 
    include __DIR__ . '/partials/template/header.php'; 
?>

    <section>
        <div class="question-container">
        <?php foreach($faqs as $faq): ?>
            <div>
                <h3><?php echo $faq['domanda']; ?></h3>
                <div><?php echo $faq['risposta']; ?></div>
            </div>
        <?php endforeach; ?>
        </div>
    </section>

<?php include __DIR__ . '/partials/template/footer.php'; ?> 

</body>
</html>