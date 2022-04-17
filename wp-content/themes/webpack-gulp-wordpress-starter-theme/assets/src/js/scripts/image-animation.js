/*eslint-disable*/
import $ from "jquery";
import ScrollMagic from 'scrollmagic';
const controller = new ScrollMagic.Controller();

function imageAnimations() {
	let $imageAnimation = $('[data-image-animation], [data-service-animation], [data-text-animation]');
	if ($imageAnimation.length > 0) {
		$imageAnimation.each((i, item) => {
			const scene = new ScrollMagic.Scene({
					triggerElement: item,
					offset: -500,
					reverse: true,
					triggerHook: 0.3,
				})
				.on('enter', () => {
					$(item).addClass('is-visible');
				})
				.addTo(controller);
			$(window).on('resize', () => {
				controller.updateScene(scene, true);
			});
		});
	}
}

document.addEventListener('DOMContentLoaded', () => {
	imageAnimations();
});
