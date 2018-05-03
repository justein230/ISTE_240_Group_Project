<div class="buttonWrapper <?php if (!isset($prev) && !isset($next)) echo 'hide'; ?>">
	<a class="button <?php if (!isset($prev)) echo 'hide'; ?>" id="previous" href="<?php if (isset($prev)) echo $prev.'.php'; ?>">Previous: <?php if (isset($prev)) echo getPageName($prev); ?></a>
	<a class="button <?php if (!isset($next)) echo 'hide'; ?>" id="next" href="<?php if (isset($next)) echo $next.'.php'; ?>">Next: <?php if (isset($next)) echo getPageName($next); ?></a>
</div>

</main>
	<footer>
		<p>
			Copyright &copy; <?php echo date("Y");?> Pop And Lock The Stack
		</p>
	</footer>
</body>
</html>
