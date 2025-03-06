import './bootstrap';
import { Alpine, Livewire } from '~vendor/livewire/livewire/dist/livewire.esm';
import ajax from '~nodeModules/@imacrayon/alpine-ajax';
import sort from '~nodeModules/@alpinejs/sort';
import { fetchEventSource } from '@microsoft/fetch-event-source';
import modal from './components/modal';
import clipboard from './components/clipboard';
import assignViewCredits from './components/assignViewCredits';
import openaiRealtime from './components/realtime-frontend/openaiRealtime';
import advancedImageEditor from './components/advancedImageEditor';

window.fetchEventSource = fetchEventSource;
const darkMode = localStorage.getItem('lqdDarkMode');
const docsViewMode = localStorage.getItem('docsViewMode');
const navbarShrink = localStorage.getItem('lqdNavbarShrinked');
const currentTheme = document.querySelector('body').getAttribute('data-theme');
const lqdFocusModeEnabled = localStorage.getItem(currentTheme +':lqdFocusModeEnabled');


window.collectCreditsToFormData = function (formData) {
	const inputs = document.querySelectorAll('input[name^="entities"]');
	inputs.forEach(input => {
		const name = input.name; // Get the input name
		const value = input.type === 'checkbox' || input.type === 'radio' ? input.checked : input.value; // Get value or checked status
		formData.append(name, value); // Append to the formData object
	});
};

window.Alpine = Alpine;

Alpine.plugin(ajax);
Alpine.plugin(sort);

