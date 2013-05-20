<?php $this->load->view('includes/header'); ?>
<div id="page">
	<nav id="nav">
		<?php $this->load->view('includes/side'); ?>
	</nav>

	<section id="info">
		<?php $this->load->view('includes/info'); ?>
	</section>

	<section id="playlist">
		<?php $this->load->view('includes/controls'); ?>
		<?php $this->load->view('includes/loop'); ?>
	</section>

	<?php if (isset($pagination)) : ?>
	<section id="pagination">
		<button id="load-more" data-offset="0">Load More</button>
	</section>
	<?php endif; ?>

	<footer id="footer">
		<ul class="inline left">
			<li><a href="">About</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="">Terms</a></li>
			<li><a href="">Privacy</a></li>
		</ul>
		<ul class="inline right">
			<li>&copy Channeltrak 2013</li>
		</ul>
	</footer>
</div>
<?php $this->load->view('includes/footer'); ?>