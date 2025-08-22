(function () {
	const form = document.getElementById('quickRegisterForm');
	const swipe = document.getElementById('swipeRegister');
	if (!form || !swipe) return;

	const track = swipe.querySelector('.swipe-track');
	const handle = swipe.querySelector('.swipe-handle');
	const fill = swipe.querySelector('.swipe-fill');
	const fallbackSubmit = document.getElementById('fallbackSubmit');

	let dragging = false;
	let startX = 0;
	let handleStartLeft = 0;

	function setProgress(px) {
		const trackRect = track.getBoundingClientRect();
		const handleRect = handle.getBoundingClientRect();
		const min = 4;
		const max = trackRect.width - handleRect.width - 4;
		const clamped = Math.max(min, Math.min(px, max));
		handle.style.left = clamped + 'px';
		const progress = ((clamped - min) / (max - min)) * 100;
		fill.style.width = Math.max(0, progress) + '%';
		if (progress > 96) {
			track.classList.add('swipe-complete');
		} else {
			track.classList.remove('swipe-complete');
		}
	}

	function submitIfComplete() {
		if (track.classList.contains('swipe-complete')) {
			// Basic Bootstrap-like validation
			if (!form.checkValidity()) {
				form.classList.add('was-validated');
				// reset control
				setProgress(4);
				return;
			}
			form.submit();
		}
	}

	function onPointerDown(e) {
		dragging = true;
		startX = e.clientX || (e.touches && e.touches[0].clientX) || 0;
		handleStartLeft = parseFloat(getComputedStyle(handle).left) || 4;
		handle.setPointerCapture && handle.setPointerCapture(e.pointerId || 0);
	}

	function onPointerMove(e) {
		if (!dragging) return;
		const currentX = e.clientX || (e.touches && e.touches[0].clientX) || 0;
		const delta = currentX - startX;
		setProgress(handleStartLeft + delta);
	}

	function onPointerUp() {
		if (!dragging) return;
		dragging = false;
		submitIfComplete();
		// Snap back if not complete
		if (!track.classList.contains('swipe-complete')) setProgress(4);
	}

	// Initialize
	setProgress(4);

	// Pointer events
	handle.addEventListener('pointerdown', onPointerDown);
	window.addEventListener('pointermove', onPointerMove);
	window.addEventListener('pointerup', onPointerUp);

	// Touch fallback (iOS older Safari)
	handle.addEventListener('touchstart', onPointerDown, { passive: true });
	window.addEventListener('touchmove', onPointerMove, { passive: true });
	window.addEventListener('touchend', onPointerUp, { passive: true });

	// Keyboard accessibility
	handle.setAttribute('tabindex', '0');
	handle.addEventListener('keydown', function (e) {
		if (e.key === 'Enter' || e.key === ' ') {
			setProgress(1000);
			submitIfComplete();
		}
	});

	// Show fallback button if no pointer events
	if (!window.PointerEvent && fallbackSubmit) {
		fallbackSubmit.classList.remove('d-none');
	}
})();

// Hero background slider (2-3 images, 5s each)
(function () {
	const hero = document.querySelector('.hero-bg');
	if (!hero) return;
	const slides = hero.querySelectorAll('.slide');
	if (!slides.length) return;
	let index = 0;
	setInterval(() => {
		const current = slides[index];
		index = (index + 1) % slides.length;
		const next = slides[index];
		current.classList.remove('active');
		next.classList.add('active');
	}, 5000);
})();


