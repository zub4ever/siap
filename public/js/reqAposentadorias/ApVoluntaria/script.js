import $ from "https://cdn.skypack.dev/jquery@3.6.0";
import * as _ from "https://cdn.skypack.dev/lodash@4.17.21";

let active, tip;
const cards = [
	'easter', 'easter-basket', 'easter-eggs', 'easter-bread',
	'easter-dinner', 'easter-greeting', 'easter-music'];

const sibling = (card, direction) => {
	const [first, last] = [0, cards.length - 1];
	const index = cards.indexOf(card) + direction;
	return cards[index < first ? last : (index > last ? first : index)];
};

const unanimate = (card) => {
	$(`img[data-card="${card}"]`).removeClass('animate__animated animate__zoomIn animate__zoomInRight animate__zoomInLeft');
};

const deactivate = () => {
	if (active) {
		unanimate(active);
		if (tip) tip.destroy();
		$(`img[data-card="${active}"]`).removeClass('active');
		active = null;
	}
};

const activate = (card, direction = 0) => {
	const animations = new Map([[0, 'zoomIn'], [1, 'zoomInRight'], [-1, 'zoomInLeft']]);

	deactivate();
	$(`img[data-card="${active = card}"]`)
		.addClass('active')
		.addClass(`animate__animated animate__${animations.get(direction)}`)
		.trigger('card-activated');
};

$('img').on('click', e => {
	const card = e.target.dataset.card;
	if (card == active) {
		deactivate();
		return;
	}
	
	if (tip) tip.destroy();
	e.stopPropagation();

	activate(card);
}).on('mouseover', _.once(e => {
	tip = tippy(e.target, {
		animation: 'scale',
		content: 'Click on the card to expand it for reading.'
	});
}));

$('img').on('card-activated', _.once(e => {
	tip = tippy(e.target, {
		animation: 'scale',
		placement: 'left',
		content: 'You can use the arrow keys to navigate through the cards. And the Esc key or click on the card to collapse it.'
	});
}));

$(document).on('click', deactivate);

$(document).on('keydown', e => {
	if (active) {
		if (e.which == 27) {
			deactivate();
			return;
		}
		
		const direction = e.which == 37 ? -1 : (e.which == 39 ? 1 : 0);
		if (direction) activate(sibling(active, direction), direction);
	}
});