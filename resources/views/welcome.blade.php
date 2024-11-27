<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InovaTech</title>
    <script src="https://cdn.tailwindcss.com"></script>

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="relsheet" href="css/app.css">

<style>
    
*, ::after, ::before { box-sizing: border-box; border-width: 0; border-style: solid; border-color: #e5e7eb } ::after, ::before { --tw-content: '' } :host, html { line-height: 1.5; -webkit-text-size-adjust: 100%; -moz-tab-size: 4; tab-size: 4; font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji; font-feature-settings: normal; font-variation-settings: normal; -webkit-tap-highlight-color: transparent } body { margin: 0; line-height: inherit } hr { height: 0; color: inherit; border-top-width: 1px } abbr:where([title]) { -webkit-text-decoration: underline dotted; text-decoration: underline dotted } h1, h2, h3, h4, h5, h6 { font-size: inherit; font-weight: inherit } a { color: inherit; text-decoration: inherit } b, strong { font-weight: bolder } code, kbd, pre, samp { font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; font-feature-settings: normal; font-variation-settings: normal; font-size: 1em } small { font-size: 80% } sub, sup { font-size: 75%; line-height: 0; position: relative; vertical-align: baseline } sub { bottom: -.25em } sup { top: -.5em } table { text-indent: 0; border-color: inherit; border-collapse: collapse } button, input, optgroup, select, textarea { font-family: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 100%; font-weight: inherit; line-height: inherit; color: inherit; margin: 0; padding: 0 } button, select { text-transform: none } [type=button], [type=reset], [type=submit], button { -webkit-appearance: button; background-color: transparent; background-image: none } :-moz-focusring { outline: auto } :-moz-ui-invalid { box-shadow: none } progress { vertical-align: baseline } ::-webkit-inner-spin-button, ::-webkit-outer-spin-button { height: auto } [type=search] { -webkit-appearance: textfield; outline-offset: -2px } ::-webkit-search-decoration { -webkit-appearance: none } ::-webkit-file-upload-button { -webkit-appearance: button; font: inherit } summary { display: list-item } blockquote, dd, dl, figure, h1, h2, h3, h4, h5, h6, hr, p, pre { margin: 0 } fieldset { margin: 0; padding: 0 } legend { padding: 0 } menu, ol, ul { list-style: none; margin: 0; padding: 0 } dialog { padding: 0 } textarea { resize: vertical } input::placeholder, textarea::placeholder { opacity: 1; color: #9ca3af }
[role=button], button { cursor: pointer} :disabled { cursor: default }
audio, canvas, embed, iframe, img, object, svg, video { display: block; vertical-align: middle } img, video {max-width: 100%; height: auto } [hidden] {display: none} *,
::before, ::after { --tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: } ::backdrop { --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: }
.absolute { position: absolute } 
.relative { position: relative } 
.-left-20 { left: -5rem } 
.top-0 { top: 0px }
 .-bottom-16 { bottom: -4rem } 
 .-left-16 { left: -4rem } 
 .-mx-3 { margin-left: -0.75rem; margin-right: -0.75rem } 
 .mt-4 { margin-top: 1rem } .mt-6 { margin-top: 1.5rem } 
 .flex { display: flex } 
 .grid { display: grid } .hidden { display: none } .aspect-video { aspect-ratio: 16 / 9 } .size-12 { width: 3rem; height: 3rem } .size-5 { width: 1.25rem; height: 1.25rem } .size-6 { width: 1.5rem; height: 1.5rem } .h-12 { height: 3rem } .h-40 { height: 10rem } .h-full { height: 100% } .min-h-screen { min-height: 100vh } .w-full { width: 100% } .w-\[calc\(100\%\+8rem\)\] { width: calc(100% + 8rem) } .w-auto { width: auto } .max-w-\[877px\] { max-width: 877px } .max-w-2xl { max-width: 42rem } .flex-1 { flex: 1 1 0% } .shrink-0 { flex-shrink: 0 } .grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)) } .flex-col { flex-direction: column } .items-start { align-items: flex-start } .items-center { align-items: center } .items-stretch { align-items: stretch } .justify-end { justify-content: flex-end } .justify-center { justify-content: center } .gap-2 { gap: 0.5rem } .gap-4 { gap: 1rem } .gap-6 { gap: 1.5rem } .self-center { align-self: center } .overflow-hidden { overflow: hidden } .rounded-\[10px\] { border-radius: 10px } .rounded-full { border-radius: 9999px } .rounded-lg { border-radius: 0.5rem } .rounded-md { border-radius: 0.375rem } .rounded-sm { border-radius: 0.125rem } .bg-\[\#FF2D20\]\/10 { background-color: rgb(255 45 32 / 0.1) } .bg-white { --tw-bg-opacity: 1; background-color: rgb(255 255 255 / var(--tw-bg-opacity)) } .bg-gradient-to-b { background-image: linear-gradient(to bottom, var(--tw-gradient-stops)) }
.from-transparent { --tw-gradient-from: transparent var(--tw-gradient-from-position); --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to) } .via-white { --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position); --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to) } .to-white { --tw-gradient-to: #fff var(--tw-gradient-to-position) } .stroke-\[\#FF2D20\] { stroke: #FF2D20 } .object-cover { object-fit: cover } .object-top { object-position: top } .p-6 { padding: 1.5rem } .px-6 { padding-left: 1.5rem; padding-right: 1.5rem } .py-10 { padding-top: 2.5rem; padding-bottom: 2.5rem } .px-3 { padding-left: 0.75rem; padding-right: 0.75rem } .py-16 { padding-top: 4rem; padding-bottom: 4rem } .py-2 { padding-top: 0.5rem; padding-bottom: 0.5rem } .pt-3 { padding-top: 0.75rem } .text-center { text-align: center } .font-sans { font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji } .text-sm { font-size: 0.875rem; line-height: 1.25rem } .text-sm\/relaxed { font-size: 0.875rem; line-height: 1.625 } .text-xl { font-size: 1.25rem; line-height: 1.75rem } .font-semibold { font-weight: 600 } .text-black { --tw-text-opacity: 1; color: rgb(0 0 0 / var(--tw-text-opacity)) } .text-white { --tw-text-opacity: 1; color: rgb(255 255 255 / var(--tw-text-opacity)) } .underline { -webkit-text-decoration-line: underline; text-decoration-line: underline } .antialiased { -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale } .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] { --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08); --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color); box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) } .ring-1 { --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color); --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color); box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) } .ring-transparent { --tw-ring-color: transparent } .ring-white\/\[0\.05\] { --tw-ring-color: rgb(255 255 255 / 0.05) } .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] { --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06)); filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow) } .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] { --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25)); filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow) } .transition { transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter; transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter; transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-duration: 150ms } .duration-300 { transition-duration: 300ms } .selection\:bg-\[\#FF2D20\] *::selection { --tw-bg-opacity: 1; background-color: rgb(255 45 32 / var(--tw-bg-opacity)) } .selection\:text-white *::selection { --tw-text-opacity: 1; color: rgb(255 255 255 / var(--tw-text-opacity)) } .selection\:bg-\[\#FF2D20\]::selection { --tw-bg-opacity: 1; background-color: rgb(255 45 32 / var(--tw-bg-opacity)) } .selection\:text-white::selection { --tw-text-opacity: 1; color: rgb(255 255 255 / var(--tw-text-opacity)) } .hover\:text-black:hover { --tw-text-opacity: 1; color: rgb(0 0 0 / var(--tw-text-opacity)) } .hover\:text-black\/70:hover { color: rgb(0 0 0 / 0.7) } .hover\:ring-black\/20:hover { --tw-ring-color: rgb(0 0 0 / 0.2) } .focus\:outline-none:focus { outline: 2px solid transparent; outline-offset: 2px } .focus-visible\:ring-1:focus-visible { --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color); --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color); box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) } .focus-visible\:ring-\[\#FF2D20\]:focus-visible { --tw-ring-opacity: 1; --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity)) } @media (min-width: 640px) { .sm\:size-16 { width: 4rem; height: 4rem } .sm\:size-6 { width: 1.5rem; height: 1.5rem } .sm\:pt-5 { padding-top: 1.25rem } }
@media (min-width: 768px) { .md\:row-span-3 { grid-row: span 3 / span 3 } }
@media (min-width: 1024px) { .lg\:col-start-2 { grid-column-start: 2 } .lg\:h-16 { height: 4rem } .lg\:max-w-7xl { max-width: 80rem } .lg\:grid-cols-3 { grid-template-columns: repeat(3, minmax(0, 1fr)) } .lg\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)) } .lg\:flex-col { flex-direction: column } .lg\:items-end { align-items: flex-end } .lg\:justify-center { justify-content: center } .lg\:gap-8 { gap: 2rem } .lg\:p-10 { padding: 2.5rem } .lg\:pb-10 { padding-bottom: 2.5rem } .lg\:pt-0 { padding-top: 0px } .lg\:text-\[\#FF2D20\] { --tw-text-opacity: 1; color: rgb(255 45 32 / var(--tw-text-opacity)) } }
@media (prefers-color-scheme: dark) { .dark\:block { display: block } .dark\:hidden { display: none } .dark\:bg-black { --tw-bg-opacity: 1; background-color: rgb(0 0 0 / var(--tw-bg-opacity)) } .dark\:bg-zinc-900 { --tw-bg-opacity: 1; background-color: rgb(24 24 27 / var(--tw-bg-opacity)) } .dark\:via-zinc-900 { --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position); --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to) } .dark\:to-zinc-900 { --tw-gradient-to: #18181b var(--tw-gradient-to-position) } .dark\:text-white\/50 { color: rgb(255 255 255 / 0.5) } .dark\:text-white { --tw-text-opacity: 1; color: rgb(255 255 255 / var(--tw-text-opacity)) } .dark\:text-white\/70 { color: rgb(255 255 255 / 0.7) } .dark\:ring-zinc-800 { --tw-ring-opacity: 1; --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity)) } .dark\:hover\:text-white:hover { --tw-text-opacity: 1; color: rgb(255 255 255 / var(--tw-text-opacity)) } .dark\:hover\:text-white\/70:hover { color: rgb(255 255 255 / 0.7) } .dark\:hover\:text-white\/80:hover { color: rgb(255 255 255 / 0.8) } .dark\:hover\:ring-zinc-700:hover { --tw-ring-opacity: 1; --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity)) } .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible { --tw-ring-opacity: 1; --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity)) } .dark\:focus-visible\:ring-white:focus-visible { --tw-ring-opacity: 1; --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity)) } .dark\:bg-dark-blue { --tw-bg-opacity: 1; background-color: rgb(0 4 30 / var(--tw-bg-opacity)) } }

body {
margin: 0;
font-family: Arial, sans-serif;
}

.top-bar {
background-color: #000;
color: #fff;
display: flex;
align-items: center;
justify-content: space-between;
padding: 10px 20px;
}

.top-bar .icon {
font-size: 24px;
}

.top-bar .buttons {
display: flex;
gap: 10px;
}

.top-bar .buttons button {
background: none;
border: 1px solid #fff;
color: #fff;
padding: 5px 10px;
cursor: pointer;
border-radius: 3px;
}

.banner {
width: 100%;
height: 60vh;
background: url('../inovaByteBanner.jpg') no-repeat center center;
background-size: cover;
}

.content {
text-align: center;
padding: 20px;
}

.content .title {
font-size: 32px;
margin: 30px 30%;
font-weight: bold;
}

.content .description {
font-size: 18px;
margin: 10px 30%;
line-height: 1.5;
}

.section-title {
font-size: 24px;
font-weight: bold;
margin: 30px 20px;
text-align: left;
width: 100%;
padding-left: 20px;
}
.badges {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: center;
  align-items: flex-start;
  padding: 0 20px;
  min-height: 200px;
}

.badge {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  width: 250px;
  height: 410px;
  text-align: center;
  background-color: #f9f9f9;
  border-radius: 8px;
  padding: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.badge img {
  width: 100%;
  height: auto;
  border-radius: 8px;
}

.badge h4 {
  font-size: 18px; 
  margin: 10px 0;
  text-align: left;
  width: 100%;
  padding-left: 10px;
}

.badge p {
  font-size: 14px;
  color: #666;
  margin-top: 5px;
  text-align: left;
  padding-left: 10px;
}

.badges-container {
  padding: 0 10%;
  width: 100%;
  box-sizing: border-box;
}


hr.separator {
border: 0;
border-top: 2px solid #ccc;
margin: 50px 0;
width: 80%;
margin-left: 10%;
}

</style>

</head>

<body>
    <div class="top-bar">
        @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                    <div class="icon">
                        <a href="{{ url('/dashboard') }}"
                            class="pl-3 rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            ☰
                        </a>
                    </div>
                @else
                    <a href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        sign in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            sign up
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </div>

    <div class="banner"></div>

    <div class="content">
        <div class="title">Bem vindo à InovaByte</div>
        <div class="description">
            A InovaByte está aqui para levar o seu suporte técnico a um novo nível, com foco em qualidade e segurança no
            atendimento. Nossa equipe é formada por especialistas cheios de energia e experiência, sempre prontos para
            solucionar o que você precisar.
        </div>

        <div class="description">
            Estamos prontos para dar aquele help na sua infraestrutura, otimizando tudo para garantir que sua empresa
            funcione de forma rápida e eficiente. Com os produtos certos e uma instalação de primeira, podemos
            transformar o desempenho do seu negócio! </div>

        <div class="description">
            Na InovaByte, cada cliente é uma parceria. Nosso compromisso é com a sua satisfação, oferecendo soluções
            inovadoras e sempre atualizadas com o que há de melhor no mercado.
        </div>
    </div>

    <div class="badges-container">
        <div class="section-title">Nossos Serviços</div>
        <div class="badges">

            <div class="badge">
                <img src="../service2.jpg" alt="Imagem 2">
                <h4>Consultoria em TI</h4>
                <p>Orientação para otimizar a infraestrutura de TI, processos e implementação de tecnologias inovadoras, além de garantir a segurança da informação.</p>
            </div>

            <div class="badge">
                <img src="../service3.jpg" alt="Imagem 3">
                <h4>Suporte de Sistemas</h4>
                <p>Oferecer assistência técnica contínua para sistemas existentes, com atualizações regulares e resolução de problemas técnicos.</p>
            </div>

            <div class="badge">
                <img src="../service5.jpg" alt="Imagem 5">
                <h4>Cibersegurança</h4>
                <p> voltado para proteger os dados e sistemas de empresas contra ataques, com monitoramento, auditorias e implementação de estratégias de proteção.</p>
            </div>

     <!--       <div class="badge">
                <img src="../inovaPlaceholder.jpg" alt="Imagem 1">
                <h4>Desenvolvimento de Software</h4>
                <p>Criação de soluções personalizadas para atender às necessidades específicas de um cliente, como aplicativos móveis, sistemas web, ou software corporativo.</p>
            </div> --> 
            
            <div class="badge">
                <img src="../service4.jpg" alt="Imagem 4">
                <h4>Serviços em Cloud</h4>
                <p>Implementação de soluções baseadas em nuvem, como armazenamento, computação e backups, garantindo escalabilidade e segurança.</p>
            </div>

        </div>
    </div>

    <hr class="separator">

    <footer class="py-4 top-bar ">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-sm">
                <span class="text-gray-200">© 2024 InovaTech, Inc.</span>
                <a href="#" class="text-gray-400 ml-4 hover:underline">Terms</a>
                <a href="#" class="text-gray-400 ml-4 hover:underline">Privacy</a>
                <a href="#" class="text-gray-400 ml-4 hover:underline">Manage cookies</a>
                <a href="#" class="text-gray-400 ml-4 hover:underline">Do not share my personal information</a>
            </div>
            <div class="flex space-x-4">
                <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-x"></i></a>
                <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-youtube"></i></a>
                <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-tiktok"></i></a>
                <a href="https://github.com/JuniorBaumgart/projeto" class="text-gray-400 hover:text-white"><i
                        class="fab fa-github"></i></a>
            </div>
        </div>
    </footer>

    <!-- 
    em 2025 Ana Luisa Domingues Pereira viverá Adoidada 
    --> 

</body>

</html>