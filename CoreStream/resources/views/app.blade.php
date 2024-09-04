<!--
Product: Metronic is a toolkit of UI components built with Tailwind CSS for developing scalable web applications quickly and efficiently
Version: v9.0.4
Author: Keenthemes
Contact: support@keenthemes.com
Website: https://www.keenthemes.com
Support: https://devs.keenthemes.com
Follow: https://www.twitter.com/keenthemes
License: https://keenthemes.com/metronic/tailwind/docs/getting-started/license
-->
<!DOCTYPE html>
<html class="h-full" data-theme="true" data-theme-mode="light" lang="en">
 <head><base href="../../">
  <title>
   Metronic - Tailwind CSS
  </title>
  <meta charset="utf-8"/>
  <meta content="follow, index" name="robots"/>
  <link href="https://keenthemes.com/metronic" rel="canonical"/>
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
  <meta content="" name="description"/>
  <meta content="@keenthemes" name="twitter:site"/>
  <meta content="@keenthemes" name="twitter:creator"/>
  <meta content="summary_large_image" name="twitter:card"/>
  <meta content="Metronic - Tailwind CSS " name="twitter:title"/>
  <meta content="" name="twitter:description"/>
  <meta content="assets/media/app/og-image.png" name="twitter:image"/>
  <meta content="https://keenthemes.com/metronic" property="og:url"/>
  <meta content="en_US" property="og:locale"/>
  <meta content="website" property="og:type"/>
  <meta content="@keenthemes" property="og:site_name"/>
  <meta content="Metronic - Tailwind CSS " property="og:title"/>
  <meta content="" property="og:description"/>
  <meta content="assets/media/app/og-image.png" property="og:image"/>
  <link href="assets/media/app/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180"/>
  <link href="assets/media/app/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png"/>
  <link href="assets/media/app/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png"/>
  <link href="assets/media/app/favicon.ico" rel="shortcut icon"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
  <link href="assets/vendors/apexcharts/apexcharts.css" rel="stylesheet"/>
  <link href="assets/vendors/keenicons/styles.bundle.css" rel="stylesheet"/>
  <link href="assets/css/styles.css" rel="stylesheet"/>
  @routes
  @vite(['resources/css/app.scss', 'resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
  @inertiaHead
 </head>
 <body class="antialiased flex h-full text-base text-gray-700 demo1 sidebar-fixed header-fixed bg-[#fefefe] dark:bg-coal-500">
  <!-- Theme Mode -->
  <script>
   const defaultThemeMode = 'light'; // light|dark|system
		let themeMode;

		if ( document.documentElement ) {
			if ( localStorage.getItem('theme')) {
					themeMode = localStorage.getItem('theme');
			} else if ( document.documentElement.hasAttribute('data-theme-mode')) {
				themeMode = document.documentElement.getAttribute('data-theme-mode');
			} else {
				themeMode = defaultThemeMode;
			}

			if (themeMode === 'system') {
				themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
			}

			document.documentElement.classList.add(themeMode);
		}
  </script>
  <!-- End of Theme Mode -->
  <!-- Page -->
  <!-- Main -->
  <div class="flex grow">
   <!-- Sidebar -->
   <div class="sidebar dark:bg-coal-600 bg-light border-r border-r-gray-200 dark:border-r-coal-100 fixed top-0 bottom-0 z-20 hidden lg:flex flex-col items-stretch shrink-0" data-drawer="true" data-drawer-class="drawer drawer-start top-0 bottom-0" data-drawer-enable="true|lg:false" id="sidebar">
    <div class="sidebar-header hidden lg:flex items-center relative justify-between px-3 lg:px-6 shrink-0" id="sidebar_header">
     <a class="dark:hidden" href="html/demo1.html">
      <img class="default-logo min-h-[22px] max-w-none" src="assets/media/app/default-logo.svg"/>
      <img class="small-logo min-h-[22px] max-w-none" src="assets/media/app/mini-logo.svg"/>
     </a>
     <a class="hidden dark:block" href="html/demo1.html">
      <img class="default-logo min-h-[22px] max-w-none" src="assets/media/app/default-logo-dark.svg"/>
      <img class="small-logo min-h-[22px] max-w-none" src="assets/media/app/mini-logo.svg"/>
     </a>
     <button class="btn btn-icon btn-icon-md size-[30px] rounded-lg border border-gray-200 dark:border-gray-300 bg-light text-gray-500 hover:text-gray-700 toggle absolute left-full top-2/4 -translate-x-2/4 -translate-y-2/4" data-toggle="body" data-toggle-class="sidebar-collapse" id="sidebar_toggle">
      <i class="ki-filled ki-black-left-line toggle-active:rotate-180 transition-all duration-300">
      </i>
     </button>
    </div>
    <div class="sidebar-content flex grow shrink-0 py-5 pr-2" id="sidebar_content">
     <div class="scrollable-y-hover grow shrink-0 flex pl-2 lg:pl-5 pr-1 lg:pr-3" data-scrollable="true" data-scrollable-dependencies="#sidebar_header" data-scrollable-height="auto" data-scrollable-offset="0px" data-scrollable-wrappers="#sidebar_content" id="sidebar_scrollable">
      <!-- Sidebar Menu -->
      <div class="menu flex flex-col grow gap-0.5" data-menu="true" data-menu-accordion-expand-all="false" id="sidebar_menu">
       <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
        <div class="menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] pl-[10px] pr-[10px] py-[6px]" tabindex="0">
         <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
          <i class="ki-filled ki-element-11 text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-medium text-gray-800 menu-item-active:text-primary menu-link-hover:!text-primary">
          Dashboards
         </span>
         <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
          <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
          </i>
          <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
          </i>
         </span>
        </div>
        <div class="menu-accordion gap-0.5 pl-[10px] relative before:absolute before:left-[20px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
         <div class="menu-item">
          <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[14px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Light Sidebar
           </span>
          </a>
         </div>
         <div class="menu-item">
          <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[14px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/dashboards/dark-sidebar.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Dark Sidebar
           </span>
          </a>
         </div>
        </div>
       </div>
       <div class="menu-item pt-2.25 pb-px">
        <span class="menu-heading uppercase text-2sm font-medium text-gray-500 pl-[10px] pr-[10px]">
         User
        </span>
       </div>
       <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
        <div class="menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] pl-[10px] pr-[10px] py-[6px]" tabindex="0">
         <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
          <i class="ki-filled ki-profile-circle text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-medium text-gray-800 menu-item-active:text-primary menu-link-hover:!text-primary">
          Profiles
         </span>
         <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
          <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
          </i>
          <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
          </i>
         </span>
        </div>
        <div class="menu-accordion gap-0.5 pl-[10px] relative before:absolute before:left-[20px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
         <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
          <div class="menu-link border border-transparent grow cursor-pointer gap-[14px] pl-[10px] pr-[10px] py-[8px]" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal mr-1 text-gray-800 menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary">
            Profiles
           </span>
           <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
            </i>
            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
            </i>
           </span>
          </div>
          <div class="menu-accordion gap-0.5 relative before:absolute before:left-[32px] pl-[22px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/public-profile/profiles/default.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Default
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/public-profile/profiles/creator.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Creator
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/public-profile/profiles/company.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Company
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/public-profile/profiles/nft.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              NFT
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/public-profile/profiles/blogger.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Blogger
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/public-profile/profiles/crm.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              CRM
             </span>
            </a>
           </div>
           <div class="menu-item flex-col-reverse" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
            <div class="menu-link border border-transparent grow cursor-pointer gap-[5px] pl-[10px] pr-[10px] py-[8px]" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-600 dark:text-gray-500">
              <span class="hidden menu-item-show:!flex">
               Show less
              </span>
              <span class="flex menu-item-show:hidden">
               Show 4 more
              </span>
             </span>
             <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
              <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
              </i>
              <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
              </i>
             </span>
            </div>
            <div class="menu-accordion gap-0.5">
             <div class="menu-item">
              <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/public-profile/profiles/gamer.html" tabindex="0">
               <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
               </span>
               <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                Gamer
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/public-profile/profiles/feeds.html" tabindex="0">
               <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
               </span>
               <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                Feeds
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/public-profile/profiles/plain.html" tabindex="0">
               <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
               </span>
               <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                Plain
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/public-profile/profiles/modal.html" tabindex="0">
               <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
               </span>
               <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                Modal
               </span>
              </a>
             </div>
            </div>
           </div>
          </div>
         </div>
         <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
          <div class="menu-link border border-transparent grow cursor-pointer gap-[14px] pl-[10px] pr-[10px] py-[8px]" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal mr-1 text-gray-800 menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary">
            Projects
           </span>
           <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
            </i>
            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
            </i>
           </span>
          </div>
          <div class="menu-accordion gap-0.5 relative before:absolute before:left-[32px] pl-[22px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/public-profile/projects/3-columns.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              3 Columns
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/public-profile/projects/2-columns.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              2 Columns
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item">
          <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[14px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/public-profile/works.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Works
           </span>
          </a>
         </div>
         <div class="menu-item">
          <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[14px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/public-profile/teams.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Teams
           </span>
          </a>
         </div>
         <div class="menu-item">
          <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[14px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/public-profile/network.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Network
           </span>
          </a>
         </div>
         <div class="menu-item">
          <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[14px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/public-profile/activity.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Activity
           </span>
          </a>
         </div>
         <div class="menu-item flex-col-reverse" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
          <div class="menu-link border border-transparent grow cursor-pointer gap-[14px] pl-[10px] pr-[10px] py-[8px]" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal text-gray-600 dark:text-gray-500">
            <span class="hidden menu-item-show:!flex">
             Show less
            </span>
            <span class="flex menu-item-show:hidden">
             Show 3 more
            </span>
           </span>
           <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
            </i>
            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
            </i>
           </span>
          </div>
          <div class="menu-accordion gap-0.5">
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[14px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/public-profile/campaigns/card.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Campaigns - Card
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[14px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/public-profile/campaigns/list.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Campaigns - List
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[14px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/public-profile/empty.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Empty
             </span>
            </a>
           </div>
          </div>
         </div>
        </div>
       </div>
       <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
        <div class="menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] pl-[10px] pr-[10px] py-[6px]" tabindex="0">
         <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
          <i class="ki-filled ki-setting-2 text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-medium text-gray-800 menu-item-active:text-primary menu-link-hover:!text-primary">
          My Account
         </span>
         <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
          <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
          </i>
          <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
          </i>
         </span>
        </div>
        <div class="menu-accordion gap-0.5 pl-[10px] relative before:absolute before:left-[20px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
         <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
          <div class="menu-link border border-transparent grow cursor-pointer gap-[14px] pl-[10px] pr-[10px] py-[8px]" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal mr-1 text-gray-800 menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary">
            Account Home
           </span>
           <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
            </i>
            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
            </i>
           </span>
          </div>
          <div class="menu-accordion gap-0.5 relative before:absolute before:left-[32px] pl-[22px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/home/get-started.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Get Started
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/home/user-profile.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              User Profile
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/home/company-profile.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Company Profile
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/home/settings-sidebar.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Settings - With Sidebar
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/home/settings-enterprise.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Settings - Enterprise
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/home/settings-plain.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Settings - Plain
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/home/settings-modal.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Settings - Modal
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
          <div class="menu-link border border-transparent grow cursor-pointer gap-[14px] pl-[10px] pr-[10px] py-[8px]" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal mr-1 text-gray-800 menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary">
            Billing
           </span>
           <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
            </i>
            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
            </i>
           </span>
          </div>
          <div class="menu-accordion gap-0.5 relative before:absolute before:left-[32px] pl-[22px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/billing/basic.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Billing - Basic
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/billing/enterprise.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Billing - Enterprise
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/billing/plans.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Plans
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/billing/history.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Billing History
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
          <div class="menu-link border border-transparent grow cursor-pointer gap-[14px] pl-[10px] pr-[10px] py-[8px]" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal mr-1 text-gray-800 menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary">
            Security
           </span>
           <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
            </i>
            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
            </i>
           </span>
          </div>
          <div class="menu-accordion gap-0.5 relative before:absolute before:left-[32px] pl-[22px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/security/get-started.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Get Started
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/security/overview.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Security Overview
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/security/allowed-ip-addresses.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Allowed IP Addresses
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/security/privacy-settings.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Privacy Settings
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/security/device-management.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Device Management
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/security/backup-and-recovery.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Backup &amp; Recovery
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/security/current-sessions.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Current Sessions
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/security/security-log.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Security Log
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
          <div class="menu-link border border-transparent grow cursor-pointer gap-[14px] pl-[10px] pr-[10px] py-[8px]" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal mr-1 text-gray-800 menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary">
            Members &amp; Roles
           </span>
           <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
            </i>
            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
            </i>
           </span>
          </div>
          <div class="menu-accordion gap-0.5 relative before:absolute before:left-[32px] pl-[22px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/members/team-starter.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Teams Starter
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/members/teams.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Teams
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/members/team-info.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Team Info
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/members/members-starter.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Members Starter
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/members/team-members.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Team Members
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/members/import-members.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Import Members
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/members/roles.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Roles
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/members/permissions-toggle.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Permissions - Toggler
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/members/permissions-check.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Permissions - Check
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item">
          <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[14px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/integrations.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Integrations
           </span>
          </a>
         </div>
         <div class="menu-item">
          <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[14px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/notifications.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Notifications
           </span>
          </a>
         </div>
         <div class="menu-item">
          <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[14px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/api-keys.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            API Keys
           </span>
          </a>
         </div>
         <div class="menu-item flex-col-reverse" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
          <div class="menu-link border border-transparent grow cursor-pointer gap-[14px] pl-[10px] pr-[10px] py-[8px]" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal text-gray-600 dark:text-gray-500">
            <span class="hidden menu-item-show:!flex">
             Show less
            </span>
            <span class="flex menu-item-show:hidden">
             Show 3 more
            </span>
           </span>
           <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
            </i>
            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
            </i>
           </span>
          </div>
          <div class="menu-accordion gap-0.5">
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[14px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/appearance.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Appearance
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[14px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/invite-a-friend.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Invite a Friend
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[14px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/account/activity.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Activity
             </span>
            </a>
           </div>
          </div>
         </div>
        </div>
       </div>
       <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
        <div class="menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] pl-[10px] pr-[10px] py-[6px]" tabindex="0">
         <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
          <i class="ki-filled ki-users text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-medium text-gray-800 menu-item-active:text-primary menu-link-hover:!text-primary">
          Network
         </span>
         <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
          <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
          </i>
          <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
          </i>
         </span>
        </div>
        <div class="menu-accordion gap-0.5 pl-[10px] relative before:absolute before:left-[20px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
         <div class="menu-item">
          <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[14px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/network/get-started.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Get Started
           </span>
          </a>
         </div>
         <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
          <div class="menu-link border border-transparent grow cursor-pointer gap-[14px] pl-[10px] pr-[10px] py-[8px]" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal mr-1 text-gray-800 menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary">
            User Cards
           </span>
           <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
            </i>
            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
            </i>
           </span>
          </div>
          <div class="menu-accordion gap-0.5 relative before:absolute before:left-[32px] pl-[22px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/network/user-cards/mini-cards.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Mini Cards
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/network/user-cards/team-crew.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Team Crew
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/network/user-cards/author.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Author
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/network/user-cards/nft.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              NFT
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/network/user-cards/social.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Social
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
          <div class="menu-link border border-transparent grow cursor-pointer gap-[14px] pl-[10px] pr-[10px] py-[8px]" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal mr-1 text-gray-800 menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary">
            User Table
           </span>
           <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
            </i>
            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
            </i>
           </span>
          </div>
          <div class="menu-accordion gap-0.5 relative before:absolute before:left-[32px] pl-[22px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/network/user-table/team-crew.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Team Crew
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/network/user-table/app-roster.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              App Roster
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/network/user-table/market-authors.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Market Authors
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/network/user-table/saas-users.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              SaaS Users
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/network/user-table/store-clients.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Store Clients
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/network/user-table/visitors.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Visitors
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item">
          <div class="menu-label border border-transparent items-center grow gap-[14px] pl-[10px] pr-[10px] py-[8px]" href="#" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal text-gray-800">
            Cooperations
           </span>
           <span class="menu-badge mr-[-10px]">
            <span class="badge badge-xs">
             Soon
            </span>
           </span>
          </div>
         </div>
         <div class="menu-item">
          <div class="menu-label border border-transparent items-center grow gap-[14px] pl-[10px] pr-[10px] py-[8px]" href="#" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal text-gray-800">
            Leads
           </span>
           <span class="menu-badge mr-[-10px]">
            <span class="badge badge-xs">
             Soon
            </span>
           </span>
          </div>
         </div>
         <div class="menu-item">
          <div class="menu-label border border-transparent items-center grow gap-[14px] pl-[10px] pr-[10px] py-[8px]" href="#" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal text-gray-800">
            Donators
           </span>
           <span class="menu-badge mr-[-10px]">
            <span class="badge badge-xs">
             Soon
            </span>
           </span>
          </div>
         </div>
        </div>
       </div>
       <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
        <div class="menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] pl-[10px] pr-[10px] py-[6px]" tabindex="0">
         <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
          <i class="ki-filled ki-security-user text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-medium text-gray-800 menu-item-active:text-primary menu-link-hover:!text-primary">
          Authentication
         </span>
         <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
          <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
          </i>
          <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
          </i>
         </span>
        </div>
        <div class="menu-accordion gap-0.5 pl-[10px] relative before:absolute before:left-[20px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
         <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
          <div class="menu-link border border-transparent grow cursor-pointer gap-[14px] pl-[10px] pr-[10px] py-[8px]" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal mr-1 text-gray-800 menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary">
            Classic
           </span>
           <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
            </i>
            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
            </i>
           </span>
          </div>
          <div class="menu-accordion gap-0.5 relative before:absolute before:left-[32px] pl-[22px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/authentication/classic/sign-in.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Sign In
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/authentication/classic/sign-up.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Sign Up
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/authentication/classic/2fa.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              2FA
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/authentication/classic/check-email.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Check Email
             </span>
            </a>
           </div>
           <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
            <div class="menu-link border border-transparent grow cursor-pointer gap-[5px] pl-[10px] pr-[10px] py-[8px]" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal mr-1 text-gray-800 menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary">
              Reset Password
             </span>
             <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
              <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
              </i>
              <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
              </i>
             </span>
            </div>
            <div class="menu-accordion gap-0.5 relative before:absolute before:left-[32px] pl-[22px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
             <div class="menu-item">
              <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/authentication/classic/reset-password/enter-email.html" tabindex="0">
               <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
               </span>
               <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                Enter Email
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/authentication/classic/reset-password/check-email.html" tabindex="0">
               <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
               </span>
               <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                Check Email
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/authentication/classic/reset-password/change-password.html" tabindex="0">
               <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
               </span>
               <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                Change Password
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/authentication/classic/reset-password/password-changed.html" tabindex="0">
               <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
               </span>
               <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                Password is Changed
               </span>
              </a>
             </div>
            </div>
           </div>
          </div>
         </div>
         <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
          <div class="menu-link border border-transparent grow cursor-pointer gap-[14px] pl-[10px] pr-[10px] py-[8px]" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal mr-1 text-gray-800 menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary">
            Branded
           </span>
           <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
            </i>
            <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
            </i>
           </span>
          </div>
          <div class="menu-accordion gap-0.5 relative before:absolute before:left-[32px] pl-[22px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/authentication/branded/sign-in.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Sign In
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/authentication/branded/sign-up.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Sign Up
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/authentication/branded/2fa.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              2FA
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/authentication/branded/check-email.html" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
              Check Email
             </span>
            </a>
           </div>
           <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
            <div class="menu-link border border-transparent grow cursor-pointer gap-[5px] pl-[10px] pr-[10px] py-[8px]" tabindex="0">
             <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
             </span>
             <span class="menu-title text-2sm font-normal mr-1 text-gray-800 menu-item-active:text-primary menu-item-active:font-medium menu-link-hover:!text-primary">
              Reset Password
             </span>
             <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
              <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
              </i>
              <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
              </i>
             </span>
            </div>
            <div class="menu-accordion gap-0.5 relative before:absolute before:left-[32px] pl-[22px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
             <div class="menu-item">
              <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/authentication/branded/reset-password/enter-email.html" tabindex="0">
               <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
               </span>
               <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                Enter Email
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/authentication/branded/reset-password/check-email.html" tabindex="0">
               <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
               </span>
               <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                Check Email
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/authentication/branded/reset-password/change-password.html" tabindex="0">
               <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
               </span>
               <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                Change Password
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[5px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/authentication/branded/reset-password/password-changed.html" tabindex="0">
               <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
               </span>
               <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                Password is Changed
               </span>
              </a>
             </div>
            </div>
           </div>
          </div>
         </div>
         <div class="menu-item">
          <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[14px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/authentication/welcome-message.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Welcome Message
           </span>
          </a>
         </div>
         <div class="menu-item">
          <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[14px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/authentication/account-deactivated.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Account Deactivated
           </span>
          </a>
         </div>
         <div class="menu-item">
          <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[14px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/authentication/error-404.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Error 404
           </span>
          </a>
         </div>
         <div class="menu-item">
          <a class="menu-link border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg gap-[14px] pl-[10px] pr-[10px] py-[8px]" href="html/demo1/authentication/error-500.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-normal text-gray-800 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Error 500
           </span>
          </a>
         </div>
        </div>
       </div>
       <div class="menu-item pt-2.25 pb-px">
        <span class="menu-heading uppercase text-2sm font-medium text-gray-500 pl-[10px] pr-[10px]">
         Apps
        </span>
       </div>
       <div class="menu-item">
        <div class="menu-label border border-transparent gap-[10px] pl-[10px] pr-[10px] py-[6px]" href="" tabindex="0">
         <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
          <i class="ki-filled ki-users text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-medium text-gray-800">
          User Management
         </span>
         <span class="menu-badge mr-[-10px]">
          <span class="badge badge-xs">
           Soon
          </span>
         </span>
        </div>
       </div>
       <div class="menu-item">
        <div class="menu-label border border-transparent gap-[10px] pl-[10px] pr-[10px] py-[6px]" href="" tabindex="0">
         <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
          <i class="ki-filled ki-questionnaire-tablet text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-medium text-gray-800">
          Projects
         </span>
         <span class="menu-badge mr-[-10px]">
          <span class="badge badge-xs">
           Soon
          </span>
         </span>
        </div>
       </div>
       <div class="menu-item">
        <div class="menu-label border border-transparent gap-[10px] pl-[10px] pr-[10px] py-[6px]" href="" tabindex="0">
         <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
          <i class="ki-filled ki-handcart text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-medium text-gray-800">
          eCommerce
         </span>
         <span class="menu-badge mr-[-10px]">
          <span class="badge badge-xs">
           Soon
          </span>
         </span>
        </div>
       </div>
       <div class="menu-item pt-2.25 pb-px">
        <span class="menu-heading uppercase text-2sm font-medium text-gray-500 pl-[10px] pr-[10px]">
         Miscellaneous
        </span>
       </div>
       <div class="menu-item">
        <div class="menu-label border border-transparent gap-[10px] pl-[10px] pr-[10px] py-[6px]" href="" tabindex="0">
         <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
          <i class="ki-filled ki-some-files text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-medium text-gray-800">
          Modals
         </span>
         <span class="menu-badge mr-[-10px]">
          <span class="badge badge-xs">
           Soon
          </span>
         </span>
        </div>
       </div>
       <div class="menu-item">
        <div class="menu-label border border-transparent gap-[10px] pl-[10px] pr-[10px] py-[6px]" href="" tabindex="0">
         <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
          <i class="ki-filled ki-note-2 text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-medium text-gray-800">
          Wizards
         </span>
         <span class="menu-badge mr-[-10px]">
          <span class="badge badge-xs">
           Soon
          </span>
         </span>
        </div>
       </div>
      </div>
      <!-- End of Sidebar Menu -->
     </div>
    </div>
   </div>
   <!-- End of Sidebar -->
   <!-- Wrapper -->
   <div class="wrapper flex grow flex-col">
    <!-- Header -->
    <header class="header fixed top-0 z-10 left-0 right-0 flex items-stretch shrink-0 bg-[#fefefe] dark:bg-coal-500" data-sticky="true" data-sticky-class="shadow-sm dark:border-b dark:border-b-coal-100" data-sticky-name="header" id="header">
     <!-- Container -->
     <div class="container-fixed flex justify-between items-stretch lg:gap-4" id="header_container">
      <!-- Mobile Logo -->
      <div class="flex gap-1 lg:hidden items-center -ml-1">
       <a class="shrink-0" href="html/demo1.html">
        <img class="max-h-[25px] w-full" src="assets/media/app/mini-logo.svg"/>
       </a>
       <div class="flex items-center">
        <button class="btn btn-icon btn-light btn-clear btn-sm" data-drawer-toggle="#sidebar">
         <i class="ki-filled ki-menu">
         </i>
        </button>
        <button class="btn btn-icon btn-light btn-clear btn-sm" data-drawer-toggle="#megamenu_wrapper">
         <i class="ki-filled ki-burger-menu-2">
         </i>
        </button>
       </div>
      </div>
      <!-- End of Mobile Logo -->
      <!-- Megamenu -->
      <div class="flex items-stretch" id="megamenu_container">
       <div class="flex items-stretch" data-reparent="true" data-reparent-mode="prepend|lg:prepend" data-reparent-target="body|lg:#megamenu_container">
        <div class="hidden lg:flex lg:items-stretch" data-drawer="true" data-drawer-class="drawer drawer-start fixed z-10 top-0 bottom-0 w-full mr-5 max-w-[250px] p-5 lg:p-0 overflow-auto" data-drawer-enable="true|lg:false" id="megamenu_wrapper">
         <div class="menu flex-col lg:flex-row gap-5 lg:gap-7.5" data-menu="true" id="megamenu">
          <div class="menu-item active">
           <a class="menu-link text-nowrap text-sm text-gray-700 font-medium menu-item-hover:text-primary menu-item-active:text-gray-900 menu-item-active:font-semibold" href="html/demo1.html">
            <span class="menu-title text-nowrap">
             Home
            </span>
           </a>
          </div>
          <div class="menu-item" data-menu-item-placement="bottom-start" data-menu-item-toggle="accordion|lg:dropdown" data-menu-item-trigger="click|lg:hover">
           <div class="menu-link text-sm text-gray-700 font-medium menu-link-hover:text-primary menu-item-active:text-gray-900 menu-item-show:text-primary menu-item-here:text-gray-900 menu-item-active:font-semibold menu-item-here:font-semibold">
            <span class="menu-title text-nowrap">
            Profiles
            </span>
            <span class="menu-arrow flex lg:hidden">
             <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
             </i>
             <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
             </i>
            </span>
           </div>
           <div class="menu-dropdown w-full gap-0 lg:max-w-[875px]">
            <div class="pt-4 pb-2 lg:p-7.5">
             <div class="grid lg:grid-cols-2 gap-5 lg:gap-10">
              <div class="menu menu-default menu-fit flex-col">
               <h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 mb-2 lg:mb-5">
                Profiles
               </h3>
               <div class="grid lg:grid-cols-2 lg:gap-5">
                <div class="flex flex-col">
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/public-profile/profiles/default.html" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-badge">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Default
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/public-profile/profiles/creator.html" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-coffee">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Creator
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/public-profile/profiles/company.html" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-abstract-41">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Company
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/public-profile/profiles/nft.html" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-bitcoin">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    NFT
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/public-profile/profiles/blogger.html" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-message-text">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Blogger
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/public-profile/profiles/crm.html" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-devices">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    CRM
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/public-profile/profiles/gamer.html" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-ghost">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Gamer
                   </span>
                  </a>
                 </div>
                </div>
                <div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/public-profile/profiles/feeds.html" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-book">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Feeds
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/public-profile/profiles/plain.html" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-files">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Plain
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/public-profile/profiles/modal.html" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-mouse-square">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Modal
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="#" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-financial-schedule">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Freelancer
                   </span>
                   <span class="menu-badge">
                    <span class="badge badge-xs">
                     Soon
                    </span>
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="#" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-technology-4">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Developer
                   </span>
                   <span class="menu-badge">
                    <span class="badge badge-xs">
                     Soon
                    </span>
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="#" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-users">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Team
                   </span>
                   <span class="menu-badge">
                    <span class="badge badge-xs">
                     Soon
                    </span>
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="#" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-calendar-tick">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Events
                   </span>
                   <span class="menu-badge">
                    <span class="badge badge-xs">
                     Soon
                    </span>
                   </span>
                  </a>
                 </div>
                </div>
               </div>
              </div>
              <div class="menu menu-default menu-fit flex-col">
               <h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 mb-2 lg:mb-5">
                Other Pages
               </h3>
               <div class="grid lg:grid-cols-2 lg:gap-5">
                <div class="flex flex-col">
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/public-profile/projects/3-columns.html" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-element-6">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Projects - 3 Columns
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/public-profile/projects/2-columns.html" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-element-4">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Projects - 2 Columns
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/public-profile/works.html" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-office-bag">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Works
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/public-profile/teams.html" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-people">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Teams
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/public-profile/network.html" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-icon">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Network
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/public-profile/activity.html" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-chart-line-up-2">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Activity
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/public-profile/campaigns/card.html" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-element-11">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Campaigns - Card
                   </span>
                  </a>
                 </div>
                </div>
                <div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/public-profile/campaigns/list.html" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-kanban">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Campaigns - List
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/public-profile/empty.html" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-file-sheet">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Empty Page
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="#" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-document">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Documents
                   </span>
                   <span class="menu-badge">
                    <span class="badge badge-xs">
                     Soon
                    </span>
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="#" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-award">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Badges
                   </span>
                   <span class="menu-badge">
                    <span class="badge badge-xs">
                     Soon
                    </span>
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="#" tabindex="0">
                   <span class="menu-icon">
                    <i class="ki-filled ki-gift">
                    </i>
                   </span>
                   <span class="menu-title grow-0">
                    Awards
                   </span>
                   <span class="menu-badge">
                    <span class="badge badge-xs">
                     Soon
                    </span>
                   </span>
                  </a>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="flex flex-wrap items-center lg:justify-between rounded-xl lg:rounded-t-none bg-light-active dark:bg-coal-500 border border-gray-300 lg:border-0 lg:border-t lg:border-t-gray-300 dark:lg:border-t-gray-100 px-4 py-4 lg:px-7.5 lg:py-5 gap-2.5">
             <div class="flex flex-col gap-1.5">
              <div class="text-md font-semibold text-gray-900 leading-none">
               Read to Get Started ?
              </div>
              <div class="text-2sm fomt-medium text-gray-600">
               Take your docs to the next level of Metronic
              </div>
             </div>
             <a class="btn btn-sm btn-dark" href="#">
              Read Documentation
             </a>
            </div>
           </div>
          </div>
          <div class="menu-item" data-menu-item-offset="-300px, 0" data-menu-item-overflow="true" data-menu-item-placement="bottom-start" data-menu-item-toggle="accordion|lg:dropdown" data-menu-item-trigger="click|lg:hover">
           <div class="menu-link text-sm text-gray-700 font-medium menu-link-hover:text-primary menu-item-active:text-gray-900 menu-item-show:text-primary menu-item-here:text-gray-900 menu-item-active:font-semibold menu-item-here:font-semibold">
            <span class="menu-title text-nowrap">
             My Account
            </span>
            <span class="menu-arrow flex lg:hidden">
             <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
             </i>
             <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
             </i>
            </span>
           </div>
           <div class="menu-dropdown flex-col lg:flex-row gap-0 w-full lg:max-w-[1240px]">
            <div class="lg:w-[250px] mt-2 lg:mt-0 lg:border-r lg:border-r-gray-200 rounded-xl lg:rounded-l-xl lg:rounded-r-none shrink-0 px-3 py-4 lg:p-7.5 bg-light-active dark:bg-coal-500 dark:lg:border-r-coal-100">
             <h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 mb-2 lg:mb-5">
              General Pages
             </h3>
             <div class="menu menu-default menu-fit flex-col">
              <div class="menu-item">
               <a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100" href="html/demo1/account/integrations.html">
                <span class="menu-icon">
                 <i class="ki-filled ki-technology-2">
                 </i>
                </span>
                <span class="menu-title grow-0">
                 Integrations
                </span>
               </a>
              </div>
              <div class="menu-item">
               <a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100" href="html/demo1/account/notifications.html">
                <span class="menu-icon">
                 <i class="ki-filled ki-notification-1">
                 </i>
                </span>
                <span class="menu-title grow-0">
                 Notifications
                </span>
               </a>
              </div>
              <div class="menu-item">
               <a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100" href="html/demo1/account/api-keys.html">
                <span class="menu-icon">
                 <i class="ki-filled ki-key">
                 </i>
                </span>
                <span class="menu-title grow-0">
                 API Keys
                </span>
               </a>
              </div>
              <div class="menu-item">
               <a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100" href="html/demo1/account/appearance.html">
                <span class="menu-icon">
                 <i class="ki-filled ki-eye">
                 </i>
                </span>
                <span class="menu-title grow-0">
                 Appearance
                </span>
               </a>
              </div>
              <div class="menu-item">
               <a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100" href="html/demo1/account/invite-a-friend.html">
                <span class="menu-icon">
                 <i class="ki-filled ki-user-tick">
                 </i>
                </span>
                <span class="menu-title grow-0">
                 Invite a Friend
                </span>
               </a>
              </div>
              <div class="menu-item">
               <a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100" href="html/demo1/account/activity.html">
                <span class="menu-icon">
                 <i class="ki-filled ki-support">
                 </i>
                </span>
                <span class="menu-title grow-0">
                 Activity
                </span>
               </a>
              </div>
              <div class="menu-item">
               <a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100" href="#">
                <span class="menu-icon">
                 <i class="ki-filled ki-verify">
                 </i>
                </span>
                <span class="menu-title grow-0">
                 Brand
                </span>
                <span class="menu-badge">
                 <span class="badge badge-xs">
                  Soon
                 </span>
                </span>
               </a>
              </div>
              <div class="menu-item">
               <a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100" href="#">
                <span class="menu-icon">
                 <i class="ki-filled ki-euro">
                 </i>
                </span>
                <span class="menu-title grow-0">
                 Get Paid
                </span>
                <span class="menu-badge">
                 <span class="badge badge-xs">
                  Soon
                 </span>
                </span>
               </a>
              </div>
             </div>
            </div>
            <div class="pt-4 pb-2 lg:p-7.5 lg:pb-5 grow">
             <div class="grid lg:grid-cols-5 gap-5">
              <div class="flex flex-col">
               <h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 mb-2 lg:mb-5">
                Account Home
               </h3>
               <div class="menu menu-default menu-fit flex-col">
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/home/get-started.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Get Started
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/home/user-profile.html" tabindex="0">
                  <span class="menu-title grow-0">
                   User Profile
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/home/company-profile.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Company Profile
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html" tabindex="0">
                  <span class="menu-title grow-0">
                   With Sidebar
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/home/settings-enterprise.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Enterprise
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/home/settings-plain.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Plain
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/home/settings-modal.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Modal
                  </span>
                 </a>
                </div>
               </div>
              </div>
              <div class="flex flex-col">
               <h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 mb-2 lg:mb-5">
                Billing
               </h3>
               <div class="menu menu-default menu-fit flex-col">
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/billing/basic.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Basic Billing
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/billing/enterprise.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Enterprise
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/billing/plans.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Plans
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/billing/history.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Billing History
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="#" tabindex="0">
                  <span class="menu-title grow-0">
                   Tax Info
                  </span>
                  <span class="menu-badge">
                   <span class="badge badge-xs">
                    Soon
                   </span>
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="#" tabindex="0">
                  <span class="menu-title grow-0">
                   Invoices
                  </span>
                  <span class="menu-badge">
                   <span class="badge badge-xs">
                    Soon
                   </span>
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="#" tabindex="0">
                  <span class="menu-title grow-0">
                   Gateaways
                  </span>
                  <span class="menu-badge">
                   <span class="badge badge-xs">
                    Soon
                   </span>
                  </span>
                 </a>
                </div>
               </div>
              </div>
              <div class="flex flex-col">
               <h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 mb-2 lg:mb-5">
                Security
               </h3>
               <div class="menu menu-default menu-fit flex-col">
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/security/get-started.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Get Started
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/security/overview.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Security Overview
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/security/allowed-ip-addresses.html" tabindex="0">
                  <span class="menu-title grow-0">
                   IP Addresses
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/security/privacy-settings.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Privacy Settings
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/security/device-management.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Device Management
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/security/backup-and-recovery.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Backup &amp; Recovery
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/security/current-sessions.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Current Sessions
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/security/security-log.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Security Log
                  </span>
                 </a>
                </div>
               </div>
              </div>
              <div class="flex flex-col">
               <h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 mb-2 lg:mb-5">
                Members &amp; Roles
               </h3>
               <div class="menu menu-default menu-fit flex-col">
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/members/team-starter.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Teams Starter
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/members/teams.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Teams
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/members/team-info.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Team Info
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/members/members-starter.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Members Starter
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/members/team-members.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Team Members
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/members/import-members.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Import Members
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/members/roles.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Roles
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/members/permissions-toggle.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Persmissions - Toggler
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/members/permissions-check.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Persmissions - Check
                  </span>
                 </a>
                </div>
               </div>
              </div>
              <div class="flex flex-col">
               <h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 mb-2 lg:mb-5">
                Other Pages
               </h3>
               <div class="menu menu-default menu-fit flex-col">
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/integrations.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Integrations
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/notifications.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Notifications
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/api-keys.html" tabindex="0">
                  <span class="menu-title grow-0">
                   API Keys
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/appearance.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Appearance
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/invite-a-friend.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Invite a Friend
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/activity.html" tabindex="0">
                  <span class="menu-title grow-0">
                   Activity
                  </span>
                 </a>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="menu-item" data-menu-item-offset="-300px, 0" data-menu-item-overflow="true" data-menu-item-placement="bottom-start" data-menu-item-toggle="accordion|lg:dropdown" data-menu-item-trigger="click|lg:hover">
           <div class="menu-link text-sm text-gray-700 font-medium menu-link-hover:text-primary menu-item-active:text-gray-900 menu-item-show:text-primary menu-item-here:text-gray-900 menu-item-active:font-semibold menu-item-here:font-semibold">
            <span class="menu-title text-nowrap">
             Network
            </span>
            <span class="menu-arrow flex lg:hidden">
             <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
             </i>
             <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
             </i>
            </span>
           </div>
           <div class="menu-dropdown flex-col gap-0 w-full lg:max-w-[670px]">
            <div class="flex flex-col lg:flex-row">
             <div class="flex flex-col gap-5 lg:w-[250px] mt-2 lg:mt-0 lg:border-r lg:border-r-gray-200 rounded-xl lg:rounded-none lg:rounded-tl-xl shrink-0 px-3 py-4 lg:p-7.5 bg-light-active dark:bg-coal-500 dark:lg:border-r-coal-100">
              <h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 h-3.5">
               General Pages
              </h3>
              <div class="menu menu-default menu-fit flex-col">
               <div class="menu-item">
                <a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100" href="#">
                 <span class="menu-icon">
                  <i class="ki-filled ki-flag">
                  </i>
                 </span>
                 <span class="menu-title grow-0">
                  Get Started
                 </span>
                </a>
               </div>
               <div class="menu-item">
                <a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100" href="#">
                 <span class="menu-icon">
                  <i class="ki-filled ki-users">
                  </i>
                 </span>
                 <span class="menu-title grow-0">
                  Colleagues
                 </span>
                 <span class="menu-badge">
                  <span class="badge badge-xs">
                   Soon
                  </span>
                 </span>
                </a>
               </div>
               <div class="menu-item">
                <a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100" href="#">
                 <span class="menu-icon">
                  <i class="ki-filled ki-heart">
                  </i>
                 </span>
                 <span class="menu-title grow-0">
                  Donators
                 </span>
                 <span class="menu-badge">
                  <span class="badge badge-xs">
                   Soon
                  </span>
                 </span>
                </a>
               </div>
               <div class="menu-item">
                <a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100" href="#">
                 <span class="menu-icon">
                  <i class="ki-filled ki-abstract-21">
                  </i>
                 </span>
                 <span class="menu-title grow-0">
                  Leads
                 </span>
                 <span class="menu-badge">
                  <span class="badge badge-xs">
                   Soon
                  </span>
                 </span>
                </a>
               </div>
              </div>
             </div>
             <div class="pt-4 pb-2 lg:p-7.5 lg:pb-5 grow">
              <div class="grid lg:grid-cols-2 gap-5">
               <div class="flex flex-col gap-5">
                <h3 class="flex items-center gap-1.5 text-sm text-gray-800 font-semibold leading-none pl-2.5 h-3.5">
                 User Cards
                </h3>
                <div class="menu menu-default menu-fit flex-col">
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/network/user-cards/mini-cards.html" tabindex="0">
                   <span class="menu-title grow-0">
                    Mini Cards
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/network/user-cards/author.html" tabindex="0">
                   <span class="menu-title grow-0">
                    Team Members
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/network/user-cards/nft.html" tabindex="0">
                   <span class="menu-title grow-0">
                    Authors
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/network/user-cards/social.html" tabindex="0">
                   <span class="menu-title grow-0">
                    NFT Users
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="#" tabindex="0">
                   <span class="menu-title grow-0">
                    Social Users
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="#" tabindex="0">
                   <span class="menu-title grow-0">
                    Gamers
                   </span>
                   <span class="menu-badge">
                    <span class="badge badge-xs">
                     Soon
                    </span>
                   </span>
                  </a>
                 </div>
                </div>
               </div>
               <div class="flex flex-col gap-5">
                <h3 class="flex items-center gap-1.5 text-sm text-gray-800 font-semibold leading-none pl-2.5 h-3.5">
                 User Base
                 <span class="left-auto badge badge-xs badge-primary badge-outline">
                  Datatables
                 </span>
                </h3>
                <div class="menu menu-default menu-fit flex-col">
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/network/user-base/team-crew.html" tabindex="0">
                   <span class="menu-title grow-0">
                    Team Crew
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/network/user-base/app-roster.html" tabindex="0">
                   <span class="menu-title grow-0">
                    App Roster
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/network/user-base/market-authors.html" tabindex="0">
                   <span class="menu-title grow-0">
                    Market Authors
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/network/user-base/saas-users.html" tabindex="0">
                   <span class="menu-title grow-0">
                    SaaS Users
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/network/user-base/store-clients.html" tabindex="0">
                   <span class="menu-title grow-0">
                    Store Clients
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/network/user-base/visitors.html" tabindex="0">
                   <span class="menu-title grow-0">
                    Visitors
                   </span>
                  </a>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="flex flex-wrap items-center lg:justify-between rounded-xl lg:rounded-t-none bg-light-active dark:bg-coal-500 border border-gray-300 lg:border-0 lg:border-t lg:border-t-gray-300 dark:lg:border-t-gray-100 px-4 py-4 lg:px-7.5 lg:py-5 gap-2.5">
             <div class="flex flex-col gap-1.5">
              <div class="text-md font-semibold text-gray-900 leading-none">
               Read to Get Started ?
              </div>
              <div class="text-2sm fomt-medium text-gray-600">
               Take your docs to the next level of Metronic
              </div>
             </div>
             <a class="btn btn-sm btn-dark" href="#">
              Read Documentation
             </a>
            </div>
           </div>
          </div>
          <div class="menu-item" data-menu-item-offset="-300px, 0" data-menu-item-overflow="true" data-menu-item-placement="bottom-start" data-menu-item-toggle="accordion|lg:dropdown" data-menu-item-trigger="click|lg:hover">
           <div class="menu-link text-sm text-gray-700 font-medium menu-link-hover:text-primary menu-item-active:text-gray-900 menu-item-show:text-primary menu-item-here:text-gray-900 menu-item-active:font-semibold menu-item-here:font-semibold">
            <span class="menu-title text-nowrap">
             Authentication
            </span>
            <span class="menu-arrow flex lg:hidden">
             <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
             </i>
             <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
             </i>
            </span>
           </div>
           <div class="menu-dropdown flex-col gap-0 w-full lg:max-w-[670px]">
            <div class="flex flex-col lg:flex-row">
             <div class="pt-4 pb-2 lg:p-7.5 lg:pb-5 grow">
              <div class="grid lg:grid-cols-2 gap-5">
               <div class="flex flex-col">
                <h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 mb-2 lg:mb-5">
                 Classic Layout
                </h3>
                <div class="menu menu-default menu-fit flex-col">
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/authentication/classic/sign-in.html" tabindex="0">
                   <span class="menu-title grow-0">
                    Sign In
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/authentication/classic/sign-up.html" tabindex="0">
                   <span class="menu-title grow-0">
                    Sign Up
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/authentication/classic/2fa.html" tabindex="0">
                   <span class="menu-title grow-0">
                    2FA
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/authentication/classic/check-email.html" tabindex="0">
                   <span class="menu-title grow-0">
                    Check Email
                   </span>
                  </a>
                 </div>
                 <div class="menu-item pt-1">
                  <span class="text-gray-600 font-medium text-2sm p-2.5">
                   Reset Password
                  </span>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/authentication/classic/reset-password/enter-email.html" tabindex="0">
                   <span class="menu-title grow-0">
                    Enter Email
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/authentication/classic/reset-password/check-email.html" tabindex="0">
                   <span class="menu-title grow-0">
                    Check Email
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/authentication/classic/reset-password/change-password.html" tabindex="0">
                   <span class="menu-title grow-0">
                    Change Password
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/authentication/classic/reset-password/password-changed.html" tabindex="0">
                   <span class="menu-title grow-0">
                    Password is Changed
                   </span>
                  </a>
                 </div>
                </div>
               </div>
               <div class="flex flex-col">
                <h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 mb-2 lg:mb-5">
                 Branded Layout
                </h3>
                <div class="menu menu-default menu-fit flex-col">
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/authentication/branded/sign-in.html" tabindex="0">
                   <span class="menu-title grow-0">
                    Sign In
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/authentication/branded/sign-up.html" tabindex="0">
                   <span class="menu-title grow-0">
                    Sign Up
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/authentication/branded/2fa.html" tabindex="0">
                   <span class="menu-title grow-0">
                    2FA
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/authentication/branded/check-email.html" tabindex="0">
                   <span class="menu-title grow-0">
                    Check Email
                   </span>
                  </a>
                 </div>
                 <div class="menu-item pt-1">
                  <span class="text-gray-600 font-medium text-2sm p-2.5">
                   Reset Password
                  </span>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/authentication/branded/reset-password/enter-email.html" tabindex="0">
                   <span class="menu-title grow-0">
                    Enter Email
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/authentication/branded/reset-password/check-email.html" tabindex="0">
                   <span class="menu-title grow-0">
                    Check Email
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/authentication/branded/reset-password/change-password.html" tabindex="0">
                   <span class="menu-title grow-0">
                    Change Password
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="html/demo1/authentication/branded/reset-password/password-changed.html" tabindex="0">
                   <span class="menu-title grow-0">
                    Password is Changed
                   </span>
                  </a>
                 </div>
                </div>
               </div>
              </div>
             </div>
             <div class="lg:w-[250px] mb-4 lg:mb-0 lg:border-l lg:border-l-gray-200 rounded-xl lg:rounded-r-xl lg:rounded-l-none shrink-0 px-3 py-4 lg:p-7.5 bg-light-active dark:bg-coal-500 dark:lg:border-l-coal-100">
              <h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 mb-5">
               Other Pages
              </h3>
              <div class="menu menu-default menu-fit flex-col">
               <div class="menu-item">
                <a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100" href="html/demo1/authentication/welcome-message.html">
                 <span class="menu-icon">
                  <i class="ki-filled ki-like-2">
                  </i>
                 </span>
                 <span class="menu-title grow-0">
                  Welcome Message
                 </span>
                </a>
               </div>
               <div class="menu-item">
                <a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100" href="html/demo1/authentication/account-deactivated.html">
                 <span class="menu-icon">
                  <i class="ki-filled ki-shield-cross">
                  </i>
                 </span>
                 <span class="menu-title grow-0">
                  Account Deactivated
                 </span>
                </a>
               </div>
               <div class="menu-item">
                <a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100" href="html/demo1/authentication/error-404.html">
                 <span class="menu-icon">
                  <i class="ki-filled ki-message-question">
                  </i>
                 </span>
                 <span class="menu-title grow-0">
                  Error 404
                 </span>
                </a>
               </div>
               <div class="menu-item">
                <a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100" href="html/demo1/authentication/error-500.html">
                 <span class="menu-icon">
                  <i class="ki-filled ki-information">
                  </i>
                 </span>
                 <span class="menu-title grow-0">
                  Error 500
                 </span>
                </a>
               </div>
              </div>
             </div>
            </div>
            <div class="flex flex-wrap items-center lg:justify-between rounded-xl lg:rounded-t-none bg-light-active dark:bg-coal-500 border border-gray-300 lg:border-0 lg:border-t lg:border-t-gray-300 dark:lg:border-t-gray-100 px-4 py-4 lg:px-7.5 lg:py-5 gap-2.5">
             <div class="flex flex-col gap-1.5">
              <div class="text-md font-semibold text-gray-900 leading-none">
               Read to Get Started ?
              </div>
              <div class="text-2sm fomt-medium text-gray-600">
               Take your docs to the next level of Metronic
              </div>
             </div>
             <a class="btn btn-sm btn-dark" href="#">
              Read Documentation
             </a>
            </div>
           </div>
          </div>
          <div class="menu-item" data-menu-item-offset="0,0|lg:-20px, 0" data-menu-item-overflow="true" data-menu-item-placement="bottom-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
           <div class="menu-link text-sm text-gray-700 font-medium menu-link-hover:text-primary menu-item-active:text-gray-900 menu-item-show:text-primary menu-item-here:text-gray-900 menu-item-active:font-semibold menu-item-here:font-semibold">
            <span class="menu-title text-nowrap">
             Help
            </span>
            <span class="menu-arrow flex lg:hidden">
             <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
             </i>
             <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
             </i>
            </span>
           </div>
           <div class="menu-dropdown menu-default py-2.5 w-full max-w-[220px]">
            <div class="menu-item">
             <a class="menu-link" href="https://keenthemes.com/metronic/tailwind/docs/getting-started/installation" tabindex="0">
              <span class="menu-icon">
               <i class="ki-filled ki-coffee">
               </i>
              </span>
              <span class="menu-title grow-0">
               Getting Started
              </span>
             </a>
            </div>
            <div class="menu-item" data-menu-item-placement="right-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
             <div class="menu-link">
              <span class="menu-icon">
               <i class="ki-filled ki-information">
               </i>
              </span>
              <span class="menu-title">
               Support Forum
              </span>
              <span class="menu-arrow">
               <i class="ki-filled ki-right text-3xs">
               </i>
              </span>
             </div>
             <div class="menu-dropdown menu-default w-full max-w-[175px] lg:max-w-[220px]">
              <div class="menu-item">
               <a class="menu-link" href="https://devs.keenthemes.com" tabindex="0">
                <span class="menu-icon">
                 <i class="ki-filled ki-questionnaire-tablet">
                 </i>
                </span>
                <span class="menu-title grow-0">
                 All Questions
                </span>
               </a>
              </div>
              <div class="menu-item">
               <a class="menu-link" href="https://devs.keenthemes.com/popular" tabindex="0">
                <span class="menu-icon">
                 <i class="ki-filled ki-star">
                 </i>
                </span>
                <span class="menu-title grow-0">
                 Popular Questions
                </span>
               </a>
              </div>
              <div class="menu-item">
               <a class="menu-link" href="https://devs.keenthemes.com/question/create" tabindex="0">
                <span class="menu-icon">
                 <i class="ki-filled ki-message-question">
                 </i>
                </span>
                <span class="menu-title grow-0">
                 Ask Question
                </span>
               </a>
              </div>
             </div>
            </div>
            <div class="menu-item">
             <a class="menu-link" href="https://keenthemes.com/metronic/tailwind/docs/getting-started/license" tabindex="0">
              <span class="menu-icon">
               <i class="ki-filled ki-subtitle">
               </i>
              </span>
              <span class="menu-title">
               Licenses &amp; FAQ
              </span>
              <span class="menu-badge" data-tooltip="#menu_tooltip_3">
               <i class="ki-filled ki-information-2 text-gray-500 text-md">
               </i>
              </span>
              <div class="tooltip" id="menu_tooltip_3">
               Learn more about licenses
              </div>
             </a>
            </div>
            <div class="menu-item">
             <a class="menu-link" href="https://keenthemes.com/metronic/tailwind/docs" tabindex="0">
              <span class="menu-icon">
               <i class="ki-filled ki-questionnaire-tablet">
               </i>
              </span>
              <span class="menu-title grow-0">
               Documentation
              </span>
             </a>
            </div>
            <div class="menu-separator">
            </div>
            <div class="menu-item">
             <a class="menu-link" href="https://keenthemes.com/contact" tabindex="0">
              <span class="menu-icon">
               <i class="ki-filled ki-share">
               </i>
              </span>
              <span class="menu-title grow-0">
               Contact Us
              </span>
             </a>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
      <!-- End of Megamenu -->
      <!-- Topbar -->
      <div class="flex items-center gap-2 lg:gap-3.5">
       <button class="btn btn-icon btn-icon-lg size-9 rounded-full hover:bg-primary-light hover:text-primary text-gray-500" data-modal-toggle="#search_modal">
        <i class="ki-filled ki-magnifier">
        </i>
       </button>
       <div class="dropdown" data-dropdown="true" data-dropdown-offset="170px, 10px" data-dropdown-placement="bottom-end" data-dropdown-trigger="click|lg:click">
        <button class="dropdown-toggle btn btn-icon btn-icon-lg size-9 rounded-full hover:bg-primary-light hover:text-primary dropdown-open:bg-primary-light dropdown-open:text-primary text-gray-500">
         <i class="ki-filled ki-messages">
         </i>
        </button>
        <div class="dropdown-content light:border-gray-300 w-full max-w-[450px]">
         <div class="">
          <div class="flex items-center justify-between gap-2.5 text-sm text-gray-900 font-semibold px-5 py-2.5">
           Chat
           <button class="btn btn-sm btn-icon btn-light btn-clear shrink-0" data-dropdown-dismiss="true">
            <i class="ki-filled ki-cross">
            </i>
           </button>
          </div>
          <div class="border-b border-b-gray-200">
          </div>
          <div class="shadow-card border-b border-gray-200 py-2.5">
           <div class="flex items-center justify-between flex-wrap gap-2 px-5">
            <div class="flex items-center flex-wrap gap-2">
             <div class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-200 size-11">
              <img alt="" class="size-7" src="assets/media/brand-logos/gitlab.svg"/>
             </div>
             <div class="flex flex-col">
              <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
               HR Team
              </a>
              <span class="text-2xs font-medium italic text-gray-500">
               Jessy is typing..
              </span>
             </div>
            </div>
            <div class="flex items-center gap-2.5">
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-4.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-1.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-2.png"/>
              </div>
              <div class="flex">
               <span class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse size-6 ring-success-light bg-success">
                +10
               </span>
              </div>
             </div>
             <div class="menu" data-menu="true">
              <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
               <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                <i class="ki-filled ki-dots-vertical">
                </i>
               </button>
               <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/members/teams.html">
                  <span class="menu-icon">
                   <i class="ki-filled ki-users">
                   </i>
                  </span>
                  <span class="menu-title">
                   Invite Users
                  </span>
                 </a>
                </div>
                <div class="menu-item" data-menu-item-offset="-15px, 0" data-menu-item-placement="right-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
                 <div class="menu-link">
                  <span class="menu-icon">
                   <i class="ki-filled ki-people">
                   </i>
                  </span>
                  <span class="menu-title">
                   Team
                  </span>
                  <span class="menu-arrow">
                   <i class="ki-filled ki-right text-3xs">
                   </i>
                  </span>
                 </div>
                 <div class="menu-dropdown menu-default w-full max-w-[175px]">
                  <div class="menu-item">
                   <a class="menu-link" href="html/demo1/account/members/import-members.html">
                    <span class="menu-icon">
                     <i class="ki-filled ki-shield-search">
                     </i>
                    </span>
                    <span class="menu-title">
                     Find Members
                    </span>
                   </a>
                  </div>
                  <div class="menu-item">
                   <a class="menu-link" href="html/demo1/account/members/import-members.html">
                    <span class="menu-icon">
                     <i class="ki-filled ki-calendar">
                     </i>
                    </span>
                    <span class="menu-title">
                     Meetings
                    </span>
                   </a>
                  </div>
                  <div class="menu-item">
                   <a class="menu-link" href="html/demo1/account/members/import-members.html">
                    <span class="menu-icon">
                     <i class="ki-filled ki-filter-edit">
                     </i>
                    </span>
                    <span class="menu-title">
                     Group Settings
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/security/privacy-settings.html">
                  <span class="menu-icon">
                   <i class="ki-filled ki-setting-3">
                   </i>
                  </span>
                  <span class="menu-title">
                   Settings
                  </span>
                 </a>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
         <div class="scrollable-y-auto" data-scrollable="true" data-scrollable-dependencies="#header" data-scrollable-max-height="auto" data-scrollable-offset="280px">
          <div class="flex flex-col gap-5 py-5">
           <div class="flex items-end gap-3.5 px-5">
            <img alt="" class="rounded-full size-9" src="assets/media/avatars/300-5.png"/>
            <div class="flex flex-col gap-1.5">
             <div class="card shadow-none flex flex-col bg-gray-100 gap-2.5 p-3 rounded-bl-none">
              <p class="text-2sm font-medium text-gray-700">
               Hello!
               <br/>
               Next week we are closing the project. Do You have questions?
              </p>
             </div>
             <span class="text-2xs font-medium text-gray-500">
              14:04
             </span>
            </div>
           </div>
           <div class="flex items-end justify-end gap-3.5 px-5">
            <div class="flex flex-col gap-1.5">
             <div class="card shadow-none flex bg-primary flex-col gap-2.5 p-3 rounded-br-none">
              <p class="text-2sm font-medium text-light">
               This is excellent news!
              </p>
             </div>
             <div class="flex items-center justify-end relative">
              <span class="text-2xs font-medium text-gray-600 mr-6">
               14:08
              </span>
              <i class="ki-filled ki-double-check text-lg absolute text-success">
              </i>
             </div>
            </div>
            <div class="relative shrink-0">
             <img alt="" class="rounded-full size-9" src="assets/media/avatars/300-2.png"/>
             <span class="size-[4.8px] badge badge-circle badge-success absolute top-7 end-0 transform -translate-y-1/2">
             </span>
            </div>
           </div>
           <div class="flex items-end gap-3.5 px-5">
            <img alt="" class="rounded-full size-9" src="assets/media/avatars/300-4.png"/>
            <div class="flex flex-col gap-1.5">
             <div class="card shadow-none flex flex-col bg-gray-100 gap-2.5 p-3 rounded-bl-none">
              <p class="text-2sm font-medium text-gray-700">
               I have checked the features, can not wait to demo them!
              </p>
             </div>
             <span class="text-2xs font-medium text-gray-500">
              14:26
             </span>
            </div>
           </div>
           <div class="flex items-end gap-3.5 px-5">
            <img alt="" class="rounded-full size-9" src="assets/media/avatars/300-1.png"/>
            <div class="flex flex-col gap-1.5">
             <div class="card shadow-none flex flex-col bg-gray-100 gap-2.5 p-3 rounded-bl-none">
              <p class="text-2sm font-medium text-gray-700">
               I have looked over the rollout plan, and everything seems spot on. I am ready on my end and can not wait for the user feedback.
              </p>
             </div>
             <span class="text-2xs font-medium text-gray-500">
              15:09
             </span>
            </div>
           </div>
           <div class="flex items-end justify-end gap-3.5 px-5">
            <div class="flex flex-col gap-1.5">
             <div class="card shadow-none flex bg-primary flex-col gap-2.5 p-3 rounded-br-none">
              <p class="text-2sm font-medium text-light">
               Haven't seen the build yet, I'll look now.
              </p>
             </div>
             <div class="flex items-center justify-end relative">
              <span class="text-2xs font-medium text-gray-600 mr-6">
               15:52
              </span>
              <i class="ki-filled ki-double-check text-lg absolute text-gray-400">
              </i>
             </div>
            </div>
            <div class="relative shrink-0">
             <img alt="" class="rounded-full size-9" src="assets/media/avatars/300-2.png"/>
             <span class="size-[4.8px] badge badge-circle badge-success absolute top-7 end-0 transform -translate-y-1/2">
             </span>
            </div>
           </div>
           <div class="flex items-end justify-end gap-3.5 px-5">
            <div class="flex flex-col gap-1.5">
             <div class="card shadow-none flex bg-primary flex-col gap-2.5 p-3 rounded-br-none">
              <p class="text-2sm font-medium text-light">
               Checking the build now
              </p>
             </div>
             <div class="flex items-center justify-end relative">
              <span class="text-2xs font-medium text-gray-600 mr-6">
               15:52
              </span>
              <i class="ki-filled ki-double-check text-lg absolute text-gray-400">
              </i>
             </div>
            </div>
            <div class="relative shrink-0">
             <img alt="" class="rounded-full size-9" src="assets/media/avatars/300-2.png"/>
             <span class="size-[4.8px] badge badge-circle badge-success absolute top-7 end-0 transform -translate-y-1/2">
             </span>
            </div>
           </div>
           <div class="flex items-end gap-3.5 px-5">
            <img alt="" class="rounded-full size-9" src="assets/media/avatars/300-4.png"/>
            <div class="flex flex-col gap-1.5">
             <div class="card shadow-none flex flex-col bg-gray-100 gap-2.5 p-3 rounded-bl-none">
              <p class="text-2sm font-medium text-gray-700">
               Tomorrow, I will send the link for the meeting
              </p>
             </div>
             <span class="text-2xs font-medium text-gray-500">
              17:40
             </span>
            </div>
           </div>
          </div>
         </div>
         <div class="mb-2.5">
          <div class="flex grow gap-2 p-5 bg-gray-100 mb-2.5" id="join_request">
           <div class="relative shrink-0">
            <img alt="" class="rounded-full size-8" src="assets/media/avatars/300-14.png"/>
            <span class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
            </span>
           </div>
           <div class="flex items-center justify-between gap-3 grow">
            <div class="flex flex-col">
             <div class="text-2sm mb-px">
              <a class="hover:text-primary-active font-semibold text-gray-900" href="#">
               Jane Perez
              </a>
              <span class="text-gray-600">
               wants to join chat
              </span>
             </div>
             <span class="flex items-center text-2xs font-medium text-gray-500">
              1 day ago
              <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
              </span>
              Design Team
             </span>
            </div>
            <div class="flex gap-2.5">
             <button class="btn btn-light btn-xs" data-dismiss="#join_request">
              Decline
             </button>
             <button class="btn btn-dark btn-xs">
              Accept
             </button>
            </div>
           </div>
          </div>
          <div class="relative grow mx-5">
           <img alt="" class="rounded-full size-[30px] absolute left-0 top-2/4 -translate-y-2/4 ms-2.5" src="assets/media/avatars/300-2.png"/>
           <input class="input h-auto py-4 ps-12 bg-transparent" placeholder="Write a message..." type="text" value=""/>
           <div class="flex items-center gap-2.5 absolute right-3 top-1/2 -translate-y-1/2">
            <button class="btn btn-sm btn-icon btn-light btn-clear">
             <i class="ki-filled ki-exit-up">
             </i>
            </button>
            <a class="btn btn-dark btn-sm" href="#">
             Send
            </a>
           </div>
          </div>
         </div>
        </div>
       </div>
       <div class="dropdown" data-dropdown="true" data-dropdown-offset="10px, 10px" data-dropdown-placement="bottom-end" data-dropdown-trigger="click|lg:click">
        <button class="dropdown-toggle btn btn-icon btn-icon-lg size-9 rounded-full hover:bg-primary-light hover:text-primary dropdown-open:bg-primary-light dropdown-open:text-primary text-gray-500">
         <i class="ki-filled ki-element-11">
         </i>
        </button>
        <div class="dropdown-content light:border-gray-300 w-full max-w-[320px]">
         <div class="flex items-center justify-between gap-2.5 text-2xs text-gray-600 font-medium px-5 py-3 border-b border-b-gray-200">
          <span>
           Apps
          </span>
          <span>
           Enabled
          </span>
         </div>
         <div class="flex flex-col scrollable-y-auto max-h-[400px] divide-y divide-gray-200">
          <div class="flex items-center justify-between flex-wrap gap-2 px-5 py-3.5">
           <div class="flex items-center flex-wrap gap-2">
            <div class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-200 size-10">
             <img alt="" class="size-6" src="assets/media/brand-logos/jira.svg"/>
            </div>
            <div class="flex flex-col">
             <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
              Jira
             </a>
             <span class="text-2xs font-medium text-gray-600">
              Project management
             </span>
            </div>
           </div>
           <div class="flex items-center gap-2 lg:gap-5">
            <label class="switch switch-sm">
             <input type="checkbox" value="2"/>
            </label>
           </div>
          </div>
          <div class="flex items-center justify-between flex-wrap gap-2 px-5 py-3.5">
           <div class="flex items-center flex-wrap gap-2">
            <div class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-200 size-10">
             <img alt="" class="size-6" src="assets/media/brand-logos/inferno.svg"/>
            </div>
            <div class="flex flex-col">
             <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
              Inferno
             </a>
             <span class="text-2xs font-medium text-gray-600">
              Ensures healthcare app
             </span>
            </div>
           </div>
           <div class="flex items-center gap-2 lg:gap-5">
            <label class="switch switch-sm">
             <input checked="" type="checkbox" value="1"/>
            </label>
           </div>
          </div>
          <div class="flex items-center justify-between flex-wrap gap-2 px-5 py-3.5">
           <div class="flex items-center flex-wrap gap-2">
            <div class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-200 size-10">
             <img alt="" class="size-6" src="assets/media/brand-logos/evernote.svg"/>
            </div>
            <div class="flex flex-col">
             <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
              Evernote
             </a>
             <span class="text-2xs font-medium text-gray-600">
              Notes management app
             </span>
            </div>
           </div>
           <div class="flex items-center gap-2 lg:gap-5">
            <label class="switch switch-sm">
             <input checked="" type="checkbox" value="1"/>
            </label>
           </div>
          </div>
          <div class="flex items-center justify-between flex-wrap gap-2 px-5 py-3.5">
           <div class="flex items-center flex-wrap gap-2">
            <div class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-200 size-10">
             <img alt="" class="size-6" src="assets/media/brand-logos/gitlab.svg"/>
            </div>
            <div class="flex flex-col">
             <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
              Gitlab
             </a>
             <span class="text-2xs font-medium text-gray-600">
              DevOps platform
             </span>
            </div>
           </div>
           <div class="flex items-center gap-2 lg:gap-5">
            <label class="switch switch-sm">
             <input type="checkbox" value="2"/>
            </label>
           </div>
          </div>
          <div class="flex items-center justify-between flex-wrap gap-2 px-5 py-3.5">
           <div class="flex items-center flex-wrap gap-2">
            <div class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-200 size-10">
             <img alt="" class="size-6" src="assets/media/brand-logos/google-webdev.svg"/>
            </div>
            <div class="flex flex-col">
             <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
              Google webdev
             </a>
             <span class="text-2xs font-medium text-gray-600">
              Building web expierences
             </span>
            </div>
           </div>
           <div class="flex items-center gap-2 lg:gap-5">
            <label class="switch switch-sm">
             <input checked="" type="checkbox" value="1"/>
            </label>
           </div>
          </div>
         </div>
         <div class="grid p-5 border-t border-t-gray-200">
          <a class="btn btn-sm btn-light justify-center" href="html/demo1/account/api-keys.html">
           Go to Apps
          </a>
         </div>
        </div>
       </div>
       <div class="dropdown" data-dropdown="true" data-dropdown-offset="70px, 10px" data-dropdown-placement="bottom-end" data-dropdown-trigger="click|lg:click">
        <button class="dropdown-toggle btn btn-icon btn-icon-lg relative cursor-pointer size-9 rounded-full hover:bg-primary-light hover:text-primary dropdown-open:bg-primary-light dropdown-open:text-primary text-gray-500">
         <i class="ki-filled ki-notification-on">
         </i>
         <span class="badge badge-dot badge-success size-[5px] absolute top-0.5 right-0.5 transform translate-y-1/2">
         </span>
        </button>
        <div class="dropdown-content light:border-gray-300 w-full max-w-[460px]">
         <div class="flex items-center justify-between gap-2.5 text-sm text-gray-900 font-semibold px-5 py-2.5" id="notifications_header">
          Notifications
          <button class="btn btn-sm btn-icon btn-light btn-clear shrink-0" data-dropdown-dismiss="true">
           <i class="ki-filled ki-cross">
           </i>
          </button>
         </div>
         <div class="border-b border-b-gray-200">
         </div>
         <div class="tabs justify-between px-5 mb-2" data-tabs="true" id="notifications_tabs">
          <div class="flex items-center gap-5">
           <button class="tab active" data-tab-toggle="#notifications_tab_all">
            All
           </button>
           <button class="tab relative" data-tab-toggle="#notifications_tab_inbox">
            Inbox
            <span class="badge badge-dot badge-success size-[5px] absolute top-2 right-0 transform translate-y-1/2 translate-x-full">
            </span>
           </button>
           <button class="tab" data-tab-toggle="#notifications_tab_team">
            Team
           </button>
           <button class="tab" data-tab-toggle="#notifications_tab_following">
            Following
           </button>
          </div>
          <div class="menu" data-menu="true">
           <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
            <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
             <i class="ki-filled ki-setting-2">
             </i>
            </button>
            <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
             <div class="menu-item">
              <a class="menu-link" href="#">
               <span class="menu-icon">
                <i class="ki-filled ki-document">
                </i>
               </span>
               <span class="menu-title">
                View
               </span>
              </a>
             </div>
             <div class="menu-item" data-menu-item-offset="-15px, 0" data-menu-item-placement="right-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
              <div class="menu-link">
               <span class="menu-icon">
                <i class="ki-filled ki-notification-status">
                </i>
               </span>
               <span class="menu-title">
                Export
               </span>
               <span class="menu-arrow">
                <i class="ki-filled ki-right text-3xs">
                </i>
               </span>
              </div>
              <div class="menu-dropdown menu-default w-full max-w-[175px]">
               <div class="menu-item">
                <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                 <span class="menu-icon">
                  <i class="ki-filled ki-sms">
                  </i>
                 </span>
                 <span class="menu-title">
                  Email
                 </span>
                </a>
               </div>
               <div class="menu-item">
                <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                 <span class="menu-icon">
                  <i class="ki-filled ki-message-notify">
                  </i>
                 </span>
                 <span class="menu-title">
                  SMS
                 </span>
                </a>
               </div>
               <div class="menu-item">
                <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                 <span class="menu-icon">
                  <i class="ki-filled ki-notification-status">
                  </i>
                 </span>
                 <span class="menu-title">
                  Push
                 </span>
                </a>
               </div>
              </div>
             </div>
             <div class="menu-item">
              <a class="menu-link" href="#">
               <span class="menu-icon">
                <i class="ki-filled ki-pencil">
                </i>
               </span>
               <span class="menu-title">
                Edit
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link" href="#">
               <span class="menu-icon">
                <i class="ki-filled ki-trash">
                </i>
               </span>
               <span class="menu-title">
                Delete
               </span>
              </a>
             </div>
            </div>
           </div>
          </div>
         </div>
         <div class="grow" id="notifications_tab_all">
          <div class="flex flex-col">
           <div class="scrollable-y-auto" data-scrollable="true" data-scrollable-dependencies="#header" data-scrollable-max-height="auto" data-scrollable-offset="200px">
            <div class="flex flex-col gap-5 pt-3 pb-4 divider-y divider-gray-200">
             <div class="flex grow gap-2.5 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="assets/media/avatars/300-4.png"/>
               <span class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-3.5">
               <div class="flex flex-col gap-1">
                <div class="text-2sm font-medium">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Joe Lincoln
                 </a>
                 <span class="text-gray-700">
                  mentioned you in
                 </span>
                 <a class="hover:text-primary-active text-primary" href="#">
                  Latest Trends
                 </a>
                 <span class="text-gray-700">
                  topic
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 18 mins ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Web Design 2024
                </span>
               </div>
               <div class="card shadow-none flex flex-col gap-2.5 p-3.5 rounded-lg bg-light-active">
                <div class="text-2sm font-semibold text-gray-600 mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  @Cody
                 </a>
                 <span class="text-gray-700 font-medium">
                  For an expert opinion, check out what Mike has to say on this topic!
                 </span>
                </div>
                <label class="input input-sm">
                 <input placeholder="Reply" type="text" value="">
                  <button class="btn btn-icon">
                   <i class="ki-filled ki-picture">
                   </i>
                  </button>
                 </input>
                </label>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="assets/media/avatars/300-5.png"/>
               <span class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-3.5">
               <div class="flex flex-col gap-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Leslie Alexander
                 </a>
                 <span class="text-gray-700">
                  added new tags to
                 </span>
                 <a class="hover:text-primary-active text-primary" href="#">
                  Web Redesign 2024
                 </a>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 53 mins ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 ACME
                </span>
               </div>
               <div class="flex flex-wrap gap-2.5">
                <span class="badge badge-sm badge-info badge-outline">
                 Client-Request
                </span>
                <span class="badge badge-sm badge-warning badge-outline">
                 Figma
                </span>
                <span class="badge badge-sm badge-light badge-outline">
                 Redesign
                </span>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5" id="notification_request_3">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="assets/media/avatars/300-27.png"/>
               <span class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-3.5">
               <div class="flex flex-col gap-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Guy Hawkins
                 </a>
                 <span class="text-gray-700">
                  requested access to
                 </span>
                 <a class="hover:text-primary-active text-primary" href="#">
                  AirSpace
                 </a>
                 <span class="text-gray-700">
                  project
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 14 hours ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Dev Team
                </span>
               </div>
               <div class="flex flex-wrap gap-2.5">
                <button class="btn btn-light btn-sm" data-dismiss="#notification_request_3">
                 Decline
                </button>
                <button class="btn btn-dark btn-sm" data-dismiss="#notification_request_3">
                 Accept
                </button>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="assets/media/avatars/300-1.png"/>
               <span class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-3.5 grow">
               <div class="flex flex-col gap-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Jane Perez
                 </a>
                 <span class="text-gray-700">
                  invites you to review a file.
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 3 hours ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 742kb
                </span>
               </div>
               <div class="card shadow-none flex items-center flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
                <img class="h-5" src="assets/media/file-types/pdf.svg"/>
                <a class="hover:text-primary-active font-medium text-gray-700 text-xs me-1" href="#">
                 Launch_nov24.pptx
                </a>
                <span class="font-medium text-gray-500 text-2xs">
                 Edited 39 mins ago
                </span>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="assets/media/avatars/300-11.png"/>
               <span class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-1">
               <div class="text-2sm font-medium mb-px">
                <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                 Raymond Pawell
                </a>
                <span class="text-gray-700">
                 posted a new article
                </span>
                <a class="hover:text-primary-active text-primary" href="#">
                 2024 Roadmap
                </a>
               </div>
               <span class="flex items-center text-2xs font-medium text-gray-500">
                1 hour ago
                <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                </span>
                Roadmap
               </span>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="assets/media/avatars/300-14.png"/>
               <span class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-3.5 grow">
               <div class="flex flex-col gap-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Jane Perez
                 </a>
                 <span class="text-gray-700">
                  wants to view your design project
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 3 day ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Metronic Launcher mockups
                </span>
               </div>
               <div class="card shadow-none flex items-center flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
                <div class="flex items-center justify-center w-[26px] h-[30px] shrink-0 bg-light rounded border border-gray-200">
                 <img class="h-5" src="assets/media/file-types/figma.svg"/>
                </div>
                <a class="hover:text-primary-active font-medium text-gray-700 text-xs me-1" href="#">
                 Launcher-UIkit.fig
                </a>
                <span class="font-medium text-gray-500 text-2xs">
                 Edited 2 mins ago
                </span>
               </div>
              </div>
             </div>
            </div>
           </div>
           <div class="border-b border-b-gray-200">
           </div>
           <div class="grid grid-cols-2 p-5 gap-2.5" id="notifications_all_footer">
            <button class="btn btn-sm btn-light justify-center">
             Archive all
            </button>
            <button class="btn btn-sm btn-light justify-center">
             Mark all as read
            </button>
           </div>
          </div>
         </div>
         <div class="grow hidden" id="notifications_tab_inbox">
          <div class="flex flex-col">
           <div class="scrollable-y-auto" data-scrollable="true" data-scrollable-dependencies="#header" data-scrollable-max-height="auto" data-scrollable-offset="200px">
            <div class="flex flex-col gap-5 pt-3 pb-4">
             <div class="flex grow gap-2.5 px-5" id="notification_request_13">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="assets/media/avatars/300-25.png"/>
               <span class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-3.5 grow">
               <div class="flex flex-col gap-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Samuel Lee
                 </a>
                 <span class="text-gray-700">
                  requested to add user to
                 </span>
                 <a class="hover:text-primary-active text-primary font-semibold" href="#">
                  TechSynergy
                 </a>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 22 hours ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Dev Team
                </span>
               </div>
               <div class="card shadow-none flex items-center flex-row justify-between gap-1.5 px-2.5 py-2 rounded-lg bg-light-active">
                <div class="flex flex-col">
                 <a class="hover:text-primary-active font-medium text-gray-900 text-xs" href="#">
                  Ronald Richards
                 </a>
                 <a class="hover:text-primary-active text-gray-500 font-medium text-3xs" href="#">
                  ronald.richards@gmail.com
                 </a>
                </div>
                <a class="hover:text-primary-active text-gray-700 font-medium text-xs" href="#">
                 Go to profile
                </a>
               </div>
               <div class="flex flex-wrap gap-2.5">
                <button class="btn btn-light btn-sm" data-dismiss="#notification_request_13">
                 Decline
                </button>
                <button class="btn btn-dark btn-sm" data-dismiss="#notification_request_13">
                 Accept
                </button>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex items-center grow gap-2.5 px-5">
              <div class="flex items-center justify-center size-8 bg-success-light rounded-full border border-success-clarity">
               <i class="ki-filled ki-check text-lg text-success">
               </i>
              </div>
              <div class="flex flex-col gap-1">
               <span class="text-2sm font-medium text-gray-700">
                You have succesfully verified your account
               </span>
               <span class="font-medium text-gray-500 text-2xs">
                2 days ago
               </span>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="assets/media/avatars/300-34.png"/>
               <span class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-3.5 grow">
               <div class="flex flex-col gap-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Ava Peterson
                 </a>
                 <span class="text-gray-700">
                  uploaded attachment
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 3 days ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 ACME
                </span>
               </div>
               <div class="card shadow-none flex items-center justify-between flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
                <div class="flex items-center gap-1.5">
                 <img class="h-6" src="assets/media/file-types/xls.svg"/>
                 <div class="flex flex-col gap-0.5">
                  <a class="hover:text-primary-active font-medium text-gray-700 text-xs" href="#">
                   Redesign-2024.xls
                  </a>
                  <span class="font-medium text-gray-500 text-2xs">
                   2.6 MB
                  </span>
                 </div>
                </div>
                <button class="btn btn-icon btn-xs btn-clear btn-light">
                 <svg fill="none" height="14" viewbox="0 0 14 14" width="14" xmlns="http://www.w3.org/2000/svg">
                  <path clip-rule="evenodd" d="M6.63821 2.60467C4.81926 2.60467 3.32474 3.99623 3.16201 5.77252C3.1386 6.02803 2.92413 6.22253 2.66871 6.22227C1.74915 6.22149 0.976744 6.9868 0.976744 7.90442C0.976744 8.83344 1.72988 9.58657 2.65891 9.58657H3.09302C3.36274 9.58657 3.5814 9.80523 3.5814 10.0749C3.5814 10.3447 3.36274 10.5633 3.09302 10.5633H2.65891C1.19044 10.5633 0 9.37292 0 7.90442C0 6.58614 0.986948 5.48438 2.24496 5.27965C2.62863 3.20165 4.44941 1.62793 6.63821 1.62793C8.26781 1.62793 9.69282 2.50042 10.4729 3.80193C12.3411 3.72829 14 5.2564 14 7.18091C14 8.93508 12.665 10.3769 10.9552 10.5466C10.6868 10.5733 10.4476 10.3773 10.421 10.1089C10.3943 9.84052 10.5903 9.60135 10.8587 9.57465C12.0739 9.45406 13.0233 8.42802 13.0233 7.18091C13.0233 5.74002 11.6905 4.59666 10.2728 4.79968C10.0642 4.82957 9.85672 4.72382 9.76028 4.53181C9.18608 3.38796 8.00318 2.60467 6.63821 2.60467Z" fill="#99A1B7" fill-rule="evenodd">
                  </path>
                  <path clip-rule="evenodd" d="M6.99909 8.01611L8.28162 9.29864C8.47235 9.48937 8.78158 9.48937 8.97231 9.29864C9.16303 9.10792 9.16303 8.79874 8.97231 8.60802L7.57465 7.2103C7.25675 6.89247 6.74143 6.89247 6.42353 7.2103L5.02585 8.60802C4.83513 8.79874 4.83513 9.10792 5.02585 9.29864C5.21657 9.48937 5.5258 9.48937 5.71649 9.29864L6.99909 8.01611Z" fill="#99A1B7" fill-rule="evenodd">
                  </path>
                  <path clip-rule="evenodd" d="M7.00009 12.372C7.2698 12.372 7.48846 12.1533 7.48846 11.8836V7.97665C7.48846 7.70694 7.2698 7.48828 7.00009 7.48828C6.73038 7.48828 6.51172 7.70694 6.51172 7.97665V11.8836C6.51172 12.1533 6.73038 12.372 7.00009 12.372Z" fill="#99A1B7" fill-rule="evenodd">
                  </path>
                 </svg>
                </button>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="assets/media/avatars/300-29.png"/>
               <span class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-3 grow">
               <div class="flex flex-col gap-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Ethan Parker
                 </a>
                 <span class="text-gray-700">
                  created a new tasks to
                 </span>
                 <a class="hover:text-primary-active text-primary" href="#">
                  Site Sculpt
                 </a>
                 <span class="text-gray-700">
                  project
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 3 days ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Web Designer
                </span>
               </div>
               <div class="card shadow-none p-3.5 gap-3.5 rounded-lg bg-light-active">
                <div class="flex items-center justify-between flex-wrap gap-2.5">
                 <div class="flex flex-col gap-1">
                  <span class="font-medium text-gray-900 text-xs">
                   Location history is erased after Logging In
                  </span>
                  <span class="font-medium text-gray-500 text-3xs">
                   Due Date: 15 May, 2024
                  </span>
                 </div>
                 <div class="flex -space-x-2">
                  <div class="flex">
                   <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-3.png"/>
                  </div>
                  <div class="flex">
                   <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-2.png"/>
                  </div>
                 </div>
                </div>
                <div class="flex items-center gap-2.5">
                 <span class="badge badge-sm badge-success badge-outline">
                  Improvement
                 </span>
                 <span class="badge badge-sm badge-danger badge-outline">
                  Bug
                 </span>
                </div>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5" id="notification_request_3">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="assets/media/avatars/300-30.png"/>
               <span class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-3.5">
               <div class="flex flex-col gap-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Benjamin Harris
                 </a>
                 <span class="text-gray-700">
                  requested to upgrade plan
                 </span>
                 <a class="hover:text-primary-active text-primary" href="#">
                 </a>
                 <span class="text-gray-700">
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 4 days ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Marketing
                </span>
               </div>
               <div class="flex flex-wrap gap-2.5">
                <button class="btn btn-light btn-sm" data-dismiss="#notification_request_3">
                 Decline
                </button>
                <button class="btn btn-dark btn-sm" data-dismiss="#notification_request_3">
                 Accept
                </button>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="assets/media/avatars/300-24.png"/>
               <span class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-1">
               <div class="text-2sm font-medium mb-px">
                <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                 Isaac Morgan
                </a>
                <span class="text-gray-700">
                 mentioned you in
                </span>
                <a class="hover:text-primary-active text-primary" href="#">
                 Data Transmission
                </a>
                topic
               </div>
               <span class="flex items-center text-2xs font-medium text-gray-500">
                6 days ago
                <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                </span>
                Dev Team
               </span>
              </div>
             </div>
            </div>
           </div>
           <div class="border-b border-b-gray-200">
           </div>
           <div class="grid grid-cols-2 p-5 gap-2.5" id="notifications_inbox_footer">
            <button class="btn btn-sm btn-light justify-center">
             Archive all
            </button>
            <button class="btn btn-sm btn-light justify-center">
             Mark all as read
            </button>
           </div>
          </div>
         </div>
         <div class="grow hidden" id="notifications_tab_team">
          <div class="flex flex-col">
           <div class="scrollable-y-auto" data-scrollable="true" data-scrollable-dependencies="#header" data-scrollable-max-height="auto" data-scrollable-offset="200px">
            <div class="flex flex-col gap-5 pt-3 pb-4">
             <div class="flex grow gap-2 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="assets/media/avatars/300-15.png"/>
               <span class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-3 grow" id="notification_request_10">
               <div class="flex flex-col gap-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Nova Hawthorne
                 </a>
                 <span class="text-gray-700">
                  sent you an meeting invation
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 2 days ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Dev Team
                </span>
               </div>
               <div class="card shadow-none p-2.5 rounded-lg bg-light-active">
                <div class="flex items-center justify-between flex-wrap gap-2.5">
                 <div class="flex items-center gap-2.5">
                  <div class="border border-brand-clarity rounded-lg">
                   <div class="flex items-center justify-center border-b border-b-brand-clarity bg-brand-light rounded-t-lg">
                    <span class="text-3xs text-brand fw-medium p-1.5">
                     Apr
                    </span>
                   </div>
                   <div class="flex items-center justify-center size-9">
                    <span class="fw-semibold text-gray-900 text-md tracking-tight">
                     12
                    </span>
                   </div>
                  </div>
                  <div class="flex flex-col gap-1.5">
                   <a class="hover:text-primary-active font-medium text-gray-700 text-xs" href="#">
                    Peparation For Release
                   </a>
                   <span class="font-medium text-gray-600 text-2xs">
                    9:00 PM - 10:00 PM
                   </span>
                  </div>
                 </div>
                 <div class="flex -space-x-2">
                  <div class="flex">
                   <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-4.png"/>
                  </div>
                  <div class="flex">
                   <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-1.png"/>
                  </div>
                  <div class="flex">
                   <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-2.png"/>
                  </div>
                  <div class="flex">
                   <span class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-6 text-success-inverse size-6 ring-success-light bg-success">
                    +3
                   </span>
                  </div>
                 </div>
                </div>
               </div>
               <div class="flex flex-wrap gap-2.5">
                <button class="btn btn-light btn-sm" data-dismiss="#notification_request_10">
                 Decline
                </button>
                <button class="btn btn-dark btn-sm" data-dismiss="#notification_request_10">
                 Accept
                </button>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="assets/media/avatars/300-6.png"/>
               <span class="size-1.5 badge badge-circle absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-1">
               <div class="text-2sm font-medium mb-px">
                <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                 Adrian Vale
                </a>
                <span class="text-gray-700">
                 change the due date of
                </span>
                <a class="hover:text-primary-active text-primary" href="#">
                 Marketing
                </a>
                to 13 May
               </div>
               <span class="flex items-center text-2xs font-medium text-gray-500">
                2 days ago
                <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                </span>
                Marketing
               </span>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="assets/media/avatars/300-12.png"/>
               <span class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-3.5 grow">
               <div class="flex flex-col gap-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Skylar Frost
                 </a>
                 <span class="text-gray-700">
                  uploaded 2 attachments
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 3 days ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Web Design
                </span>
               </div>
               <div class="card shadow-none flex items-center justify-between flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
                <div class="flex items-center gap-1.5">
                 <img class="h-6" src="assets/media/file-types/word.svg"/>
                 <div class="flex flex-col gap-0.5">
                  <a class="hover:text-primary-active font-medium text-gray-700 text-xs" href="#">
                   Landing-page.docx
                  </a>
                  <span class="font-medium text-gray-500 text-2xs">
                   1.9 MB
                  </span>
                 </div>
                </div>
                <button class="btn btn-icon btn-xs btn-clear btn-light">
                 <svg fill="none" height="14" viewbox="0 0 14 14" width="14" xmlns="http://www.w3.org/2000/svg">
                  <path clip-rule="evenodd" d="M6.63821 2.60467C4.81926 2.60467 3.32474 3.99623 3.16201 5.77252C3.1386 6.02803 2.92413 6.22253 2.66871 6.22227C1.74915 6.22149 0.976744 6.9868 0.976744 7.90442C0.976744 8.83344 1.72988 9.58657 2.65891 9.58657H3.09302C3.36274 9.58657 3.5814 9.80523 3.5814 10.0749C3.5814 10.3447 3.36274 10.5633 3.09302 10.5633H2.65891C1.19044 10.5633 0 9.37292 0 7.90442C0 6.58614 0.986948 5.48438 2.24496 5.27965C2.62863 3.20165 4.44941 1.62793 6.63821 1.62793C8.26781 1.62793 9.69282 2.50042 10.4729 3.80193C12.3411 3.72829 14 5.2564 14 7.18091C14 8.93508 12.665 10.3769 10.9552 10.5466C10.6868 10.5733 10.4476 10.3773 10.421 10.1089C10.3943 9.84052 10.5903 9.60135 10.8587 9.57465C12.0739 9.45406 13.0233 8.42802 13.0233 7.18091C13.0233 5.74002 11.6905 4.59666 10.2728 4.79968C10.0642 4.82957 9.85672 4.72382 9.76028 4.53181C9.18608 3.38796 8.00318 2.60467 6.63821 2.60467Z" fill="#99A1B7" fill-rule="evenodd">
                  </path>
                  <path clip-rule="evenodd" d="M6.99909 8.01611L8.28162 9.29864C8.47235 9.48937 8.78158 9.48937 8.97231 9.29864C9.16303 9.10792 9.16303 8.79874 8.97231 8.60802L7.57465 7.2103C7.25675 6.89247 6.74143 6.89247 6.42353 7.2103L5.02585 8.60802C4.83513 8.79874 4.83513 9.10792 5.02585 9.29864C5.21657 9.48937 5.5258 9.48937 5.71649 9.29864L6.99909 8.01611Z" fill="#99A1B7" fill-rule="evenodd">
                  </path>
                  <path clip-rule="evenodd" d="M7.00009 12.372C7.2698 12.372 7.48846 12.1533 7.48846 11.8836V7.97665C7.48846 7.70694 7.2698 7.48828 7.00009 7.48828C6.73038 7.48828 6.51172 7.70694 6.51172 7.97665V11.8836C6.51172 12.1533 6.73038 12.372 7.00009 12.372Z" fill="#99A1B7" fill-rule="evenodd">
                  </path>
                 </svg>
                </button>
               </div>
               <div class="card shadow-none flex items-center justify-between flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
                <div class="flex items-center gap-1.5">
                 <img class="h-6" src="assets/media/file-types/svg.svg"/>
                 <div class="flex flex-col gap-0.5">
                  <a class="hover:text-primary-active font-medium text-gray-700 text-xs" href="#">
                   New-icon.svg
                  </a>
                  <span class="font-medium text-gray-500 text-2xs">
                   2.3 MB
                  </span>
                 </div>
                </div>
                <button class="btn btn-icon btn-xs btn-clear btn-light">
                 <svg fill="none" height="14" viewbox="0 0 14 14" width="14" xmlns="http://www.w3.org/2000/svg">
                  <path clip-rule="evenodd" d="M6.63821 2.60467C4.81926 2.60467 3.32474 3.99623 3.16201 5.77252C3.1386 6.02803 2.92413 6.22253 2.66871 6.22227C1.74915 6.22149 0.976744 6.9868 0.976744 7.90442C0.976744 8.83344 1.72988 9.58657 2.65891 9.58657H3.09302C3.36274 9.58657 3.5814 9.80523 3.5814 10.0749C3.5814 10.3447 3.36274 10.5633 3.09302 10.5633H2.65891C1.19044 10.5633 0 9.37292 0 7.90442C0 6.58614 0.986948 5.48438 2.24496 5.27965C2.62863 3.20165 4.44941 1.62793 6.63821 1.62793C8.26781 1.62793 9.69282 2.50042 10.4729 3.80193C12.3411 3.72829 14 5.2564 14 7.18091C14 8.93508 12.665 10.3769 10.9552 10.5466C10.6868 10.5733 10.4476 10.3773 10.421 10.1089C10.3943 9.84052 10.5903 9.60135 10.8587 9.57465C12.0739 9.45406 13.0233 8.42802 13.0233 7.18091C13.0233 5.74002 11.6905 4.59666 10.2728 4.79968C10.0642 4.82957 9.85672 4.72382 9.76028 4.53181C9.18608 3.38796 8.00318 2.60467 6.63821 2.60467Z" fill="#99A1B7" fill-rule="evenodd">
                  </path>
                  <path clip-rule="evenodd" d="M6.99909 8.01611L8.28162 9.29864C8.47235 9.48937 8.78158 9.48937 8.97231 9.29864C9.16303 9.10792 9.16303 8.79874 8.97231 8.60802L7.57465 7.2103C7.25675 6.89247 6.74143 6.89247 6.42353 7.2103L5.02585 8.60802C4.83513 8.79874 4.83513 9.10792 5.02585 9.29864C5.21657 9.48937 5.5258 9.48937 5.71649 9.29864L6.99909 8.01611Z" fill="#99A1B7" fill-rule="evenodd">
                  </path>
                  <path clip-rule="evenodd" d="M7.00009 12.372C7.2698 12.372 7.48846 12.1533 7.48846 11.8836V7.97665C7.48846 7.70694 7.2698 7.48828 7.00009 7.48828C6.73038 7.48828 6.51172 7.70694 6.51172 7.97665V11.8836C6.51172 12.1533 6.73038 12.372 7.00009 12.372Z" fill="#99A1B7" fill-rule="evenodd">
                  </path>
                 </svg>
                </button>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="assets/media/avatars/300-21.png"/>
               <span class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-3.5">
               <div class="flex flex-col gap-1">
                <div class="text-2sm font-medium">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Selene Silverleaf
                 </a>
                 <span class="text-gray-700">
                  commented on
                 </span>
                 <a class="hover:text-primary-active text-primary" href="#">
                  SiteSculpt
                 </a>
                 <span class="text-gray-700">
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 4 days ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Manager
                </span>
               </div>
               <div class="card shadow-none flex flex-col gap-2.5 p-3.5 rounded-lg bg-light-active">
                <div class="text-2sm font-semibold text-gray-600 mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  @Cody
                 </a>
                 <span class="text-gray-700 font-medium">
                  This design  is simply stunning! From layout to color, it's a work of art!
                 </span>
                </div>
                <label class="input input-sm">
                 <input placeholder="Reply" type="text" value="">
                  <button class="btn btn-icon">
                   <i class="ki-filled ki-picture">
                   </i>
                  </button>
                 </input>
                </label>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5" id="notification_request_3">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="assets/media/avatars/300-13.png"/>
               <span class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-3.5">
               <div class="flex flex-col gap-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Thalia Fox
                 </a>
                 <span class="text-gray-700">
                  has invited you to join
                 </span>
                 <a class="hover:text-primary-active text-primary" href="#">
                  Design Research
                 </a>
                 <span class="text-gray-700">
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 4 days ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Dev Team
                </span>
               </div>
               <div class="flex flex-wrap gap-2.5">
                <button class="btn btn-light btn-sm" data-dismiss="#notification_request_3">
                 Decline
                </button>
                <button class="btn btn-dark btn-sm" data-dismiss="#notification_request_3">
                 Accept
                </button>
               </div>
              </div>
             </div>
            </div>
           </div>
           <div class="border-b border-b-gray-200">
           </div>
           <div class="grid grid-cols-2 p-5 gap-2.5" id="notifications_team_footer">
            <button class="btn btn-sm btn-light justify-center">
             Archive all
            </button>
            <button class="btn btn-sm btn-light justify-center">
             Mark all as read
            </button>
           </div>
          </div>
         </div>
         <div class="grow hidden" id="notifications_tab_following">
          <div class="flex flex-col">
           <div class="scrollable-y-auto" data-scrollable="true" data-scrollable-dependencies="#header" data-scrollable-max-height="auto" data-scrollable-offset="200px">
            <div class="flex flex-col gap-5 pt-3 pb-4">
             <div class="flex grow gap-2.5 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="assets/media/avatars/300-1.png"/>
               <span class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-2.5 grow">
               <div class="flex flex-col gap-1 mb-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Jane Perez
                 </a>
                 <span class="text-gray-700">
                  added 2 new works to
                 </span>
                 <a class="hover:text-primary-active text-primary font-semibold" href="#">
                  Inspirations 2024
                 </a>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 23 hours ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Craftwork Design
                </span>
               </div>
               <div class="flex items-center gap-2.5">
                <div class="card shadow-none flex flex-col gap-3.5 bg-light-active w-40">
                 <div class="bg-cover bg-no-repeat card-rounded-t shrink-0 h-24" style="background-image: url('assets/media/images/600x600/6.jpg')">
                 </div>
                 <div class="px-2.5 pb-2">
                  <a class="font-medium block text-gray-700 hover:text-primary text-xs leading-4 mb-0.5" href="#">
                   Geometric Patterns
                  </a>
                  <div class="text-2xs font-medium text-gray-500">
                   Token ID:
                   <span class="text-2xs font-medium text-gray-700">
                    81023
                   </span>
                  </div>
                 </div>
                </div>
                <div class="card shadow-none flex flex-col gap-3.5 bg-light-active w-40">
                 <div class="bg-cover bg-no-repeat card-rounded-t shrink-0 h-24" style="background-image: url('assets/media/images/600x600/1.jpg')">
                 </div>
                 <div class="px-2.5 pb-2">
                  <a class="font-medium block text-gray-700 hover:text-primary text-xs leading-4 mb-0.5" href="#">
                   Artistic Expressions
                  </a>
                  <div class="text-2xs font-medium text-gray-500">
                   Token ID:
                   <span class="text-2xs font-medium text-gray-700">
                    67890
                   </span>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5" id="notification_request_3">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="assets/media/avatars/300-19.png"/>
               <span class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-2.5 grow" id="notification_request_17">
               <div class="flex flex-col gap-1 mb-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Natalie Wood
                 </a>
                 <span class="text-gray-700">
                  wants to edit marketing project
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 1 day ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Designer
                </span>
               </div>
               <div class="card shadow-none flex items-center flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
                <div class="flex items-center justify-center w-[26px] h-[30px] shrink-0 bg-white rounded border border-gray-200">
                 <img class="h-5" src="assets/media/brand-logos/jira.svg"/>
                </div>
                <a class="hover:text-primary-active font-medium text-gray-700 text-xs me-1" href="#">
                 User-feedback.jira
                </a>
                <span class="font-medium text-gray-500 text-2xs">
                 Edited 1 hour ago
                </span>
               </div>
               <div class="flex flex-wrap gap-2.5">
                <button class="btn btn-light btn-sm" data-dismiss="#notification_request_17">
                 Decline
                </button>
                <button class="btn btn-dark btn-sm" data-dismiss="#notification_request_17">
                 Accept
                </button>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="assets/media/avatars/300-17.png"/>
               <span class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-2.5 grow">
               <div class="flex flex-col gap-1 mb-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Aaron Foster
                 </a>
                 <span class="text-gray-700">
                  requested to view
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 3 day ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Larsen Ltd
                </span>
               </div>
               <div class="card shadow-none flex items-center flex-row gap-1.5 px-2.5 py-1.5 rounded-lg bg-light-active">
                <i class="ki-filled ki-user-tick text-success text-base">
                </i>
                <span class="font-medium text-success text-2sm">
                 You allowed Aaron to view
                </span>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="assets/media/avatars/300-34.png"/>
               <span class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-1">
               <div class="text-2sm font-medium mb-px">
                <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                 Chloe Morgan
                </a>
                <span class="text-gray-700">
                 posted a new article
                </span>
                <a class="hover:text-primary-active text-primary" href="#">
                 User Experience
                </a>
               </div>
               <span class="flex items-center text-2xs font-medium text-gray-500">
                1 day ago
                <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                </span>
                Nexus
               </span>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="assets/media/avatars/300-9.png"/>
               <span class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-2.5 grow">
               <div class="flex flex-col gap-1 mb-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Gabriel Bennett
                 </a>
                 <span class="text-gray-700">
                  started connect you
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 3 day ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Development
                </span>
               </div>
               <div class="flex flex-wrap gap-2.5">
                <button class="btn btn-sm btn-light">
                 <i class="ki-filled ki-check-circle">
                 </i>
                 Connected
                </button>
                <button class="btn btn-dark btn-sm">
                 Go to profile
                </button>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5" id="notification_request_3">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="assets/media/avatars/300-13.png"/>
               <span class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-3.5">
               <div class="flex flex-col gap-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Thalia Fox
                 </a>
                 <span class="text-gray-700">
                  has invited you to join
                 </span>
                 <a class="hover:text-primary-active text-primary" href="#">
                  Design Research
                 </a>
                 <span class="text-gray-700">
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 4 days ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Dev Team
                </span>
               </div>
               <div class="flex flex-wrap gap-2.5">
                <button class="btn btn-light btn-sm" data-dismiss="#notification_request_3">
                 Decline
                </button>
                <button class="btn btn-dark btn-sm" data-dismiss="#notification_request_3">
                 Accept
                </button>
               </div>
              </div>
             </div>
            </div>
           </div>
           <div class="border-b border-b-gray-200">
           </div>
           <div class="grid grid-cols-2 p-5 gap-2.5" id="notifications_following_footer">
            <button class="btn btn-sm btn-light justify-center">
             Archive all
            </button>
            <button class="btn btn-sm btn-light justify-center">
             Mark all as read
            </button>
           </div>
          </div>
         </div>
        </div>
       </div>
       <div class="menu" data-menu="true">
        <div class="menu-item" data-menu-item-offset="20px, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
         <div class="menu-toggle btn btn-icon rounded-full">
          <img alt="" class="size-9 rounded-full border-2 border-success shrink-0" src="assets/media/avatars/300-2.png">
          </img>
         </div>
         <div class="menu-dropdown menu-default light:border-gray-300 w-full max-w-[250px]">
          <div class="flex items-center justify-between px-5 py-1.5 gap-1.5">
           <div class="flex items-center gap-2">
            <img alt="" class="size-9 rounded-full border-2 border-success" src="assets/media/avatars/300-2.png">
             <div class="flex flex-col gap-1.5">
              <span class="text-sm text-gray-800 font-semibold leading-none">
               Cody Fisher
              </span>
              <a class="text-xs text-gray-600 hover:text-primary font-medium leading-none" href="html/demo1/account/home/get-started.html">
               c.fisher@gmail.com
              </a>
             </div>
            </img>
           </div>
           <span class="badge badge-xs badge-primary badge-outline">
            Pro
           </span>
          </div>
          <div class="menu-separator">
          </div>
          <div class="flex flex-col">
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/public-profile/profiles/default.html">
             <span class="menu-icon">
              <i class="ki-filled ki-badge">
              </i>
             </span>
             <span class="menu-title">
              Public Profile
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/home/user-profile.html">
             <span class="menu-icon">
              <i class="ki-filled ki-profile-circle">
              </i>
             </span>
             <span class="menu-title">
              My Profile
             </span>
            </a>
           </div>
           <div class="menu-item" data-menu-item-offset="-50px, 0" data-menu-item-placement="left-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
            <div class="menu-link">
             <span class="menu-icon">
              <i class="ki-filled ki-setting-2">
              </i>
             </span>
             <span class="menu-title">
              My Account
             </span>
             <span class="menu-arrow">
              <i class="ki-filled ki-right text-3xs">
              </i>
             </span>
            </div>
            <div class="menu-dropdown menu-default light:border-gray-300 w-full max-w-[220px]">
             <div class="menu-item">
              <a class="menu-link" href="html/demo1/account/home/get-started.html">
               <span class="menu-icon">
                <i class="ki-filled ki-coffee">
                </i>
               </span>
               <span class="menu-title">
                Get Started
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link" href="html/demo1/account/home/user-profile.html">
               <span class="menu-icon">
                <i class="ki-filled ki-some-files">
                </i>
               </span>
               <span class="menu-title">
                My Profile
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link" href="#">
               <span class="menu-icon">
                <i class="ki-filled ki-icon">
                </i>
               </span>
               <span class="menu-title">
                Billing
               </span>
               <span class="menu-badge" data-tooltip="true" data-tooltip-placement="top">
                <i class="ki-filled ki-information-2 text-md text-gray-500">
                </i>
                <span class="tooltip" data-tooltip-content="true">
                 Payment and subscription info
                </span>
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link" href="html/demo1/account/security/overview.html">
               <span class="menu-icon">
                <i class="ki-filled ki-medal-star">
                </i>
               </span>
               <span class="menu-title">
                Security
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link" href="html/demo1/account/members/teams.html">
               <span class="menu-icon">
                <i class="ki-filled ki-setting">
                </i>
               </span>
               <span class="menu-title">
                Members &amp; Roles
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link" href="html/demo1/account/integrations.html">
               <span class="menu-icon">
                <i class="ki-filled ki-switch">
                </i>
               </span>
               <span class="menu-title">
                Integrations
               </span>
              </a>
             </div>
             <div class="menu-separator">
             </div>
             <div class="menu-item">
              <a class="menu-link" href="html/demo1/account/security/overview.html">
               <span class="menu-icon">
                <i class="ki-filled ki-shield-tick">
                </i>
               </span>
               <span class="menu-title">
                Notifications
               </span>
               <label class="switch switch-sm">
                <input checked="" name="check" type="checkbox" value="1">
                </input>
               </label>
              </a>
             </div>
            </div>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="https://devs.keenthemes.com">
             <span class="menu-icon">
              <i class="ki-filled ki-message-programming">
              </i>
             </span>
             <span class="menu-title">
              Dev Forum
             </span>
            </a>
           </div>
           <div class="menu-item" data-menu-item-offset="-10px, 0" data-menu-item-placement="left-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
            <div class="menu-link">
             <span class="menu-icon">
              <i class="ki-filled ki-icon">
              </i>
             </span>
             <span class="menu-title">
              Language
             </span>
             <div class="flex items-center gap-1.5 rounded-md border border-gray-300 text-gray-600 p-1.5 text-2xs font-medium shrink-0">
              English
              <img alt="" class="inline-block size-3.5 rounded-full" src="assets/media/flags/united-states.svg"/>
             </div>
            </div>
            <div class="menu-dropdown menu-default light:border-gray-300 w-full max-w-[170px]">
             <div class="menu-item active">
              <a class="menu-link h-10" href="#">
               <span class="menu-icon">
                <img alt="" class="inline-block size-4 rounded-full" src="assets/media/flags/united-states.svg"/>
               </span>
               <span class="menu-title">
                English
               </span>
               <span class="menu-badge">
                <i class="ki-solid ki-check-circle text-success text-base">
                </i>
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link h-10" href="#">
               <span class="menu-icon">
                <img alt="" class="inline-block size-4 rounded-full" src="assets/media/flags/spain.svg"/>
               </span>
               <span class="menu-title">
                Spanish
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link h-10" href="#">
               <span class="menu-icon">
                <img alt="" class="inline-block size-4 rounded-full" src="assets/media/flags/germany.svg"/>
               </span>
               <span class="menu-title">
                German
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link h-10" href="#">
               <span class="menu-icon">
                <img alt="" class="inline-block size-4 rounded-full" src="assets/media/flags/japan.svg"/>
               </span>
               <span class="menu-title">
                Japanese
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link h-10" href="#">
               <span class="menu-icon">
                <img alt="" class="inline-block size-4 rounded-full" src="assets/media/flags/france.svg"/>
               </span>
               <span class="menu-title">
                French
               </span>
              </a>
             </div>
            </div>
           </div>
          </div>
          <div class="menu-separator">
          </div>
          <div class="flex flex-col">
           <div class="menu-item mb-0.5">
            <div class="menu-link">
             <span class="menu-icon">
              <i class="ki-filled ki-moon">
              </i>
             </span>
             <span class="menu-title">
              Dark Mode
             </span>
             <label class="switch switch-sm">
              <input data-theme-state="dark" data-theme-toggle="true" name="check" type="checkbox" value="1">
              </input>
             </label>
            </div>
           </div>
           <div class="menu-item px-4 py-1.5">
            <a class="btn btn-sm btn-light justify-center" href="html/demo1/authentication/classic/sign-in.html">
             Log out
            </a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
      <!-- End of Topbar -->
     </div>
     <!-- End of Container -->
    </header>
    <!-- End of Header -->
    <!-- Content -->
    <main class="grow content pt-5" id="content" role="content">
        <!-- Container -->
        <div class="container-fixed" id="content_container">
        </div>
        <!-- End of Container -->
        @inertia
    {{-- <!-- Container -->
     <div class="container-fixed">
      <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
       <div class="flex flex-col justify-center gap-2">
        <h1 class="text-xl font-semibold leading-none text-gray-900">
         Dashboard
        </h1>
        <div class="flex items-center gap-2 text-sm font-normal text-gray-700">
         Central Hub for Personal Customization
        </div>
       </div>
       <div class="flex items-center gap-2.5">
        <a class="btn btn-sm btn-light" href="html/demo1/public-profile/profiles/default.html">
         View Profile
        </a>
       </div>
      </div>
     </div>
     <!-- End of Container --> --}}
     {{-- <!-- Container -->
     <div class="container-fixed">
      <div class="grid gap-5 lg:gap-7.5">
       <!-- begin: grid -->
       <div class="grid lg:grid-cols-3 gap-y-5 lg:gap-7.5 items-stretch">
        <div class="lg:col-span-1">
         <div class="grid grid-cols-2 gap-5 lg:gap-7.5 h-full items-stretch">
          <style>
           .channel-stats-bg {
		background-image: url('assets/media/images/2600x1600/bg-3.png');
	}
	.dark .channel-stats-bg {
		background-image: url('assets/media/images/2600x1600/bg-3-dark.png');
	}
          </style>
          <div class="card flex-col justify-between gap-6 h-full bg-cover bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
           <img alt="" class="w-7 mt-4 ms-5" src="assets/media/brand-logos/linkedin-2.svg"/>
           <div class="flex flex-col gap-1 pb-4 px-5">
            <span class="text-3xl font-semibold text-gray-900">
             9.3k
            </span>
            <span class="text-2sm font-normal text-gray-700">
             Amazing mates
            </span>
           </div>
          </div>
          <div class="card flex-col justify-between gap-6 h-full bg-cover bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
           <img alt="" class="w-7 mt-4 ms-5" src="assets/media/brand-logos/youtube-2.svg"/>
           <div class="flex flex-col gap-1 pb-4 px-5">
            <span class="text-3xl font-semibold text-gray-900">
             24k
            </span>
            <span class="text-2sm font-normal text-gray-700">
             Lessons Views
            </span>
           </div>
          </div>
          <div class="card flex-col justify-between gap-6 h-full bg-cover bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
           <img alt="" class="w-7 mt-4 ms-5" src="assets/media/brand-logos/instagram-03.svg"/>
           <div class="flex flex-col gap-1 pb-4 px-5">
            <span class="text-3xl font-semibold text-gray-900">
             608
            </span>
            <span class="text-2sm font-normal text-gray-700">
             New subscribers
            </span>
           </div>
          </div>
          <div class="card flex-col justify-between gap-6 h-full bg-cover bg-[right_top_-1.7rem] bg-no-repeat channel-stats-bg">
           <img alt="" class="dark:hidden w-7 mt-4 ms-5" src="assets/media/brand-logos/tiktok.svg"/>
           <img alt="" class="light:hidden w-7 mt-4 ms-5" src="assets/media/brand-logos/tiktok-dark.svg"/>
           <div class="flex flex-col gap-1 pb-4 px-5">
            <span class="text-3xl font-semibold text-gray-900">
             2.5k
            </span>
            <span class="text-2sm font-normal text-gray-700">
             Stream audience
            </span>
           </div>
          </div>
         </div>
        </div>
        <div class="lg:col-span-2">
         <style>
          .entry-callout-bg {
		background-image: url('assets/media/images/2600x1600/2.png');
	}
	.dark .entry-callout-bg {
		background-image: url('assets/media/images/2600x1600/2-dark.png');
	}
         </style>
         <div class="card h-full h-full">
          <div class="card-body p-10 bg-[length:80%] [background-position:175%_25%] bg-no-repeat entry-callout-bg">
           <div class="flex flex-col justify-center gap-4">
            <div class="flex -space-x-2">
             <div class="flex">
              <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-10" src="assets/media/avatars/300-4.png"/>
             </div>
             <div class="flex">
              <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-10" src="assets/media/avatars/300-1.png"/>
             </div>
             <div class="flex">
              <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-10" src="assets/media/avatars/300-2.png"/>
             </div>
             <div class="flex">
              <span class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-10 text-success-inverse text-xs ring-success-light bg-success">
               S
              </span>
             </div>
            </div>
            <h2 class="text-1.5xl font-semibold text-gray-900">
             Connect Today &amp; Join
             <br/>
             the
             <a class="link" href="#">
              KeenThemes Network
             </a>
            </h2>
            <p class="text-sm font-normal text-gray-700 leading-5.5">
             Enhance your projects with premium themes and
             <br/>
             templates. Join the KeenThemes community today
             <br/>
             for top-quality designs and resources.
            </p>
           </div>
          </div>
          <div class="card-footer justify-center">
           <a class="btn btn-link" href="html/demo1/account/home/get-started.html">
            Get Started
           </a>
          </div>
         </div>
        </div>
       </div>
       <!-- end: grid -->
       <!-- begin: grid -->
       <div class="grid lg:grid-cols-3 gap-5 lg:gap-7.5 items-stretch">
        <div class="lg:col-span-1">
         <div class="card h-full">
          <div class="card-header">
           <h3 class="card-title">
            Highlights
           </h3>
           <div class="menu" data-menu="true">
            <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
             <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
              <i class="ki-filled ki-dots-vertical">
              </i>
             </button>
             <div class="menu-dropdown menu-default w-full max-w-[200px]" data-menu-dismiss="true">
              <div class="menu-item">
               <a class="menu-link" href="html/demo1/account/activity.html">
                <span class="menu-icon">
                 <i class="ki-filled ki-cloud-change">
                 </i>
                </span>
                <span class="menu-title">
                 Activity
                </span>
               </a>
              </div>
              <div class="menu-item">
               <a class="menu-link" data-modal-toggle="#share_profile_modal" href="#">
                <span class="menu-icon">
                 <i class="ki-filled ki-share">
                 </i>
                </span>
                <span class="menu-title">
                 Share
                </span>
               </a>
              </div>
              <div class="menu-item" data-menu-item-offset="-15px, 0" data-menu-item-placement="right-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
               <div class="menu-link">
                <span class="menu-icon">
                 <i class="ki-filled ki-notification-status">
                 </i>
                </span>
                <span class="menu-title">
                 Notifications
                </span>
                <span class="menu-arrow">
                 <i class="ki-filled ki-right text-3xs">
                 </i>
                </span>
               </div>
               <div class="menu-dropdown menu-default w-full max-w-[175px]">
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                  <span class="menu-icon">
                   <i class="ki-filled ki-sms">
                   </i>
                  </span>
                  <span class="menu-title">
                   Email
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                  <span class="menu-icon">
                   <i class="ki-filled ki-message-notify">
                   </i>
                  </span>
                  <span class="menu-title">
                   SMS
                  </span>
                 </a>
                </div>
                <div class="menu-item">
                 <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                  <span class="menu-icon">
                   <i class="ki-filled ki-notification-status">
                   </i>
                  </span>
                  <span class="menu-title">
                   Push
                  </span>
                 </a>
                </div>
               </div>
              </div>
              <div class="menu-item">
               <a class="menu-link" data-modal-toggle="#report_user_modal" href="#">
                <span class="menu-icon">
                 <i class="ki-filled ki-dislike">
                 </i>
                </span>
                <span class="menu-title">
                 Report
                </span>
               </a>
              </div>
              <div class="menu-separator">
              </div>
              <div class="menu-item">
               <a class="menu-link" href="html/demo1/account/home/settings-enterprise.html">
                <span class="menu-icon">
                 <i class="ki-filled ki-setting-3">
                 </i>
                </span>
                <span class="menu-title">
                 Settings
                </span>
               </a>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="card-body flex flex-col gap-4 p-5 lg:p-7.5 lg:pt-4">
           <div class="flex flex-col gap-0.5">
            <span class="text-sm font-normal text-gray-700">
             All time sales
            </span>
            <div class="flex items-center gap-2.5">
             <span class="text-3xl font-semibold text-gray-900">
              $295.7k
             </span>
             <span class="badge badge-outline badge-success badge-sm">
              +2.7%
             </span>
            </div>
           </div>
           <div class="flex items-center gap-1 mb-1.5">
            <div class="bg-success h-2 w-full max-w-[60%] rounded-sm">
            </div>
            <div class="bg-brand h-2 w-full max-w-[25%] rounded-sm">
            </div>
            <div class="bg-info h-2 w-full max-w-[15%] rounded-sm">
            </div>
           </div>
           <div class="flex items-center flex-wrap gap-4 mb-1">
            <div class="flex items-center gap-1.5">
             <span class="badge badge-dot size-2 badge-success">
             </span>
             <span class="text-sm font-normal text-gray-800">
              Metronic
             </span>
            </div>
            <div class="flex items-center gap-1.5">
             <span class="badge badge-dot size-2 badge-danger">
             </span>
             <span class="text-sm font-normal text-gray-800">
              Bundle
             </span>
            </div>
            <div class="flex items-center gap-1.5">
             <span class="badge badge-dot size-2 badge-info">
             </span>
             <span class="text-sm font-normal text-gray-800">
              MetronicNest
             </span>
            </div>
           </div>
           <div class="border-b border-gray-300">
           </div>
           <div class="grid gap-3">
            <div class="flex items-center justify-between flex-wrap gap-2">
             <div class="flex items-center gap-1.5">
              <i class="ki-filled ki-shop text-base text-gray-500">
              </i>
              <span class="text-sm font-normal text-gray-900">
               Online Store
              </span>
             </div>
             <div class="flex items-center text-sm font-medium text-gray-800 gap-6">
              <span class="lg:text-right">
               $172k
              </span>
              <span class="lg:text-right">
               <i class="ki-filled ki-arrow-up text-success">
               </i>
               3.9%
              </span>
             </div>
            </div>
            <div class="flex items-center justify-between flex-wrap gap-2">
             <div class="flex items-center gap-1.5">
              <i class="ki-filled ki-facebook text-base text-gray-500">
              </i>
              <span class="text-sm font-normal text-gray-900">
               Facebook
              </span>
             </div>
             <div class="flex items-center text-sm font-medium text-gray-800 gap-6">
              <span class="lg:text-right">
               $85k
              </span>
              <span class="lg:text-right">
               <i class="ki-filled ki-arrow-down text-danger">
               </i>
               0.7%
              </span>
             </div>
            </div>
            <div class="flex items-center justify-between flex-wrap gap-2">
             <div class="flex items-center gap-1.5">
              <i class="ki-filled ki-instagram text-base text-gray-500">
              </i>
              <span class="text-sm font-normal text-gray-900">
               Instagram
              </span>
             </div>
             <div class="flex items-center text-sm font-medium text-gray-800 gap-6">
              <span class="lg:text-right">
               $36k
              </span>
              <span class="lg:text-right">
               <i class="ki-filled ki-arrow-up text-success">
               </i>
               8.2%
              </span>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="lg:col-span-2">
         <div class="card h-full">
          <div class="card-header">
           <h3 class="card-title">
            Earnings
           </h3>
           <div class="flex gap-5">
            <label class="switch switch-sm">
             <input class="order-2" name="check" type="checkbox" value="1"/>
             <span class="switch-label order-1">
              Referrals only
             </span>
            </label>
            <select class="select select-sm w-28" name="select">
             <option value="1">
              1 month
             </option>
             <option value="2">
              3 month
             </option>
             <option value="3">
              6 month
             </option>
             <option selected="" value="4">
              12 month
             </option>
            </select>
           </div>
          </div>
          <div class="card-body flex flex-col justify-end items-stretch grow px-3 py-1">
           <div id="earnings_chart">
           </div>
          </div>
         </div>
        </div>
       </div>
       <!-- end: grid -->
       <!-- begin: grid -->
       <div class="grid lg:grid-cols-3 gap-5 lg:gap-7.5 items-stretch">
        <div class="lg:col-span-1">
         <div class="card h-full">
          <div class="card-body lg:p-7.5 lg:pt-6 p-5">
           <div class="flex items-center justify-between flex-wrap gap-5 mb-7.5">
            <div class="flex flex-col gap-1">
             <span class="text-1.5xl font-semibold text-gray-900">
              Team Meeting
             </span>
             <span class="text-sm font-semibold text-gray-800">
              09:00 - 09:30
             </span>
            </div>
            <img alt="" class="size-7" src="assets/media/brand-logos/zoom.svg"/>
           </div>
           <p class="text-sm font-normal text-gray-800 leading-5.5 mb-8">
            Team meeting to discuss strategies, outline
            <br/>
            project milestones, define key goals, and
            <br/>
            establish clear timelines.
           </p>
           <div class="flex rounded-lg bg-gray-100 gap-10 p-5">
            <div class="flex flex-col gap-5">
             <div class="flex items-center gap-1.5 text-sm font-normal text-gray-800">
              <i class="ki-filled ki-geolocation text-base text-gray-500">
              </i>
              Location
             </div>
             <div class="text-sm font-medium text-gray-800 pt-1.5">
              Amsterdam
             </div>
            </div>
            <div class="flex flex-col gap-5">
             <div class="flex items-center gap-1.5 text-sm font-normal text-gray-800">
              <i class="ki-filled ki-users text-base text-gray-500">
              </i>
              Team
             </div>
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-4.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-1.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-2.png"/>
              </div>
              <div class="flex">
               <span class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse text-4xs ring-success-light bg-success">
                +10
               </span>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="card-footer justify-center">
           <a class="btn btn-link" href="">
            Join Meeting
           </a>
          </div>
         </div>
        </div>
        <div class="lg:col-span-2">
         <div class="grid">
          <div class="card card-grid h-full min-w-full">
           <div class="card-header">
            <h3 class="card-title">
             Teams
            </h3>
            <div class="input input-sm max-w-48">
             <i class="ki-filled ki-magnifier">
             </i>
             <input placeholder="Search Teams" type="text"/>
            </div>
           </div>
           <div class="card-body">
            <div data-datatable="true" data-datatable-page-size="5">
             <div class="scrollable-x-auto">
              <table class="table table-border" data-datatable-table="true">
               <thead>
                <tr>
                 <th class="w-[60px]">
                  <input class="checkbox checkbox-sm" data-datatable-check="true" type="checkbox"/>
                 </th>
                 <th class="w-[280px]">
                  <span class="sort asc">
                   <span class="sort-label">
                    Team
                   </span>
                   <span class="sort-icon">
                   </span>
                  </span>
                 </th>
                 <th class="min-w-[135px]">
                  <span class="sort">
                   <span class="sort-label">
                    Rating
                   </span>
                   <span class="sort-icon">
                   </span>
                  </span>
                 </th>
                 <th class="min-w-[135px]">
                  <span class="sort">
                   <span class="sort-label">
                    Last Modified
                   </span>
                   <span class="sort-icon">
                   </span>
                  </span>
                 </th>
                 <th class="min-w-[135px]">
                  <span class="sort">
                   <span class="sort-label">
                    Members
                   </span>
                   <span class="sort-icon">
                   </span>
                  </span>
                 </th>
                </tr>
               </thead>
               <tbody>
                <tr>
                 <td>
                  <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="1"/>
                 </td>
                 <td>
                  <div class="flex flex-col gap-2">
                   <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
                    Product Management
                   </a>
                   <span class="text-2sm text-gray-700 font-normal leading-3">
                    Product development &amp; lifecycle
                   </span>
                  </div>
                 </td>
                 <td>
                  <div class="rating">
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                  </div>
                 </td>
                 <td>
                  21 Oct, 2024
                 </td>
                 <td>
                  <div class="flex -space-x-2">
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-4.png"/>
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-1.png"/>
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-2.png"/>
                   </div>
                   <div class="flex">
                    <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse ring-success-light bg-success">
                     +10
                    </span>
                   </div>
                  </div>
                 </td>
                </tr>
                <tr>
                 <td>
                  <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="2"/>
                 </td>
                 <td>
                  <div class="flex flex-col gap-2">
                   <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
                    Marketing Team
                   </a>
                   <span class="text-2sm text-gray-700 font-normal leading-3">
                    Campaigns &amp; market analysis
                   </span>
                  </div>
                 </td>
                 <td>
                  <div class="rating">
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label indeterminate">
                    <i class="rating-on ki-solid ki-star text-base leading-none" style="width: 50.0%">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                  </div>
                 </td>
                 <td>
                  15 Oct, 2024
                 </td>
                 <td>
                  <div class="flex -space-x-2">
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-4.png"/>
                   </div>
                   <div class="flex">
                    <span class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] uppercase text-warning-inverse ring-warning-light bg-warning">
                     g
                    </span>
                   </div>
                  </div>
                 </td>
                </tr>
                <tr>
                 <td>
                  <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="3"/>
                 </td>
                 <td>
                  <div class="flex flex-col gap-2">
                   <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
                    HR Department
                   </a>
                   <span class="text-2sm text-gray-700 font-normal leading-3">
                    Talent acquisition, employee welfare
                   </span>
                  </div>
                 </td>
                 <td>
                  <div class="rating">
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                  </div>
                 </td>
                 <td>
                  10 Oct, 2024
                 </td>
                 <td>
                  <div class="flex -space-x-2">
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-4.png"/>
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-1.png"/>
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-2.png"/>
                   </div>
                   <div class="flex">
                    <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-info-inverse ring-info-light bg-info">
                     +A
                    </span>
                   </div>
                  </div>
                 </td>
                </tr>
                <tr>
                 <td>
                  <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="4"/>
                 </td>
                 <td>
                  <div class="flex flex-col gap-2">
                   <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
                    Sales Division
                   </a>
                   <span class="text-2sm text-gray-700 font-normal leading-3">
                    Customer relations, sales strategy
                   </span>
                  </div>
                 </td>
                 <td>
                  <div class="rating">
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                  </div>
                 </td>
                 <td>
                  05 Oct, 2024
                 </td>
                 <td>
                  <div class="flex -space-x-2">
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-24.png"/>
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-7.png"/>
                   </div>
                  </div>
                 </td>
                </tr>
                <tr>
                 <td>
                  <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="5"/>
                 </td>
                 <td>
                  <div class="flex flex-col gap-2">
                   <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
                    Development Team
                   </a>
                   <span class="text-2sm text-gray-700 font-normal leading-3">
                    Software development
                   </span>
                  </div>
                 </td>
                 <td>
                  <div class="rating">
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label indeterminate">
                    <i class="rating-on ki-solid ki-star text-base leading-none" style="width: 50.0%">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                  </div>
                 </td>
                 <td>
                  01 Oct, 2024
                 </td>
                 <td>
                  <div class="flex -space-x-2">
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-3.png"/>
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-8.png"/>
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-9.png"/>
                   </div>
                   <div class="flex">
                    <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-danger-inverse ring-danger-light bg-danger">
                     +5
                    </span>
                   </div>
                  </div>
                 </td>
                </tr>
                <tr>
                 <td>
                  <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="6"/>
                 </td>
                 <td>
                  <div class="flex flex-col gap-2">
                   <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
                    Quality Assurance
                   </a>
                   <span class="text-2sm text-gray-700 font-normal leading-3">
                    Product testing
                   </span>
                  </div>
                 </td>
                 <td>
                  <div class="rating">
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                  </div>
                 </td>
                 <td>
                  25 Sep, 2024
                 </td>
                 <td>
                  <div class="flex -space-x-2">
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-6.png"/>
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-5.png"/>
                   </div>
                  </div>
                 </td>
                </tr>
                <tr>
                 <td>
                  <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="7"/>
                 </td>
                 <td>
                  <div class="flex flex-col gap-2">
                   <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
                    Finance Team
                   </a>
                   <span class="text-2sm text-gray-700 font-normal leading-3">
                    Financial planning
                   </span>
                  </div>
                 </td>
                 <td>
                  <div class="rating">
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                  </div>
                 </td>
                 <td>
                  20 Sep, 2024
                 </td>
                 <td>
                  <div class="flex -space-x-2">
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-10.png"/>
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-11.png"/>
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-12.png"/>
                   </div>
                   <div class="flex">
                    <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-primary-inverse ring-primary-light bg-primary">
                     +8
                    </span>
                   </div>
                  </div>
                 </td>
                </tr>
                <tr>
                 <td>
                  <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="8"/>
                 </td>
                 <td>
                  <div class="flex flex-col gap-2">
                   <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
                    Customer Support
                   </a>
                   <span class="text-2sm text-gray-700 font-normal leading-3">
                    Customer service
                   </span>
                  </div>
                 </td>
                 <td>
                  <div class="rating">
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label indeterminate">
                    <i class="rating-on ki-solid ki-star text-base leading-none" style="width: 50.0%">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                  </div>
                 </td>
                 <td>
                  15 Sep, 2024
                 </td>
                 <td>
                  <div class="flex -space-x-2">
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-13.png"/>
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-14.png"/>
                   </div>
                  </div>
                 </td>
                </tr>
                <tr>
                 <td>
                  <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="9"/>
                 </td>
                 <td>
                  <div class="flex flex-col gap-2">
                   <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
                    R&amp;D Team
                   </a>
                   <span class="text-2sm text-gray-700 font-normal leading-3">
                    Research &amp; development
                   </span>
                  </div>
                 </td>
                 <td>
                  <div class="rating">
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                  </div>
                 </td>
                 <td>
                  10 Sep, 2024
                 </td>
                 <td>
                  <div class="flex -space-x-2">
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-15.png"/>
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-16.png"/>
                   </div>
                  </div>
                 </td>
                </tr>
                <tr>
                 <td>
                  <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="10"/>
                 </td>
                 <td>
                  <div class="flex flex-col gap-2">
                   <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
                    Operations Team
                   </a>
                   <span class="text-2sm text-gray-700 font-normal leading-3">
                    Operations management
                   </span>
                  </div>
                 </td>
                 <td>
                  <div class="rating">
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                  </div>
                 </td>
                 <td>
                  05 Sep, 2024
                 </td>
                 <td>
                  <div class="flex -space-x-2">
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-17.png"/>
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-18.png"/>
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-19.png"/>
                   </div>
                  </div>
                 </td>
                </tr>
                <tr>
                 <td>
                  <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="11"/>
                 </td>
                 <td>
                  <div class="flex flex-col gap-2">
                   <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
                    IT Support
                   </a>
                   <span class="text-2sm text-gray-700 font-normal leading-3">
                    Technical support
                   </span>
                  </div>
                 </td>
                 <td>
                  <div class="rating">
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                  </div>
                 </td>
                 <td>
                  01 Sep, 2024
                 </td>
                 <td>
                  <div class="flex -space-x-2">
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-20.png"/>
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-21.png"/>
                   </div>
                  </div>
                 </td>
                </tr>
                <tr>
                 <td>
                  <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="12"/>
                 </td>
                 <td>
                  <div class="flex flex-col gap-2">
                   <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
                    Legal Team
                   </a>
                   <span class="text-2sm text-gray-700 font-normal leading-3">
                    Legal support
                   </span>
                  </div>
                 </td>
                 <td>
                  <div class="rating">
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                  </div>
                 </td>
                 <td>
                  25 Aug, 2024
                 </td>
                 <td>
                  <div class="flex -space-x-2">
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-22.png"/>
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-23.png"/>
                   </div>
                  </div>
                 </td>
                </tr>
                <tr>
                 <td>
                  <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="13"/>
                 </td>
                 <td>
                  <div class="flex flex-col gap-2">
                   <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
                    Logistics Team
                   </a>
                   <span class="text-2sm text-gray-700 font-normal leading-3">
                    Supply chain
                   </span>
                  </div>
                 </td>
                 <td>
                  <div class="rating">
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label indeterminate">
                    <i class="rating-on ki-solid ki-star text-base leading-none" style="width: 50.0%">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                  </div>
                 </td>
                 <td>
                  20 Aug, 2024
                 </td>
                 <td>
                  <div class="flex -space-x-2">
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-24.png"/>
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-25.png"/>
                   </div>
                  </div>
                 </td>
                </tr>
                <tr>
                 <td>
                  <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="14"/>
                 </td>
                 <td>
                  <div class="flex flex-col gap-2">
                   <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
                    Procurement Team
                   </a>
                   <span class="text-2sm text-gray-700 font-normal leading-3">
                    Supplier management
                   </span>
                  </div>
                 </td>
                 <td>
                  <div class="rating">
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                  </div>
                 </td>
                 <td>
                  15 Aug, 2024
                 </td>
                 <td>
                  <div class="flex -space-x-2">
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-26.png"/>
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-27.png"/>
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-28.png"/>
                   </div>
                   <div class="flex">
                    <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-info-inverse ring-info-light bg-info">
                     +3
                    </span>
                   </div>
                  </div>
                 </td>
                </tr>
                <tr>
                 <td>
                  <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="15"/>
                 </td>
                 <td>
                  <div class="flex flex-col gap-2">
                   <a class="leading-none font-medium text-sm text-gray-900 hover:text-primary" href="#">
                    Training Team
                   </a>
                   <span class="text-2sm text-gray-700 font-normal leading-3">
                    Employee training
                   </span>
                  </div>
                 </td>
                 <td>
                  <div class="rating">
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label checked">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                   <div class="rating-label">
                    <i class="rating-on ki-solid ki-star text-base leading-none">
                    </i>
                    <i class="rating-off ki-outline ki-star text-base leading-none">
                    </i>
                   </div>
                  </div>
                 </td>
                 <td>
                  10 Aug, 2024
                 </td>
                 <td>
                  <div class="flex -space-x-2">
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-29.png"/>
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]" src="assets/media/avatars/300-30.png"/>
                   </div>
                  </div>
                 </td>
                </tr>
               </tbody>
              </table>
             </div>
             <div class="card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium">
              <div class="flex items-center gap-2 order-2 md:order-1">
               Show
               <select class="select select-sm w-16" data-datatable-size="true" name="perpage">
               </select>
               per page
              </div>
              <div class="flex items-center gap-4 order-1 md:order-2">
               <span data-datatable-info="true">
               </span>
               <div class="pagination" data-datatable-pagination="true">
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
       <!-- end: grid -->
      </div>
     </div>
     <!-- End of Container --> --}}
    </main>
    <!-- End of Content -->
    <!-- Footer -->
    <footer class="footer">
     <!-- Container -->
     <div class="container-fixed">
      <div class="flex flex-col md:flex-row justify-center md:justify-between items-center gap-3 py-5">
       <div class="flex order-2 md:order-1 gap-2 font-normal text-2sm">
        <span class="text-gray-500">
         2024©
        </span>
        <a class="text-gray-600 hover:text-primary" href="https://keenthemes.com">
         Keenthemes Inc.
        </a>
       </div>
       <nav class="flex order-1 md:order-2 gap-4 font-normal text-2sm text-gray-600">
        <a class="hover:text-primary" href="https://keenthemes.com/metronic/tailwind/docs">
         Docs
        </a>
        <a class="hover:text-primary" href="https://1.envato.market/EA4JP">
         Purchase
        </a>
        <a class="hover:text-primary" href="https://devs.keenthemes.com/question/understanding-metronic-themeforest-license-a-comprehensive-guide">
         FAQ
        </a>
        <a class="hover:text-primary" href="https://devs.keenthemes.com">
         Support
        </a>
        <a class="hover:text-primary" href="https://devs.keenthemes.com/question/understanding-metronic-themeforest-license-a-comprehensive-guide">
         License
        </a>
       </nav>
      </div>
     </div>
     <!-- End of Container -->
    </footer>
    <!-- End of Footer -->
   </div>
   <!-- End of Wrapper -->
  </div>
  <!-- End of Main -->
  <div class="modal" data-modal="true" id="search_modal">
   <div class="modal-content max-w-[600px] top-[15%]">
    <div class="modal-header py-4 px-5">
     <i class="ki-filled ki-magnifier text-gray-700 text-xl">
     </i>
     <input class="input px-0 border-none bg-transparent shadow-none ml-2.5" name="query" placeholder="Tap to start search" type="text" value=""/>
     <button class="btn btn-sm btn-icon btn-light btn-clear shrink-0" data-modal-dismiss="true">
      <i class="ki-filled ki-cross">
      </i>
     </button>
    </div>
    <div class="modal-body p-0 pb-5">
     <div class="tabs justify-between px-5 mb-2.5" data-tabs="true">
      <div class="flex items-center gap-5">
       <button class="tab py-5 active" data-tab-toggle="#search_modal_mixed">
        Mixed
       </button>
       <button class="tab py-5" data-tab-toggle="#search_modal_settings">
        Settings
       </button>
       <button class="tab py-5" data-tab-toggle="#search_modal_integrations">
        Integrations
       </button>
       <button class="tab py-5" data-tab-toggle="#search_modal_users">
        Users
       </button>
       <button class="tab py-5" data-tab-toggle="#search_modal_docs">
        Docs
       </button>
       <button class="tab py-5" data-tab-toggle="#search_modal_empty">
        Empty
       </button>
       <button class="tab py-5" data-tab-toggle="#search_modal_no-results">
        No Results
       </button>
      </div>
      <div class="menu -mt-px" data-menu="true">
       <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
        <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
         <i class="ki-filled ki-setting-2">
         </i>
        </button>
        <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
         <div class="menu-item">
          <a class="menu-link" href="#">
           <span class="menu-icon">
            <i class="ki-filled ki-document">
            </i>
           </span>
           <span class="menu-title">
            View
           </span>
          </a>
         </div>
         <div class="menu-item" data-menu-item-offset="-15px, 0" data-menu-item-placement="right-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
          <div class="menu-link">
           <span class="menu-icon">
            <i class="ki-filled ki-notification-status">
            </i>
           </span>
           <span class="menu-title">
            Export
           </span>
           <span class="menu-arrow">
            <i class="ki-filled ki-right text-3xs">
            </i>
           </span>
          </div>
          <div class="menu-dropdown menu-default w-full max-w-[175px]">
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
             <span class="menu-icon">
              <i class="ki-filled ki-sms">
              </i>
             </span>
             <span class="menu-title">
              Email
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
             <span class="menu-icon">
              <i class="ki-filled ki-message-notify">
              </i>
             </span>
             <span class="menu-title">
              SMS
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
             <span class="menu-icon">
              <i class="ki-filled ki-notification-status">
              </i>
             </span>
             <span class="menu-title">
              Push
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item">
          <a class="menu-link" href="#">
           <span class="menu-icon">
            <i class="ki-filled ki-pencil">
            </i>
           </span>
           <span class="menu-title">
            Edit
           </span>
          </a>
         </div>
         <div class="menu-item">
          <a class="menu-link" href="#">
           <span class="menu-icon">
            <i class="ki-filled ki-trash">
            </i>
           </span>
           <span class="menu-title">
            Delete
           </span>
          </a>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="scrollable-y-auto" data-scrollable="true" data-scrollable-max-height="auto" data-scrollable-offset="300px">
      <div class="" id="search_modal_mixed">
       <div class="flex flex-col gap-2.5">
        <div>
         <div class="text-xs text-gray-600 font-medium pt-2.5 pb-1.5 pl-5">
          Settings
         </div>
         <div class="menu menu-default p-0 flex-col">
          <div class="menu-item">
           <a class="menu-link" href="#">
            <span class="menu-icon">
             <i class="ki-filled ki-badge">
             </i>
            </span>
            <span class="menu-title">
             Public Profile
            </span>
           </a>
          </div>
          <div class="menu-item">
           <a class="menu-link" href="#">
            <span class="menu-icon">
             <i class="ki-filled ki-setting-2">
             </i>
            </span>
            <span class="menu-title">
             My Account
            </span>
           </a>
          </div>
          <div class="menu-item">
           <a class="menu-link" href="#">
            <span class="menu-icon">
             <i class="ki-filled ki-message-programming">
             </i>
            </span>
            <span class="menu-title">
             Devs Forum
            </span>
           </a>
          </div>
         </div>
        </div>
        <div class="border-b border-b-gray-200">
        </div>
        <div>
         <div class="text-xs text-gray-600 font-medium pt-2.5 pb-1.5 pl-5">
          Integrations
         </div>
         <div class="menu menu-default p-0 flex-col">
          <div class="menu-item">
           <div class="menu-link flex items-center jistify-between gap-2">
            <div class="flex items-center grow gap-2">
             <div class="flex items-center justify-center size-10 shrink-0 rounded-full border border-gray-200 bg-gray-100">
              <img alt="" class="size-6 shrink-0" src="assets/media/brand-logos/jira.svg"/>
             </div>
             <div class="flex flex-col gap-0.5">
              <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
               Jira
              </a>
              <span class="text-2xs font-medium text-gray-600">
               Project management
              </span>
             </div>
            </div>
            <div class="flex justify-end shrink-0">
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-4.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-1.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-2.png"/>
              </div>
              <div class="flex">
               <span class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-6 text-success-inverse size-6 ring-success-light bg-success">
                +3
               </span>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="menu-item">
           <div class="menu-link flex items-center jistify-between gap-2">
            <div class="flex items-center grow gap-2">
             <div class="flex items-center justify-center size-10 shrink-0 rounded-full border border-gray-200 bg-gray-100">
              <img alt="" class="size-6 shrink-0" src="assets/media/brand-logos/inferno.svg"/>
             </div>
             <div class="flex flex-col gap-0.5">
              <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
               Inferno
              </a>
              <span class="text-2xs font-medium text-gray-600">
               Real-time photo sharing app
              </span>
             </div>
            </div>
            <div class="flex justify-end shrink-0">
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-14.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-12.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-9.png"/>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="border-b border-b-gray-200">
        </div>
        <div>
         <div class="text-xs text-gray-600 font-medium pt-2.5 pb-1.5 pl-5">
          Users
         </div>
         <div class="menu menu-default p-0 flex-col">
          <div class="grid gap-1">
           <div class="menu-item">
            <div class="menu-link flex justify-between gap-2">
             <div class="flex items-center gap-2.5">
              <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-3.png"/>
              <div class="flex flex-col">
               <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                Tyler Hero
               </a>
               <span class="text-2sm font-normal text-gray-500">
                tyler.hero@gmail.com connections
               </span>
              </div>
             </div>
             <div class="flex items-center gap-2.5">
              <div class="badge badge-pill badge-outline badge-success gap-1.5">
               <span class="badge badge-dot badge-success size-1.5">
               </span>
               In Office
              </div>
              <button class="btn btn-icon btn-light btn-clear btn-sm">
               <i class="ki-filled ki-dots-vertical">
               </i>
              </button>
             </div>
            </div>
           </div>
           <div class="menu-item">
            <div class="menu-link flex justify-between gap-2">
             <div class="flex items-center gap-2.5">
              <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-1.png"/>
              <div class="flex flex-col">
               <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                Esther Howard
               </a>
               <span class="text-2sm font-normal text-gray-500">
                esther.howard@gmail.com connections
               </span>
              </div>
             </div>
             <div class="flex items-center gap-2.5">
              <div class="badge badge-pill badge-outline badge-danger gap-1.5">
               <span class="badge badge-dot badge-danger size-1.5">
               </span>
               On Leave
              </div>
              <button class="btn btn-icon btn-light btn-clear btn-sm">
               <i class="ki-filled ki-dots-vertical">
               </i>
              </button>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="hidden" id="search_modal_settings">
       <div class="menu menu-default p-0 flex-col">
        <div class="text-xs text-gray-600 font-medium pt-2.5 pl-5 pb-1.5">
         Shortcuts
        </div>
        <div class="menu-item">
         <a class="menu-link" href="#">
          <span class="menu-icon">
           <i class="ki-filled ki-home-2">
           </i>
          </span>
          <span class="menu-title">
           Go to Dashboard
          </span>
         </a>
        </div>
        <div class="menu-item">
         <a class="menu-link" href="#">
          <span class="menu-icon">
           <i class="ki-filled ki-badge">
           </i>
          </span>
          <span class="menu-title">
           Public Profile
          </span>
         </a>
        </div>
        <div class="menu-item">
         <a class="menu-link" href="#">
          <span class="menu-icon">
           <i class="ki-filled ki-profile-circle">
           </i>
          </span>
          <span class="menu-title">
           My Profile
          </span>
         </a>
        </div>
        <div class="menu-item">
         <a class="menu-link" href="#">
          <span class="menu-icon">
           <i class="ki-filled ki-setting-2">
           </i>
          </span>
          <span class="menu-title">
           My Account
          </span>
         </a>
        </div>
        <div class="menu-item">
         <a class="menu-link" href="#">
          <span class="menu-icon">
           <i class="ki-filled ki-message-programming">
           </i>
          </span>
          <span class="menu-title">
           Devs Forum
          </span>
         </a>
        </div>
        <div class="text-xs text-gray-600 font-medium pt-2.5 pl-5 pt-2.5 pb-1.5">
         Actions
        </div>
        <div class="menu-item">
         <a class="menu-link" href="#">
          <span class="menu-icon">
           <i class="ki-filled ki-user">
           </i>
          </span>
          <span class="menu-title">
           Create User
          </span>
         </a>
        </div>
        <div class="menu-item">
         <a class="menu-link" href="#">
          <span class="menu-icon">
           <i class="ki-filled ki-user-edit">
           </i>
          </span>
          <span class="menu-title">
           Create Team
          </span>
         </a>
        </div>
        <div class="menu-item">
         <a class="menu-link" href="#">
          <span class="menu-icon">
           <i class="ki-filled ki-subtitle">
           </i>
          </span>
          <span class="menu-title">
           Change Plan
          </span>
         </a>
        </div>
        <div class="menu-item">
         <a class="menu-link" href="#">
          <span class="menu-icon">
           <i class="ki-filled ki-setting">
           </i>
          </span>
          <span class="menu-title">
           Setup Branding
          </span>
         </a>
        </div>
       </div>
      </div>
      <div class="hidden" id="search_modal_integrations">
       <div class="menu menu-default p-0 flex-col">
        <div class="menu-item">
         <div class="menu-link flex items-center jistify-between gap-2">
          <div class="flex items-center grow gap-2">
           <div class="flex items-center justify-center size-10 shrink-0 rounded-full border border-gray-200 bg-gray-100">
            <img alt="" class="size-6 shrink-0" src="assets/media/brand-logos/jira.svg"/>
           </div>
           <div class="flex flex-col gap-0.5">
            <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
             Jira
            </a>
            <span class="text-2xs font-medium text-gray-600">
             Project management
            </span>
           </div>
          </div>
          <div class="flex justify-end shrink-0">
           <div class="flex -space-x-2">
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-4.png"/>
            </div>
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-1.png"/>
            </div>
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-2.png"/>
            </div>
            <div class="flex">
             <span class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-6 text-success-inverse size-6 ring-success-light bg-success">
              +3
             </span>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="menu-item">
         <div class="menu-link flex items-center jistify-between gap-2">
          <div class="flex items-center grow gap-2">
           <div class="flex items-center justify-center size-10 shrink-0 rounded-full border border-gray-200 bg-gray-100">
            <img alt="" class="size-6 shrink-0" src="assets/media/brand-logos/inferno.svg"/>
           </div>
           <div class="flex flex-col gap-0.5">
            <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
             Inferno
            </a>
            <span class="text-2xs font-medium text-gray-600">
             Real-time photo sharing app
            </span>
           </div>
          </div>
          <div class="flex justify-end shrink-0">
           <div class="flex -space-x-2">
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-14.png"/>
            </div>
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-12.png"/>
            </div>
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-9.png"/>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="menu-item">
         <div class="menu-link flex items-center jistify-between gap-2">
          <div class="flex items-center grow gap-2">
           <div class="flex items-center justify-center size-10 shrink-0 rounded-full border border-gray-200 bg-gray-100">
            <img alt="" class="size-6 shrink-0" src="assets/media/brand-logos/evernote.svg"/>
           </div>
           <div class="flex flex-col gap-0.5">
            <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
             Evernote
            </a>
            <span class="text-2xs font-medium text-gray-600">
             Notes management app
            </span>
           </div>
          </div>
          <div class="flex justify-end shrink-0">
           <div class="flex -space-x-2">
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-6.png"/>
            </div>
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-3.png"/>
            </div>
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-1.png"/>
            </div>
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-8.png"/>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="menu-item">
         <div class="menu-link flex items-center jistify-between gap-2">
          <div class="flex items-center grow gap-2">
           <div class="flex items-center justify-center size-10 shrink-0 rounded-full border border-gray-200 bg-gray-100">
            <img alt="" class="size-6 shrink-0" src="assets/media/brand-logos/gitlab.svg"/>
           </div>
           <div class="flex flex-col gap-0.5">
            <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
             Gitlab
            </a>
            <span class="text-2xs font-medium text-gray-600">
             Notes management app
            </span>
           </div>
          </div>
          <div class="flex justify-end shrink-0">
           <div class="flex -space-x-2">
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-18.png"/>
            </div>
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-17.png"/>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="menu-item">
         <div class="menu-link flex items-center jistify-between gap-2">
          <div class="flex items-center grow gap-2">
           <div class="flex items-center justify-center size-10 shrink-0 rounded-full border border-gray-200 bg-gray-100">
            <img alt="" class="size-6 shrink-0" src="assets/media/brand-logos/google-webdev.svg"/>
           </div>
           <div class="flex flex-col gap-0.5">
            <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
             Google webdev
            </a>
            <span class="text-2xs font-medium text-gray-600">
             Building web expierences
            </span>
           </div>
          </div>
          <div class="flex justify-end shrink-0">
           <div class="flex -space-x-2">
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-14.png"/>
            </div>
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-20.png"/>
            </div>
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-21.png"/>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="menu-item px-4 pt-2">
         <a class="btn btn-sm btn-light justify-center" href="#">
          Go to Apps
         </a>
        </div>
       </div>
      </div>
      <div class="hidden" id="search_modal_users">
       <div class="menu menu-default p-0 flex-col">
        <div class="grid gap-1">
         <div class="menu-item">
          <div class="menu-link flex justify-between gap-2">
           <div class="flex items-center gap-2.5">
            <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-3.png"/>
            <div class="flex flex-col">
             <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
              Tyler Hero
             </a>
             <span class="text-2sm font-normal text-gray-500">
              tyler.hero@gmail.com connections
             </span>
            </div>
           </div>
           <div class="flex items-center gap-2.5">
            <div class="badge badge-pill badge-outline badge-success gap-1.5">
             <span class="badge badge-dot badge-success size-1.5">
             </span>
             In Office
            </div>
            <button class="btn btn-icon btn-light btn-clear btn-sm">
             <i class="ki-filled ki-dots-vertical">
             </i>
            </button>
           </div>
          </div>
         </div>
         <div class="menu-item">
          <div class="menu-link flex justify-between gap-2">
           <div class="flex items-center gap-2.5">
            <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-1.png"/>
            <div class="flex flex-col">
             <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
              Esther Howard
             </a>
             <span class="text-2sm font-normal text-gray-500">
              esther.howard@gmail.com connections
             </span>
            </div>
           </div>
           <div class="flex items-center gap-2.5">
            <div class="badge badge-pill badge-outline badge-danger gap-1.5">
             <span class="badge badge-dot badge-danger size-1.5">
             </span>
             On Leave
            </div>
            <button class="btn btn-icon btn-light btn-clear btn-sm">
             <i class="ki-filled ki-dots-vertical">
             </i>
            </button>
           </div>
          </div>
         </div>
         <div class="menu-item">
          <div class="menu-link flex justify-between gap-2">
           <div class="flex items-center gap-2.5">
            <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-11.png"/>
            <div class="flex flex-col">
             <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
              Jacob Jones
             </a>
             <span class="text-2sm font-normal text-gray-500">
              jacob.jones@gmail.com connections
             </span>
            </div>
           </div>
           <div class="flex items-center gap-2.5">
            <div class="badge badge-pill badge-outline badge-primary gap-1.5">
             <span class="badge badge-dot badge-primary size-1.5">
             </span>
             Remote
            </div>
            <button class="btn btn-icon btn-light btn-clear btn-sm">
             <i class="ki-filled ki-dots-vertical">
             </i>
            </button>
           </div>
          </div>
         </div>
         <div class="menu-item">
          <div class="menu-link flex justify-between gap-2">
           <div class="flex items-center gap-2.5">
            <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-5.png"/>
            <div class="flex flex-col">
             <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
              TLeslie Alexander
             </a>
             <span class="text-2sm font-normal text-gray-500">
              leslie.alexander@gmail.com connections
             </span>
            </div>
           </div>
           <div class="flex items-center gap-2.5">
            <div class="badge badge-pill badge-outline badge-success gap-1.5">
             <span class="badge badge-dot badge-success size-1.5">
             </span>
             In Office
            </div>
            <button class="btn btn-icon btn-light btn-clear btn-sm">
             <i class="ki-filled ki-dots-vertical">
             </i>
            </button>
           </div>
          </div>
         </div>
         <div class="menu-item">
          <div class="menu-link flex justify-between gap-2">
           <div class="flex items-center gap-2.5">
            <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-2.png"/>
            <div class="flex flex-col">
             <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
              Cody Fisher
             </a>
             <span class="text-2sm font-normal text-gray-500">
              cody.fisher@gmail.com connections
             </span>
            </div>
           </div>
           <div class="flex items-center gap-2.5">
            <div class="badge badge-pill badge-outline badge-primary gap-1.5">
             <span class="badge badge-dot badge-primary size-1.5">
             </span>
             Remote
            </div>
            <button class="btn btn-icon btn-light btn-clear btn-sm">
             <i class="ki-filled ki-dots-vertical">
             </i>
            </button>
           </div>
          </div>
         </div>
         <div class="menu-item px-4 pt-2">
          <a class="btn btn-sm btn-light justify-center" href="#">
           Go to Users
          </a>
         </div>
        </div>
       </div>
      </div>
      <div class="hidden" id="search_modal_docs">
       <div class="menu menu-default p-0 flex-col">
        <div class="grid">
         <div class="menu-item">
          <div class="menu-link flex items-center">
           <div class="flex items-center grow gap-2.5">
            <img src="assets/media/file-types/pdf.svg"/>
            <div class="flex flex-col">
             <span class="text-sm font-semibold text-gray-900 cursor-pointer hover:text-primary mb-px">
              Project-pitch.pdf
             </span>
             <span class="text-xs font-medium text-gray-500">
              4.7 MB 26 Sep 2024 3:20 PM
             </span>
            </div>
           </div>
           <button class="btn btn-icon btn-light btn-clear btn-sm">
            <i class="ki-filled ki-dots-vertical">
            </i>
           </button>
          </div>
         </div>
         <div class="menu-item">
          <div class="menu-link flex items-center">
           <div class="flex items-center grow gap-2.5">
            <img src="assets/media/file-types/doc.svg"/>
            <div class="flex flex-col">
             <span class="text-sm font-semibold text-gray-900 cursor-pointer hover:text-primary mb-px">
              Report-v1.docx
             </span>
             <span class="text-xs font-medium text-gray-500">
              2.3 MB 1 Oct 2024 12:00 PM
             </span>
            </div>
           </div>
           <button class="btn btn-icon btn-light btn-clear btn-sm">
            <i class="ki-filled ki-dots-vertical">
            </i>
           </button>
          </div>
         </div>
         <div class="menu-item">
          <div class="menu-link flex items-center">
           <div class="flex items-center grow gap-2.5">
            <img src="assets/media/file-types/javascript.svg"/>
            <div class="flex flex-col">
             <span class="text-sm font-semibold text-gray-900 cursor-pointer hover:text-primary mb-px">
              Framework-App.js
             </span>
             <span class="text-xs font-medium text-gray-500">
              0.8 MB 17 Oct 2024 6:46 PM
             </span>
            </div>
           </div>
           <button class="btn btn-icon btn-light btn-clear btn-sm">
            <i class="ki-filled ki-dots-vertical">
            </i>
           </button>
          </div>
         </div>
         <div class="menu-item">
          <div class="menu-link flex items-center">
           <div class="flex items-center grow gap-2.5">
            <img src="assets/media/file-types/ai.svg"/>
            <div class="flex flex-col">
             <span class="text-sm font-semibold text-gray-900 cursor-pointer hover:text-primary mb-px">
              Framework-App.js
             </span>
             <span class="text-xs font-medium text-gray-500">
              0.8 MB 17 Oct 2024 6:46 PM
             </span>
            </div>
           </div>
           <button class="btn btn-icon btn-light btn-clear btn-sm">
            <i class="ki-filled ki-dots-vertical">
            </i>
           </button>
          </div>
         </div>
         <div class="menu-item">
          <div class="menu-link flex items-center">
           <div class="flex items-center grow gap-2.5">
            <img src="assets/media/file-types/php.svg"/>
            <div class="flex flex-col">
             <span class="text-sm font-semibold text-gray-900 cursor-pointer hover:text-primary mb-px">
              appController.js
             </span>
             <span class="text-xs font-medium text-gray-500">
              0.1 MB 21 Nov 2024 3:20 PM
             </span>
            </div>
           </div>
           <button class="btn btn-icon btn-light btn-clear btn-sm">
            <i class="ki-filled ki-dots-vertical">
            </i>
           </button>
          </div>
         </div>
         <div class="menu-item px-4 pt-2.5">
          <a class="btn btn-sm btn-light justify-center" href="#">
           Go to Users
          </a>
         </div>
        </div>
       </div>
      </div>
      <div class="hidden" id="search_modal_empty">
       <div class="flex flex-col text-center py-9 gap-5">
        <div class="flex justify-center">
         <img alt="image" class="dark:hidden max-h-[113px]" src="assets/media/illustrations/33.svg"/>
         <img alt="image" class="light:hidden max-h-[113px]" src="assets/media/illustrations/33-dark.svg"/>
        </div>
        <div class="flex flex-col gap-1.5">
         <h3 class="text-base font-semibold text-gray-900 text-center">
          Looking for something..
         </h3>
         <span class="text-2sm font-medium text-center text-gray-600">
          Initiate your digital experience with
          <br/>
          our intuitive dashboard
         </span>
        </div>
        <div class="flex justify-center">
         <a class="btn btn-sm btn-light flex justify-center" href="#">
          View Projects
         </a>
        </div>
       </div>
      </div>
      <div class="hidden" id="search_modal_no-results">
       <div class="flex flex-col text-center py-9 gap-5">
        <div class="flex justify-center">
         <img alt="image" class="dark:hidden max-h-[113px]" src="assets/media/illustrations/33.svg"/>
         <img alt="image" class="light:hidden max-h-[113px]" src="assets/media/illustrations/33-dark.svg"/>
        </div>
        <div class="flex flex-col gap-1.5">
         <h3 class="text-base font-semibold text-gray-900 text-center">
          No Results Found
         </h3>
         <span class="text-2sm font-medium text-center text-gray-600">
          Refine your query to discover relevant items
         </span>
        </div>
        <div class="flex justify-center">
         <a class="btn btn-sm btn-light flex justify-center" href="#">
          View Projects
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="modal" data-modal="true" data-modal-disable-scroll="false" id="share_profile_modal">
   <div class="modal-content max-w-[500px] top-5 lg:top-[15%]">
    <div class="modal-header pr-2.5">
     <h3 class="modal-title">
      Share Profile
     </h3>
     <button class="btn btn-sm btn-icon btn-light btn-clear shrink-0" data-modal-dismiss="true">
      <i class="ki-filled ki-cross">
      </i>
     </button>
    </div>
    <div class="modal-body grid gap-5 px-0 py-5">
     <div class="flex flex-col px-5 gap-2.5">
      <div class="flex flex-center gap-1">
       <label class="text-gray-900 font-semibold text-2sm">
        Share read-only link
       </label>
       <i class="ki-filled ki-information-2 text-gray-500 text-2sm">
       </i>
      </div>
      <label class="input">
       <input type="text" value="https://metronic.com/profiles/x7g2vA3kZ5">
        <button class="btn btn-icon">
         <i class="ki-filled ki-copy">
         </i>
        </button>
       </input>
      </label>
     </div>
     <div class="border-b border-b-gray-200">
     </div>
     <div class="flex flex-col px-5 gap-2.5">
      <div class="flex flex-center gap-1">
       <label class="text-gray-900 font-semibold text-2sm">
        Share via email
       </label>
       <i class="ki-filled ki-information-2 text-gray-500 text-2sm">
       </i>
      </div>
      <div class="flex flex-center gap-2.5">
       <label class="input">
        <input type="text" value="miles.turner@gmail.com">
        </input>
       </label>
       <button class="btn btn-primary">
        Share
       </button>
      </div>
     </div>
     <div class="scrollable-y-auto" data-scrollable="true" data-scrollable-max-height="auto" data-scrollable-offset="1000px">
      <div class="flex flex-col px-5 gap-3">
       <div class="flex items-center flex-wrap gap-2">
        <div class="flex items-center grow gap-2.5">
         <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-3.png"/>
         <div class="flex flex-col">
          <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
           Tyler Hero
          </a>
          <a class="hover:text-primary-active text-2sm font-medium text-gray-600" href="#">
           tyler.hero@gmail.com
          </a>
         </div>
        </div>
        <select class="select select-sm max-w-24">
         <option selected="">
          Owner
         </option>
         <option>
          Editor
         </option>
         <option>
          Viewer
         </option>
        </select>
       </div>
       <div class="flex items-center flex-wrap gap-2">
        <div class="flex items-center grow gap-2.5">
         <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-1.png"/>
         <div class="flex flex-col">
          <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
           Esther Howard
          </a>
          <a class="hover:text-primary-active text-2sm font-medium text-gray-600" href="#">
           esther.howard@gmail.com
          </a>
         </div>
        </div>
        <select class="select select-sm max-w-24">
         <option>
          Owner
         </option>
         <option selected="">
          Editor
         </option>
         <option>
          Viewer
         </option>
        </select>
       </div>
       <div class="flex items-center flex-wrap gap-2">
        <div class="flex items-center grow gap-2.5">
         <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-11.png"/>
         <div class="flex flex-col">
          <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
           Jacob Jones
          </a>
          <a class="hover:text-primary-active text-2sm font-medium text-gray-600" href="#">
           jacob.jones@gmail.com
          </a>
         </div>
        </div>
        <select class="select select-sm max-w-24">
         <option>
          Owner
         </option>
         <option>
          Editor
         </option>
         <option selected="">
          Viewer
         </option>
        </select>
       </div>
      </div>
     </div>
     <div class="border-b border-b-gray-200">
     </div>
     <div class="flex flex-col px-5 gap-4">
      <label class="text-gray-900 font-semibold text-2sm">
       Settings
      </label>
      <div class="flex flex-center justify-between flex-wrap gap-2">
       <div class="flex flex-center gap-1.5">
        <i class="ki-filled ki-user text-gray-500">
        </i>
        <div class="flex flex-center text-gray-700 font-medium text-xs">
         Anyone at
         <a class="text-xs font-medium link mx-1" href="#">
          KeenThemes
         </a>
         can view
        </div>
       </div>
       <button class="btn btn-sm btn-link">
        Change Access
       </button>
      </div>
      <div class="flex flex-center justify-between flex-wrap gap-2 mb-1">
       <div class="flex flex-center gap-1.5">
        <i class="ki-filled ki-icon text-gray-500">
        </i>
        <div class="flex flex-center text-gray-700 font-medium text-xs">
         Anyone with link can edit
        </div>
       </div>
       <button class="btn btn-sm btn-link">
        Set Password
       </button>
      </div>
      <button class="btn btn-primary justify-center">
       Done
      </button>
     </div>
    </div>
   </div>
  </div>
  <div class="modal" data-modal="true" id="give_award_modal">
   <div class="modal-content max-w-[500px] top-[15%]">
    <div class="modal-header pr-2.5">
     <h3 class="modal-title">
      Give Award
     </h3>
     <button class="btn btn-sm btn-icon btn-light btn-clear shrink-0" data-modal-dismiss="true">
      <i class="ki-filled ki-black-left">
      </i>
     </button>
    </div>
    <div class="modal-body grid gap-5 px-0 py-5">
     <div class="flex flex-col px-5 gap-2.5">
      <div class="flex flex-center gap-1">
       <label class="text-gray-900 font-semibold text-2sm">
        Share read-only link
       </label>
       <i class="ki-filled ki-information-2 text-gray-500 text-2sm">
       </i>
      </div>
      <label class="input">
       <input type="text" value="https://metronic.com/profiles/x7g2vA3kZ5">
        <button class="btn btn-icon">
         <i class="ki-filled ki-copy">
         </i>
        </button>
       </input>
      </label>
     </div>
     <div class="border-b border-b-gray-200">
     </div>
     <div class="flex flex-col px-5 gap-2.5">
      <div class="flex flex-center gap-1">
       <label class="text-gray-900 font-semibold text-2sm">
        Share via email
       </label>
       <i class="ki-filled ki-information-2 text-gray-500 text-2sm">
       </i>
      </div>
      <div class="flex flex-center gap-2.5">
       <label class="input">
        <input type="text" value="miles.turner@gmail.com">
        </input>
       </label>
       <button class="btn btn-primary">
        Share
       </button>
      </div>
     </div>
     <div class="scrollable-y-auto" data-scrollable="true" data-scrollable-max-height="auto" data-scrollable-offset="1000px">
      <div class="flex flex-col px-5 gap-3">
       <div class="flex items-center flex-wrap gap-2">
        <div class="flex items-center grow gap-2.5">
         <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-3.png"/>
         <div class="flex flex-col">
          <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
           Tyler Hero
          </a>
          <a class="hover:text-primary-active text-2sm font-medium text-gray-600" href="#">
           tyler.hero@gmail.com
          </a>
         </div>
        </div>
        <select class="select select-sm max-w-24">
         <option selected="">
          Owner
         </option>
         <option>
          Editor
         </option>
         <option>
          Viewer
         </option>
        </select>
       </div>
       <div class="flex items-center flex-wrap gap-2">
        <div class="flex items-center grow gap-2.5">
         <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-1.png"/>
         <div class="flex flex-col">
          <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
           Esther Howard
          </a>
          <a class="hover:text-primary-active text-2sm font-medium text-gray-600" href="#">
           esther.howard@gmail.com
          </a>
         </div>
        </div>
        <select class="select select-sm max-w-24">
         <option>
          Owner
         </option>
         <option selected="">
          Editor
         </option>
         <option>
          Viewer
         </option>
        </select>
       </div>
       <div class="flex items-center flex-wrap gap-2">
        <div class="flex items-center grow gap-2.5">
         <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-11.png"/>
         <div class="flex flex-col">
          <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
           Jacob Jones
          </a>
          <a class="hover:text-primary-active text-2sm font-medium text-gray-600" href="#">
           jacob.jones@gmail.com
          </a>
         </div>
        </div>
        <select class="select select-sm max-w-24">
         <option>
          Owner
         </option>
         <option>
          Editor
         </option>
         <option selected="">
          Viewer
         </option>
        </select>
       </div>
      </div>
     </div>
     <div class="border-b border-b-gray-200">
     </div>
     <div class="flex flex-col px-5 gap-4">
      <label class="text-gray-900 font-semibold text-2sm">
       Settings
      </label>
      <div class="flex flex-center justify-between flex-wrap gap-2">
       <div class="flex flex-center gap-1.5">
        <i class="ki-filled ki-user text-gray-500">
        </i>
        <div class="flex flex-center text-gray-700 font-medium text-xs">
         Anyone at
         <a class="text-xs font-medium link mx-1" href="#">
          KeenThemes
         </a>
         can view
        </div>
       </div>
       <button class="btn btn-sm btn-link">
        Change Access
       </button>
      </div>
      <div class="flex flex-center justify-between flex-wrap gap-2 mb-1">
       <div class="flex flex-center gap-1.5">
        <i class="ki-filled ki-icon text-gray-500">
        </i>
        <div class="flex flex-center text-gray-700 font-medium text-xs">
         Anyone with link can edit
        </div>
       </div>
       <button class="btn btn-sm btn-link">
        Set Password
       </button>
      </div>
      <button class="btn btn-primary justify-center">
       Done
      </button>
     </div>
    </div>
   </div>
  </div>
  <div class="modal" data-modal="true" id="report_user_modal">
   <div class="modal-content max-w-[500px] top-[15%]">
    <div class="modal-header pr-2.5">
     <h3 class="modal-title">
      Report User
     </h3>
     <button class="btn btn-sm btn-icon btn-light btn-clear shrink-0" data-modal-dismiss="true">
      <i class="ki-filled ki-cross">
      </i>
     </button>
    </div>
    <div class="modal-body p-0">
     <div class="p-5">
      <div class="grid place-items-center gap-1">
       <div class="flex justify-center items-center rounded-full">
        <img class="rounded-full max-h-[55px] max-w-full" src="assets/media/avatars/300-1.png"/>
       </div>
       <div class="flex items-center justify-center gap-1">
        <a class="hover:text-primary-active text-2sm leading-5 font-semibold text-gray-900" href="#">
         Jenny Klabber
        </a>
        <svg class="text-primary" fill="none" height="13" viewbox="0 0 15 16" width="13" xmlns="http://www.w3.org/2000/svg">
         <path d="M14.5425 6.89749L13.5 5.83999C13.4273 5.76877 13.3699 5.6835 13.3312 5.58937C13.2925 5.49525 13.2734 5.39424 13.275 5.29249V3.79249C13.274 3.58699 13.2324 3.38371 13.1527 3.19432C13.0729 3.00494 12.9565 2.83318 12.8101 2.68892C12.6638 2.54466 12.4904 2.43073 12.2998 2.35369C12.1093 2.27665 11.9055 2.23801 11.7 2.23999H10.2C10.0982 2.24159 9.99722 2.22247 9.9031 2.18378C9.80898 2.1451 9.72371 2.08767 9.65249 2.01499L8.60249 0.957487C8.30998 0.665289 7.91344 0.50116 7.49999 0.50116C7.08654 0.50116 6.68999 0.665289 6.39749 0.957487L5.33999 1.99999C5.26876 2.07267 5.1835 2.1301 5.08937 2.16879C4.99525 2.20747 4.89424 2.22659 4.79249 2.22499H3.29249C3.08699 2.22597 2.88371 2.26754 2.69432 2.34731C2.50494 2.42709 2.33318 2.54349 2.18892 2.68985C2.04466 2.8362 1.93073 3.00961 1.85369 3.20013C1.77665 3.39064 1.73801 3.5945 1.73999 3.79999V5.29999C1.74159 5.40174 1.72247 5.50275 1.68378 5.59687C1.6451 5.691 1.58767 5.77627 1.51499 5.84749L0.457487 6.89749C0.165289 7.19 0.00115967 7.58654 0.00115967 7.99999C0.00115967 8.41344 0.165289 8.80998 0.457487 9.10249L1.49999 10.16C1.57267 10.2312 1.6301 10.3165 1.66878 10.4106C1.70747 10.5047 1.72659 10.6057 1.72499 10.7075V12.2075C1.72597 12.413 1.76754 12.6163 1.84731 12.8056C1.92709 12.995 2.04349 13.1668 2.18985 13.3111C2.3362 13.4553 2.50961 13.5692 2.70013 13.6463C2.89064 13.7233 3.0945 13.762 3.29999 13.76H4.79999C4.90174 13.7584 5.00275 13.7775 5.09687 13.8162C5.191 13.8549 5.27627 13.9123 5.34749 13.985L6.40499 15.0425C6.69749 15.3347 7.09404 15.4988 7.50749 15.4988C7.92094 15.4988 8.31748 15.3347 8.60999 15.0425L9.65999 14C9.73121 13.9273 9.81647 13.8699 9.9106 13.8312C10.0047 13.7925 10.1057 13.7734 10.2075 13.775H11.7075C12.1212 13.775 12.518 13.6106 12.8106 13.3181C13.1031 13.0255 13.2675 12.6287 13.2675 12.215V10.715C13.2659 10.6132 13.285 10.5122 13.3237 10.4181C13.3624 10.324 13.4198 10.2387 13.4925 10.1675L14.55 9.10999C14.6953 8.96452 14.8104 8.79176 14.8887 8.60164C14.9671 8.41152 15.007 8.20779 15.0063 8.00218C15.0056 7.79656 14.9643 7.59311 14.8847 7.40353C14.8051 7.21394 14.6888 7.04197 14.5425 6.89749ZM10.635 6.64999L6.95249 10.25C6.90055 10.3026 6.83864 10.3443 6.77038 10.3726C6.70212 10.4009 6.62889 10.4153 6.55499 10.415C6.48062 10.4139 6.40719 10.3982 6.33896 10.3685C6.27073 10.3389 6.20905 10.2961 6.15749 10.2425L4.37999 8.44249C4.32532 8.39044 4.28169 8.32793 4.25169 8.25867C4.22169 8.18941 4.20593 8.11482 4.20536 8.03934C4.20479 7.96387 4.21941 7.88905 4.24836 7.81934C4.27731 7.74964 4.31999 7.68647 4.37387 7.63361C4.42774 7.58074 4.4917 7.53926 4.56194 7.51163C4.63218 7.484 4.70726 7.47079 4.78271 7.47278C4.85816 7.47478 4.93244 7.49194 5.00112 7.52324C5.0698 7.55454 5.13148 7.59935 5.18249 7.65499L6.56249 9.05749L9.84749 5.84749C9.95296 5.74215 10.0959 5.68298 10.245 5.68298C10.394 5.68298 10.537 5.74215 10.6425 5.84749C10.6953 5.90034 10.737 5.96318 10.7653 6.03234C10.7935 6.1015 10.8077 6.1756 10.807 6.25031C10.8063 6.32502 10.7908 6.39884 10.7612 6.46746C10.7317 6.53608 10.6888 6.59813 10.635 6.64999Z" fill="currentColor">
         </path>
        </svg>
       </div>
      </div>
     </div>
     <div class="border-b border-b-gray-200">
     </div>
     <div class="flex flex-col gap-5 p-5">
      <div class="text-2sm text-gray-900 font-semibold">
       Let us know why you’re reporing this person
      </div>
      <div class="flex flex-col gap-3.5">
       <label class="form-label flex items-center gap-2.5">
        <input checked="" class="radio radio-sm" name="report-option" type="radio" value="1">
         <div class="flex flex-col gap-0.5">
          <div class="text-sm font-semibold text-gray-900">
           Impersonation
          </div>
          <div class="text-2sm font-medium text-gray-600">
           It looks like this profile might be impersonating someone else
          </div>
         </div>
        </input>
       </label>
       <label class="form-label flex items-center gap-2.5">
        <input checked="" class="radio radio-sm" name="report-option" type="radio" value="2">
         <div class="flex flex-col gap-0.5">
          <div class="text-sm font-semibold text-gray-900">
           Spammy
          </div>
          <div class="text-2sm font-medium text-gray-600">
           This person profile, comments or posts contain misleading text
          </div>
         </div>
        </input>
       </label>
       <label class="form-label flex items-center gap-2.5">
        <input checked="" class="radio radio-sm" name="report-option" type="radio" value="3">
         <div class="flex flex-col gap-0.5">
          <div class="text-sm font-semibold text-gray-900">
           Off bumble behavior
          </div>
          <div class="text-2sm font-medium text-gray-600">
           This person has engaged in behavior that is abusive, bullying
          </div>
         </div>
        </input>
       </label>
       <label class="form-label flex items-center gap-2.5">
        <input checked="" class="radio radio-sm" name="report-option" type="radio" value="4">
         <div class="flex flex-col gap-0.5">
          <div class="text-sm font-semibold text-gray-900">
           Something else
          </div>
          <div class="text-2sm font-medium text-gray-600">
           None of the reasons listed above are suitable
          </div>
         </div>
        </input>
       </label>
      </div>
     </div>
     <div class="border-b border-b-gray-200">
     </div>
     <div class="text-2sm font-medium text-center text-gray-800 p-5">
      Don't worry, your report is completely anonymous; the person you're
      <br/>
      reporting will not be informed that you've submitted it
     </div>
     <div class="border-b border-b-gray-200">
     </div>
     <div class="flex items-center gap-2.5 justify-end p-5" id="report_user_modal">
      <button class="btn btn-sm btn-primary">
       Report this person
      </button>
      <button class="btn btn-sm btn-light" data-modal-dismiss="true">
       Cancel
      </button>
     </div>
    </div>
   </div>
  </div>
  <!-- End of Page -->
  <!-- Scripts -->
  <script src="assets/js/core.bundle.js">
  </script>
  <script src="assets/vendors/apexcharts/apexcharts.min.js">
  </script>
  <script src="assets/js/widgets/general.js">
  </script>
  <script src="assets/js/layouts/demo1.js">
  </script>
  <!-- End of Scripts -->
 </body>
</html>
