
<!DOCTYPE html><html lang="fr" data-astro-cid-37fxchfa> <head><meta charset="UTF-8"><meta name="description" property="og:description" content=" site personnel d'Antoine Quendez"><meta name="viewport" content="width=device-width"><meta name="generator" content="Astro v4.2.4"><title>Antoine Quendez: Site Personnel</title><link rel="icon" type="image/svg+xml" href="/favicon.svg"><link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,400;0,700;1,400&family=Rubik:wght@500;600&display=swap" rel="stylesheet"><script>
	// This code is inlined in the head to make dark mode instant & blocking.
	const getThemePreference = () => {
		if (typeof localStorage !== 'undefined' && localStorage.getItem('theme')) {
			return localStorage.getItem('theme');
		}
		return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
	};
	const isDark = getThemePreference() === 'dark';
	document.documentElement.classList[isDark ? 'add' : 'remove']('theme-dark');

	if (typeof localStorage !== 'undefined') {
		// Watch the document element and persist user preference when it changes.
		const observer = new MutationObserver(() => {
			const isDark = document.documentElement.classList.contains('theme-dark');
			localStorage.setItem('theme', isDark ? 'dark' : 'light');
		});
		observer.observe(document.documentElement, { attributes: true, attributeFilter: ['class'] });
	}
</script><style data-vite-dev-id="/opt/git/antoine/qdz_antoine/src/styles/global.css">/* Global variables */
:root {
	/* Colors */
	--gray-0: #090b11;
	--gray-50: #141925;
	--gray-100: #283044;
	--gray-200: #3d4663;
	--gray-300: #505d84;
	--gray-400: #6474a2;
	--gray-500: #8490b5;
	--gray-600: #a3acc8;
	--gray-700: #c3cadb;
	--gray-800: #e3e6ee;
	--gray-900: #f3f4f7;
	--gray-999-basis: 0, 0%, 100%;
	--gray-999_40: hsla(var(--gray-999-basis), 0.4);
	--gray-999: #ffffff;

	--accent-light: #37dce5;
	--accent-regular: #74b1b2;
	--accent-dark: #74b1b2;
	--accent-overlay: hsla(204, 89%, 67%, 0.33);
	--accent-subtle-overlay: var(--accent-overlay);
	--accent-text-over: var(--gray-999);

	--link-color: var(--accent-regular);

	/* Gradients */
	--gradient-stop-1: var(--accent-light);
	--gradient-stop-2: var(--accent-regular);
	--gradient-stop-3: var(--accent-dark);
	--gradient-subtle: linear-gradient(150deg, var(--gray-900) 19%, var(--gray-999) 150%);
	--gradient-accent: linear-gradient(
		150deg,
		var(--gradient-stop-1),
		var(--gradient-stop-2),
		var(--gradient-stop-3)
	);
	--gradient-accent-orange: linear-gradient(
		150deg,
		#0733b6,
		var(--accent-regular),
		var(--accent-dark)
	);
	--gradient-stroke: linear-gradient(180deg, var(--gray-900), var(--gray-700));

	/* Shadows */
	--shadow-sm: 0px 6px 3px rgba(9, 11, 17, 0.01), 0px 4px 2px rgba(9, 11, 17, 0.01),
		0px 2px 2px rgba(9, 11, 17, 0.02), 0px 0px 1px rgba(9, 11, 17, 0.03);
	--shadow-md: 0px 28px 11px rgba(9, 11, 17, 0.01), 0px 16px 10px rgba(9, 11, 17, 0.03),
		0px 7px 7px rgba(9, 11, 17, 0.05), 0px 2px 4px rgba(9, 11, 17, 0.06);
	--shadow-lg: 0px 62px 25px rgba(9, 11, 17, 0.01), 0px 35px 21px rgba(9, 11, 17, 0.05),
		0px 16px 16px rgba(9, 11, 17, 0.1), 0px 4px 9px rgba(9, 11, 17, 0.12);

	/* Text Sizes */
	--text-sm: 0.875rem;
	--text-base: 1rem;
	--text-md: 1.125rem;
	--text-lg: 1.25rem;
	--text-xl: 1.625rem;
	--text-2xl: 2.125rem;
	--text-3xl: 2.625rem;
	--text-4xl: 3.5rem;
	--text-5xl: 4.5rem;

	/* Fonts */
	--font-system: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu,
		Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
	--font-body: 'Public Sans', var(--font-system);
	--font-brand: Rubik, var(--font-system);

	/* Transitions */
	--theme-transition: 0.2s ease-in-out;
}

:root.theme-dark {
	--gray-0: #ffffff;
	--gray-50: #f3f4f7;
	--gray-100: #e3e6ee;
	--gray-200: #c3cadb;
	--gray-300: #a3acc8;
	--gray-400: #8490b5;
	--gray-500: #6474a2;
	--gray-600: #505d84;
	--gray-700: #3d4663;
	--gray-800: #283044;
	--gray-900: #141925;
	--gray-999-basis: 225, 31%, 5%;
	--gray-999: #090b11;

	--accent-light: #1c0056;
	--accent-regular: #315e5f;
	--accent-dark: #315e5f;
	--accent-overlay: hsla(184, 89%, 67%, 0.33);
	--accent-subtle-overlay: hsla(184, 50%, 44%, 0.33);;
	--accent-text-over: var(--gray-0);

	--link-color: var(--accent-dark);

	--gradient-stop-1: #4c11c6;
	--gradient-subtle: linear-gradient(150deg, var(--gray-900) 19%, var(--gray-999) 81%);
	--gradient-accent-orange: linear-gradient(
		150deg,
		#0733b6,
		var(--accent-regular),
		var(--accent-light)
	);
	--gradient-stroke: linear-gradient(180deg, var(--gray-600), var(--gray-800));

	--shadow-sm: 0px 6px 3px rgba(255, 255, 255, 0.01), 0px 4px 2px rgba(255, 255, 255, 0.01),
		0px 2px 2px rgba(255, 255, 255, 0.02), 0px 0px 1px rgba(255, 255, 255, 0.03);
	--shadow-md: 0px 28px 11px rgba(255, 255, 255, 0.01), 0px 16px 10px rgba(255, 255, 255, 0.03),
		0px 7px 7px rgba(255, 255, 255, 0.05), 0px 2px 4px rgba(255, 255, 255, 0.06);
	--shadow-lg: 0px 62px 25px rgba(255, 255, 255, 0.01), 0px 35px 21px rgba(255, 255, 255, 0.05),
		0px 16px 16px rgba(255, 255, 255, 0.1), 0px 4px 9px rgba(255, 255, 255, 0.12);
}

html,
body {
	min-height: 100%;
	overflow-x: hidden;
}

body {
	background-color: var(--gray-999);
	color: var(--gray-200);
	font-family: var(--font-body);
	-webkit-font-smoothing: antialiased;
	line-height: 1.5;
}

*,
*::after,
*::before {
	box-sizing: border-box;
	margin: 0;
}

img {
	max-width: 100%;
	height: auto;
}

a {
	color: var(--link-color);
}

h1,
h2,
h3,
h4,
h5 {
	line-height: 1.1;
	font-family: var(--font-brand);
	font-weight: 600;
	color: var(--gray-100);
}

h1 {
	font-size: var(--text-5xl);
}

h2 {
	font-size: var(--text-4xl);
}

h3 {
	font-size: var(--text-3xl);
}

h4 {
	font-size: var(--text-2xl);
}

h5 {
	font-size: var(--text-xl);
}

/* Utilities */

