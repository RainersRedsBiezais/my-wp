<?php
/**
 * Hero Slider Section
 * 
 * @package Wunder_Hello
 */
?>

<!-- Hero Slider: Tailwind CSS Info -->
<section class="hero-slider container mx-auto px-4 py-8">
	<div class="swiper">
		<div class="swiper-wrapper">
			<!-- Slide 1: Utility-first -->
			<div class="swiper-slide">
				<a href="https://tailwindcss.com/" target="_blank" rel="noopener" class="block relative h-64 md:h-80 rounded overflow-hidden">
					<div class="absolute inset-0 bg-gradient-to-r from-sky-600 to-blue-600"></div>
					<div class="absolute inset-0 p-6 md:p-8 flex flex-col justify-end text-white">
						<h2 class="text-2xl md:text-3xl font-bold">Utility‑first CSS</h2>
						<p class="opacity-90 mt-1">Build modern UIs with small, composable classes like <code class="bg-black/30 px-1 rounded">flex</code>, <code class="bg-black/30 px-1 rounded">grid</code>, <code class="bg-black/30 px-1 rounded">p-4</code>, and more.</p>
					</div>
				</a>
			</div>

			<!-- Slide 2: Responsive design -->
			<div class="swiper-slide">
				<a href="https://tailwindcss.com/" target="_blank" rel="noopener" class="block relative h-64 md:h-80 rounded overflow-hidden">
					<div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-fuchsia-600"></div>
					<div class="absolute inset-0 p-6 md:p-8 flex flex-col justify-end text-white">
						<h2 class="text-2xl md:text-3xl font-bold">Responsive by design</h2>
						<p class="opacity-90 mt-1">Prefix any utility with <code class="bg-black/30 px-1 rounded">sm:</code>, <code class="bg-black/30 px-1 rounded">md:</code>, <code class="bg-black/30 px-1 rounded">lg:</code> to target breakpoints.</p>
					</div>
				</a>
			</div>

			<!-- Slide 3: Small production size -->
			<div class="swiper-slide">
				<a href="https://tailwindcss.com/" target="_blank" rel="noopener" class="block relative h-64 md:h-80 rounded overflow-hidden">
					<div class="absolute inset-0 bg-gradient-to-r from-emerald-600 to-teal-600"></div>
					<div class="absolute inset-0 p-6 md:p-8 flex flex-col justify-end text-white">
						<h2 class="text-2xl md:text-3xl font-bold">Ship smaller CSS</h2>
						<p class="opacity-90 mt-1">Automatically removes unused CSS for tiny bundles — often under 10kB.</p>
					</div>
				</a>
			</div>
		</div>
		<div class="swiper-pagination"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
</section>
