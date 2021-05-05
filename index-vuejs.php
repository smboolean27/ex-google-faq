<?php include __DIR__ . '/partials/template/header.php'; ?>
	<div id="app">

		<section>
			<div class="question-container">
				<div v-for="faq in faqs">
					<h2>{{ faq.domanda }}</h2>
					<div v-html="faq.risposta"></div>
				</div>
			</div>
		</section>

	</div>

<?php include __DIR__ . '/partials/template/footer.php'; ?> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="js/app.js"></script>

</body>
</html>