.sr-only {
	position: absolute;
	width: 1px;
	height: 1px;
	padding: 0;
	margin: -1px;
	overflow: hidden;
	clip: rect(0, 0, 0, 0);
	white-space: nowrap;
	border-width: 0;
}

.wrapper {
	width: 100%;
	max-width: 83rem;
	margin-inline: auto;
	padding-inline: 1.5rem;
}

.stack {
	display: flex;
	flex-direction: column;
}

.gap-2 {
	gap: 0.5rem;
}
.gap-4 {
	gap: 1rem;
}
.gap-8 {
	gap: 2rem;
}
.gap-10 {
	gap: 2.5rem;
}
.gap-15 {
	gap: 3.75rem;
}
.gap-20 {
	gap: 5rem;
}
.gap-30 {
	gap: 7.5rem;
}
.gap-48 {
	gap: 12rem;
}

@media (min-width: 50em) {
	.lg\:gap-2 {
		gap: 0.5rem;
	}
	.lg\:gap-4 {
		gap: 1rem;
	}
	.lg\:gap-8 {
		gap: 2rem;
	}
	.lg\:gap-10 {
		gap: 2.5rem;
	}
	.lg\:gap-15 {
		gap: 3.75rem;
	}
	.lg\:gap-20 {
		gap: 5rem;
	}
	.lg\:gap-30 {
		gap: 7.5rem;
	}
	.lg\:gap-48 {
		gap: 12rem;
	}
}
</style>
<style data-vite-dev-id="/opt/git/antoine/qdz_antoine/src/components/Icon.astro?astro&#38;type=style&#38;index=0&#38;lang.css">svg[data-astro-cid-patnjmll]{vertical-align:middle;width:var(--size, 1em);height:var(--size, 1em)}</style>
<style data-vite-dev-id="/opt/git/antoine/qdz_antoine/src/components/ThemeToggle.astro?astro&#38;type=style&#38;index=0&#38;lang.css">button[data-astro-cid-x3pjskd3]{display:flex;border:0;border-radius:999rem;padding:0;background-color:var(--gray-999);box-shadow:inset 0 0 0 1px var(--accent-overlay);cursor:pointer}.icon[data-astro-cid-x3pjskd3]{z-index:1;position:relative;display:flex;padding:0.5rem;width:2rem;height:2rem;font-size:1rem;color:var(--accent-overlay)}.icon[data-astro-cid-x3pjskd3].light::before{content:"";z-index:-1;position:absolute;inset:0;background-color:var(--accent-regular);border-radius:999rem}.theme-dark .icon[data-astro-cid-x3pjskd3].light::before{transform:translateX(100%)}.theme-dark .icon[data-astro-cid-x3pjskd3].dark,html:not(.theme-dark) .icon[data-astro-cid-x3pjskd3].light,button[data-astro-cid-x3pjskd3][aria-pressed=false] .icon[data-astro-cid-x3pjskd3].light{color:var(--accent-text-over)}@media (prefers-reduced-motion: no-preference){.icon[data-astro-cid-x3pjskd3],.icon[data-astro-cid-x3pjskd3].light::before{transition:transform var(--theme-transition),color var(--theme-transition)}}@media (forced-colors: active){.icon[data-astro-cid-x3pjskd3].light::before{background-color:SelectedItem}}</style>
<style data-vite-dev-id="/opt/git/antoine/qdz_antoine/src/components/Nav.astro?astro&#38;type=style&#38;index=0&#38;lang.css">nav[data-astro-cid-dmqpwcec]{z-index:9999;position:relative;font-family:var(--font-brand);font-weight:500;margin-bottom:3.5rem}.menu-header[data-astro-cid-dmqpwcec]{display:flex;justify-content:space-between;gap:0.5rem;padding:1.5rem}.site-title[data-astro-cid-dmqpwcec]{display:flex;gap:0.5rem;align-items:center;line-height:1.1;color:var(--gray-0);text-decoration:none}.menu-button[data-astro-cid-dmqpwcec]{position:relative;display:flex;border:0;border-radius:999rem;padding:0.5rem;font-size:1.5rem;color:var(--gray-300);background:radial-gradient(var(--gray-900),var(--gray-800) 150%);box-shadow:var(--shadow-md)}.menu-button[data-astro-cid-dmqpwcec][aria-expanded=true]{color:var(--gray-0);background:linear-gradient(180deg,var(--gray-600),transparent),radial-gradient(var(--gray-900),var(--gray-800) 150%)}.menu-button[data-astro-cid-dmqpwcec][hidden]{display:none}.menu-button[data-astro-cid-dmqpwcec]::before{position:absolute;inset:-1px;content:"";background:var(--gradient-stroke);border-radius:999rem;z-index:-1}.menu-content[data-astro-cid-dmqpwcec]{position:absolute;left:0;right:0}.nav-items[data-astro-cid-dmqpwcec]{margin:0;display:flex;flex-direction:column;gap:1rem;font-size:var(--text-md);line-height:1.2;list-style:none;padding:2rem;background-color:var(--gray-999);border-bottom:1px solid var(--gray-800)}.link[data-astro-cid-dmqpwcec]{display:inline-block;color:var(--gray-300);text-decoration:none}.link[data-astro-cid-dmqpwcec].active{color:var(--gray-0)}.menu-footer[data-astro-cid-dmqpwcec]{--icon-size: var(--text-xl);--icon-padding: 0.5rem;display:flex;justify-content:space-between;gap:0.75rem;padding:1.5rem 2rem 1.5rem 1.5rem;background-color:var(--gray-999);border-radius:0 0 0.75rem 0.75rem;box-shadow:var(--shadow-lg)}.socials[data-astro-cid-dmqpwcec]{display:flex;flex-wrap:wrap;gap:0.625rem;font-size:var(--icon-size)}.social[data-astro-cid-dmqpwcec]{display:flex;padding:var(--icon-padding);text-decoration:none;color:var(--accent-dark);transition:color var(--theme-transition)}.social[data-astro-cid-dmqpwcec]:hover,.social[data-astro-cid-dmqpwcec]:focus{color:var(--accent-text-over)}.theme-toggle[data-astro-cid-dmqpwcec]{display:flex;align-items:center;height:calc(var(--icon-size) + 2 * var(--icon-padding))}@media (min-width: 50em){nav[data-astro-cid-dmqpwcec]{display:grid;grid-template-columns:1fr auto 1fr;align-items:center;padding:2.5rem 5rem;gap:1rem}.menu-header[data-astro-cid-dmqpwcec]{padding:0}.site-title[data-astro-cid-dmqpwcec]{font-size:var(--text-lg)}.menu-content[data-astro-cid-dmqpwcec]{display:contents}.nav-items[data-astro-cid-dmqpwcec]{position:relative;flex-direction:row;font-size:var(--text-sm);border-radius:999rem;border:0;padding:0.5rem 0.5625rem;background:radial-gradient(var(--gray-900),var(--gray-800) 150%);box-shadow:var(--shadow-md)}.nav-items[data-astro-cid-dmqpwcec]::before{position:absolute;inset:-1px;content:"";background:var(--gradient-stroke);border-radius:999rem;z-index:-1}.link[data-astro-cid-dmqpwcec]{padding:0.5rem 1rem;border-radius:999rem;transition:color var(--theme-transition),background-color var(--theme-transition)}.link[data-astro-cid-dmqpwcec]:hover,.link[data-astro-cid-dmqpwcec]:focus{color:var(--gray-100);background-color:var(--accent-subtle-overlay)}.link[data-astro-cid-dmqpwcec].active{color:var(--accent-text-over);background-color:var(--accent-regular)}.menu-footer[data-astro-cid-dmqpwcec]{--icon-padding: 0.375rem;justify-self:flex-end;align-items:center;padding:0;background-color:transparent;box-shadow:none}.socials[data-astro-cid-dmqpwcec]{display:none}}@media (min-width: 60em){.socials[data-astro-cid-dmqpwcec]{display:flex;justify-content:flex-end;gap:0}}@media (forced-colors: active){.link[data-astro-cid-dmqpwcec].active{color:SelectedItem}}</style>
<style data-vite-dev-id="/opt/git/antoine/qdz_antoine/src/components/Footer.astro?astro&#38;type=style&#38;index=0&#38;lang.css">footer[data-astro-cid-sz7xmlte]{display:flex;flex-direction:column;gap:3rem;margin-top:auto;padding:3rem 2rem 3rem;text-align:center;color:var(--gray-400);font-size:var(--text-sm)}footer[data-astro-cid-sz7xmlte] a[data-astro-cid-sz7xmlte]{color:var(--gray-400);text-decoration:1px solid underline transparent;text-underline-offset:0.25em;transition:text-decoration-color var(--theme-transition)}footer[data-astro-cid-sz7xmlte] a[data-astro-cid-sz7xmlte]:hover,footer[data-astro-cid-sz7xmlte] a[data-astro-cid-sz7xmlte]:focus{text-decoration-color:currentColor}.group[data-astro-cid-sz7xmlte]{display:flex;flex-direction:column;gap:0.5rem}.socials[data-astro-cid-sz7xmlte]{display:flex;justify-content:center;gap:1rem;flex-wrap:wrap}@media (min-width: 50em){footer[data-astro-cid-sz7xmlte]{flex-direction:row;justify-content:space-between;padding:2.5rem 5rem}.group[data-astro-cid-sz7xmlte]{flex-direction:row;gap:1rem;flex-wrap:wrap}.socials[data-astro-cid-sz7xmlte]{justify-content:flex-end}}</style>
<style data-vite-dev-id="/opt/git/antoine/qdz_antoine/src/layouts/BaseLayout.astro?astro&#38;type=style&#38;index=0&#38;lang.css">:root{--_placeholder-bg: linear-gradient(transparent, transparent);--bg-image-main: url();--bg-image-main-curves: url();--bg-image-subtle-1: var(--_placeholder-bg);--bg-image-subtle-2: var(--_placeholder-bg);--bg-image-footer: var(--_placeholder-bg);--bg-svg-blend-mode: overlay;--bg-blend-mode: darken;--bg-image-aspect-ratio: 2.25;--bg-scale: 1.68;--bg-aspect-ratio: calc(var(--bg-image-aspect-ratio) / var(--bg-scale));--bg-gradient-size: calc(var(--bg-scale) * 100%)}:root.theme-dark{--bg-image-main: url(/assets/backgrounds/bg-main-dark-800w.jpg);--bg-image-main-curves: url(/assets/backgrounds/bg-main-dark.svg);--bg-svg-blend-mode: darken;--bg-blend-mode: lighten}:root.loaded{--bg-image-subtle-1: url();--bg-image-subtle-2: url();--bg-image-footer: url()}:root.loaded.theme-dark{--bg-image-subtle-1: url(/assets/backgrounds/bg-subtle-1-dark-800w.jpg);--bg-image-subtle-2: url(/assets/backgrounds/bg-subtle-2-dark-800w.jpg);--bg-image-footer: url(/assets/backgrounds/bg-footer-dark-800w.jpg)}@media (min-width: 50em){:root{--bg-scale: 1;--bg-image-main: url()}:root.theme-dark{--bg-image-main: url(/assets/backgrounds/bg-main-dark-1440w.jpg)}:root.loaded{--bg-image-subtle-1: url();--bg-image-subtle-2: url();--bg-image-footer: url()}:root.loaded.theme-dark{--bg-image-subtle-1: url(/assets/backgrounds/bg-subtle-1-dark-1440w.jpg);--bg-image-subtle-2: url(/assets/backgrounds/bg-subtle-2-dark-1440w.jpg);--bg-image-footer: url(/assets/backgrounds/bg-footer-dark-1440w.jpg)}}.backgrounds[data-astro-cid-37fxchfa]{min-height:100%;isolation:isolate;background:url(/assets/backgrounds/noise.png) top center/220px repeat,var(--bg-image-footer) bottom center/var(--bg-gradient-size) no-repeat,var(--bg-image-main-curves) top center/var(--bg-gradient-size) no-repeat,var(--bg-image-main) top center/var(--bg-gradient-size) no-repeat,var(--gray-999);background-blend-mode:overlay,var(--bg-blend-mode),var(--bg-svg-blend-mode),normal,normal}@media (forced-colors: active){.backgrounds[data-astro-cid-37fxchfa]{background:none;background-blend-mode:none;--bg-gradient-size: none}}</style>
<style data-vite-dev-id="/opt/git/antoine/qdz_antoine/src/components/CallToAction.astro?astro&#38;type=style&#38;index=0&#38;lang.css">a[data-astro-cid-balv45lp]{position:relative;display:flex;place-content:center;text-align:center;padding:0.56em 2em;gap:0.8em;color:var(--accent-text-over);text-decoration:none;line-height:1.1;border-radius:999rem;overflow:hidden;background:var(--gradient-accent-orange);box-shadow:var(--shadow-md);white-space:nowrap}@media (min-width: 20em){a[data-astro-cid-balv45lp]{font-size:var(--text-lg)}}a[data-astro-cid-balv45lp]::after{content:"";position:absolute;inset:0;pointer-events:none;transition:background-color var(--theme-transition);mix-blend-mode:overlay}a[data-astro-cid-balv45lp]:focus::after,a[data-astro-cid-balv45lp]:hover::after{background-color:hsla(var(--gray-999-basis),0.3)}@media (min-width: 50em){a[data-astro-cid-balv45lp]{padding:1.125rem 2.5rem;font-size:var(--text-xl)}}</style>
<style data-vite-dev-id="/opt/git/antoine/qdz_antoine/src/components/Grid.astro?astro&#38;type=style&#38;index=0&#38;lang.css">.grid[data-astro-cid-vc5tsdmu]{display:grid;grid-auto-rows:1fr;gap:1rem;list-style:none;padding:0}.grid[data-astro-cid-vc5tsdmu].small{grid-template-columns:1fr 1fr;gap:1.5rem}.grid[data-astro-cid-vc5tsdmu].small>:last-child:nth-child(odd){grid-column:1 / 3}@media (min-width: 50em){.grid[data-astro-cid-vc5tsdmu]{grid-template-columns:1fr 1fr;gap:4rem}.grid[data-astro-cid-vc5tsdmu].offset{--row-offset: 7.5rem;padding-bottom:var(--row-offset)}.grid[data-astro-cid-vc5tsdmu].offset>:nth-child(odd){transform:translateY(var(--row-offset))}.grid[data-astro-cid-vc5tsdmu].offset>:last-child:nth-child(odd){grid-column:2 / 3;transform:none}.grid[data-astro-cid-vc5tsdmu].small{display:flex;flex-wrap:wrap;justify-content:center;gap:2rem}.grid[data-astro-cid-vc5tsdmu].small>*{flex-basis:20rem}}</style>
<style data-vite-dev-id="/opt/git/antoine/qdz_antoine/src/components/Hero.astro?astro&#38;type=style&#38;index=0&#38;lang.css">.hero[data-astro-cid-bbe6dxrz]{font-size:var(--text-lg);text-align:center}.title[data-astro-cid-bbe6dxrz],.tagline[data-astro-cid-bbe6dxrz]{max-width:37ch;margin-inline:auto}.title[data-astro-cid-bbe6dxrz]{font-size:var(--text-3xl);color:var(--gray-0)}@media (min-width: 50em){.hero[data-astro-cid-bbe6dxrz]{font-size:var(--text-xl)}.start[data-astro-cid-bbe6dxrz]{text-align:start}.start[data-astro-cid-bbe6dxrz] .title[data-astro-cid-bbe6dxrz],.start[data-astro-cid-bbe6dxrz] .tagline[data-astro-cid-bbe6dxrz]{margin-inline:unset}.title[data-astro-cid-bbe6dxrz]{font-size:var(--text-5xl)}}</style>
<style data-vite-dev-id="/opt/git/antoine/qdz_antoine/src/components/Pill.astro?astro&#38;type=style&#38;index=0&#38;lang.css">.pill[data-astro-cid-2qeywk4b]{display:flex;padding:0.5rem 1rem;gap:0.5rem;color:var(--accent-text-over);border:1px solid var(--accent-regular);background-color:var(--accent-regular);border-radius:999rem;font-size:var(--text-md);line-height:1.35;white-space:nowrap}</style>
<style data-vite-dev-id="/opt/git/antoine/qdz_antoine/src/components/PortfolioPreview.astro?astro&#38;type=style&#38;index=0&#38;lang.css">.card[data-astro-cid-lgkm4u2a]{display:grid;grid-template:auto 1fr / auto 1fr;height:11rem;background:var(--gradient-subtle);border:1px solid var(--gray-800);border-radius:0.75rem;overflow:hidden;box-shadow:var(--shadow-sm);text-decoration:none;font-family:var(--font-brand);font-size:var(--text-lg);font-weight:500;transition:box-shadow var(--theme-transition)}.card[data-astro-cid-lgkm4u2a]:hover{box-shadow:var(--shadow-md)}.title[data-astro-cid-lgkm4u2a]{grid-area:1 / 1 / 2 / 2;z-index:1;margin:0.5rem;padding:0.5rem 1rem;background:var(--gray-999);color:var(--gray-200);border-radius:0.375rem}img[data-astro-cid-lgkm4u2a]{grid-area:1 / 1 / 3 / 3;width:100%;height:100%;object-fit:cover}@media (min-width: 50em){.card[data-astro-cid-lgkm4u2a]{height:22rem;border-radius:1.5rem}.title[data-astro-cid-lgkm4u2a]{border-radius:0.9375rem}}</style>
<style data-vite-dev-id="/opt/git/antoine/qdz_antoine/src/components/ContactCTA.astro?astro&#38;type=style&#38;index=0&#38;lang.css">aside[data-astro-cid-rcdzuq3a]{display:flex;flex-direction:column;align-items:center;gap:3rem;border-top:1px solid var(--gray-800);border-bottom:1px solid var(--gray-800);padding:5rem 1.5rem;background-color:var(--gray-999_40);box-shadow:var(--shadow-sm)}h2[data-astro-cid-rcdzuq3a]{font-size:var(--text-xl);text-align:center;max-width:15ch}@media (min-width: 50em){aside[data-astro-cid-rcdzuq3a]{padding:7.5rem;flex-direction:row;flex-wrap:wrap;justify-content:space-between}h2[data-astro-cid-rcdzuq3a]{font-size:var(--text-3xl);text-align:left}}</style>
<style data-vite-dev-id="/opt/git/antoine/qdz_antoine/src/components/Skills.astro?astro&#38;type=style&#38;index=0&#38;lang.css">.box[data-astro-cid-ab4ihpzs]{border:1px solid var(--gray-800);border-radius:0.75rem;padding:1.5rem;background-color:var(--gray-999_40);box-shadow:var(--shadow-sm)}.skills[data-astro-cid-ab4ihpzs]{display:flex;flex-direction:column;gap:3rem}.skills[data-astro-cid-ab4ihpzs] h2[data-astro-cid-ab4ihpzs]{font-size:var(--text-lg)}.skills[data-astro-cid-ab4ihpzs] p[data-astro-cid-ab4ihpzs]{color:var(--gray-400)}@media (min-width: 50em){.box[data-astro-cid-ab4ihpzs]{border-radius:1.5rem;padding:2.5rem}.skills[data-astro-cid-ab4ihpzs]{display:grid;grid-template-columns:repeat(3,1fr);gap:5rem}.skills[data-astro-cid-ab4ihpzs] h2[data-astro-cid-ab4ihpzs]{font-size:var(--text-2xl)}}</style>
<style data-vite-dev-id="/opt/git/antoine/qdz_antoine/src/pages/index.astro?astro&#38;type=style&#38;index=0&#38;lang.css">.hero[data-astro-cid-j7pv25f6]{display:flex;flex-direction:column;align-items:center;gap:2rem}.roles[data-astro-cid-j7pv25f6]{display:none}.hero[data-astro-cid-j7pv25f6] img[data-astro-cid-j7pv25f6]{aspect-ratio:5 / 4;object-fit:cover;object-position:top;border-radius:1.5rem;box-shadow:var(--shadow-md)}@media (min-width: 50em){.hero[data-astro-cid-j7pv25f6]{display:grid;grid-template-columns:6fr 4fr;padding-inline:2.5rem;gap:3.75rem}.roles[data-astro-cid-j7pv25f6]{margin-top:0.5rem;display:flex;gap:0.5rem}.hero[data-astro-cid-j7pv25f6] img[data-astro-cid-j7pv25f6]{aspect-ratio:3 / 4;border-radius:4.5rem;object-fit:cover}}.section[data-astro-cid-j7pv25f6]{display:grid;gap:2rem}.with-background[data-astro-cid-j7pv25f6]{position:relative}.with-background[data-astro-cid-j7pv25f6]::before{--hero-bg: var(--bg-image-subtle-2);content:"";position:absolute;pointer-events:none;left:50%;width:100vw;aspect-ratio:calc(2.25 / var(--bg-scale));top:0;transform:translateY(-75%) translateX(-50%);background:url(/assets/backgrounds/noise.png) top center/220px repeat,var(--hero-bg) center center / var(--bg-gradient-size) no-repeat,var(--gray-999);background-blend-mode:overlay,normal,normal,normal;mix-blend-mode:var(--bg-blend-mode);z-index:-1}.with-background[data-astro-cid-j7pv25f6].bg-variant::before{--hero-bg: var(--bg-image-subtle-1)}.section-header[data-astro-cid-j7pv25f6]{justify-self:center;text-align:center;max-width:50ch;font-size:var(--text-md);color:var(--gray-300)}.section-header[data-astro-cid-j7pv25f6] h3[data-astro-cid-j7pv25f6]{font-size:var(--text-2xl)}@media (min-width: 50em){.section[data-astro-cid-j7pv25f6]{grid-template-columns:repeat(4,1fr);grid-template-areas:"header header header header" "gallery gallery gallery gallery";gap:5rem}.section[data-astro-cid-j7pv25f6].with-cta{grid-template-areas:"header header header cta" "gallery gallery gallery gallery"}.section-header[data-astro-cid-j7pv25f6]{grid-area:header;font-size:var(--text-lg)}.section-header[data-astro-cid-j7pv25f6] h3[data-astro-cid-j7pv25f6]{font-size:var(--text-4xl)}.with-cta[data-astro-cid-j7pv25f6] .section-header[data-astro-cid-j7pv25f6]{justify-self:flex-start;text-align:left}.gallery[data-astro-cid-j7pv25f6]{grid-area:gallery}.cta[data-astro-cid-j7pv25f6]{grid-area:cta}}.mention-card[data-astro-cid-j7pv25f6]{display:flex;height:7rem;justify-content:center;align-items:center;text-align:center;border:1px solid var(--gray-800);border-radius:1.5rem;color:var(--gray-300);background:var(--gradient-subtle);box-shadow:var(--shadow-sm)}@media (min-width: 50em){.mention-card[data-astro-cid-j7pv25f6]{border-radius:1.5rem;height:9.5rem}}</style><script type="module" src="/src/layouts/BaseLayout.astro?astro&type=script&index=0&lang.ts"></script>
<script type="module" src="/src/components/Nav.astro?astro&type=script&index=0&lang.ts"></script>
<script type="module" src="/src/components/ThemeToggle.astro?astro&type=script&index=0&lang.ts"></script>
<script type="module" src="/@vite/client"></script>
<script type="module" src="/@fs/opt/git/antoine/qdz_antoine/node_modules/astro/dist/runtime/client/dev-toolbar/entrypoint.js?v=fe92ca90"></script>
<script>window.__astro_dev_toolbar__ = {"root":"/opt/git/antoine/qdz_antoine/","version":"4.2.4","debugInfo":"Astro                    v4.2.4\nNode                     v21.4.0\nSystem                   Linux (x64)\nPackage Manager          npm\nOutput                   server\nAdapter                  @astrojs/node\nIntegrations             @astrojs/node"}</script>
<script type="module" src="/src/styles/global.css"></script>
<script type="module" src="/src/components/Icon.astro?astro&type=style&index=0&lang.css"></script>
<script type="module" src="/src/components/ThemeToggle.astro?astro&type=style&index=0&lang.css"></script>
<script type="module" src="/src/components/Nav.astro?astro&type=style&index=0&lang.css"></script>
<script type="module" src="/src/components/Footer.astro?astro&type=style&index=0&lang.css"></script>
<script type="module" src="/src/layouts/BaseLayout.astro?astro&type=style&index=0&lang.css"></script>
<script type="module" src="/src/components/CallToAction.astro?astro&type=style&index=0&lang.css"></script>
<script type="module" src="/src/components/Grid.astro?astro&type=style&index=0&lang.css"></script>
<script type="module" src="/src/components/Hero.astro?astro&type=style&index=0&lang.css"></script>
<script type="module" src="/src/components/Pill.astro?astro&type=style&index=0&lang.css"></script>
<script type="module" src="/src/components/PortfolioPreview.astro?astro&type=style&index=0&lang.css"></script>
<script type="module" src="/src/components/ContactCTA.astro?astro&type=style&index=0&lang.css"></script>
<script type="module" src="/src/components/Skills.astro?astro&type=style&index=0&lang.css"></script>
<script type="module" src="/src/pages/index.astro?astro&type=style&index=0&lang.css"></script></head> <body data-astro-cid-37fxchfa data-astro-source-file="/opt/git/antoine/qdz_antoine/src/layouts/BaseLayout.astro" data-astro-source-loc="22:8"> <div class="stack backgrounds" data-astro-cid-37fxchfa data-astro-source-file="/opt/git/antoine/qdz_antoine/src/layouts/BaseLayout.astro" data-astro-source-loc="23:34"> <nav data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="23:6"> <div class="menu-header" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="24:27"> <a href="/" class="site-title" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="25:34"> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 256 256" aria-hidden="true" stroke="url(#icon-gradient-b2uhwvc1)" fill="url(#icon-gradient-b2uhwvc1)" style="--size:1.6em" class="astro-patnjmll" data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="30:2"> <g data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="31:3"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" d="m80 96 40 32-40 32m56 0h40"/><rect width="192" height="160" x="32" y="48" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.97" rx="8.5"/></g> <linearGradient id="icon-gradient-b2uhwvc1" x1="23" x2="235" y1="43" y2="202" gradientUnits="userSpaceOnUse" data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="41:5"> <stop stop-color="var(--gradient-stop-1)" data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="42:6"></stop> <stop offset=".5" stop-color="var(--gradient-stop-2)" data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="43:6"></stop> <stop offset="1" stop-color="var(--gradient-stop-3)" data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="44:6"></stop> </linearGradient> </svg> 
Antoine Quendez
</a> <menu-button data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro"> <template data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="30:14"> <button class="menu-button" aria-expanded="false" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="31:55"> <span class="sr-only" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="32:28">Menu</span> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 256 256" aria-hidden="true" stroke="currentcolor" fill="currentcolor" class="astro-patnjmll" data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="30:2"> <g data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="31:3"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="16" d="M40 128h176M40 64h176M40 192h176"/></g>  </svg>  </button> </template> </menu-button> </div> <noscript> <ul class="nav-items" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="39:25"> <li data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="42:10"> <a aria-current="true" class="link active" href="/" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="54:8"> Acceuil </a> </li><li data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="42:10"> <a class="link" href="/work/" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="54:8"> Projets </a> </li><li data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="42:10"> <a class="link" href="/about/" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="54:8"> A propos </a> </li><li data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="42:10"> <a class="link" href="/cv/" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="54:8"> CV </a> </li> </ul> </noscript> <noscript> <div class="menu-footer" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="63:28"> <div class="socials" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="64:25"> <a href="https://github.com/QDZantoine" class="social" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="67:37"> <span class="sr-only" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="68:30">GitHub</span> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 256 256" aria-hidden="true" stroke="currentcolor" fill="currentcolor" class="astro-patnjmll" data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="30:2"> <g data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="31:3"><g stroke-linecap="round" stroke-linejoin="round"><path fill="none" stroke-width="14.7" d="M55.7 167.2c13.9 1 21.3 13.1 22.2 14.6 4.2 7.2 10.4 9.6 18.3 7.1l1.1-3.4a60.3 60.3 0 0 1-25.8-11.9c-12-10.1-18-25.6-18-46.3"/><path fill="none" stroke-width="16" d="M61.4 205.1a24.5 24.5 0 0 1-3-6.1c-3.2-7.9-7.1-10.6-7.8-11.1l-1-.6c-2.4-1.6-9.5-6.5-7.2-13.9 1.4-4.5 6-7.2 12.3-7.2h.8c4 .3 7.6 1.5 10.7 3.2-9.1-10.1-13.6-24.3-13.6-42.3 0-11.3 3.5-21.7 10.1-30.4A46.7 46.7 0 0 1 65 67.3a8.3 8.3 0 0 1 5-4.7c2.8-.9 13.3-2.7 33.2 9.9a105 105 0 0 1 50.5 0c19.9-12.6 30.4-10.8 33.2-9.9 2.3.7 4.1 2.4 5 4.7 5 12.7 4 23.2 2.6 29.4 6.7 8.7 10 18.9 10 30.4 0 42.6-25.8 54.7-43.6 58.7 1.4 4.1 2.2 8.8 2.2 13.7l-.1 23.4v2.3"/><path fill="none" stroke-width="16" d="M160.9 185.7c1.4 4.1 2.2 8.8 2.2 13.7l-.1 23.4v2.3A98.6 98.6 0 1 0 61.4 205c-1.4-2.1-11.3-17.5-11.8-17.8-2.4-1.6-9.5-6.5-7.2-13.9 1.4-4.5 6-7.2 12.3-7.2h.8c4 .3 7.6 1.5 10.7 3.2-9.1-10.1-13.6-24.3-13.6-42.3 0-11.3 3.5-21.7 10.1-30.4A46.4 46.4 0 0 1 65 67.3a8.3 8.3 0 0 1 5-4.7c2.8-.9 13.3-2.7 33.2 9.9a105 105 0 0 1 50.5 0c19.9-12.6 30.4-10.8 33.2-9.9 2.3.7 4.1 2.4 5 4.7 5 12.7 4 23.2 2.6 29.4 6.7 8.7 10 18.9 10 30.4.1 42.6-25.8 54.7-43.6 58.6z"/><path fill="none" stroke-width="18.7" d="m170.1 203.3 17.3-12 17.2-18.7 9.5-26.6v-27.9l-9.5-27.5" /><path fill="none" stroke-width="22.7" d="m92.1 57.3 23.3-4.6 18.7-1.4 29.3 5.4m-110 32.6-8 16-4 21.4.6 20.3 3.4 13" /><path fill="none" stroke-width="13.3" d="M28.8 133a100 100 0 0 0 66.9 94.4v-8.7c-22.4 1.8-33-11.5-35.6-19.8-3.4-8.6-7.8-11.4-8.5-11.8"/></g></g>  </svg>  </a><a href="https://www.linkedin.com/in/antoine-quendez-7090732a0/" class="social" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="67:37"> <span class="sr-only" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="68:30">LinkedIn</span> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 256 256" aria-hidden="true" stroke="currentcolor" fill="currentcolor" class="astro-patnjmll" data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="30:2"> <g data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="31:3"><rect width="184" height="184" x="36" y="36" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" rx="8"/><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" d="M120 112v64m-32-64v64m32-36a28 28 0 0 1 56 0v36"/><circle stroke="none" cx="88" cy="80" r="12"/></g>  </svg>  </a> </div> </div> </noscript> <div id="menu-content" hidden data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="76:32"> <ul class="nav-items" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="77:25"> <li data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="80:10"> <a aria-current="true" class="link active" href="/" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="92:8"> Acceuil </a> </li><li data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="80:10"> <a class="link" href="/work/" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="92:8"> Projets </a> </li><li data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="80:10"> <a class="link" href="/about/" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="92:8"> A propos </a> </li><li data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="80:10"> <a class="link" href="/cv/" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="92:8"> CV </a> </li> </ul> <div class="menu-footer" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="99:28"> <div class="socials" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="100:25"> <a href="https://github.com/QDZantoine" class="social" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="103:37"> <span class="sr-only" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="104:30">GitHub</span> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 256 256" aria-hidden="true" stroke="currentcolor" fill="currentcolor" class="astro-patnjmll" data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="30:2"> <g data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="31:3"><g stroke-linecap="round" stroke-linejoin="round"><path fill="none" stroke-width="14.7" d="M55.7 167.2c13.9 1 21.3 13.1 22.2 14.6 4.2 7.2 10.4 9.6 18.3 7.1l1.1-3.4a60.3 60.3 0 0 1-25.8-11.9c-12-10.1-18-25.6-18-46.3"/><path fill="none" stroke-width="16" d="M61.4 205.1a24.5 24.5 0 0 1-3-6.1c-3.2-7.9-7.1-10.6-7.8-11.1l-1-.6c-2.4-1.6-9.5-6.5-7.2-13.9 1.4-4.5 6-7.2 12.3-7.2h.8c4 .3 7.6 1.5 10.7 3.2-9.1-10.1-13.6-24.3-13.6-42.3 0-11.3 3.5-21.7 10.1-30.4A46.7 46.7 0 0 1 65 67.3a8.3 8.3 0 0 1 5-4.7c2.8-.9 13.3-2.7 33.2 9.9a105 105 0 0 1 50.5 0c19.9-12.6 30.4-10.8 33.2-9.9 2.3.7 4.1 2.4 5 4.7 5 12.7 4 23.2 2.6 29.4 6.7 8.7 10 18.9 10 30.4 0 42.6-25.8 54.7-43.6 58.7 1.4 4.1 2.2 8.8 2.2 13.7l-.1 23.4v2.3"/><path fill="none" stroke-width="16" d="M160.9 185.7c1.4 4.1 2.2 8.8 2.2 13.7l-.1 23.4v2.3A98.6 98.6 0 1 0 61.4 205c-1.4-2.1-11.3-17.5-11.8-17.8-2.4-1.6-9.5-6.5-7.2-13.9 1.4-4.5 6-7.2 12.3-7.2h.8c4 .3 7.6 1.5 10.7 3.2-9.1-10.1-13.6-24.3-13.6-42.3 0-11.3 3.5-21.7 10.1-30.4A46.4 46.4 0 0 1 65 67.3a8.3 8.3 0 0 1 5-4.7c2.8-.9 13.3-2.7 33.2 9.9a105 105 0 0 1 50.5 0c19.9-12.6 30.4-10.8 33.2-9.9 2.3.7 4.1 2.4 5 4.7 5 12.7 4 23.2 2.6 29.4 6.7 8.7 10 18.9 10 30.4.1 42.6-25.8 54.7-43.6 58.6z"/><path fill="none" stroke-width="18.7" d="m170.1 203.3 17.3-12 17.2-18.7 9.5-26.6v-27.9l-9.5-27.5" /><path fill="none" stroke-width="22.7" d="m92.1 57.3 23.3-4.6 18.7-1.4 29.3 5.4m-110 32.6-8 16-4 21.4.6 20.3 3.4 13" /><path fill="none" stroke-width="13.3" d="M28.8 133a100 100 0 0 0 66.9 94.4v-8.7c-22.4 1.8-33-11.5-35.6-19.8-3.4-8.6-7.8-11.4-8.5-11.8"/></g></g>  </svg>  </a><a href="https://www.linkedin.com/in/antoine-quendez-7090732a0/" class="social" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="103:37"> <span class="sr-only" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="104:30">LinkedIn</span> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 256 256" aria-hidden="true" stroke="currentcolor" fill="currentcolor" class="astro-patnjmll" data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="30:2"> <g data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="31:3"><rect width="184" height="184" x="36" y="36" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" rx="8"/><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" d="M120 112v64m-32-64v64m32-36a28 28 0 0 1 56 0v36"/><circle stroke="none" cx="88" cy="80" r="12"/></g>  </svg>  </a> </div> <div class="theme-toggle" data-astro-cid-dmqpwcec data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Nav.astro" data-astro-source-loc="111:30"> <theme-toggle data-astro-cid-x3pjskd3 data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/ThemeToggle.astro"> <button data-astro-cid-x3pjskd3 data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/ThemeToggle.astro" data-astro-source-loc="6:10"> <span class="sr-only" data-astro-cid-x3pjskd3 data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/ThemeToggle.astro" data-astro-source-loc="7:25">Dark theme</span> <span class="icon light" data-astro-cid-x3pjskd3 data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/ThemeToggle.astro" data-astro-source-loc="8:29"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 256 256" aria-hidden="true" stroke="currentcolor" fill="currentcolor" class="astro-patnjmll" data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="30:2"> <g data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="31:3"><circle cx="128" cy="128" r="60" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" d="M128 36V16M63 63 49 49m-13 79H16m47 65-14 14m79 13v20m65-47 14 14m13-79h20m-47-65 14-14"/></g>  </svg> </span> <span class="icon dark" data-astro-cid-x3pjskd3 data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/ThemeToggle.astro" data-astro-source-loc="9:28"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 256 256" aria-hidden="true" stroke="currentcolor" fill="currentcolor" class="astro-patnjmll" data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="30:2"> <g data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="31:3"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" d="M216 112V64m24 24h-48m-24-64v32m16-16h-32m65 113A92 92 0 0 1 103 39h0a92 92 0 1 0 114 114Z"/></g>  </svg> </span> </button> </theme-toggle>   </div> </div> </div> </nav>    <div class="stack gap-20 lg:gap-48" data-astro-cid-j7pv25f6 data-astro-source-file="/opt/git/antoine/qdz_antoine/src/pages/index.astro" data-astro-source-loc="29:39"> <div class="wrapper stack gap-8 lg:gap-20" data-astro-cid-j7pv25f6 data-astro-source-file="/opt/git/antoine/qdz_antoine/src/pages/index.astro" data-astro-source-loc="30:48"> <header class="hero" data-astro-cid-j7pv25f6 data-astro-source-file="/opt/git/antoine/qdz_antoine/src/pages/index.astro" data-astro-source-loc="31:28"> <div class="hero stack gap-4 start" data-astro-cid-bbe6dxrz data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Hero.astro" data-astro-source-loc="11:47"> <div class="stack gap-2" data-astro-cid-bbe6dxrz data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Hero.astro" data-astro-source-loc="12:27"> <h1 class="title" data-astro-cid-bbe6dxrz data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Hero.astro" data-astro-source-loc="13:21">Bonjour, je m&#39;apelle Antoine Quendez</h1> <p class="tagline" data-astro-cid-bbe6dxrz data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Hero.astro" data-astro-source-loc="14:34">Je suis Développeur web .</p> </div>  <div class="roles" data-astro-cid-j7pv25f6 data-astro-source-file="/opt/git/antoine/qdz_antoine/src/pages/index.astro" data-astro-source-loc="37:30"> <div class="pill" data-astro-cid-2qeywk4b data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Pill.astro" data-astro-source-loc="1:20"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 256 256" aria-hidden="true" stroke="currentcolor" fill="currentcolor" style="--size:1.33em" class="astro-patnjmll" data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="30:2"> <g data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="31:3"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" d="m64 88-48 40 48 40m128-80 48 40-48 40M160 40 96 216"/></g>  </svg>  Developer</div>  </div>  </div>  <img alt="Antoine Quendez smiling in a red plaid shirt and tortoise shell glasses" width="480" height="620" src="/assets/portrait.jpg" data-astro-cid-j7pv25f6 data-astro-source-file="/opt/git/antoine/qdz_antoine/src/pages/index.astro" data-astro-source-loc="42:10"> </header> <section class="box skills" data-astro-cid-ab4ihpzs data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Skills.astro" data-astro-source-loc="5:29"> <div class="stack gap-2 lg:gap-4" data-astro-cid-ab4ihpzs data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Skills.astro" data-astro-source-loc="6:37"> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 256 256" aria-hidden="true" stroke="url(#icon-gradient-1ylsq0dfp)" fill="url(#icon-gradient-1ylsq0dfp)" style="--size:2.5rem" class="astro-patnjmll" data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="30:2"> <g data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="31:3"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" d="m80 96 40 32-40 32m56 0h40"/><rect width="192" height="160" x="32" y="48" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.97" rx="8.5"/></g> <linearGradient id="icon-gradient-1ylsq0dfp" x1="23" x2="235" y1="43" y2="202" gradientUnits="userSpaceOnUse" data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="41:5"> <stop stop-color="var(--gradient-stop-1)" data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="42:6"></stop> <stop offset=".5" stop-color="var(--gradient-stop-2)" data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="43:6"></stop> <stop offset="1" stop-color="var(--gradient-stop-3)" data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="44:6"></stop> </linearGradient> </svg>  <h2 data-astro-cid-ab4ihpzs data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Skills.astro" data-astro-source-loc="13:9">Full Stack</h2> <p data-astro-cid-ab4ihpzs data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Skills.astro" data-astro-source-loc="14:8">
En tant que Développeur Full Stack, je me spécialise dans le développement
      front-end et back-end, créant des applications web dynamiques et réactives
      en utilisant une variété de technologies incluant HTML, CSS, JavaScript,
      et des langages côté serveur, et j'utilise également des Frameworks tels
      que Symfony, React...
</p> <div data-astro-cid-ab4ihpzs data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Skills.astro" data-astro-source-loc="22:10"> <img src="/public/assets/javascript.svg" alt="icon_javascript" style="width:50px" data-astro-cid-ab4ihpzs data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Skills.astro" data-astro-source-loc="23:8"> <img src="/public/assets/php.svg" alt="icon_php" style="width:50px" data-astro-cid-ab4ihpzs data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Skills.astro" data-astro-source-loc="28:8"> <img src="/public/assets/symfony.svg" alt="icon_symfony" style="width:50px" data-astro-cid-ab4ihpzs data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Skills.astro" data-astro-source-loc="29:8"> <img src="/public/assets/react.svg" alt="icon_react" style="width:50px" data-astro-cid-ab4ihpzs data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Skills.astro" data-astro-source-loc="34:8"> <img src="/public/assets/mysql.svg" alt="icon_mysql" style="width:50px" data-astro-cid-ab4ihpzs data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Skills.astro" data-astro-source-loc="35:8"> <!-- icon languages --> </div> </div>  </section> </div> <main class="wrapper stack gap-20 lg:gap-48" data-astro-cid-j7pv25f6 data-astro-source-file="/opt/git/antoine/qdz_antoine/src/pages/index.astro" data-astro-source-loc="53:50"> <section class="section with-background with-cta" data-astro-cid-j7pv25f6 data-astro-source-file="/opt/git/antoine/qdz_antoine/src/pages/index.astro" data-astro-source-loc="54:57"> <header class="section-header stack gap-2 lg:gap-4" data-astro-cid-j7pv25f6 data-astro-source-file="/opt/git/antoine/qdz_antoine/src/pages/index.astro" data-astro-source-loc="55:61"> <h3 data-astro-cid-j7pv25f6 data-astro-source-file="/opt/git/antoine/qdz_antoine/src/pages/index.astro" data-astro-source-loc="56:15">Mes projets</h3> <p data-astro-cid-j7pv25f6 data-astro-source-file="/opt/git/antoine/qdz_antoine/src/pages/index.astro" data-astro-source-loc="57:14">
Jetez un œil ci-dessous à certains de mes projets.
</p> </header> <div class="gallery" data-astro-cid-j7pv25f6 data-astro-source-file="/opt/git/antoine/qdz_antoine/src/pages/index.astro" data-astro-source-loc="62:30"> <ul class="grid offset" data-astro-cid-vc5tsdmu data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Grid.astro" data-astro-source-loc="9:89"> <li data-astro-cid-j7pv25f6 data-astro-source-file="/opt/git/antoine/qdz_antoine/src/pages/index.astro" data-astro-source-loc="66:21"> <a class="card" href="/work/dwwm_2023" data-astro-cid-lgkm4u2a data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/PortfolioPreview.astro" data-astro-source-loc="11:40"> <span class="title" data-astro-cid-lgkm4u2a data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/PortfolioPreview.astro" data-astro-source-loc="12:22">DWWM 2023</span> <img src="/assets/dwwm_2023.png" alt="screenshot of the project dwwm 2023" loading="lazy" decoding="async" data-astro-cid-lgkm4u2a data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/PortfolioPreview.astro" data-astro-source-loc="13:3"> </a>  </li><li data-astro-cid-j7pv25f6 data-astro-source-file="/opt/git/antoine/qdz_antoine/src/pages/index.astro" data-astro-source-loc="66:21"> <a class="card" href="/work/lexabox" data-astro-cid-lgkm4u2a data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/PortfolioPreview.astro" data-astro-source-loc="11:40"> <span class="title" data-astro-cid-lgkm4u2a data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/PortfolioPreview.astro" data-astro-source-loc="12:22">Lexabox</span> <img src="/assets/lexabox_screen.png" alt="logo_lexabox" loading="lazy" decoding="async" data-astro-cid-lgkm4u2a data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/PortfolioPreview.astro" data-astro-source-loc="13:3"> </a>  </li> </ul>  </div> <div class="cta" data-astro-cid-j7pv25f6 data-astro-source-file="/opt/git/antoine/qdz_antoine/src/pages/index.astro" data-astro-source-loc="74:26"> <a href="/work/" data-astro-cid-balv45lp data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/CallToAction.astro" data-astro-source-loc="9:17">
Voir plus
<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 256 256" aria-hidden="true" stroke="currentcolor" fill="currentcolor" style="--size:1.2em" class="astro-patnjmll" data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="30:2"> <g data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="31:3"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" d="M40 128h176m-72-72 72 72-72 72"/></g>  </svg>  </a>  </div> </section> </main> </div> <aside data-astro-cid-rcdzuq3a data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/ContactCTA.astro" data-astro-source-loc="6:8"> <h2 data-astro-cid-rcdzuq3a data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/ContactCTA.astro" data-astro-source-loc="7:6">Interressé par une collaboration?</h2> <a href="mailto:antoine.quendez@gmail.com" data-astro-cid-balv45lp data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/CallToAction.astro" data-astro-source-loc="9:17">
Contactez-moi !
<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 256 256" aria-hidden="true" stroke="currentcolor" fill="currentcolor" style="--size:1.2em" class="astro-patnjmll" data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="30:2"> <g data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="31:3"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" d="M210.3 35.9 23.9 88.4a8 8 0 0 0-1.2 15l85.6 40.5a7.8 7.8 0 0 1 3.8 3.8l40.5 85.6a8 8 0 0 0 15-1.2l52.5-186.4a7.9 7.9 0 0 0-9.8-9.8Zm-99.4 109.2 45.2-45.2"/></g>  </svg>  </a>  </aside>   <footer data-astro-cid-sz7xmlte data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Footer.astro" data-astro-source-loc="6:9"> <div class="group" data-astro-cid-sz7xmlte data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Footer.astro" data-astro-source-loc="7:21"> <p data-astro-cid-sz7xmlte data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Footer.astro" data-astro-source-loc="8:6"> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 256 256" aria-hidden="true" stroke="currentcolor" fill="currentcolor" style="--size:1.2em" class="astro-patnjmll" data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="30:2"> <g data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="31:3"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" d="M94.1 184.6c-11.4 33.9-56.6 33.9-56.6 33.9s0-45.2 33.9-56.6m124.5-56.5L128 173.3 82.7 128l67.9-67.9C176.3 34.4 202 34.7 213 36.3a7.8 7.8 0 0 1 6.7 6.7c1.6 11 1.9 36.7-23.8 62.4Z"/><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" d="M184.6 116.7v64.6a8 8 0 0 1-2.4 5.6l-32.3 32.4a8 8 0 0 1-13.5-4.1l-8.4-41.9m11.3-101.9H74.7a8 8 0 0 0-5.6 2.4l-32.4 32.3a8 8 0 0 0 4.1 13.5l41.9 8.4"/></g>  </svg>  </p> <p data-astro-cid-sz7xmlte data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Footer.astro" data-astro-source-loc="12:6">&copy; 2024 Antoine Quendez </p> </div> <p class="socials" data-astro-cid-sz7xmlte data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Footer.astro" data-astro-source-loc="14:21"> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 256 256" aria-hidden="true" stroke="currentcolor" fill="currentcolor" style="--size:1.2em" class="astro-patnjmll" data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="30:2"> <g data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="31:3"><g stroke-linecap="round" stroke-linejoin="round"><path fill="none" stroke-width="14.7" d="M55.7 167.2c13.9 1 21.3 13.1 22.2 14.6 4.2 7.2 10.4 9.6 18.3 7.1l1.1-3.4a60.3 60.3 0 0 1-25.8-11.9c-12-10.1-18-25.6-18-46.3"/><path fill="none" stroke-width="16" d="M61.4 205.1a24.5 24.5 0 0 1-3-6.1c-3.2-7.9-7.1-10.6-7.8-11.1l-1-.6c-2.4-1.6-9.5-6.5-7.2-13.9 1.4-4.5 6-7.2 12.3-7.2h.8c4 .3 7.6 1.5 10.7 3.2-9.1-10.1-13.6-24.3-13.6-42.3 0-11.3 3.5-21.7 10.1-30.4A46.7 46.7 0 0 1 65 67.3a8.3 8.3 0 0 1 5-4.7c2.8-.9 13.3-2.7 33.2 9.9a105 105 0 0 1 50.5 0c19.9-12.6 30.4-10.8 33.2-9.9 2.3.7 4.1 2.4 5 4.7 5 12.7 4 23.2 2.6 29.4 6.7 8.7 10 18.9 10 30.4 0 42.6-25.8 54.7-43.6 58.7 1.4 4.1 2.2 8.8 2.2 13.7l-.1 23.4v2.3"/><path fill="none" stroke-width="16" d="M160.9 185.7c1.4 4.1 2.2 8.8 2.2 13.7l-.1 23.4v2.3A98.6 98.6 0 1 0 61.4 205c-1.4-2.1-11.3-17.5-11.8-17.8-2.4-1.6-9.5-6.5-7.2-13.9 1.4-4.5 6-7.2 12.3-7.2h.8c4 .3 7.6 1.5 10.7 3.2-9.1-10.1-13.6-24.3-13.6-42.3 0-11.3 3.5-21.7 10.1-30.4A46.4 46.4 0 0 1 65 67.3a8.3 8.3 0 0 1 5-4.7c2.8-.9 13.3-2.7 33.2 9.9a105 105 0 0 1 50.5 0c19.9-12.6 30.4-10.8 33.2-9.9 2.3.7 4.1 2.4 5 4.7 5 12.7 4 23.2 2.6 29.4 6.7 8.7 10 18.9 10 30.4.1 42.6-25.8 54.7-43.6 58.6z"/><path fill="none" stroke-width="18.7" d="m170.1 203.3 17.3-12 17.2-18.7 9.5-26.6v-27.9l-9.5-27.5" /><path fill="none" stroke-width="22.7" d="m92.1 57.3 23.3-4.6 18.7-1.4 29.3 5.4m-110 32.6-8 16-4 21.4.6 20.3 3.4 13" /><path fill="none" stroke-width="13.3" d="M28.8 133a100 100 0 0 0 66.9 94.4v-8.7c-22.4 1.8-33-11.5-35.6-19.8-3.4-8.6-7.8-11.4-8.5-11.8"/></g></g>  </svg>  <a href="https://github.com/QDZantoine" data-astro-cid-sz7xmlte data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Footer.astro" data-astro-source-loc="16:43"> GitHub</a> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 256 256" aria-hidden="true" stroke="currentcolor" fill="currentcolor" style="--size:1.2em" class="astro-patnjmll" data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="30:2"> <g data-astro-cid-patnjmll data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Icon.astro" data-astro-source-loc="31:3"><rect width="184" height="184" x="36" y="36" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" rx="8"/><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" d="M120 112v64m-32-64v64m32-36a28 28 0 0 1 56 0v36"/><circle stroke="none" cx="88" cy="80" r="12"/></g>  </svg>  <a href="https://www.linkedin.com/in/antoine-quendez-7090732a0/" data-astro-cid-sz7xmlte data-astro-source-file="/opt/git/antoine/qdz_antoine/src/components/Footer.astro" data-astro-source-loc="18:68"> Linkedin</a> </p> </footer>  </div>   </body> </html> 