document.addEventListener('alpine:init', () => {
	const persist = Alpine.$persist;

	Alpine.data('modal', data => modal(data));
	Alpine.data('clipboard', data => clipboard(data));
	Alpine.data('assignViewCredits', data => assignViewCredits(data));

	// Navbar shrink
	Alpine.store('navbarShrink', {
		active: persist(!!navbarShrink).as('lqdNavbarShrinked'),
		toggle(state) {
			this.active = state ? (state === 'shrink' ? true : false) : !this.active;
			document.body.classList.toggle('navbar-shrinked', this.active);
		}
	});

	// Navbar item
	Alpine.data('navbarItem', () => ({
		dropdownOpen: false,
		toggleDropdownOpen(state) {
			this.dropdownOpen = state ? (state === 'collapse' ? true : false) : !this.dropdownOpen;
		},
		item: {
			['x-ref']: 'item',
			['@mouseenter']() {
				if (!Alpine.store('navbarShrink').active) return;
				const rect = this.$el.getBoundingClientRect();
				const dropdown = this.$refs.item.querySelector('.lqd-navbar-dropdown');
				[ 'y', 'height', 'bottom' ].forEach(prop => this.$refs.item.style.setProperty(`--item-${prop}`, `${rect[prop]}px`));

				if (dropdown) {
					const dropdownRect = dropdown.getBoundingClientRect();
					[ 'height' ].forEach(prop => this.$refs.item.style.setProperty(`--dropdown-${prop}`, `${dropdownRect[prop]}px`));
				}
			},
		}
	}));

	// Mobile nav
	Alpine.store('mobileNav', {
		navCollapse: true,
		toggleNav(state) {
			this.navCollapse = state ? (state === 'collapse' ? true : false) : !this.navCollapse;
		},
		templatesCollapse: true,
		toggleTemplates(state) {
			this.templatesCollapse = state ? (state === 'collapse' ? true : false) : !this.templatesCollapse;
		},
		searchCollapse: true,
		toggleSearch(state) {
			this.searchCollapse = state ? (state === 'collapse' ? true : false) : !this.searchCollapse;
		},
	});

	// light/dark mode
	Alpine.store('darkMode', {
		on: persist(!!darkMode).as('lqdDarkMode'),
		toggle() {
			this.on = !this.on;
			document.body.classList.toggle('theme-dark', this.on);
			document.body.classList.toggle('theme-light', !this.on);
		}
	});

	// App loading indicator
	Alpine.store('appLoadingIndicator', {
		showing: false,
		show() {
			this.showing = true;
		},
		hide() {
			this.showing = false;
		},
		toggle() {
			this.showing = !this.showing;
		},
	});

	// Documents view mode
	Alpine.store('docsViewMode', {
		docsViewMode: persist(docsViewMode || 'list').as('docsViewMode'),
		change(mode) {
			this.docsViewMode = mode;
		}
	});

	// Generators filter
	Alpine.store('generatorsFilter', {
		init() {
			const urlParams = new URLSearchParams(window.location.search);
			this.filter = urlParams.get('filter') || 'all';
		},
		filter: 'all',
		changeFilter(filter) {
			if (this.filter === filter) return;
			if (!document.startViewTransition) {
				return this.filter = filter;
			}
			document.startViewTransition(() => this.filter = filter);
		}
	});

	// Documents filter
	Alpine.store('documentsFilter', {
		init() {
			const urlParams = new URLSearchParams(window.location.search);
			this.sort = urlParams.get('sort') || 'created_at';
			this.sortAscDesc = urlParams.get('sortAscDesc') || 'desc';
			this.filter = urlParams.get('filter') || 'all';
			this.page = urlParams.get('page') || '1';
		},
		sort: 'created_at',
		sortAscDesc: 'desc',
		filter: 'all',
		page: '1',
		changeSort(sort) {
			if (sort === this.sort) {
				this.sortAscDesc = this.sortAscDesc === 'desc' ? 'asc' : 'desc';
			} else {
				this.sortAscDesc = 'desc';
			}
			this.sort = sort;
		},
		changeAscDesc(ascDesc) {
			if (this.ascDesc === ascDesc) return;
			this.ascDesc = ascDesc;
		},
		changeFilter(filter) {
			if (this.filter === filter) return;
			this.filter = filter;
		},
		changePage(page) {
			if (page === '>' || page === '<') {
				page = page === '>' ? Number(this.page) + 1 : Number(this.page) - 1;
			}

			if (this.page === page) return;

			this.page = page;
		},
	});

	// Chats filter
	Alpine.store('chatsFilter', {
		init() {
			const urlParams = new URLSearchParams(window.location.search);
			this.filter = urlParams.get('filter') || 'all';
			this.setSearchStr(urlParams.get('search') || '');
		},
		searchStr: '',
		setSearchStr(str) {
			this.searchStr = str.trim().toLowerCase();
		},
		filter: 'all',
		changeFilter(filter) {
			if (this.filter === filter) return;
			if (!document.startViewTransition) {
				return this.filter = filter;
			}
			document.startViewTransition(() => this.filter = filter);
		}
	});

	// Generator V2
	Alpine.data('generatorV2', () => ({
		itemsSearchStr: '',
		setItemsSearchStr(str) {
			this.itemsSearchStr = str.trim().toLowerCase();
			if (this.itemsSearchStr !== '') {
				this.$el.closest('.lqd-generator-sidebar').classList.add('lqd-showing-search-results');
			} else {
				this.$el.closest('.lqd-generator-sidebar').classList.remove('lqd-showing-search-results');
			}
		},
		sideNavCollapsed: false,
		/**
         *
         * @param {'collapse' | 'expand'} state
         */
		toggleSideNavCollapse(state) {
			this.sideNavCollapsed = state ? (state === 'collapse' ? true : false) : !this.sideNavCollapsed;

			if (this.sideNavCollapsed) {
				tinymce?.activeEditor?.focus();
			}
		},
		generatorStep: 0,
		setGeneratorStep(step) {
			if (step === this.generatorStep) return;
			if (!document.startViewTransition) {
				return this.generatorStep = Number(step);
			}
			document.startViewTransition(() => this.generatorStep = Number(step));
		},
		selectedGenerator: null
	}));

	// Chat
	Alpine.store('mobileChat', {
		sidebarOpen: false,
		toggleSidebar(state) {
			this.sidebarOpen = state ? (state === 'collapse' ? false : false) : !this.sidebarOpen;
		}
	});

	// Dropdown
	Alpine.data('dropdown', ({ triggerType = 'hover' }) => ({
		open: false,
		toggle(state) {
			this.open = state ? (state === 'collapse' ? false : true) : !this.open;
			this.$refs.parent.classList.toggle('lqd-is-active', this.open);
		},
		parent: {
			['@mouseenter']() {
				if (triggerType !== 'hover') return;
				this.toggle('expand');
			},
			['@mouseleave']() {
				if (triggerType !== 'hover') return;
				this.toggle('collapse');
			},
			['@click.outside']() {
				this.toggle('collapse');
			},
		},
		trigger: {
			['@click.prevent']() {
				if (triggerType !== 'click') return;
				this.toggle();
			},
		},
		dropdown: {}
	}));

	// Notifications
	Alpine.store('notifications', {
		notifications: [],
		loading: false,
		add(notification) {
			this.notifications.unshift(notification);
		},
		remove(index) {
			this.notifications.splice(index, 1);
		},
		markThenHref(notification) {
			const index = this.notifications.indexOf(notification);
			if (index === -1) return;
			var formData = new FormData();
			formData.append('id', notification.id);

			this.loading = true;

			$.ajax({
				url: '/dashboard/notifications/mark-as-read',
				type: 'POST',
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				success: data => {
				},
				error: error => {
					console.error(error);
				},
				complete: () => {
					this.markAsRead(index);
					window.location = notification.link;
					this.loading = false;
				}
			});
		},
		markAsRead(index) {
			this.notifications = this.notifications.map((notification, i) => {
				if (i === index) {
					notification.unread = false;
				}
				return notification;
			});
		},
		markAllAsRead() {
			this.loading = true;
			$.ajax({
				url: '/dashboard/notifications/mark-as-read',
				type: 'POST',
				success: response => {
					if (response.success) {
						this.notifications.forEach((notification, index) => {
							this.markAsRead(index);
						});
					}
				},
				error: error => {
					console.error(error);
				},
				complete: () => {
					this.loading = false;
				}
			});
		},
		setNotifications(notifications) {
			this.notifications = notifications;
		},
		hasUnread: function () {
			return this.notifications.some(notification => notification.unread);
		}
	});
	Alpine.data('notifications', notifications => ({
		notifications: notifications || [],
	}));

	// Focus Mode
	Alpine.store('focusMode', {
		active: Alpine.$persist(!!lqdFocusModeEnabled).as(currentTheme +':lqdFocusModeEnabled'),
		toggle(state) {

			console.log(currentTheme);
			this.active = state ? (state === 'activate' ? true : false) : !this.active;

			document.body.classList.toggle('focus-mode', this.active);
		},
	});

	// OpenAI Realtime
	Alpine.data('openaiRealtime', openaiRealtime);

	// Advanced Image Editor
	Alpine.data('advancedImageEditor', advancedImageEditor);
});

Livewire.start();
